
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme23.css">
    <script src="https://www.google.com/recaptcha/api.js?render=6Lc0DqweAAAAACrK7mXuCwehcvij5gi0M5HAnZbK"></script>
    <script>

            grecaptcha.ready(function() {
                grecaptcha.execute('6Lc0DqweAAAAACrK7mXuCwehcvij5gi0M5HAnZbK', {action: 'submit'})
                    .then(function(token) {
                    document.getElementById('recaptchaalani').value=token;
                });
            });

    </script>

</head>
<body>
<div class="form-body on-top-mobile">
    <div class="row">

        <div id="response"></div>

        <div class=" img-holder">
            <div class="bg" style="background-color: #D4C6F5;"> </div>
            <div style="align-items:start; margin:auto;" >
                <a href="index.php">
                    <div style=" align:center; margin:auto;" >
                        <img class="img-responsive" src="images/pairend.png" alt="">
                    </div>
                </a>
            </div>
            <div style="margin:auto;" ><img src="images/graphic3.svg" alt="">
                <div style=" align:center; margin:auto; border-radius: 10px; background-color: #8A39E1;" class="info-holder simple-info">
                    <div style="margin-top: 10px; margin-bottom: -5px;"><h3>Başvuruları Kabul Ediyoruz!</h3></div>
                    <div><p style="margin:auto;font-size: small" id="pg1"><b>İş bu başvuru formu, Şirketimiz ile olan ilişkinizi tespit ederek ve varsa,
                                Şirketimiz tarafından
                                işlenen kişisel verilerinizi eksiksiz olarak belirleyerek, ilgili başvurunuza doğru şekilde ve
                                kanuni
                                süresinde cevap verilebilmesi için tanzim edilmiştir.<br> Başvuru formu kapsamında iletmekte
                                olduğunuz taleplerinize ilişkin bilgilerin doğru ve güncel olmaması ya da yetkisiz bir başvuru
                                yapılması halinde Şirketimiz, söz konusu yanlış bilgi ya da yetkisiz başvuru kaynaklı taleplerden
                                dolayı mesul değildir.</b></p></div>
                </div></div>

        </div>
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <form action="<?php $_SERVER["PHP_SELF"];?>" id="basvuruform" method='POST'>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control" id="Input" name="Input"
                                       placeholder="İsim  Giriniz..">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control" id="Input1" name="Input1"
                                       placeholder=" Soyisim Giriniz..">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <input class=" form-control " id="Input3" name="Input3" placeholder="05xx xxx xx xx">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input class="form-control" id="Input2" name="Input2" onblur="TCNOKontrol(this); "
                                       maxlength="11" placeholder="Tc Kimlik No Girinz..">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control" id="email" name="email" required
                                       data-msg-email="Geçerli bir e-posta hesabı girin!"
                                       placeholder="Mail adresinizi Giriniz..">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control" id="Input5" name="Input5"
                                       placeholder="Adresinizi Giriniz..">
                            </div>
                        </div>


                        <p id="pg"><b>Şirketimiz İle Olan İlişkinizi Belirtiniz</b></p>


                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input " type="radio" name="flexRadioDefault" id="musteri"
                                           value="musteri">
                                    <label class="form-check-label" for="musteri">
                                        Müşteri
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input " type="radio" name="flexRadioDefault" id="ziyaretci"
                                           value="ziyaretci">
                                    <label class="form-check-label" for="ziyaretci">
                                        Ziyaretçi
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input " type="radio" name="flexRadioDefault" id="tedarikci"
                                           value="tedarikci">
                                    <label class="form-check-label" for="tedarikci">
                                        Tedarikçi
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="diger"
                                           value="diger">
                                    <label class="form-check-label" for="diger">
                                        Diğer
                                        <label for="digertext" class="form-label"></label>
                                        <input type="text" class="form-control" id="digertext" name="digertext" rows="3"
                                               disabled="disable"/>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                           id="eskicalisan" value="eskicalisan">
                                    <label class="form-check-label" for="eskicalisan">
                                        Eski Çalışan
                                        <label for="calisilanyil" class="form-label"><i>(Çalıştığı yıllar)</i></label>
                                        <input class="form-control" id="calisilanyil" name="calisilanyil" placeholder="20xx-20xx" 
                                               disabled="disable" rows="3"/>

                                    </label>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input " type="radio" name="flexRadioDefault"
                                           value="calisanadayi" id="calisanadayi">
                                    <label class="form-check-label" for="calisanadayi">
                                        Çalışan Adayı
                                        Tarih:
                                        <div class="flatpickr">
                                        <label for="tarih" class="form-label"></label>
                                        <input type="text" placeholder="Select Date.."  id="tarih" name="tarih" data-input> <!-- input is mandatory -->

                                        <a class="input-button" title="toggle" data-toggle>
                                            <i class="glyphicon glyphicon-calendar"></i>
                                        </a>

                                        <a class="input-button" title="clear" data-clear>
                                            <i class="glyphicon glyphicon-close"></i>
                                        </a>
                                    </div>

                                           

                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="ucuncu_kisi_firma_calisani"
                                           name="flexRadioDefault" id="ucuncukisi">
                                    <label class="form-check-label" for="ucuncukisi">
                                        Üçüncü Kişi Firma Çalışanıyım
                                        <label for="pbilgi" class="form-label"><i>(Çalıştığınız Firma ve Pozisyon
                                            Bilgisi)</i></label>
                                        <input class="form-control" id="pbilgi" name="pbilgi" disabled="disable"
                                               rows="3"/>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="konu">
                            <div class="row">

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" id="Input6" name="Input6"
                                           placeholder="Şirkette iletişimde olduğunuz birim..">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" id="Input7" name="Input7"
                                           placeholder="konu..">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">

                                <textarea class="form-control" id="Talep" name="Talep"
                                          placeholder="Kişisel Verilerin Korunması Kanunu kapsamındaki talebinizi detaylı olarak belirtiniz.."
                                          rows="3"></textarea>
                            </div>
                        </div>


                        <div class="branch row" id="UI-Designer">
                            <div class="step col" data-state="bio">
                                <div class="form-group add_bottom_30">
                                    <label for="ui_designer_experience_1"><b><i> Şirketimiz tarafından verilecek yanıtın
                                        tarafınıza bildirilme yöntemini seçiniz</i></b></label>
                                    <div class="styled-select clearfix">
                                        <select class="form-control required" name="ui_designer_experience_1"
                                                id="ui_designer_experience_1">
                                            <option value="">Bir aralık seç</option>
                                            <option value="adresime_gonder">Adresime gönderilmesini istiyorum.</option>
                                            <option value="Eposta_gonder">E-posta adresime gönderilmesini istiyorum.
                                            </option>
                                            <option value="elden_teslim">Elden teslim almak istiyorum. <br>(Şahsen yahut
                                                noter tasdikli vekâletname veya yetki belgesi ile teslim alınması
                                                zorunludur.)
                                            </option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label><b><i>Başvuru Sahibi(Kişisel Veri Sahibi)</i></b></label>
                            <div class="row">

                                <div class="col-12 col-sm-6">
                                    <label for="Input8" class="form-label">Ad Soyad:</label>
                                    <input type="text" class="form-control" id="Input8" name="Input8"
                                           placeholder="Ad Soyad..">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="Input9" class="form-label">Başvuru Tarihi:</label>
                                     <div class="flatpickr">
                                        <input type="text" placeholder="Select Date.."  id="Input9" name="Input9" data-input> <!-- input is mandatory -->

                                        <a class="input-button" title="toggle" data-toggle>
                                            <i class="glyphicon glyphicon-calendar"></i>
                                        </a>

                                        <a class="input-button" title="clear" data-clear>
                                            <i class="glyphicon glyphicon-close"></i>
                                        </a>
                                    </div>

                               </div>
                            </div>
                        </div>
                             <div align="and" class="row top-padding">
                                <div align="and" class="col-12 col-sm-6">
                                    <div class="form-button text-right ">
                                        <button class="ibtn less-padding" id="submit" type="submit" name="submit">Formu Gönder
                                        </button>
                                        <input type="hidden" name="recaptchakodu" id="recaptchaalani">

                                     </div>
                                </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="js/popper.min.js"></script>

<script src="js/main.js"></script>
<script src='https://www.google.com/recaptcha/api.js?hl=tr'></script>
<script>
    function TCNOKontrol(TCNO) {
        var tek = 0,
            cift = 0,
            sonuc = 0,
            TCToplam = 0,
            i = 0;

        if (TCNO.length != 11) {
            return false;
        }
        if (isNaN(TCNO)) {
            return false;
        }
        if (TCNO[0] == 0) {
            return false;
        }

        tek = parseInt(TCNO[0]) + parseInt(TCNO[2]) + parseInt(TCNO[4]) + parseInt(TCNO[6]) + parseInt(TCNO[8]);
        cift = parseInt(TCNO[1]) + parseInt(TCNO[3]) + parseInt(TCNO[5]) + parseInt(TCNO[7]);

        tek = tek * 7;
        sonuc = Math.abs(tek - cift);
        if (sonuc % 10 != TCNO[9]) return false;

        for (var i = 0; i < 10; i++) {
            TCToplam += parseInt(TCNO[i]);
        }

        if (TCToplam % 10 != TCNO[10]) {
            return false;
        } else {
            return true;
        }

    }

    $("#basvuruform").validate();


    $(".form-check-input").click(function () {
        $("#digertext").attr("disabled", true);
        if ($("input[name=flexRadioDefault]:checked").val() == "diger") {
            $("#digertext").attr("disabled", false);
            $("#digertext").focus();

        }
    });

    $(".form-check-input").click(function () {
        $("#tarih").attr("disabled", true);
        if ($("input[name=flexRadioDefault]:checked").val() == "calisanadayi") {
            $("#tarih").attr("disabled", false);
            $("#tarih").focus();

        }
    });

    $(".form-check-input").click(function () {
        $("#pbilgi").attr("disabled", true);
        if ($("input[name=flexRadioDefault]:checked").val() == "ucuncu_kisi_firma_calisani") {
            $("#pbilgi").attr("disabled", false);
            $("#pbilgi").focus();

        }
    });

    $(".form-check-input").click(function () {
        $("#calisilanyil").attr("disabled", true);
        if ($("input[name=flexRadioDefault]:checked").val() == "eskicalisan") {
            $("#calisilanyil").attr("disabled", false);
            $("#calisilanyil").focus();

        }
    });

    $.fn.serializeObject = function() {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };

    $(document).ready(function () {
        $('#submit').click(function (e) {

            e.preventDefault();
            var data = $( "#basvuruform" ).serializeObject();
            console.log( data );


            if (data.Input == '' || data.Input1 == '' || data.Input2 == '' || data.Input3 == '' || data.email == '' || data.Input5 == '' || data.ui_designer_experience_1 == '' || data.flexRadioDefault == '' || data.Input6 == '' || data.Input7 == '' || data.Talep == '' || data.Input8 == '' || data.Input9 == '') {

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Lütfen Bütün Alanları Doldurun!',

                })
            } else {
                if (TCNOKontrol(data.Input2)) {
                    $.ajax({
                        url: "api.php",
                        method: "POST",
                        dataType:"json",
                        data: $('#basvuruform').serialize(),
                        beforeSend: function () {
                            $('#response').html('<span class="text-info">Loading response...</span>');
                        },
                        success: function (fields) {

                           console.log(fields)

                            if (fields.type === 'success') {

                                Swal.fire(
                                    fields.title,
                                   fields.text,
                                    fields.type
                                )
                            }
                            else if (fields.type === 'danger'){
                                Swal.fire(
                                    fields.title,
                                   fields.text,
                                    fields.type
                                )

                            }

                        }

                    });

                } else {

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Lütfen Tc kimlik alanını kontrol ediniz!',

                    })
                }


            }
        });

        $("#tarih").flatpickr({
            altInput: true,
            dateFormat: "Y-m-d",
            altFormat: "d M l, Y",
            minDate: '2017-01-01',
            maxDate: 'today',
            allowInput: true,
        });

         $("#Input9").flatpickr({
            altInput: true,
            dateFormat: "Y-m-d",
            altFormat: "d M l, Y",
            minDate: '2017-01-01',
            maxDate: 'today',
            allowInput: true,
        });





    });
</script>
</body>
</html>
