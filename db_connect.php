<?php
$servername = "localhost";
$username = "*****";  // Oluşturduğunuz kullanıcı adı
$password = "********";    // Oluşturduğunuz kullanıcı şifresi
$dbname = "*****";    // Oluşturduğunuz veritabanı adı

// Bağlantı oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
