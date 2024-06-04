<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $otomat = $_POST['otomat'];

    $sql = "INSERT INTO books (title, author, description, otomat) VALUES ('$title', '$author', '$description', '$otomat')";

    if ($conn->query($sql) === TRUE) {
        echo "Yeni kitap başarılıyla eklendi: $title";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
