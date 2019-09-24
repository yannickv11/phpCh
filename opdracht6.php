<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 24-9-2019
 * Time: 14:01
 */
    $dbc = mysqli_connect('localhost','yannick','1234','phpCh','8889') or die('error connecting');

    $query = "SELECT * FROM product";

    $result = mysqli_query ($dbc , $query) or die('error querying');

    while ($row = mysqli_fetch_array($result)) {
        echo $row['idproduct']. '<br>' . $row['omschrijving'].'<br>'.'<br>';
    }
    ?>