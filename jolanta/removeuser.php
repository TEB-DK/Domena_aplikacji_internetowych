<?php
$polaczenie = mysqli_connect("localhost", "root", "", "projekcik2");

$id = $_POST['id'];
$sql = "DELETE FROM users WHERE id = $id";

mysqli_query($polaczenie, $sql);
header("Location: index.php");