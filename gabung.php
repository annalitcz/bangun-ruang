<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "./rumus.php";
    $p = 9;
    $l = 5;
    $t = 6;
    $s = 8;
    $r = 4.5;

    $vbalok = vBalok($p, $l, $t);
    $lpbalok = lpBalok($p, $l, $t);

    $vkubus = vKubus($s);
    $lpkubus = lpKubus($s);

    $vbola = vBola($r);
    $lpbola = lpBola($r);

    $vtabung = vTabung($r, $t);
    $lptabung = lpTabung($r, $t);

    echo "<h1>balok</h1><br>";
    echo "<span>Luas Permukaan Balok: " . round($lpbalok,2) . "cm<sup>2</sup></span><br>";
    echo "<span>Volume Balok: " . round($vbalok) . "cm<sup>3</sup></span><br><br>";

    echo "<h1>kubus</h1><br>";
    echo "<span>Luas Permukaan Balok: " . round($lpkubus,2) . "cm<sup>2</sup></span><br>";
    echo "<span>Volume Balok: " . round($vkubus,2) . "cm<sup>3</sup></span><br><br>";

    echo "<h1>Bola</h1><br>";
    echo "<span>Luas Permukaan Balok: " . round($lpbola,2) . "cm<sup>2</sup></span><br>";
    echo "<span>Volume Balok: " . round($vbola,2) . "cm<sup>3</sup></span><br><br>";

    echo "<h1>Tabung</h1><br>";
    echo "<span>Luas Permukaan Balok: " . round($lptabung,2) . "cm<sup>2</sup></span><br>";
    echo "<span>Volume Balok: " . round($vtabung,2) . "cm<sup>3</sup></span><br><br>";
    ?>

    <?php
    function gablp($lpbalok, $lpkubus, $lpbola, $lptabung){
        return ($lpbalok * 2) + $lpkubus + $lpbola + $lptabung;
    }
    echo "<h1>Gabungan Luas Permukaan Semua Bangun Ruang</h1><br>";
    echo  round(gablp($lpbalok, $lpkubus, $lpbola, $lptabung),2). "cm<sup>3</sup></span><br><br>";

    function gabv($vbalok, $vkubus, $vbola, $vtabung){
        return ($vbalok * 2) + $vkubus + $vbola + $vtabung;
    }
    echo "<h1>Gabungan volume Semua Bangun Ruang</h1><br>";
    echo  round(gabv($vbalok, $vkubus, $vbola, $vtabung),2). "cm<sup>3</sup></span><br>";

    function gabvlp($vbalok, $vkubus, $vbola, $vtabung, $lpbalok, $lpkubus, $lpbola, $lptabung){
        return ($vbalok * 2) + $vkubus + $vbola + $vtabung + ($lpbalok *2)+ $lpkubus + $lpbola+ $lptabung;
    }
    echo "<h1>Gabungan luas permukaan & volume Semua Bangun Ruang</h1><br>";
    echo  round(gabvlp($vbalok, $vkubus, $vbola, $vtabung, $lpbalok, $lpkubus, $lpbola, $lptabung),2);
    ?>
    
    
</body>
</html>