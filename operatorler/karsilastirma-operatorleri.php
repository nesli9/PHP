<?php

    /*
        ==	    Equal	                    $x == $y		
        ===	    Identical	                $x === $y	
        !=	    Not equal	                $x != $y	
        <>	    Not equal	                $x <> $y		
        !==	    Not identical	            $x !== $y	
        >	    Greater than	            $x > $y	
        <	    Less than	                $x < $y	
        >=	    Greater than or equal to	$x >= $y		
        <=	    Less than or equal to	    $x <= $y		
        <=>	    Spaceship	                $x <=> $y	
    */

    $a = 50;
    $b = 5;
    $c = 20;
    $d = 4;
    $username = "sadikturan";

    $sonuc = ($a == $b);    # true
    $sonuc = ($a != $b);    # false
    $sonuc = ($username == 'sadikturan');    # true
    $sonuc = ($username != 'sadikturan');    # false
    $sonuc = ($a === $b);    # false
    $sonuc = ($a !== $b);    # false
    $sonuc = ($a > $b);
    $sonuc = ($a >= $b);
    $sonuc = ($a < $c);
    $sonuc = ($a <= $c);
    $sonuc = ($a <=> $b);
    $sonuc = ($a <=> $c); // -1 : 1. değişken 2. den küçükse , 0 : iki değişken eşitse , 1 : 2. değişken 1.den büyükse
    $sonuc = ($a <=> $c);

    // echo var_dump($sonuc);
    echo $sonuc;


?>