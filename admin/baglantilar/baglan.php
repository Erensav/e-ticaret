<?php

try 
{
    $conn = mysqli_connect('localhost','root','','eticaret');
    $db = new PDO("mysql:host=localhost;dbname=eticaret;charset=utf8","root","");

    // echo "veritabani baglantisi basarili;"
    
} 
catch (PDOException $e)
{
echo $e->getMessage();
}




?>