<?php

include 'baglan.php';

if (isset($_POST['ayarguncelle']))
{
    $ayarkaydet = $db-> prepare("UPDATE bilgiler set
    
        web_title =:web_title,
        web_description =:web_description,
        web_keyword =:web_keyword,
        web_author =:web_author
        where web_id=0");

    $update= $ayarkaydet-> execute (array(
        "web_title"=> $_POST["web_title"],
        "web_description" => $_POST["web_description"],
        "web_keyword" => $_POST["web_keyword"],
        "web_author" => $_POST["web_author"]
        
    ));


    if ($update){
        header("Location:../production/genel_ayar.php?durum=ok");
        

        

    }
    else 
    {
        header("Location:../production/genel_ayar.php?durum=no");
    };

}

if (isset($_POST['ayarguncelleiletisim']))
{
    $ayarkaydet = $db-> prepare("UPDATE bilgiler set
    
        web_tel =:web_tel,
        web_mail =:web_mail,
        web_il =:web_il,
        web_ilce =:web_ilce,
        web_adres =:web_adres
        where web_id=0");

    $update= $ayarkaydet-> execute (array(
        "web_tel"=> $_POST["web_tel"],
        "web_mail" => $_POST["web_mail"],
        "web_il" => $_POST["web_il"],
        "web_ilce" => $_POST["web_ilce"],
        "web_adres" => $_POST["web_adres"]
        
    ));


    if ($update){
        header("Location:../production/iletisim_ayar.php?durum=ok");
        

        

    }
    else 
    {
        header("Location:../production/iletisim_ayar.php?durum=no");
        
    };

}

if (isset($_POST['ayarguncelleAPI']))
{
    $ayarkaydet = $db-> prepare("UPDATE bilgiler set
    
        web_analystic =:web_analystic,
        web_maps =:web_maps,
        web_zopim =:web_zopim
        
        where web_id=0");

    $update= $ayarkaydet-> execute (array(
        "web_analystic"=> $_POST["web_analystic"],
        "web_maps" => $_POST["web_maps"],
        "web_zopim" => $_POST["web_zopim"]
       
    ));


    if ($update){
        header("Location:../production/api_ayar.php?durum=ok");
        

        

    }
    else 
    {
        header("Location:../production/api_ayar.php?durum=no");

        
    };

}

if (isset($_POST['ayarguncelleSosyal']))
{
    $ayarkaydet = $db-> prepare("UPDATE bilgiler set
    
        web_tw =:web_tw,
        web_facebook =:web_facebook,
        web_instagram =:web_instagram
        
        where web_id=0");

    $update= $ayarkaydet-> execute (array(
        "web_tw"=> $_POST["web_tw"],
        "web_facebook" => $_POST["web_facebook"],
        "web_instagram" => $_POST["web_instagram"]
       
    ));


    if ($update){
        header("Location:../production/sosyal_ayar.php?durum=ok");
        

        

    }
    else 
    {
        header("Location:../production/sosyal_ayar.php?durum=no");


        
    };

}
if (isset($_POST['ayarguncellemail']))
{
    $ayarkaydet = $db-> prepare("UPDATE bilgiler set
    
        web_smtpuser =:web_smtpuser,
        web_smtphost =:web_smtphost,
        web_smtppassword =:web_smtppassword,
        web_smtpport =:web_smtpport
        
        where web_id=0");

    $update= $ayarkaydet-> execute (array(
        "web_smtpuser"=> $_POST["web_smtpuser"],
        "web_smtphost" => $_POST["web_smtphost"],
        "web_smtppassword" => $_POST["web_smtppassword"],
        "web_smtpport" => $_POST["web_smtpport"]
       
    ));


    if ($update){
        header("Location:../production/mail_ayar.php?durum=ok");
        

        

    }
    else 
    {
        header("Location:../production/mail_ayar.php?durum=no");


        
    };

}
if (isset($_POST['ayarguncellehakkimizda']))
{
    $ayarkaydet = $db-> prepare("UPDATE hakkimizda set
    
        hakkimizda_baslik =:hakkimizda_baslik,
        hakkimizda_icerik =:hakkimizda_icerik,
        hakkimizda_video =:hakkimizda_video,
        hakkimizda_misyon =:hakkimizda_misyon,
        hakkimizda_vizyon =:hakkimizda_vizyon,        
        misyon_baslik =:misyon_baslik,        
        vizyon_baslik =:vizyon_baslik        
        where hakkimizda_id=0");

    $update= $ayarkaydet-> execute (array(
        "hakkimizda_baslik"=> $_POST["hakkimizda_baslik"],
        "hakkimizda_icerik" => $_POST["hakkimizda_icerik"],
        "hakkimizda_video" => $_POST["hakkimizda_video"],
        "hakkimizda_misyon" => $_POST["hakkimizda_misyon"],
        "hakkimizda_vizyon" => $_POST["hakkimizda_vizyon"],
        "misyon_baslik" => $_POST["misyon_baslik"],
        "vizyon_baslik" => $_POST["vizyon_baslik"]
       
    ));


    if ($update){
        header("Location:../production/hakkimizda_ayar.php?durum=ok");
        

        

    }
    else 
    {
        header("Location:../production/hakkimizda_ayar.php?durum=no");

        
    };

}





?>