<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 24-9-2019
 * Time: 13:37
 */

session_start();
if(isset($_GET['type'])){
    if($_GET['type'] == "verstuur"){
        $value = $_GET['item'];
        $sessVal = $_GET['item'];
        $_SESSION[$sessVal] = $value;
    }else if($_GET['type'] == "delete"){
        unset($_SESSION[$_GET['item']]);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Opdracht5</title>
</head>
<body>
<form method="get">
    <input type="text" name="item" required>
    <input type="submit" name="type" value="verstuur">
</form>
<ul>
    <?php
    foreach($_SESSION as $ses => $boodschap){
        echo "<a href='?item=".$ses."&type=delete'><li>".$boodschap."</li></a>";
    }
    ?>
</ul>
</body>
</html>