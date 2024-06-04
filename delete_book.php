<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $otomat = $_POST['delete-otomat'];
    $title = $_POST['delete-title'];

    $sql = "DELETE FROM books WHERE otomat='$otomat' AND title='$title'";

    if ($conn->query($sql) === TRUE) {
        echo "Kitap başarılıyla silindi: $title";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
