<?php

    /*    
        a = b   	a = b	
        a += b	    a = a + b		
        a -= b	    a = a - b		
        a *= b	    a = a * b		
        a /= b	    a = a / b		
        a %= b	    a = a % b	    
        a **= b	    a = a ** b	
        a .= b      a = a . b    
    */

    $a ;

    $a = 10;
    $b = 20;
    $c = $a;
    $d = ($a+10)*2;

    // $a += $b;       # a = a + b;
    // $a -= $b;       # a = a - b;
    // $a *= $b;       # a = a * b;
    // $a /= $b;       # a = a / b; 
    // $a %= $b;       # a = a % b; 
    // $a **= $b;      # a = a ** b; 

    $ad = "sadık";
    $soyad ="turan";

    $ad .= $soyad;

    echo $ad;


    echo $a,$b,$c,$d;


?>