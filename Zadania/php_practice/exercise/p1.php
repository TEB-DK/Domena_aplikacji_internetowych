<?php
// Your code here

$name = $_POST['name'];
$surname = $_POST['surname'];
$terms = $_POST['terms'] ?? 'off';

if($terms == "on"){
    $terms = "Wyraził";
}else{
    $terms = "Nie";
}

echo "
    <table>
        <tr>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Czy wyraził zgodę?</th>
        </tr>
        <tr>
            <td>$name</td>
            <td>$surname</td>
            <td>$terms</td>
        </tr>
    </table>
";





