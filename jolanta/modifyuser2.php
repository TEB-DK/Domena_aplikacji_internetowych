<?php

$conn = mysqli_connect("localhost", "root", "", "projekcik2");

$user_id = $_POST['user_id'];
$wiek = $_POST['wiek'];

$sql = "UPDATE users SET wiek = $wiek WHERE id = $user_id";

mysqli_query($conn, $sql);

header("Location: index.php");