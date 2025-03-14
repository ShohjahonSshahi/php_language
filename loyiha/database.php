<?php
try {
    $dsn = "mysql:host=127.0.0.1;port=3306;dbname=php-blog;charset=utf8";
    $username = "root";
    $password = "02013";
    
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

} catch (PDOException $e) {
    echo "Ulanish xatosi: " . $e->getMessage();
}

?>
