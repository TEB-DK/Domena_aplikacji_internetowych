<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Formularz PHP</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6fb;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            height: 100vh;
        }
        body > hr{
            width: 80%;
            border-width: 2px;
        }
        main{
            display: flex;
            width: 100%;
            justify-content: space-around;
        }
        .container {
            padding: 30px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            max-height: 450px;
            min-height: 450px;
            overflow-y: auto;
        }

        h2 {
            text-align: center;
            color: #4F5B93;
            /* PHP blue */
            margin-bottom: 20px;
        }

        h1 {
            text-align: center;
            color: #3f4b83;
        }
        h1 button{
            margin-left: 0.3rem;
        }

        ol {
            padding: 0 1rem 1rem 1rem;
        }
        ol li{
            background-color: #4f5b9310;
            border-radius: 0.3rem;
            /* list-style-type: '✅'; */
        }
        ol > li > h4,p{
            padding-left: 1rem;
            padding-top: 0.5rem;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 25px;
        }

        label {
            font-size: 14px;
            color: #333;
        }

        input,
        select {
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #4F5B93;
        }

        .checkbox {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        button {
            background: #4F5B93;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            transition: 0.2s;
        }

        button:hover {
            background: #3c4674;
        }
    </style>
</head>

<body>
    <header>
        <h1><sub>PROJEKT</sub><sup><button>J<s>O</s>LANTA</button></sup></h1>
    </header>
    <hr>
    <main>
        <div class="container">
            <h3>Pokaż konkretnego użytkownika</h3>
            <hr>
            <form action="showuser.php" method="GET">
                <input type="number" name="user_id" id="user_id" placeholder="Podaj ID użytkownika">
                <button>Pokaż użytkownika</button>
            </form>
            <h3>Modyfikuj konkretnego użytkownika</h3>
            <hr>
            <form action="modifyuser.php">
                <input type="number" name="user_id" id="user_id" placeholder="Podaj ID użytkownika">
                <button>Modyfikuj użytkownika</button>
            </form>
            <h3>Usunięcie konkretnego użytkownika</h3>
            <hr>
            <form action="removeuser2.php" method="POST">
                <input type="number" name="user_id" id="user_id" placeholder="Podaj ID użytkownika">
                <button>Usuń użytkownika</button>
            </form>
        </div>
        <div class="container">
            <h3>Lista użytkowników</h3>
            <hr>
            <ol>
                <?php
                $polaczenie = mysqli_connect("localhost", "root", "", "projekcik2");

                $sql = "SELECT * FROM users";

                $wynik = mysqli_query($polaczenie, $sql);

                while ($wiersz = mysqli_fetch_assoc($wynik)) {
                    $id = $wiersz['id'];
                    $imie = $wiersz['imie'];
                    $wiek = $wiersz['wiek'];
                    $zgoda = $wiersz['zgoda'];

                    echo "
            <li>
                <h4>Imię: $imie <sup>[ ID: $id ]</sup></h4>
                <p>Wiek: $wiek</p>
                <form action='removeuser.php' method='POST'>
                    <input type='hidden' value=$id name='id'>
                    <button>Usuń</button>
                </form>
            </li>";
                }
                ?>
            </ol>
        </div>

        <div class="container">
            <h3>Dodaj użytkownika do bazy</h3>
            <hr>
            <form action="adduser.php" method="POST">
                <label for="imie">
                    <input type="text" name="imie" id="imie" placeholder="Podaj imię">
                </label>
                <label for="wiek">
                    <input type="number" name="wiek" id="wiek" placeholder="Podaj wiek">
                </label>
                <label for="zgoda">
                    Wyrażasz zgodę?
                    <input type="checkbox" name="zgoda" id="zgoda">
                </label>
                <button>Dodaj użytkownika</button>
            </form>
        </div>
    </main>
</body>

</html>