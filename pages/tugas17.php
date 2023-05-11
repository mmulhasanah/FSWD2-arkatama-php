<?php

//fungsi upsideLeft
function upsideLeft($tinggi_bintang = 5, $simbol = '*')
{
    echo "<p>Triangle Upside Left</p>";
    for ($a = $tinggi_bintang; $a > 0; $a--) {
        for ($b = $tinggi_bintang; $b >= $a; $b--) {
            echo $simbol;
        }
        echo "<br>";
    }
}

//fungsi upsideRight
function upsideRight($tinggi_bintang = 5, $simbol = '*')
{
    echo "Triangle Upside Right<br><br>";
    for ($a = $tinggi_bintang; $a > 0; $a--) {
        for ($i = 1; $i <= $a; $i++) {
            echo " &nbsp";
        }
        for ($a1 = $tinggi_bintang; $a1 >= $a; $a1--) {
            echo $simbol;
        }
        echo "<br>";
    }
}

//fungsi downsideLeft
function downsideLeft($tinggi_bintang = 5, $simbol = '*')
{
    echo "<p>Triangle Downside Left</p>";

    for ($a = 1; $a <= $tinggi_bintang; $a++) {
        for ($c = $tinggi_bintang; $c >= $a; $c -= 1) {
            echo $simbol;
        }
        echo "<br>";
    }
}

//fungsi downsideRight
function downsideRight($tinggi_bintang = 5, $simbol = '*')
{
    echo "<p>Triangle Downside Right</p>";
    for ($a = 1; $a <= $tinggi_bintang; $a++) {
        for ($i = 1; $i <= $a; $i++) {
            echo " &nbsp";
        }
        for ($c = $tinggi_bintang; $c >= $a; $c -= 1) {
            echo $simbol;
        }
        echo "<br>";
    }
}

//fungsi conditionalStatement memilih pattern mana yang akan dipanggil
function printPattern($patternName, $tinggi_bintang = 5, $simbol = '*')
{
    switch ($patternName) {
        case "upsideLeft":
            upsideLeft($tinggi_bintang, $simbol);
            break;
        case "upsideRight":
            upsideRight($tinggi_bintang, $simbol);
            break;
        case "downsideLeft":
            downsideLeft($tinggi_bintang, $simbol);
            break;
        case "downsideRight":
            downsideRight($tinggi_bintang, $simbol);
            break;
        default:
            echo "Salah memasukkan nama pattern";
    }
}

printPattern("upsideLeft", 6, '$');
echo "<br>";
printPattern("upsideRight", 9, '#');
echo "<br>";
printPattern("downsideLeft", 10, '@');
echo "<br>";
printPattern("downsideRight", 6,);
echo "<br>";

// memanggil fungsi upsideLeft, upsideRight, downsideLeft, downsideRight
/* 
printPattern("upsideLeft");
echo "<br>";
printPattern("upsideRight");
echo "<br>";
printPattern("downsideLeft");
echo "<br>";
printPattern("downsideRight");
*/

