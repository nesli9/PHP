<?php   

    /*
        Veri Tipleri : 

        string  : metinsel bilgiler
        int     : tam sayılar
        double  : ondalıklı sayılar
        boolean : true/false bilgi
        object  : nesne
        array   : diziler
        null    : değer içermeyen değişken
    
    */

    $urunAdi = "Iphone 12"; #string
    echo gettype($urunAdi);

    echo "<br>";

    $fiyat = 9000;
    echo gettype($fiyat);

    echo "<br>";

    $kdvOrani = 0.18;
    echo gettype($kdvOrani);

    echo "<br>";

    $satistaMi = true;
    echo gettype($satistaMi);

    echo "<br>";

    $a = (double)10; #int to double
    echo gettype($a);

    echo "<br>";

    $b = (int)10.5; #double to int
    echo gettype($b)." ".$b;

    echo "<br>";

    $c = (int)"20"; #string to int
    echo gettype($c);

    echo "<br>";

    $d = (int)true; #boolean to int
    echo gettype($d).$d;




?>