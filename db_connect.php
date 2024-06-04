<?php
$servername = "localhost";
$username = "berkaymhc";  // Oluşturduğunuz kullanıcı adı
$password = "QX5.u2rWm]HY*Kno";    // Oluşturduğunuz kullanıcı şifresi
$dbname = "oku_db";    // Oluşturduğunuz veritabanı adı

// Bağlantı oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
