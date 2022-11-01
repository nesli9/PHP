<?php

    #associative array --> key-value değerleri için bu dizi tipi kullanılır
    # örn --> 41: Kocaeli , 34: İstanbul => gibi

    $plakalar= array("41","34");
    $sehirler = array("kocaeli","istanbul");

    echo "$plakalar[0] : $sehirler[0] <br>";
    echo "$plakalar[1] : $sehirler[1] <br>";
    echo "<br>";

    $plaka_bilgileri = array("41" =>"kocaeli","34"=>"istanbul");
    $telefon_rehberi = array("ali"=>"523462145","ahmet"=>"5231466");

    echo $plaka_bilgileri["41"]."<br>";
    echo $plaka_bilgileri["34"]."<br>";
    

    $plaka_bilgileri["53"]="rize";
    $plaka_bilgileri["35"]="izmir";

    echo $plaka_bilgileri["53"]."<br>";
    echo $plaka_bilgileri["35"]."<br>";

    
?>
