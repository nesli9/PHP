<?php

    $sayilar = array(1,2,3,4,5);
    $isimler = array("ali","ahmet","arif");

    $sayilar[0] = "bir";
    $sayilar[1] = "iki";
    $sayilar[2] = "üç";
    $sayilar[3] = "dört";
    $sayilar[5] = "altı"; //dizi genişletilmiş oldu


    echo "$sayilar[0] <br>";
    echo "$sayilar[1] <br>";
    echo "$sayilar[2] <br>";
    echo "$sayilar[3] <br>";
    echo "$sayilar[4] <br>";
    echo "$sayilar[5] <br>";
    echo "<br>";

    #döngüler-loop ' kolayca tüm değerler yazdırılır.

    echo "$isimler[0] <br>";
    echo "$isimler[1] <br>";
    echo "$isimler[2] <br>";
    echo "<br>";

    $markalar = "bmw , toyota , mercedes";

    $markalar2 = explode(",", $markalar); //explode ile markalar dizisinde tanımlanan değerler virgüllerden ayrılarak yazdırıldı

    echo " araba markası : $markalar2[0] <br>";
    echo " araba markası : $markalar2[1] <br>";
    echo " araba markası : $markalar2[2] <br>";

    

?>