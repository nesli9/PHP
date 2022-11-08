<?php

    # 1- (1-100) arasındaki sayılardan 3 ve 5' e bölünenleri yazdırınız.

    // $a = 1;
    // while ($a <= 100) {
    //     if ($a%3==0 and $a%5==0) {
    //         echo $a."<br>";
    //     }
    //     $a++;
    // }

    # 2- (20-30) arasındaki tek sayıların toplamı nedir?

    // $a = 20;
    // $toplam = 0;
    // while ($a <= 30) {
    //     if ($a % 2 == 1) {
    //         $toplam = $toplam + $a;
    //         echo $toplam."<br>";
    //     }
    //     $a++;
    // }
    // echo $toplam."<br>";


    # 3- (100-10) arasındaki sayıları yazdırınız.

        // $a = 100;
        // while ($a >= 10) {
        //     echo $a."<br>";
        //     $a--;
        // }

    # 4- (1-10) arasında rastgele benzersiz 5 sayı üretiniz.


    $liste = array();

    while (count($liste) != 5) {
        $sayi = rand(1,10);
        echo $sayi." ";

        if (!in_array($sayi,$liste)) {
            array_push($liste,$sayi);
        }
    }

    print_r($liste);

?>