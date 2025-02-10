<?php
include 'db.php';

$id = $_GET['id'];
$sql = "UPDATE products SET status='untested' WHERE id=$id";
$conn->query($sql);

header("Location: index.php");
?>
