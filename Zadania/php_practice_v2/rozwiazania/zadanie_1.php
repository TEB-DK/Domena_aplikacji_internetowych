<?php
// Pobieranie danych z przesłanego formularza.
$imie = $_POST['imie'];
$email = $_POST['email'];
$temat = $_POST['temat'];
$wiadomosc = $_POST['wiadomosc'];

echo "
    <fieldset>
        <h3>Imię: $imie</h3>
        <p>Email: $email</p>
        <hr>
        <p>Temat: <strong>$temat</strong></p>
        <textarea>$wiadomosc</textarea>
        </fieldset>
    ";

echo "<a href='../index.php'>Powróć na stronę główną</a>"

?>