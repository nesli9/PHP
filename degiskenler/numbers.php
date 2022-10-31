<?php

    echo "sonuç =".(10+5)."<br>";
    echo "sonuç =".(10-5)."<br>";
    echo "sonuç =".(10*5)."<br>";
    echo "sonuç =".(10/5)."<br>";
    echo "<br>";

    $sayi1= 10;
    $sayi2 = 20;
    $sayi3 = 5;


    echo "sonuç =".(($sayi1+$sayi2)/$sayi3)."<br>";
    echo "sonuç =".($sayi1-$sayi2)."<br>";
    echo "sonuç =".($sayi1*$sayi2)."<br>";
    echo "sonuç =".($sayi1/$sayi2)."<br>";
    echo "<br>";

    echo var_dump(is_int(10))."<br>"; //var dump : türünü gösterir , is int girilen değişkenin integer olup olmadığını gösterir
    echo var_dump(is_int(10.5))."<br>";
    echo var_dump(is_int("10"))."<br>";
    echo var_dump(is_float(10))."<br>";
    echo var_dump(is_double(10))."<br>";
    echo var_dump(is_numeric("10"))."<br>";
    echo "<br>";

    echo abs(-10)."<br>"; //abs : mutlak değerini alır
    echo ceil(4.3)."<br>"; //yukarı yuvarlar
    echo floor(4.9)."<br>";//aşağı yuvarlar
    echo round(4.3)."<br>"; //yakın olan sayıya yuvarlar
    echo "<br>";

    echo sqrt(25)."<br>"; //karekök hesaplar
    echo pow(2,5)."<br>"; //üssünü alır
    echo max(2,5,4,9)."<br>"; //max elemanı bulur
    echo min(2,5,4,9)."<br>"; //min elemanı bulur



?>