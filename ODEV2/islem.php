<?php

require_once '../nedmin/baglantilar/baglan.php';

if (isset($_POST['insertIslemi']))
{
    $kaydet = $db-> prepare("INSERT INTO user set
    
    username =:username,
    user_password =:user_password,
    user_mail =:user_mail        
    ");

    $insert= $kaydet-> execute (array(
        "username"=> $_POST["username"],
        "user_password" => $_POST["user_password"],
        "user_mail" => $_POST["user_mail"]        
    ));


    if ($insert){
        echo "KAYIT BASARILI";
        

        

    }
    else 
    {
        echo "KAYIT BASARISIZ";
    };

}
?>