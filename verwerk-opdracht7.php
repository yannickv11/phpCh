<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 24-9-2019
 * Time: 14:22
 */
$product = $_POST['product'];

$dbc = mysqli_connect('localhost', 'yannick' ,'1234', 'phpCh', '8889') or die('error conecting');
// opdracht (query) schrijven
$query = "INSERT INTO product VALUES (0,'$product')";
//query uitvoeren
$result = mysqli_query($dbc,$query) or die('error query.');
// verbinding verbeken
mysqli_close($dbc);

if ($result) {
    echo 'de volgende gegevens zijn toegevoegd aan de database<br>';
    echo $product. '<br>';
} else {
    echo 'sorry, er is iets misgegaan probeer het opnieuw.';
}
