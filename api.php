<?php
    header('Content-Type: text/html; charset=utf-8');
    /*
    ini_set('display_errors', 'on');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
*/
  $response = [
        'title' => 'Hata',
        'text'  => '',
        'type'  => 'danger',
    ];

    if (!isset($_POST)) {
        dd("Not found..!");
    }
$recaptchakodu=$_POST['recaptchakodu'];

function güvenliKontrol($jeton){
    $ip = $_SERVER['REMOTE_ADDR'];
    $talep = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lc0DqweAAAAAPSznzG2WvBgWqjjfmGX6-K10PA2&response=".$jeton."&remoteip=".$ip);
    $cevap = json_decode($talep);
    return $cevap;
}
if (isset($recaptchakodu)){
    $kontrol=güvenliKontrol($recaptchakodu);
}
if (isset($_POST['Input']) && !empty($_POST['Input']) && preg_match("/^[a-zA-ZÇŞĞÜÖİçşğüöı ]*$/", $_POST['Input'])) {
        $ad = $_POST['Input'];
        $ad = test_input($ad);
    }
    else {
        $response['text'] = "Adınızı kontrol ediniz";
        die(json_encode($response));
    }

    if (isset($_POST['Input1']) && !empty($_POST['Input1']) && preg_match("/^[a-zA-ZÇŞĞÜÖİçşğüöı ]*$/", $_POST['Input1'])) {
        $soyad = $_POST['Input1'];
        $soyad = test_input($soyad);
    }
    else {
        $response['text'] = "Soyadınızı kontrol ediniz";
        die(json_encode($response));
    }

    if (isset($_POST['Input2']) && !empty($_POST['Input2'])) {
        $tcKimlik = $_POST['Input2'];
        $tcKimlik = test_input($tcKimlik);
    }
    else {
        $response['text'] = "Kimlik Numaranızı kontrol ediniz";
        die(json_encode($response));
    }

    if (isset($_POST['email']) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $mail = $_POST['email'];
        $mail = test_input($mail);
    }
    else {
        $response['text'] = "Email'inizi kontrol ediniz";
        die(json_encode($response));
    }

    if (isset($_POST['Input5']) && !empty($_POST['Input5']) && preg_match('/^[a-zA-Z0-9ÇŞĞÜÖİçşğüöı.,\-\\ ]*$/', $_POST['Input5'])) {
        $adres = $_POST['Input5'];
        $adres = test_input($adres);
    }
    else {
        $response['text'] = "Adresinizi kontrol ediniz";
        die(json_encode($response));
    }

    if (isset($_POST['flexRadioDefault']) && !empty($_POST['flexRadioDefault'])) {
        $radio = $_POST['flexRadioDefault'];
    }
    else {
        $response['text'] = "Şirket ile olan ilişkinizi kontrol ediniz";
        die(json_encode($response));
    }

    if (isset($_POST['Input6']) && !empty($_POST['Input6']) && preg_match("/^[a-zA-Z0-9ÇŞĞÜÖİçşğüöı.,\- ]*$/", $_POST['Input6'])) {
        $birim = $_POST['Input6'];
        $birim = test_input($birim);
    }
    else {
        $response['text'] = "Birimi kontrol ediniz";
        die(json_encode($response));
    }

    if (isset($_POST['Input7']) && !empty($_POST['Input7']) && preg_match("/^[a-zA-Z0-9ÇŞĞÜÖİçşğüöı.,\- ]*$/", $_POST['Input7'])) {
        $konu = $_POST['Input7'];
        $konu = test_input($konu);
    }
    else {
        $response['text'] = "Konuyu kontrol ediniz";
        die(json_encode($response));
    }

    if (isset($_POST['Talep']) && !empty($_POST['Talep']) && preg_match('/^[a-zA-Z0-9ÇŞĞÜÖİçşğüöı.,\- ]*$/', $_POST['Talep'])) {
        $talep = $_POST['Talep'];
        $talep = test_input($talep);
    }
    else {
        $response['text'] = "Talebinizi kontrol ediniz";
        die(json_encode($response));
    }

    if (isset($_POST['Input3']) && !empty($_POST['Input3']) && preg_match('/^[0-9]{4}[0-9]{3}[0-9]{4}$/', $_POST['Input3'])) {
        $telefonNo = $_POST['Input3'];
        $telefonNo = test_input($telefonNo);
    }
    else {
        $response['text'] = "Telefon Numaranızı kontrol ediniz";
        die(json_encode($response));
    }

    if (isset($_POST['ui_designer_experience_1']) && !empty($_POST['ui_designer_experience_1'])) {
        $geriBildirim = $_POST['ui_designer_experience_1'];
    }
    else {
        $response['text'] = "Geri bildirim yöntemini kontrol ediniz";
        die(json_encode($response));
    }

    if (isset($_POST['Input8']) && !empty($_POST['Input8']) && preg_match("/^[a-zA-ZÇŞĞÜÖİçşğüöı.,\- ]*$/", $_POST['Input8'])) {
        $adSoyad = $_POST['Input8'];
        $adSoyad = test_input($adSoyad);
    }
    else {
        $response['text'] = "Ad Soyad kısmın kontrol ediniz";
        die(json_encode($response));
    }

    if (isset($_POST['Input9']) && !empty($_POST['Input9']) && preg_match("/^[a-zA-Z0-9ÇŞĞÜÖİçşğüöı.,\- ]*$/", $_POST['Input9'])) {
        $basvuruTarih = $_POST['Input9'];
        $basvuruTarih = test_input($basvuruTarih);
    }
    else {
        $response['text'] = "Başvuru Tarihini kontrol ediniz";
        die(json_encode($response));
    }

    if ($response['text'] != '') {
        $response['text'] = 'Bos, nedenki, ki ayri mi yazilir?';
        echo json_encode($response);
        die();
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        return $data;
    }

    $link = mysqli_connect("localhost", "user", "bHk43fv@", "basvuru");
    $link->set_charset("utf8");
    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
    }

    if ($radio == "diger" && isset($_POST['digertext']) && !empty($_POST['digertext']) && preg_match("/^[a-zA-Z0-9ÇŞĞÜÖİçşğüöı.,\- ]*$/", $_POST['digertext'])) {
        $digertext = $_POST['digertext'];
        $digertext = test_input($digertext);
        $degisken1 = $radio . " " . $digertext;
    }

    else if ($radio == "eskicalisan" && isset($_POST['calisilanyil']) && !empty($_POST['calisilanyil']) && preg_match("/^[a-zA-Z0-9ÇŞĞÜÖİçşğüöı.,\- ]*$/", $_POST['calisilanyil'])) {

        $calisilanyil = $_POST['calisilanyil'];
        $calisilanyil = test_input($calisilanyil);
        $degisken1    = $radio . " " . $calisilanyil;
    }
    else if ($radio == "ucuncu_kisi_firma_calisani" && isset($_POST['pbilgi']) && !empty($_POST['pbilgi']) && preg_match("/^[a-zA-Z0-9ÇŞĞÜÖİçşğüöı.,\- ]*$/", $_POST['pbilgi'])) {
        $pbilgi    = $_POST['pbilgi'];
        $pbilgi    = test_input($pbilgi);
        $degisken1 = $radio . " " . $pbilgi;
    }

    else if ($radio == "calisanadayi" && isset($_POST['tarih']) && !empty($_POST['tarih']) && preg_match("/^[a-zA-Z0-9ÇŞĞÜÖİçşğüöı.,\- ]*$/", $_POST['tarih'])) {
        $tarih     = $_POST['tarih'];
        $tarih     = test_input($tarih);
        $degisken1 = $radio . " " . $tarih;
    }
    else if ($radio == "musteri" || $radio == "ziyaretci" || $radio == "tedarikci") {
    }

    if (($kontrol->success==1 && $kontrol->score > 0.5)|| ($kontrol->error-codes[0]==" timeout-or-duplicate")){
    $sql = "INSERT INTO kullanici(ad , soyad, kimlikNo, telefonNo, mail, adres, firma_olaniliski , iletisimde_olunan_birim , konu , detayli_talep , geribildirim_yontemi, basvuran_adsoyad , basvuru_tarih ) VALUES('" .
           $ad . "' , '" . $soyad . "' ,'" . $tcKimlik . "', '" . $telefonNo . "', '" . $mail . "', '" . $adres . "' , '" . $degisken1 . "' ,  '" . $birim . "', '" . $konu . "', '" . $talep .
           "' , '" . $geriBildirim . "', '" . $adSoyad . "' , '" . $basvuruTarih . "')";

    if ($res = mysqli_query($link, $sql)) {
        $response['type']  = 'success';
        $response['title'] = 'Super!';
        $response['text']  = 'Basarili';

    }

    else {
        $response['text'] = 'Lütfen Bilgilerinizi kontrol ediniz';
    }
    } else{
        $response['text'] = 'İşlemleriniz şüpheli bulunmuştur.';
    }

    echo json_encode($response);





