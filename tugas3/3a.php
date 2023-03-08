<?php 
    function LuasLingkaran($r) {
        $luas = 3.14 *$r *$r;
        return $luas;
    }

    function KelilingLingkaran($r) {
        $keliling = 2 * 3.14 *$r;
        return $keliling;
    }

    $luas = 10;
    $keliling = 20;

    $luas_lingkaran = LuasLingkaran($luas);
    $keliling_lingkaran = KelilingLingkaran ($keliling);

    echo "<b>Menghitung Luas Lingkaran </b><br><br>";
    echo "Jari-jari = " . $luas . " cm <br>";
    echo "Luas Lingkaran = " . $luas_lingkaran . " cm².";

    echo "<hr>";

    echo "<b>Menghitung Keliling Lingkaran</b><br><br>";
    echo "jari-jari = " . $keliling . " cm.<br>";
    echo "Keliling lingkaran = " . $keliling_lingkaran . " cm.";
?>