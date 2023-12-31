<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">

            </div>
            <div class="col ">
                <div>
                    <img src="img/logo.png" alt="" width="300" height="300">
                </div>
                <form action="islem.php" method="POST" id="myForm" class="d-flex flex-column">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" required="" name="bilgiler_ad" id="floatingIsim" placeholder="ADINIZI GIRIN...">
                        <label for="floatingIsim">Isminizi Giriniz</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" required="" name="bilgiler_soyad" id="floatingSoyad" placeholder="Soyadinizi Giriniz...">
                        <label for="floatingSoyad">Soyadinizi Giriniz</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" required="" name="bilgiler_mail" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" required="" name="bilgiler_yas" id="floatingYas" placeholder="Yasiniz">
                        <label for="floatingYas">Yasiniz</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="bilgiler_il" class="form-control" id="floatingil" required>
                            <option value="0" disabled="" selected="">Şehir Seçin</option>
                            <option value="Adana" data-ekdeger="1">Adana</option>
                            <option value="Adıyaman" data-ekdeger="2">Adıyaman</option>
                            <option value="Afyonkarahisar " data-ekdeger="3">Afyonkarahisar </option>
                            <option value="Ağrı" data-ekdeger="4">Ağrı</option>
                            <option value="Aksaray" data-ekdeger="68">Aksaray</option>
                            <option value="Amasya" data-ekdeger="5">Amasya</option>
                            <option value="Ankara" data-ekdeger="6">Ankara</option>
                            <option value="Antalya" data-ekdeger="7">Antalya</option>
                            <option value="Ardahan" data-ekdeger="75">Ardahan</option>
                            <option value="Artvin" data-ekdeger="8">Artvin</option>
                            <option value="Aydın" data-ekdeger="9">Aydın</option>
                            <option value="Balıkesir" data-ekdeger="10">Balıkesir</option>
                            <option value="Bartın" data-ekdeger="74">Bartın</option>
                            <option value="Batman" data-ekdeger="72">Batman</option>
                            <option value="Bayburt" data-ekdeger="69">Bayburt</option>
                            <option value="Bilecik" data-ekdeger="11">Bilecik</option>
                            <option value="Bingöl" data-ekdeger="12">Bingöl</option>
                            <option value="Bitlis" data-ekdeger="13">Bitlis</option>
                            <option value="Bolu" data-ekdeger="14">Bolu</option>
                            <option value="Burdur" data-ekdeger="15">Burdur</option>
                            <option value="Bursa" data-ekdeger="16">Bursa</option>
                            <option value="Çanakkale" data-ekdeger="17">Çanakkale</option>
                            <option value="Çankırı" data-ekdeger="18">Çankırı</option>
                            <option value="Çorum" data-ekdeger="19">Çorum</option>
                            <option value="Denizli" data-ekdeger="20">Denizli</option>
                            <option value="Diyarbakır" data-ekdeger="21">Diyarbakır</option>
                            <option value="Düzce" data-ekdeger="81">Düzce</option>
                            <option value="Edirne" data-ekdeger="22">Edirne</option>
                            <option value="Elazığ" data-ekdeger="23">Elazığ</option>
                            <option value="Erzincan" data-ekdeger="24">Erzincan</option>
                            <option value="Erzurum" data-ekdeger="25">Erzurum</option>
                            <option value="Eskişehir" data-ekdeger="26">Eskişehir</option>
                            <option value="Gaziantep" data-ekdeger="27">Gaziantep</option>
                            <option value="Giresun" data-ekdeger="28">Giresun</option>
                            <option value="Gümüşhane" data-ekdeger="29">Gümüşhane</option>
                            <option value="Hakkari" data-ekdeger="30">Hakkari</option>
                            <option value="Hatay" data-ekdeger="31">Hatay</option>
                            <option value="Iğdır" data-ekdeger="76">Iğdır</option>
                            <option value="Isparta" data-ekdeger="32">Isparta</option>
                            <option value="İstanbul" data-ekdeger="34">İstanbul</option>
                            <option value="İzmir" data-ekdeger="35">İzmir</option>
                            <option value="Kahramanmaraş" data-ekdeger="46">Kahramanmaraş</option>
                            <option value="Karabük" data-ekdeger="78">Karabük</option>
                            <option value="Karaman" data-ekdeger="70">Karaman</option>
                            <option value="Kars" data-ekdeger="36">Kars</option>
                            <option value="Kastamonu" data-ekdeger="37">Kastamonu</option>
                            <option value="Kayseri" data-ekdeger="38">Kayseri</option>
                            <option value="Kırıkkale" data-ekdeger="71">Kırıkkale</option>
                            <option value="Kırklareli" data-ekdeger="39">Kırklareli</option>
                            <option value="Kırşehir" data-ekdeger="40">Kırşehir</option>
                            <option value="Kilis" data-ekdeger="79">Kilis</option>
                            <option value="Kocaeli" data-ekdeger="41">Kocaeli</option>
                            <option value="Konya" data-ekdeger="42">Konya</option>
                            <option value="Kütahya" data-ekdeger="43">Kütahya</option>
                            <option value="Malatya" data-ekdeger="44">Malatya</option>
                            <option value="Manisa" data-ekdeger="45">Manisa</option>
                            <option value="Mardin" data-ekdeger="47">Mardin</option>
                            <option value="Mersin" data-ekdeger="33">Mersin</option>
                            <option value="Muğla" data-ekdeger="48">Muğla</option>
                            <option value="Muş" data-ekdeger="49">Muş</option>
                            <option value="Nevşehir" data-ekdeger="50">Nevşehir</option>
                            <option value="Niğde" data-ekdeger="51">Niğde</option>
                            <option value="Ordu" data-ekdeger="52">Ordu</option>
                            <option value="Osmaniye" data-ekdeger="80">Osmaniye</option>
                            <option value="Rize" data-ekdeger="53">Rize</option>
                            <option value="Sakarya" data-ekdeger="54">Sakarya</option>
                            <option value="Samsun" data-ekdeger="55">Samsun</option>
                            <option value="Siirt" data-ekdeger="56">Siirt</option>
                            <option value="Sinop" data-ekdeger="57">Sinop</option>
                            <option value="Sivas" data-ekdeger="58">Sivas</option>
                            <option value="Şanlıurfa" data-ekdeger="63">Şanlıurfa</option>
                            <option value="Şırnak" data-ekdeger="73">Şırnak</option>
                            <option value="Tekirdağ" data-ekdeger="59">Tekirdağ</option>
                            <option value="Tokat" data-ekdeger="60">Tokat</option>
                            <option value="Trabzon" data-ekdeger="61">Trabzon</option>
                            <option value="Tunceli" data-ekdeger="62">Tunceli</option>
                            <option value="Uşak" data-ekdeger="64">Uşak</option>
                            <option value="Van" data-ekdeger="65">Van</option>
                            <option value="Yalova" data-ekdeger="77">Yalova</option>
                            <option value="Yozgat" data-ekdeger="66">Yozgat</option>
                            <option value="Zonguldak" data-ekdeger="67">Zonguldak</option>
                        </select>
                    </div>




                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" required="" name="bilgiler_sifre" id="floatingSifre" placeholder="password">
                        <label for="floatingSifre">Sifrenizi Belirleyiniz</label>
                    </div>
                    <button type="submit" class="btn btn-outline-warning mt-3" name="insertIslemi">KAYIT OL</button>

                </form>

            </div>
            <div class="col">

            </div>
        </div>
    </div>





</body>


</html>