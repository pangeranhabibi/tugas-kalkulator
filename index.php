<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form method="POST">
 angka pertama <input type="text" name="a" size="3"> &nbsp;
 <select name="operasi">
<option value="tambah">+</option>
<option value="kurang">-</option>
<option value="kali">x</option>
<option value="bagi">/</option>
<option value="modulus">%</option>
</select> &nbsp;
  angka kedua <input type="text" name="b" size="3"> &nbsp;
 <label>=</label> &nbsp;
 <input type="submit" value ="hitung" name="hitung">
 <form>
</body>
</html>


<?php
    include "fungsi.php";
    $kalku = new Kalkulator();

if($_POST){
    $a = $_POST['a'];
    $b = $_POST['b'];
    if ($a !== "" && $b !== ""){
    if ($_POST['operasi'] == "tambah" ) {
        echo "hasil dari $a + $b adalah = ". $kalku->setTambah($a,$b);
    } elseif ($_POST['operasi'] == "kurang" ) {
        echo "hasil dari $a - $b adalah = ". $kalku->setKurang($a,$b);
    } elseif ($_POST['operasi'] == "kali" ) {
        echo "hasil dari $a * $b adalah = ". $kalku->setKali($a,$b);
    } elseif ($_POST['operasi'] == "bagi" ) {
        echo "hasil dari $a / $b adalah = ". $kalku->setBagi($a,$b);
    } elseif ($_POST['operasi'] == "modulus" ) {
        echo "hasil dari $a % $b adalah = ". $kalku->setModulus($a,$b);
    } 
}else {
    echo "<br> harap masukan angka!";
}
}