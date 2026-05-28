<?php
if($_SERVER['REQUEST_METHOD'] == "GET"){
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['first_name'];
            $last_name = $row['last_name'];
            $id = $row['id'];
            $index = $row['student_index'];
            echo "<fieldset>
                <legend>$name</legend>
                <sub>ID: $id / Student index: $index</sub>
                <p>Last name: $last_name</p>
            </fieldset>
            ";
        }
    }else{
        echo "<fieldset>
                <legend>I am so sorry</legend>
                <p>User not found :(</p>
            </fieldset>
            ";
    }
}
?>