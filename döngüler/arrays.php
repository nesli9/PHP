<?php

   $isimler = array('ali','çınar','zeynep','ahmet');

    for ($i=0; $i < count($isimler); $i++) { 
       echo $isimler[$i].'<br>';
    }

    $i = 0;
    while ($i < count($isimler)) {
        echo $isimler[$i].'<br>';
        $i++;
    }

    $urunler = array(
        array('IPhone 11',7000),
        array('IPhone 12',8000),
        array('IPhone 12 Pro',9000),
        array('IPhone 12 Pro',9000)
    );

    for($i=0; $i<count($urunler); $i++){
        echo $urunler[$i][0].' '.$urunler[$i][1].'<br>';
    }

    $arabalar = array(
        'K101'=> array(
            'marka'=> 'opel',
            'model'=> 'corsa',
            'uretimYili' => '2020',
            'renk' => 'kırmızı',
            'fiyat' => '150000'
        ),
        'K102'=> array(
            'marka'=> 'toyota',
            'model'=> 'yaris',
            'uretimYili' => '2020',
            'renk' => 'beyaz',
            'fiyat' => '160000'
        ),
    );
    $keys = array_keys($arabalar);

    for ($i=0; $i < count($arabalar); $i++) { 
        echo $arabalar[$keys[$i]]['model'].'<br>';
    }

?>