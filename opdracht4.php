<?php
session_start();
if(isset($_GET['type'])){
    if($_GET['type'] = "verstuur"){
        $value = $_GET['item'];
        $sessVal = $_GET['item'];
        $_SESSION[$sessVal] = $value;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    <input type="text" name="item">
    <input type="submit" name="type" value="verstuur">
</form>
<ul>
    <?php
    foreach($_SESSION as $boodschap){
        echo "<li>".$boodschap."</li>";
    }
    ?>
</ul>
</body>
</html>