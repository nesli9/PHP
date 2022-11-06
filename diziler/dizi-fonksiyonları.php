<?php

    $sayilar = array(1,5,7,4,56,78,12,45);
    $isimler = array("ali","zeynep","canan","beril");
    $kullanicilar = array("sadikturan"=>"38","cinarturan"=>"4","yigitbilgi"=>"12");

    // echo count($sayilar)."<br>";
    // echo count($isimler)."<br>";
    // echo count($kullanicilar)."<br>";

    #artan sırada
    sort($sayilar);
    sort($isimler);
    asort($kullanicilar); #value ya göre artan sıralama olur
    ksort($kullanicilar); #key e göre artan sıralama olur

    #azalan sırada
    rsort($sayilar);
    rsort($isimler);
    rsort($kullanicilar);
    arsort($kullanicilar);
    krsort($kullanicilar);


    // print_r($sayilar);
    // echo "<br>";
    // print_r($isimler);
    // echo "<br>";
    // print_r($kullanicilar);

    #string to array

    $string = "sadik | turan | 38";
    $arr = explode("|", $string);

    // print_r($arr);
    // echo "<br>";

    #array to string

    $arr = array("sadik","turan","38");
    $string = implode(",", $arr);
    // print_r($string);
    

    // #rastgele sıralama
    // print_r($isimler);
    // echo "<br>";
    // shuffle($isimler);
    // print_r($isimler);


    #dizi birleştirme
    // $plakalar = array("41","34");
    // $sehirler = array("kocaeli","istanbul");

    // $arr = array_combine($plakalar,$sehirler);

    // $arr1 = ["istanbul","kocaeli"];
    // $arr2 = ["rize","izmir"];

    // $arr3 = array_merge($arr1,$arr2);

    // print_r($arr);
    // echo "<br>";
    // print_r($arr3);

    #eleman tekrarlama sayıları

    $arr1 = ["istanbul","kocaeli","istanbul","kocaeli","rize"];
    $arr = array_count_values($arr1);

    // print_r($arr);

    #dizinin sonuna eleman ekleme

    array_push($arr1,"giresun");

    print_r($arr1);
    echo "<br>";

    #dizinin başına eleman ekleme

    array_unshift($arr1,"yalova");

    print_r($arr1);








?>