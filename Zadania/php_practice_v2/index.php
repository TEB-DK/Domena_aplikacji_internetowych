<!doctype html>
<html lang="pl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ćwiczenia PHP — formularze i MySQLi</title>
  <style>
    :root {
      --bg: #f6f7fb;
      --card: #ffffff;
      --text: #1f2937;
      --muted: #6b7280;
      --line: #dbe2ea;
      --accent: #474A8A;
      --accent-soft: #B0B3D6;
      --good: #1a968c;
      --good-soft: #e6fffb;
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background: var(--bg);
      color: var(--text);
      line-height: 1.55;
      font-size: 14px;
    }

    .container {
      max-width: 980px;
      margin: 0 auto;
      padding: 24px;
    }

    header {
      display: flex;
      flex-direction: column;
      align-items: center;
      background: linear-gradient(135deg, #ffffff, #eef4ff);
      border: 1px solid var(--line);
      border-radius: 18px;
      padding: 28px;
      margin-bottom: 20px;
      box-shadow: 0 8px 24px rgba(31, 41, 55, 0.05);
    }

    h1,
    h2,
    h3 {
      margin: 0 0 10px;
      line-height: 1.2;
    }

    h1 {
      font-size: 2rem;
    }

    h2 {
      font-size: 1.35rem;
      margin-top: 0;
    }

    h3 {
      font-size: 1.1rem;
    }

    p {
      margin: 6px 0 12px;
      color: var(--text);
    }

    .muted {
      color: var(--muted);
    }

    .grid {
      display: grid;
      gap: 16px;
    }

    .card {
      display: flex;
      flex-direction: column;
      justify-content: center;
      background: var(--card);
      border: 1px solid var(--line);
      margin: 1rem 0;
      border-radius: 16px;
      padding: 22px;
      box-shadow: 0 6px 18px rgba(31, 41, 55, 0.04);
    }

    .badge {
      display: inline-block;
      padding: 6px 10px;
      border-radius: 999px;
      font-size: 0.85rem;
      font-weight: 700;
      margin: 0.3rem 0 1.5rem 0;
    }

    .badge.example {
      background: var(--good-soft);
      color: var(--good);
    }

    .badge.task {
      background: var(--accent-soft);
      color: var(--accent);

    }

    .badge.warning {
      background-color: var(--good-soft);
      color: var(--accent);
    }

    .code {
      background: #0f172a;
      color: #e2e8f0;
      border-radius: 12px;
      padding: 16px;
      overflow-x: auto;
      /* margin: 14px 0; */
      font-size: 0.95rem;
    }

    pre {
      margin: 0;
      white-space: pre-wrap;
      word-break: break-word;
    }

    form {
      display: grid;
      gap: 12px;
      margin-top: 14px;
      max-width: 100%;
    }

    label {
      font-weight: 700;
    }

    input,
    textarea,
    select,
    button {
      font: inherit;
      border-radius: 10px;
      border: 1px solid var(--line);
      padding: 12px 14px;
      width: 100%;
      background: #fff;
    }

    textarea {
      min-height: 110px;
      resize: vertical;
    }

    button {
      background: var(--accent);
      color: #fff;
      border: none;
      cursor: pointer;
      font-weight: 700;
      width: fit-content;
      padding-inline: 18px;
    }

    button:hover {
      filter: brightness(0.95);
    }

    details {
      background: #f8fafc;
      border: 1px solid var(--line);
      border-radius: 12px;
      padding: 12px 14px;
      margin-top: 12px;
    }

    details summary {
      cursor: pointer;
      font-weight: 700;
    }

    .two-col {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 16px;
    }

    .wrap {
      display: flex;
      gap: 10px;
      margin: 1rem 0;
    }

    .center {
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .fullwidth {
      width: 100%;
    }

    .wrap>form {
      background-color: var(--accent-soft);
      margin-top: 0;
      padding: 1rem;
      border-radius: 0.5rem;
    }

    fieldset {
      border-radius: 8px;

    }

    ul {
      margin: 10px 0 0 18px;
      padding: 0;
      list-style-position: inside;
    }

    ul.wrap {
      list-style-type: '';
      text-align: center;
    }

    a {
      color: var(--good)
    }

    .footer-note {
      margin-top: 18px;
      font-size: 0.95rem;
      color: var(--muted);
    }

    mark {
      background-color: var(--accent-soft);
      border-radius: 2px;
      padding: 3px;
    }

    @media (max-width: 760px) {
      .container {
        padding: 16px;
      }

      header,
      .card {
        padding: 18px;
      }

      h1 {
        font-size: 1.6rem;
      }

      .two-col {
        grid-template-columns: 1fr;
      }
    }
  </style>

  <script defer>
    document.addEventListener("DOMContentLoaded", () => {
      if (localStorage.getItem('test') !== 'ok') {
        let res
        while (!['zapałkę', 'zapalke', 'zapałke', 'zapalkę', 'zapalniczkę', 'zapalniczke', '6 dzień tygodnia'].includes((res = prompt("Przed rozpoczęciem potrzebne jest sprawdzenie funkcjonalności logiki rozwiązującego, oto pytanie: \nW pokoju jest świeca i lampa naftowa. Co zapalisz najpierw?"))?.toLowerCase())) {}
        localStorage.setItem('test', 'ok');
      }
    })
  </script>

</head>

<body>
  <div class="container">
    <header>
      <h1>Ćwiczenia PHP: formularze, MySQLi i CRUD 🐘</h1>
      <p class="muted">Strona do nauki tworzenia formularzy, wysyłania danych oraz późniejszej pracy z bazą danych w PHP.</p>
      <div class="two-col">
        <form action="https://github.com/TEB-DK/Domena_aplikacji_internetowych/blob/J%C4%99zyk-PHP/2.%20Obs%C5%82uga%20MySQLi.md">
          <button>Przejdź na repozytorium PHP 🐘</button>
        </form>
        <form action="https://github.com/TEB-DK/Vademecum_baz_danych/tree/1.Zapytania-SQL-(DML)">
          <button>Przejdź na repozytorium SQL 📝</button>
        </form>
      </div>
    </header>

    <main class="grid">
      <section class="card">
        <span class="badge example"> ℹ️ Przykład poprawnego rozwiązania</span>
        <h2>1. Formularz kontaktowy</h2>
        <p>Ten przykład pokazuje prosty formularz z polami tekstowymi, listą wyboru i przyciskiem wysyłania.</p>
        <div class="wrap">

          <div class="code">
            <pre>&lt;form action="przyklad.php" method="post"&gt;
    &lt;label for="imie"&gt;Imię&lt;/label&gt;
    &lt;input type="text" id="imie" name="imie" required&gt;
  
    &lt;label for="email"&gt;E-mail&lt;/label&gt;
    &lt;input type="email" id="email" name="email" required&gt;
  
    &lt;label for="temat"&gt;Temat&lt;/label&gt;
    &lt;select id="temat" name="temat"&gt;
      &lt;option value="pytanie"&gt;Pytanie&lt;/option&gt;
      &lt;option value="uwaga"&gt;Uwaga&lt;/option&gt;
      &lt;option value="inny"&gt;Inny&lt;/option&gt;
    &lt;/select&gt;
  
    &lt;label for="wiadomosc"&gt;Wiadomość&lt;/label&gt;
    &lt;textarea id="wiadomosc" name="wiadomosc" required&gt;&lt;/textarea&gt;
  
    &lt;button&gt;Wyślij przykład&lt;/button&gt;
&lt;/form&gt;</pre>
          </div>

          <form action="./rozwiazania/zadanie_1.php" method="post">
            <div>
              <label for="demo-imie">Imię</label>
              <input type="text" id="demo-imie" name="imie" value="Jan" />
            </div>
            <div>
              <label for="demo-email">E-mail</label>
              <input type="email" id="demo-email" name="email" value="jan@example.com" />
            </div>
            <div>
              <label for="demo-temat">Temat</label>
              <select id="demo-temat" name="temat">
                <option value="pytanie">Pytanie</option>
                <option value="uwaga">Uwaga</option>
                <option value="inny">Inny</option>
              </select>
            </div>
            <div>
              <label for="demo-wiadomosc">Wiadomość</label>
              <textarea id="demo-wiadomosc" name="wiadomosc">To jest przykładowa wiadomość.</textarea>
            </div>
            <button>Wyślij przykład</button>
          </form>
        </div>
      </section>

      <section class="card">
        <span class="badge task"> ➕ Zadanie do samodzielnego wykonania</span>
        <h2>2. Formularz rejestracyjny</h2>
        <p>Utwórz formularz, który zbierze dane użytkownika i przekaże je metodą <code><mark>POST</mark></code> do osobnego pliku PHP.</p>
        <ul>
          <li>Imię i nazwisko</li>
          <li>Login</li>
          <li>Hasło</li>
          <li>Wiek</li>
          <li>Kraj pochodzenia</li>
        </ul>

        <details>
          <summary>Podpowiedź</summary>
          <p>Użyj <code><mark>&lt;form method="post" action="rejestracja.php"&gt;</mark></code> oraz dopilnuj, aby każde pole miało poprawny atrybut <code><mark>name</mark></code>. Do hasła wybierz typ <code><mark>password</mark></code>.</p>
        </details>

        <form action="#" method="post">
          <div>
            <label for="zad-imie">Imię i nazwisko</label>
            <input type="text" id="zad-imie" name="imie_nazwisko" placeholder="Uzupełnij pole" />
          </div>
          <div>
            <label for="zad-login">Login</label>
            <input type="text" id="zad-login" name="login" placeholder="Uzupełnij pole" />
          </div>
          <div>
            <label for="zad-haslo">Hasło</label>
            <input type="password" id="zad-haslo" name="haslo" placeholder="Uzupełnij pole" />
          </div>
          <div class="two-col">
            <div>
              <label for="zad-wiek">Wiek</label>
              <input type="number" id="zad-wiek" name="wiek" min="1" placeholder="Uzupełnij pole" />
            </div>
            <div>
              <label for="zad-kraj">Kraj</label>
              <input type="text" id="zad-kraj" name="kraj" placeholder="Uzupełnij pole" />
            </div>
          </div>
          <button>Sprawdź swoje rozwiązanie</button>
        </form>
      </section>

      <section class="card">
        <span class="badge task"> ➕ Zadanie z MySQLi</span>
        <h2>3. Połączenie z bazą danych</h2>
        <p>W kolejnych ćwiczeniach wykorzystasz MySQLi do połączenia z przykładową bazą danych zawierającą 3 tabele.</p>
        <div class="two-col">
          <div>
            <h3>Proponowane tabele</h3>
            <ul>
              <li><strong>uczniowie</strong> — dane uczniów</li>
              <li><strong>klasy</strong> — lista klas</li>
              <li><strong>oceny</strong> — wpisy ocen</li>
            </ul>
          </div>
          <div>
            <h3>Zakres ćwiczeń</h3>
            <ul>
              <li>SELECT i wyświetlanie danych</li>
              <li>INSERT i dodawanie rekordów</li>
              <li>UPDATE i edycja rekordów</li>
              <li>DELETE i usuwanie rekordów</li>
            </ul>
          </div>
        </div>

        <details>
          <summary>Krótka wskazówka</summary>
          <p>Najpierw przygotuj połączenie z bazą w osobnym pliku, a potem dołączaj go tam, gdzie potrzebujesz odczytu lub zapisu danych. Dzięki temu kod będzie prostszy i bardziej czytelny.</p>
          <p>Aby dołączać plik z połączeniem do bazy danych wykorzystaj funkcję <code><mark>include_once()</mark></code>.</p>
        </details>
        <p>Połączenie się z bazą danych będzie odbywało się za pomocą tej linijki kodu.</p>
        <div class="code">
          $conn = mysqli_connect("localhost", "root", "", "php_practice_v2");
        </div>
      </section>

      <section class="card">
        <span class="badge task"> 💟 Dodatkowe ćwiczenie</span>
        <h2>4. Formularz ankiety</h2>
        <p>Przygotuj formularz wykorzystujący różne typy inputów.</p>
        <ul>
          <li>Imię (text)</li>
          <li>Data urodzenia (date)</li>
          <li>Ulubiony kolor (color)</li>
          <li>Poziom zadowolenia 1–10 (range)</li>
          <li>Krótka opinia (textarea)</li>
        </ul>

        <details>
          <summary>Podpowiedź</summary>
          <p>Sprawdź działanie typów <code><mark>date</mark></code>, <code><mark>color</mark></code> oraz <code><mark>range</mark></code>. Każde pole powinno posiadać własny atrybut <code><mark>name</mark></code>.</p>
        </details>

        <form action="#" method="post">
          <label for="ankieta-imie">Imię</label>
          <input type="text" id="ankieta-imie" name="imie" placeholder="Uzupełnij pole" />

          <label for="ankieta-data">Data urodzenia</label>
          <input type="date" id="ankieta-data" name="data_urodzenia" />

          <label for="ankieta-kolor">Ulubiony kolor</label>
          <input type="color" id="ankieta-kolor" name="kolor" />

          <label for="ankieta-range">Poziom zadowolenia</label>
          <input type="range" id="ankieta-range" name="zadowolenie" min="1" max="10" />

          <label for="ankieta-opinia">Opinia</label>
          <textarea id="ankieta-opinia" name="opinia" placeholder="Uzupełnij pole"></textarea>

          <button>Wyślij ankietę</button>
        </form>
      </section>

      <section class="card">
        <span class="badge task"> 💟 Dodatkowe ćwiczenie</span>
        <h2>5. Formularz wyboru kursu</h2>
        <p>Stwórz formularz z polami typu radio, checkbox oraz select.</p>

        <ul>
          <li>Wybór poziomu kursu (radio)</li>
          <li>Wybór zainteresowań (checkbox)</li>
          <li>Miasto zajęć (select)</li>
          <li>Dodatkowe uwagi (textarea)</li>
        </ul>

        <details>
          <summary>Podpowiedź</summary>
          <p>Pola typu <code><mark>radio</mark></code> muszą mieć tę samą nazwę <code><mark>name</mark></code>, a checkboxy najlepiej zapisać jako tablicę np. <code><mark>name="zainteresowania[]"</mark></code>.</p>
        </details>

        <form action="#" method="POST">
          <div class="wrap fullwidth center">
            <fieldset class="wrap center">
              <legend>Poziom kursu</legend>
              <label><input type="radio" name="poziom" /> Podstawowy</label>
              <label><input type="radio" name="poziom" /> Średni</label>
              <label><input type="radio" name="poziom" /> Zaawansowany</label>
            </fieldset>
            <fieldset class="wrap center">
              <legend>Zainteresowania</legend>
              <label><input type="checkbox" name="zainteresowania[]" /> Frontend</label>
              <label><input type="checkbox" name="zainteresowania[]" /> Backend</label>
              <label><input type="checkbox" name="zainteresowania[]" /> Bazy danych</label>
            </fieldset>
          </div>

          <label for="kurs-miasto">Miasto zajęć</label>
          <select id="kurs-miasto" name="miasto">
            <option>Warszawa</option>
            <option>Kraków</option>
            <option>Gdańsk</option>
          </select>

          <label for="kurs-uwagi">Uwagi</label>
          <textarea id="kurs-uwagi" name="uwagi"></textarea>

          <button>Zapisz formularz</button>
        </form>
      </section>

      <section class="card">
        <span class="badge task"> 💟 Dodatkowe ćwiczenie</span>
        <h2>6. Formularz pliku i telefonu</h2>
        <p>Ćwiczenie z mniej używanymi typami pól formularza.</p>

        <ul>
          <li>Numer telefonu (tel)</li>
          <li>Adres strony internetowej (url)</li>
          <li>Dodanie pliku (file)</li>
        </ul>

        <details>
          <summary>Podpowiedź</summary>
          <p>Dla pola pliku pamiętaj o ustawieniu formularza z atrybutem <code><mark>enctype="multipart/form-data"</mark></code>.</p>
        </details>
        <details>
          <summary>Podpowiedź 2.</summary>
          <p>Odbierając plik wykorzystujemy zmienną globalną <code><mark>$_FILES[]</mark></code> możemy traktować to jako odpowiednik <code><mark>$_POST[]</mark></code>.</p>
        </details>
        <details>
          <summary>Podpowiedź 3.</summary>
          <p>Aby przenieść plik do innego miejsca w naszym projekcie wykorzystuje się funkcję <code><mark>move_uploaded_file()</mark></code>, szczegółową dokumentacje można <a href="https://www.php.net/manual/en/function.move-uploaded-file.php">doczytać tutaj</a>.</p>
        </details>

        <form action="#" method="post" enctype="multipart/form-data">
          <label for="tel">Telefon</label>
          <input type="tel" id="tel" name="telefon" placeholder="Uzupełnij pole" />

          <label for="url">Strona internetowa</label>
          <input type="url" id="url" name="strona" placeholder="https://..." />

          <label for="plik">Dodaj plik</label>
          <input type="file" id="plik" name="plik" />

          <button>Prześlij dane</button>
        </form>
      </section>

      <section class="card">
        <span class="badge example"> ℹ️ Przypomnienie z MySQLi</span>
        <h2>7. Zadania z MySQLi</h2>
        <p>Przechodząc na etap 2 zadań należy przypomnieć sobie podstawowe operacje CRUD - Create, Read, Update, Delete, oraz zapoznać się z bazą danych na której będziemy pracować.</p>
        <img src="./db_diagram.png" alt="database diagram here" style="filter: grayscale(100%) invert(1%);">

        <ul class="wrap">
          <li>
            <form action="https://github.com/TEB-DK/Domena_aplikacji_internetowych/blob/J%C4%99zyk-PHP/2.%20Obs%C5%82uga%20MySQLi.md#-zapytania-insert-do-bazy-danych">
              <button>Create - Zapisywanie danych</button>
            </form>
          </li>
          <li>
            <form action="https://github.com/TEB-DK/Domena_aplikacji_internetowych/blob/J%C4%99zyk-PHP/2.%20Obs%C5%82uga%20MySQLi.md#-zapytania-select-do-bazy-danych">
              <button>Read - Odczytywanie danych</button>
            </form>
          </li>
          <li>
            <form action="https://github.com/TEB-DK/Domena_aplikacji_internetowych/blob/J%C4%99zyk-PHP/2.%20Obs%C5%82uga%20MySQLi.md#-zapytania-update-do-bazy-danych">
              <button>Update - Aktualizacja danych</button>
            </form>
          </li>
          <li>
            <form action="https://github.com/TEB-DK/Domena_aplikacji_internetowych/blob/J%C4%99zyk-PHP/2.%20Obs%C5%82uga%20MySQLi.md#%EF%B8%8F-zapytania-delete-do-bazy-danych">
              <button>Delete - Usuwanie danych</button>
            </form>
          </li>
        </ul>
        <div class="code">
          <pre>
CREATE DATABASE IF NOT EXISTS php_practice_v2;
USE php_practice_v2;

DROP TABLE IF EXISTS oceny;
DROP TABLE IF EXISTS uczniowie;
DROP TABLE IF EXISTS klasy;

CREATE TABLE klasy (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(20) NOT NULL,
    wychowawca VARCHAR(100) NOT NULL,
    sala VARCHAR(20) NOT NULL
);

CREATE TABLE uczniowie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(50) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    wiek INT NOT NULL,
    id_klasy INT,
    FOREIGN KEY (id_klasy) REFERENCES klasy(id)
        ON DELETE SET NULL
        ON UPDATE CASCADE
);

CREATE TABLE oceny (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_ucznia INT NOT NULL,
    przedmiot VARCHAR(50) NOT NULL,
    ocena INT NOT NULL,
    data_wpisu DATE NOT NULL,
    FOREIGN KEY (id_ucznia) REFERENCES uczniowie(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

INSERT INTO klasy (nazwa, wychowawca, sala) VALUES
('1A', 'Anna Kowalska', '12'),
('2B', 'Piotr Nowak', '24'),
('3C', 'Magdalena Wiśniewska', '31');

INSERT INTO uczniowie (imie, nazwisko, email, wiek, id_klasy) VALUES
('Jan', 'Nowicki', 'jan.nowicki@example.com', 17, 1),
('Katarzyna', 'Mazur', 'k.mazur@example.com', 18, 2),
('Michał', 'Zieliński', 'm.zielinski@example.com', 17, 1),
('Oliwia', 'Krawczyk', 'oliwia.k@example.com', 19, 3),
('Paweł', 'Lewandowski', 'pawel.l@example.com', 18, 2);

INSERT INTO oceny (id_ucznia, przedmiot, ocena, data_wpisu) VALUES
(1, 'Matematyka', 5, '2026-03-10'),
(1, 'Informatyka', 6, '2026-03-12'),
(2, 'Język polski', 4, '2026-03-14'),
(3, 'Matematyka', 3, '2026-03-15'),
(4, 'Biologia', 5, '2026-03-18'),
(5, 'Historia', 4, '2026-03-20'),
(2, 'Informatyka', 5, '2026-03-22'),
(3, 'Fizyka', 4, '2026-03-25');
            </pre>
        </div>

        <p class="footer-note">Sugestia: do załadowania bazy danych wykorzystaj panel PhpMyAdmin, na który <a href="http://localhost/phpmyadmin" target="_blank">przejdziesz tutaj</a>.</p>
      </section>
      <section class="card">
        <span class="badge task"> ➕ Zadanie z MySQLi</span>
        <h2>8. Dodawanie ucznia do bazy danych</h2>
        <p>Utwórz formularz z odpowiednimi polami input, przekieruj formularz na <code><mark>rozwiazania/zadanie_8.php</mark></code>.</p>
        <p>Dodaj ucznia do tabeli <code><mark>uczniowie</mark></code> w bazie danych, wykorzystaj do tego <code><mark>INSERT INTO</mark></code>.</p>
        <div class="card">
          <h3>➕ Dodaj ucznia</h3>
          <form action="#">
            <button>Dodaj</button>
          </form>
        </div>
      </section>
      <section class="card">
        <span class="badge task"> ➕ Zadanie z MySQLi</span>
        <h2>9. Wyświetl ucznia z bazy danych</h2>
        <p>Utwórz formularz z odpowiednimi polami input, przekieruj formularz na <code><mark>index.php</mark></code>.</p>

        <details>
          <summary>Podpowiedź</summary>
          <p>Aby wykonać skrypt php na stronie z której jest wysyłany, należy skrypt owinąć w <code><mark>instrukcję warunkową if</mark></code>.</p>
          <p>Której warunek będzie sprawdzał czy przycisk został wciśnięty za pomocą funkcji <code><mark>isset($_POST['name_przycisku'])</mark></code>.</p>
        </details>

        <div class="card">
          <h3>📝 Wyświetl ucznia</h3>
          <form action="#">
            <button name="wyswietl">Wyświetl</button>
          </form>
        </div>
      </section>
      <section class="card">
        <span class="badge task"> ➕ Zadanie z MySQLi</span>
        <h2>10. Usuwanie ucznia z bazy danych</h2>
        <p>Utwórz formularz z odpowiednimi polami input, przekieruj formularz na <code><mark>rozwiazania/zadanie_10.php</mark></code>.</p>

        <details>
          <summary>Podpowiedź</summary>
          <p>Usuń ucznia z tabeli <code><mark>uczniowie</mark></code> w bazie danych, wykorzystaj do tego <code><mark>DELETE FROM</mark></code>.</p>
          <p>Nie zapomnij o klauzuli <code><mark>WHERE</mark></code> w zapytaniu SQL.</p>
        </details>

        <div class="card">
          <h3>❎ Usuń ucznia</h3>
          <form action="#">
            <button>Usuń</button>
          </form>
        </div>
      </section>
      <section class="card">
        <span class="badge task">➕ Zadanie z MySQLi</span>
        <h2>11. Edycja danych ucznia</h2>
        <p>Utwórz formularz z odpowiednimi polami input i przekieruj formularz na <code><mark>rozwiazania/zadanie_11.php</mark></code>.</p>
        <p>Zmień adres e-mail wybranego ucznia w tabeli <code><mark>uczniowie</mark></code>.</p>
        <details>
          <summary>Podpowiedź</summary>
          <p>Wykorzystaj zapytanie <code><mark>UPDATE uczniowie SET</mark></code> oraz wskaż konkretnego ucznia za pomocą <code><mark>WHERE</mark></code>.</p>
        </details>

        <div class="card">
          <h3>💀 Edytuj ucznia</h3>
          <form action="#">
            <input type="number" placeholder="ID ucznia">
            <input type="email" placeholder="Nowy e-mail">
            <button>Zapisz</button>
          </form>
        </div>
      </section>

      <section class="card">
        <span class="badge task">➕ Zadanie z MySQLi</span>
        <h2>12. Dziennik ucznia</h2>
        <p>Utwórz formularz z odpowiednimi polami <code><mark>&lt;input&gt;</mark></code> i <code><mark>&lt;select&gt;</mark></code></p>
        <p>Dodaj ocenę dla wybranego ucznia. Uczniowie mają się wyświetlać z imienia i nazwiska oraz klasy w liście rozwijanej.</p>
        <details>
          <summary>Podpowiedź</summary>
          <p>Wykorzystaj zapytanie <code><mark>INNER JOIN</mark></code> aby uzyskać połączenie między tabelami. Połączenia opieraj na id.</p>
        </details>

        <div class="card">
          <h3>✏️ Dodaj ocenę ucznia</h3>
          <form action="#">
            <button>Dodaj</button>
          </form>
        </div>
      </section>

      <section class="card">
        <span class="badge task">➕ Zadanie z MySQLi</span>
        <h2>13. Modyfikacja klasy</h2>
        <p>Utwórz formularz z odpowiednimi polami <code><mark>&lt;input&gt;</mark></code> i <code><mark>&lt;select&gt;</mark></code></p>
        <p>W formularzu uwzględnij pola do edycji wychowawcy klasy.</p>

        <div class="card">
          <h3>🪄 Zmień wychowawce klasy</h3>
          <form action="#">
            <button>Edytuj</button>
          </form>
        </div>
      </section>

      <section class="card">
        <span class="badge task">➕ Zadanie z MySQLi</span>
        <h2>14. Przeniesienie oceny z przedmiotu</h2>
        <p>Utwórz formularz z odpowiednimi polami <code><mark>&lt;input&gt;</mark></code> i <code><mark>&lt;select&gt;</mark></code></p>
        <p>W formularzu powinna wyświetlić się lista ocen z przedmiotów <code><mark>(w znaczniku &lt;select&gt;)</mark></code> dla danego ucznia.</p>
        <p>Prócz tego obok lista z nazwami przedmiotów na które można przenieść daną ocenę.</p>
        <details>
          <summary>Podpowiedź</summary>
          <p>W przypadku listy przedmiotów można wypisać ją na "sztywno" ze względu braku tabeli w bazie danych odnośnie dostępnych przedmiotów.</p>
        </details>
        <details>
          <summary>Podpowiedź 2.</summary>
          <p>Pamiętaj, że przeniesienie oceny oznacza również usunięcie jej ze starego przedmiotu.</p>
        </details>
        <div class="card">
          <h3>🧮 Przenieś ocenę ucznia</h3>
          <form action="#">
            <button>Przenieś</button>
          </form>
        </div>
      </section>

      <section class="card">
        <span class="badge task">➕ Zadanie z MySQLi</span>
        <h2>15. Utworzenie klasy</h2>
        <p>Utwórz formularz z odpowiednimi polami.</p>
        <p>W formularzu powinny wyświetlić się klasy z uczniami dodanymi w nich oraz ich nauczycielami <code><mark>(w liście numerowanej i podliście w tej liście)</mark></code>.</p>
        <div class="card">
          <h3>🪄 Utwórz klase</h3>
          <form action="#">
            <button>Utwórz</button>
          </form>
        </div>
      </section>
    </main>
  </div>
</body>

</html>