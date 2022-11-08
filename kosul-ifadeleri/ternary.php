<?php

   $yas = 17;
   $egitim = 'lise';

//    if($yas>=18) {
//        if ($egitim=='lise' or $egitim=='üniversite') {
//            echo "ehliyet alabilir";
//        }else {
//            echo "eğitim yetersiz";
//        }
//    } else {
//        echo "yaşınız tutmuyor";
//    }

   // ternary

//    echo ($yas >= 18) ? "ehliyet alabilir":"ehliyet alamaz";

    echo ($yas >= 18) 
            ? ($egitim=='lise' or $egitim=='üniversite') 
                ? "ehliyet alabilir"
                : "eğitim yetersiz"
            : "yaşınız tutmuyor";

?>