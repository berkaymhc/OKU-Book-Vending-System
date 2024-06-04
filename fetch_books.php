<?php
include 'db_connect.php';

$otomat = $_GET['otomat'];

$sql = "SELECT * FROM books WHERE otomat='$otomat'";
$result = $conn->query($sql);

$books = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
}

echo json_encode($books);

$conn->close();
?>
