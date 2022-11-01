<?php

    /*
        1- Ürünleri numeric dizide saklayınız ve ürün fiyatları ortalamasını hesaplayınız.
           
            IPhone 11: 7000
            IPhone 12: 9000
            Samsung S20: 8000


        $urun1 = array("IPhone 11", 7000);
        $urun2 = array("IPhone 12", 9000);
        $urun3 = array("Samsung S20", 8000);

        // $urunler = array($urun1, $urun2, $urun3);
        $urunler = array(
            array("IPhone 11", 7000), 
            array("IPhone 12", 9000), 
            array("Samsung S20", 8000)
        );

        $ortalamaFiyat = ($urunler[0][1] + $urunler[1][1] + $urunler[2][1])/3;
        echo $ortalamaFiyat;

        2- Aşağıdaki oyuncu bilgilerini "players" isimli dizi içinde saklayınız.

        player 1: 
            nickname     => ronaldo
            name         => Cristiano Ronaldo
            yearOfBirth  => 1985
            nationality  => Portugal
            current_team => Portugal
            history      => Juventus,Real Madrid,Portugal

        player 2: 
            nickname     => messi
            name         => Lionel Messi
            yearOfBirth  => 1987
            nationality  => Argentina
            current_team => Barcelona,
            history      => Barcelona,Argentina,Portugal
    */

    $players = array(
        "ronaldo" => array(
            "name" => "Cristiano Ronaldo",
            "yearofBirth" => "1985",
            "nationality" => "Portugal",
            "current_team" => "Portugal",
            "history" => array("Juventus","Real Madrid","Portugal")
        ),
        "messi" => array(
            "name" => "Lionel Messi",
            "yearofBirth" => "1987",
            "nationality" => "Argentina",
            "current_team" => "Barcelona",
            "history" => array("Barcelona","Argentina","Portugal")
        ),
    );

    print_r($players["ronaldo"]["name"]);
    echo "<br>";
    print_r($players["messi"]["history"]);
    echo "<br>";
    print_r($players["messi"]["history"][0]);




?>
