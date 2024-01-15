<?php
ob_start();
session_start();

include 'baglan.php';


// if (isset($_POST['arayuzgiris'])) {
//     $kullanici_mail = $_POST['kullanici_mail'];
//     $kullanici_password = $_POST['kullanici_password2'];

//     $kullanicisor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_mail=:mail and kullanici_password2=:pass  ");
//     $kullanicisor->execute(array(
//         "mail" => $kullanici_mail,
//         "pass" => $kullanici_password,

//     ));
//     $_SESSION['$kullanici_mail'];
//     $_SESSION['$kullanici_password2'];




//     $say = $kullanicisor->rowCount();

//     if ($say == 1) {
//         $_SESSION["arayuzgiris"] = true;
//         //$_SESSION["arayuzgiris"] = $kullanici_mail;
//         header("Location:../../web site/Anasayfa2.php");
//         exit;
//     } else {
//         header("Location:../../web site/login.php?durum=no");
//         exit;
//     }
// }



if (isset($_POST['admingiris'])) {
    $kullanici_mail = $_POST['kullanici_mail'];
    $kullanici_password = md5($_POST['kullanici_password']);

    $kullanicisor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_mail=:mail and kullanici_password=:pass and kullanici_yetki=:yetki ");
    $kullanicisor->execute(array(
        "mail" => $kullanici_mail,
        "pass" => $kullanici_password,
        "yetki" => 'Admin'
    ));

    $say = $kullanicisor->rowCount();

    if ($say == 1) {
        $kullanici = $kullanicisor->fetch(PDO::FETCH_ASSOC);
        $_SESSION["kullanici_id"] = $kullanici['kullanici_id'];
        $_SESSION["kullanici_mail"] = $kullanici_mail;
        header("Location:../production/index.php");
        exit;
    } else {
        header("Location:../production/loginn.php?durum=no");
        exit;
    }
}



if (isset($_POST['ayarguncelle'])) {
    $ayarkaydet = $db->prepare("UPDATE bilgiler set
    
        web_title =:web_title,
        web_description =:web_description,
        web_keyword =:web_keyword,
        web_author =:web_author
        where web_id=0");

    $update = $ayarkaydet->execute(array(
        "web_title" => $_POST["web_title"],
        "web_description" => $_POST["web_description"],
        "web_keyword" => $_POST["web_keyword"],
        "web_author" => $_POST["web_author"]

    ));


    if ($update) {
        header("Location:../production/genel_ayar.php?durum=ok");
    } else {
        header("Location:../production/genel_ayar.php?durum=no");
    };
}

if (isset($_POST['ayarguncelleiletisim'])) {
    $ayarkaydet = $db->prepare("UPDATE bilgiler set
    
        web_tel =:web_tel,
        web_mail =:web_mail,
        web_il =:web_il,
        web_ilce =:web_ilce,
        web_adres =:web_adres
        where web_id=0");

    $update = $ayarkaydet->execute(array(
        "web_tel" => $_POST["web_tel"],
        "web_mail" => $_POST["web_mail"],
        "web_il" => $_POST["web_il"],
        "web_ilce" => $_POST["web_ilce"],
        "web_adres" => $_POST["web_adres"]

    ));


    if ($update) {
        header("Location:../production/iletisim_ayar.php?durum=ok");
    } else {
        header("Location:../production/iletisim_ayar.php?durum=no");
    };
}

if (isset($_POST['ayarguncelleAPI'])) {
    $ayarkaydet = $db->prepare("UPDATE bilgiler set
    
        web_analystic =:web_analystic,
        web_maps =:web_maps,
        web_zopim =:web_zopim
        
        where web_id=0");

    $update = $ayarkaydet->execute(array(
        "web_analystic" => $_POST["web_analystic"],
        "web_maps" => $_POST["web_maps"],
        "web_zopim" => $_POST["web_zopim"]

    ));


    if ($update) {
        header("Location:../production/api_ayar.php?durum=ok");
    } else {
        header("Location:../production/api_ayar.php?durum=no");
    };
}

if (isset($_POST['ayarguncelleSosyal'])) {
    $ayarkaydet = $db->prepare("UPDATE bilgiler set
    
        web_tw =:web_tw,
        web_facebook =:web_facebook,
        web_instagram =:web_instagram
        
        where web_id=0");

    $update = $ayarkaydet->execute(array(
        "web_tw" => $_POST["web_tw"],
        "web_facebook" => $_POST["web_facebook"],
        "web_instagram" => $_POST["web_instagram"]

    ));


    if ($update) {
        header("Location:../production/sosyal_ayar.php?durum=ok");
    } else {
        header("Location:../production/sosyal_ayar.php?durum=no");
    };
}
if (isset($_POST['ayarguncellemail'])) {
    $ayarkaydet = $db->prepare("UPDATE bilgiler set
    
        web_smtpuser =:web_smtpuser,
        web_smtphost =:web_smtphost,
        web_smtppassword =:web_smtppassword,
        web_smtpport =:web_smtpport
        
        where web_id=0");

    $update = $ayarkaydet->execute(array(
        "web_smtpuser" => $_POST["web_smtpuser"],
        "web_smtphost" => $_POST["web_smtphost"],
        "web_smtppassword" => $_POST["web_smtppassword"],
        "web_smtpport" => $_POST["web_smtpport"]

    ));


    if ($update) {
        header("Location:../production/mail_ayar.php?durum=ok");
    } else {
        header("Location:../production/mail_ayar.php?durum=no");
    };
}
if (isset($_POST['ayarguncellehakkimizda'])) {
    $ayarkaydet = $db->prepare("UPDATE hakkimizda set
    
        hakkimizda_baslik =:hakkimizda_baslik,
        hakkimizda_icerik =:hakkimizda_icerik,
        hakkimizda_video =:hakkimizda_video,
        hakkimizda_misyon =:hakkimizda_misyon,
        hakkimizda_vizyon =:hakkimizda_vizyon,        
        misyon_baslik =:misyon_baslik,        
        vizyon_baslik =:vizyon_baslik        
        where hakkimizda_id=0");

    $update = $ayarkaydet->execute(array(
        "hakkimizda_baslik" => $_POST["hakkimizda_baslik"],
        "hakkimizda_icerik" => $_POST["hakkimizda_icerik"],
        "hakkimizda_video" => $_POST["hakkimizda_video"],
        "hakkimizda_misyon" => $_POST["hakkimizda_misyon"],
        "hakkimizda_vizyon" => $_POST["hakkimizda_vizyon"],
        "misyon_baslik" => $_POST["misyon_baslik"],
        "vizyon_baslik" => $_POST["vizyon_baslik"]

    ));


    if ($update) {
        header("Location:../production/hakkimizda_ayar.php?durum=ok");
    } else {
        header("Location:../production/hakkimizda_ayar.php?durum=no");
    };
}

if (isset($_POST['kullaniciguncelle'])) {

    $kullanici_id = $_POST["kullanici_id"];

    $ayarkaydet = $db->prepare("UPDATE kullanici set
    
        kullanici_tc =:kullanici_tc,
        kullanici_adsoyad =:kullanici_adsoyad,
        kullanici_yetki=:kullanici_yetki,
        kullanici_mail=:kullanici_mail              
              
        where kullanici_id={$_POST['kullanici_id']}");

    $update = $ayarkaydet->execute(array(
        "kullanici_tc" => $_POST["kullanici_tc"],
        "kullanici_adsoyad" => $_POST["kullanici_adsoyad"],
        "kullanici_yetki" => $_POST["kullanici_yetki"],
        "kullanici_mail" => $_POST["kullanici_mail"]



    ));


    if ($update) {
        header("Location:../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=ok");
    } else {
        header("Location:../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=no");
    };
}




if (isset($_POST['webkullaniciguncelle'])) {
    $kullanici_id = $_POST["kullanici_id"];

    $ayarkaydet = $db->prepare("UPDATE kullanici SET
        kullanici_adsoyad = :kullanici_adsoyad,
        kullanici_password2 = :kullanici_password2,
        kullanici_mail = :kullanici_mail,
        kullanici_adres = :kullanici_adres,
        kullanici_il = :kullanici_il,
        kullanici_ilce = :kullanici_ilce
        WHERE kullanici_id = :kullanici_id");

    $update = $ayarkaydet->execute(array(
        "kullanici_adsoyad" => $_POST["kullanici_adsoyad"],
        "kullanici_password2" => $_POST["kullanici_password2"],
        "kullanici_mail" => $_POST["kullanici_mail"],
        "kullanici_adres" => $_POST["kullanici_adres"],
        "kullanici_il" => $_POST["kullanici_il"],
        "kullanici_ilce" => $_POST["kullanici_ilce"]
        
    ));

    if ($update) {
        header("Location:../../web site/webhesabim.php?kullanici_id=$kullanici_id&durum=ok");
    } else {
        header("Location:../../web site/webhesabim.php?kullanici_id=$kullanici_id&durum=no");
    }


    
}


if (isset($_POST['kullanicibilgiguncelle'])) {

	$kullanici_id=$_POST['kullanici_id'];

	$ayarkaydet=$db->prepare("UPDATE kullanici SET
		kullanici_adsoyad=:kullanici_adsoyad,
		kullanici_il=:kullanici_il,
		kullanici_ilce=:kullanici_ilce
		WHERE kullanici_id={$_POST['kullanici_id']}");

	$update=$ayarkaydet->execute(array(
		'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
		'kullanici_il' => $_POST['kullanici_il'],
		'kullanici_ilce' => $_POST['kullanici_ilce']
		));


	if ($update) {

		Header("Location:../../hesabim?durum=ok");

	} else {

		Header("Location:../../hesabim?durum=no");
	}

}

if ($_GET['urunsil']=="ok") {
	
	$sil=$db->prepare("DELETE from urun where urun_id=:urun_id");
	$kontrol=$sil->execute(array(
		'urun_id' => $_GET['urun_id']
		));

	if ($kontrol) {

		Header("Location:../production/urunler.php?durum=ok");

	} else {

		Header("Location:Location:../production/urunler.php?durum=no");
	}

}

?>

