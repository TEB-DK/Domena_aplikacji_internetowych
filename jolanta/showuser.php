<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $conn = mysqli_connect("localhost", "root", "", "projekcik2");

    $user_id = $_GET['user_id'];

    $sql = "SELECT * FROM users WHERE id = $user_id";

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){

        $imie = $row['imie'];
        $wiek = $row['wiek'];
        $id = $row['id'];
        
        $zgoda = $row['zgoda'] ? "tak" : "nie";
        
        echo "
        <div>
            <h3>Imie użytkownika: $imie <sup>ID: $id</sup></h3>
            <p>Wiek użytkownika: $wiek</p>
            <label for='zgoda'>
                Czy użytkownik wyraził zgodę:  
                <input type='text' id='zgoda' disabled value=$zgoda>
            </label>
        </div>
        ";
    }
?>

</body>
</html>



