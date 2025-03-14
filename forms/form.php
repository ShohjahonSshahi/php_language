<?php

// $_GET
// $_POst

// var_dump($_POST['name']);

$name = $_POST['name'];
$sur_name = $_POST['sur_name']
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>Sizning Ismingiz: <?=$name ?> </div>
    <div>Sizning Familiyangiz: <?=$sur_name?> </div>
</body>
</html>