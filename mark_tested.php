<?php
include 'db.php';

$id = $_GET['id'];
$sql = "UPDATE products SET status='tested' WHERE id=$id";
$conn->query($sql);

header("Location: index.php");
?>
