<?php

    $ogrenciA = array("ali korkmaz", array(60,70,80));
    $ogrenciB = array("yağmur yılmaz", array(70,50,90));


    echo $ogrenciA[0]."<br>";
    //echo $ogrenciA[1]."<br>";
    echo $ogrenciA[1][0]."<br>";
    echo $ogrenciA[1][1]."<br>";
    echo $ogrenciA[1][2]."<br>";
    echo "<br>";


    $ortA = ($ogrenciA[1][0] + $ogrenciA[1][1] + $ogrenciA[1][2])/3;
    echo "$ogrenciA[0] isimli öğrencinin ortalaması : ".$ortA;
    echo "<br>";

    $ortB = ($ogrenciB[1][0] + $ogrenciB[1][1] + $ogrenciB[1][2])/3;
    echo "$ogrenciB[0] isimli öğrencinin ortalaması : ".$ortB;
    echo "<br>";

    $ogrenciC = array(
        "100" => array(
            "ad" => "Ahmet",
            "soyad" => "Yılmaz",
            "matematik" => array(60,70,90),
            "fizik" => array(60,50,85),
        ),
        "101" => array(
            "ad" => "Arif",
            "soyad" => "Aydın",
            "matematik" => array(50,70,90),
            "fizik" => array(60,60,85),
        ),
        "102" => array(
            "ad" => "Ayşe",
            "soyad" => "Yıldırım",
            "matematik" => array(60,70,80),
            "fizik" => array(55,50,85),
        ),
    
    );
    echo "<br>";

    echo $ogrenciC["100"]["ad"]."<br>";
    echo $ogrenciC["101"]["ad"]."<br>";
    echo "<br>";

    echo ($ogrenciC["100"]["matematik"][0] + $ogrenciC["100"]["matematik"][1] + $ogrenciC["100"]["matematik"][2])/3 ."<br>"; //matematik dersi not ortalaması
    echo ($ogrenciC["100"]["fizik"][0] + $ogrenciC["100"]["fizik"][1] + $ogrenciC["100"]["fizik"][2])/3 ."<br>"; //fizik dersi not ortalaması

    


?>