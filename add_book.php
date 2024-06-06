<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $conn->real_escape_string($_POST['title']);
    $author = $conn->real_escape_string($_POST['author']);
    $description = $conn->real_escape_string($_POST['description']);
    $otomat = $conn->real_escape_string($_POST['otomat']);

    $sql = "INSERT INTO books (title, author, description, otomat) VALUES ('$title', '$author', '$description', '$otomat')";

    if ($conn->query($sql) === TRUE) {
        echo "Yeni kitap başarılıyla eklendi: $title";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
