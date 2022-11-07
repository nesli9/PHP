<?php 

    // $username = "sadikturan";
    // $password = "1234";

    // if($username != "sadikturan"){
    //     echo "username yanlış";
    // }elseif($password != "1234"){
    //     echo "parola yanlış";
    // }else{
    //     echo "başarılı";
    // }

    $saat = date("H"); //sitem saatini alır

    if($saat < 10){
        echo "günaydın";
    }elseif($saat < 20){
        echo "iyi günler";
    }else{
        echo "iyi gecler";
    }
    





?>