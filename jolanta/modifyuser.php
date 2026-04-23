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

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edytuj'])) {
        $wiek = $_POST['wiek'];
        $id = $_POST['id'];

        $sql2 = "UPDATE users SET wiek = $wiek WHERE id = $id";
        mysqli_query($conn, $sql2);
        header("Location: index.php");
        exit;
    }

    $user_id = $_POST['user_id'];

    $sql = "SELECT * FROM users WHERE id = $user_id";

    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $imie = $row['imie'];
        $wiek = $row['wiek'];
        $id = $row['id'];
        echo "
            <form action='modifyuser.php' method='POST'>
                <fieldset>
                    <legend>$imie</legend>
                    <label>
                        Podaj wartość wieku do zmiany: 
                        <input type='number' name='wiek' id='wiek' value=$wiek placeholder='Podaj wiek do zmiany'>
                        <input type='hidden' name='id' id='id' value=$id>
                    </label>
                </fieldset> 
                <button name='edytuj'>Edytuj</button> 
            </form>
        ";
    }



    ?>

</body>

</html>