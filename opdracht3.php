<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 24-9-2019
 * Time: 09:31
 */

$boodschappen = ['aardappelen', 'aardbeien', '3 Pakken melk', 'yoghurt'];

echo "<ul>";
foreach ($boodschappen as $boodschap) {
    echo "<li>".$boodschap."</li>";
    echo "<img src='".$boodschap.".jpg'>";
}
echo "</ul>";
?>

<html>
<style>
    img {
        height: 300px;
        width: 300px;
    }
</style>
</html>
