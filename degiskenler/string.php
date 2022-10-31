<?php

    $ad="sadık";
    $soyad="turan";
    $yas = 38;

    $mesaj = "my name is {$ad} {$soyad} and {$yas} years old." ;

    echo    $mesaj."<br>";
    echo    strlen($mesaj)."<br>"; //string değişkeninin kaç karakterli olduğunu gösterir.
    echo    str_word_count($mesaj)."<br>"; //stringte kaç kelime olduğunu gösterir
    echo    strtoupper($mesaj)."<br>"; //tüm string büyük harf yazılır
    echo    strtolower($mesaj)."<br>"; //tüm string küçük harf yazılır
    echo    ucfirst($mesaj)."<br>";
    echo    str_replace(["sadık", "38"],["çınar","4"],$mesaj)."<br>";//string içerisinde yeniden yazılan yerler

?>