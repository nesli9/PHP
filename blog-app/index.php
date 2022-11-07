<?php

    // $kategori1="Macera";
    // $kategori2="Dram";
    // $kategori3="Komedi";
    // $kategori4="Korku";

    $kategoriler = array("Macera", "Dram", "Komedi", "Korku");

    // array_push($kategoriler , "Bilim Kurgu");
    // sort($kategoriler);

    $filmler = array(
        "1" => array(
            "baslik" => "Paper Lives",
            "aciklama" => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
            "resim" => "1.jpeg",
            "yorumSayisi" => "0",
            "begeniSayisi"=> "106",
            "vizyon" => true
        ),
        "2" => array(
            "baslik" => "Walking Dead",
            "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
            "resim" => "2.jpeg",
            "yorumSayisi" => "236",
            "begeniSayisi"=> "305",
            "vizyon" => false
        ),
    
    );

    // $yeni_film = array(
    //         "baslik" => "Yeni Film",
    //         "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
    //         "resim" => "2.jpeg",
    //         "yorumSayisi" => "236",
    //         "begeniSayisi"=> "2023",
    //         "vizyon" => "hayır",
    // );

    // $filmler["0"] = $yeni_film;
    // ksort($filmler);
    // //print_r($filmler);
    // shuffle($filmler);


    // $film1_baslik="Paper Lives";
    // $film1_aciklama="Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)";
    // $film1_resim="1.jpeg";
    // $film1_yorumSayisi="0";
    // $film1_begeniSayisi="106";
    // $film1_vizyon="evet";

    // $film2_baslik="Walking Dead";
    // $film2_aciklama="Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.";
    // $film2_resim="2.jpeg";
    // $film2_yorumSayisi="236";
    // $film2_begeniSayisi="2023";
    // $film2_vizyon="hayır";

    // $filmler["1"]["aciklama"] = strtolower($filmler["1"]["aciklama"]);
    // $filmler["1"]["aciklama"] = ucfirst($filmler["1"]["aciklama"]);

    // $filmler["2"]["aciklama"] = strtolower($filmler["2"]["aciklama"]);
    // $filmler["2"]["aciklama"] = ucfirst($filmler["2"]["aciklama"]);

    // $filmler["1"]["aciklama"]= substr($filmler["1"]["aciklama"],0,200)."...";
    // $filmler["2"]["aciklama"] = substr($filmler["2"]["aciklama"],0,200)."...";

    // $filmler["0"]["url"] = strtolower($filmler["0"]["baslik"]);
    // $filmler["0"]["url"] = str_replace([" ","ç"],["-","c"],$filmler["0"]["url"]);

    $filmler["1"]["url"] = strtolower($filmler["1"]["baslik"]);
    $filmler["1"]["url"] = str_replace([" ","ç"],["-","c"],$filmler["1"]["url"]);

    $filmler["2"]["url"] = strtolower($filmler["2"]["baslik"]);
    $filmler["2"]["url"] = str_replace([" ","ç"],["-","c"],$filmler["2"]["url"]);

    const limit = 100;
    const baslik = "Popüler Filmler";
    $kategoriSayisi= count($kategoriler);
    $filmSayisi = count($filmler);
    $ozet = "$kategoriSayisi Kategoride $filmSayisi film listelenmiştir";

    /*
        1- Film açıklamasındaki baş harf hariç tüm harfleri küçük harfe çeviriniz.
        2- Film açıklaması içindeki ilk 50 karakteri alarak sonuna "..." ekleyiniz. (substr) 
        3- Her bir film için url bilgisini film başlığına göre oluşturunuz.    
        4- "baslik" isminde bir sabit oluşturarak sayfanın h1 etiketinde kullanınız.  
    */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Blog App</title>
</head>
<body>
    
    <div class="container my-5">
    
        <div class="row">

            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $kategoriler[0] ?></li>
                    <li class="list-group-item"><?php echo $kategoriler[1]  ?></li>
                    <li class="list-group-item"><?php echo $kategoriler[2]  ?></li>
                    <li class="list-group-item"><?php echo $kategoriler[3]  ?></li>
                    <!-- <li class="list-group-item"><?php echo $kategoriler[4]  ?></li> -->
                </ul>
            </div>
            <div class="col-9">
                <h1 class="mb-4"><?php echo baslik?></h1>
                <p class="text-muted">
                <?php echo $ozet?>
                </p>

                <!-- <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php echo  "<img class=\"img-fluid\" src=\"img/{$filmler["0"]["resim"]}\">"  ?>                           
                        </div>
                        <div class="col-9">
                            <div class="card-body">                        
                                <h5 class="card-title"><?php echo "<a href=\"{$filmler["0"]["url"]}\">{$filmler["0"]["baslik"]}</a>" ?></h5>
                                <p class="card-text">
                                    <?php echo $filmler["0"]["aciklama"] ?>
                                </p>
                                <div>
                                    <span class="badge bg-primary"><?php echo $filmler["0"]["yorumSayisi"] ?> yorum</span>
                                    <span class="badge bg-primary"><?php echo $filmler["0"]["begeniSayisi"] ?> beğeni</span>
                                    <span class="badge bg-warning">vizyonda: <?php echo $filmler["0"]["vizyon"] ?></span>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div> -->

                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php echo  "<img class=\"img-fluid\" src=\"img/{$filmler["1"]["resim"]}\">"  ?>                           
                        </div>
                        <div class="col-9">
                            <div class="card-body">                        
                                <h5 class="card-title"><?php echo "<a href=\"{$filmler["1"]["url"]}\">{$filmler["1"]["baslik"]}</a>" ?></h5>
                                <p class="card-text">
                                    <?php
                                        if(strlen($filmler["1"]["aciklama"])> limit){
                                            echo substr($filmler["1"]["aciklama"],0,limit)."...";
                                        }else{
                                            echo $filmler["1"]["aciklama"];
                                        }
                                    ?>
                                </p>
                                <div>
                                    <?php
                                        if($filmler["1"]["yorumSayisi"]>0){
                                            echo "<span class=\"badge bg-primary\">{$filmler["1"]["yorumSayisi"]} yorum</span>";
                                        }
                                    ?>
                                    <span class="badge bg-primary"><?php echo $filmler["1"]["begeniSayisi"] ?> beğeni</span>
                                    <span class="badge bg-warning">
                                        <?php 
                                            if($filmler["1"]["vizyon"]){
                                                echo  "vizyonda";
                                            }else{
                                                echo "vizyonda değil";
                                            }
                                        ?>
                                    </span>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php echo  "<img class=\"img-fluid\" src=\"img/{$filmler["2"]["resim"]}\">"  ?>                           
                        </div>
                        <div class="col-9">
                            <div class="card-body">                        
                                <h5 class="card-title"><?php echo "<a href=\"{$filmler["2"]["url"]}\">{$filmler["2"]["baslik"]}</a>" ?></h5>
                                <p class="card-text">
                                    <?php
                                        if(strlen($filmler["2"]["aciklama"])> limit){
                                            echo substr($filmler["2"]["aciklama"],0,limit)."...";
                                        }else{
                                            echo $filmler["2"]["aciklama"];
                                        }
                                    ?>
                                </p>
                                <div>
                                <?php
                                        if($filmler["2"]["yorumSayisi"]>0){
                                            echo "<span class=\"badge bg-primary\">{$filmler["2"]["yorumSayisi"]} yorum</span>";
                                        }
                                    ?>
                                    <span class="badge bg-primary"><?php echo $filmler["2"]["begeniSayisi"] ?> beğeni</span>
                                    <span class="badge bg-warning">
                                        <?php 
                                            if($filmler["2"]["vizyon"]){
                                                echo  "vizyonda";
                                            }else{
                                                echo "vizyonda değil";
                                            }
                                        ?>
                                    </span>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>

            </div>
        
        
        </div>
    
    </div>



</body>
</html>