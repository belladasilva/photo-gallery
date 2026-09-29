<?php
$servername = "localhost";
$username = "photo_gallery_app";
$password = getenv("PHOTO_GALLERY_DB_PASSWORD");
$myDB = "photo_gallery";
$port = 3306;

if ($password === false || $password === "") {
    die("Missing PHOTO_GALLERY_DB_PASSWORD environment variable.");
}

try {
    $pdo = new PDO("mysql:host=$servername;port=$port;dbname=$myDB", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
