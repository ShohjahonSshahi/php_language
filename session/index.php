<?php
/* //Cookie
setcookie('test', 'bu uning qiymati');
 */
session_start();

session_unset();

session_destroy();
 //Sessiya
//$_SECTION

$_SESSION['usernname'] = 'Shohjahon';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>Foydalanuvchi<?= $_SESSION['usernmame'] ?></div>
</body>
</html>