<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice 🪄</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: gainsboro;
            font-family: Arial, Helvetica, sans-serif;
            letter-spacing: 0.05rem;
            font-size: 13px;
            height: 100vh;
        }

        header {
            height: 10%;
            width: 100%;
            text-align: justify;
            padding: 0.5rem 0 0 1rem;
        }

        main {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-wrap: wrap;
            padding: 1rem;
            gap: 1rem;
            min-height: 85%;
            max-width: 100%;
        }

        form {
            background-color: lightgray;
            display: flex;
            max-height: min-content;
            min-width: 75%;
            border: 2px dashed black;
            flex-direction: column;
            gap: 0.3rem;
            padding: 1rem;
        }

        form input:not(input[type='checkbox']), select {
            padding: 0.3rem;
            width: 100%;
        }

        
        textarea{
            padding: 0.35rem;
            font-family: Arial, Helvetica, sans-serif;
        }

        span {
            display: flex;
            justify-content: space-evenly;
            width: 100%;
        }

        button {
            width: 100%;
            padding: 0.5rem;
        }
    </style>
    <script defer>
        document.addEventListener("DOMContentLoaded", () => {
            if(localStorage.getItem('database') !== 'ok'){
                let res
                while(!(res = prompt("Before starting, please load `database.sql` into your phpmyadmin. \nType understood to close this window.") === 'understood')){
                    localStorage.setItem('database', 'ok');
                }
            }
        })
    </script>
</head>

<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "php_practice");
    ?>
    <header>
        <h2>PHP Practice 🐘</h2>
        <p>Page is dedicated to learn sending / receiving data between pages in PHP.</p>
        <p>Additionally pages will include exercises with MySQLi queries.</p>
        <p><a href='https://github.com/TEB-DK/Domena_aplikacji_internetowych/blob/J%C4%99zyk-PHP/2.%20Obs%C5%82uga%20MySQLi.md'>Feel free to use this repository.</a></p>
    </header>
    <hr>
    <main>
        <!-- p1 -->
        <form>
            <h3>p1. Send user data form 🙂</h3>
            <sub>Redirect form into <mark>exercise/p1.php</mark>, with method <mark>POST</mark> and display variables from <mark>$_POST[]</mark>.</sub>
            <sub title="Check if `name` attribute isn't missing in inputs.">⚠️ Is missing something?</sub>
            <input type="text" name="name" id="name" placeholder="Your name">
            <input type="text" name="surname" id="surname" placeholder="Your surname">
            <label for="terms">
                <input type="checkbox" id="terms">
                Do you agree on <a href="terms.php">terms</a>?
            </label>
            <span>
                <button>Send</button>
                <button type="reset">Reset</button>
            </span>
        </form>
        <!-- p2 -->
        <form>
            <h3>p2. Send location of user 💀</h3>
            <sub>Redirect form into <mark>exercise/p2.php</mark>, with correct method.</sub>
            <sub>Display <mark>on your own</mark> data that you got from request.</sub>
            <input type="text" name="name" id="name" placeholder="Your name">
            <select>
                <option>Poland</option>
                <option>Germany</option>
                <option>Russia</option>
                <option>Hungary</option>
                <option>Lativa</option>
            </select>
            <span>
                <button>Send</button>
                <button type="reset">Reset</button>
            </span>
        </form>
        <!-- p3 -->
        <form>
            <h3>p3. Choose user gender form 👪</h3>
            <sub>Redirect form into <mark>exercise/p3.php</mark>, with correct method.</sub>
            <sub>ℹ️ Remember to include value into inputs</sub>
            <span>
                <label for="">
                    Men <input type="radio">
                </label>
                <label for="">
                    Women <input type="radio">
                </label>
                <label for="">
                    Other <input type="radio">
                </label>
                <label for="">
                    Rather not say <input type="radio">
                </label>
            </span>
            <span>
                <button>Send</button>
            </span>
        </form>
        <!-- p4 -->
        <form>
            <h3>p4. Validate user form 🧮</h3>
            <sub>Validate: name (min 3 chars), surname (required), checkbox must be checked.</sub>
            <sub>Display errors or success message on <mark>exercise/p4.php</mark>.</sub>
            <sub>ℹ️ Use functions: <mark title="isset($_POST['NAME OF INPUT HERE']) - returns true/false depends of content of input">isset()</mark>, <mark title="empty($_POST['NAME OF INPUT HERE']) - returns true/false depends on emptiness of input">empty()</mark>, <mark title="strlen($_POST['NAME OF INPUT HERE']) - returns number of letters.">strlen()</mark></sub>
            <input type="text" placeholder="Name here">
            <input type="text" placeholder="Surname here">
            <label for="terms">
                <input type="checkbox" id="terms">
                Do you agree on <a href="terms.php">terms</a>?
            </label>
            <span>
                <button>Send</button>
                <button type="reset">Reset</button>
            </span>
        </form>
        <!-- p5 -->
        <form>
            <h3>p5. Create user in database ⚙️</h3>
            <sub>Redirect form into <mark>exercise/p5.php</mark>, with method correct method.</sub>
            <sub>Send data to table <mark>users</mark> - <a href='./database.sql'>database is ready to download here</a></sub>

            <input type="text" name="first_name" id="first_name" placeholder="Your name">
            <input type="text" name="last_name" id="last_name" placeholder="Your surname">
            <input type="email" name="email" id="email" placeholder="E-mail here">
            <input type="text" name="student_index" id="student_index" placeholder="Student index">
            <span>
                <button>Send</button>
            </span>
        </form>
        <!-- p6 -->
        <form>
            <h3>p6. Add excercise to database ➕</h3>
            <sub>Redirect form into <mark>exercise/p6.php</mark>, with method correct method.</sub>
            <label for="user_id">
                User:
                <select name="user_id" id="user_id">
                    <?php
                        $sql = "SELECT id, first_name FROM users";
    
                        $result = mysqli_query($conn, $sql);
    
                        while($row = mysqli_fetch_assoc($result)){
                            $user_id = $row['id'];
                            $first_name = $row['first_name'];
    
                            echo "<option value='$user_id'>$first_name</option>";
                        }
                    ?>
                </select>
            </label>
            <input type="text" name="title" id="title" placeholder="Task title">
            <input type="text" name="subject" id="subject" placeholder="Subject of task">
            <textarea name="description" id="description" placeholder="Task description"></textarea>
            <label for="due_date">
                Due date:
                <input type="date" name="due_date" id="due_date">
            </label>
            <label for="stauts">
                Status:
                <select name="status" id="status">
                    <option value="unfinished">unfinished</option>
                    <option value="in_progress">in progress</option>
                    <option value="finished">finished</option>
                </select>
            </label>
            <span>
                <button>Add</button>
            </span>
        </form>
        <!-- p7 -->
        <form>
            <h3>p7. Display user and their exercises from database 😶‍🌫️</h3>
            <sub>Redirect form into <mark>exercise/p7.php</mark> and display, with method <mark>GET</mark>.</sub>
            <sub title="Only thing you will need is id from table user and inner join to table exercise">Create correct form for this exercise.</sub>
            <span>
                <button>Show</button>
            </span>
        </form>
        <!-- p8 -->
        <form>
            <h3>p8. Delete user with their exercise ⚠️</h3>
            <sub>Redirect form into <mark>exercise/p8.php</mark>, with method <mark>POST</mark>.</sub>
            <sub title="Only thing you will need is id from table user and remember to remove first exercise">Create correct form for this exercise.</sub>
            <span>
                <button>Delete</button>
            </span>
        </form>

    </main>
</body>

</html>
