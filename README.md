<div align="center">

# 🐘 Wprowadzenie do języka PHP 🐘

</div>

PHP jest językiem skryptowym, który jest szeroko stosowany w tworzeniu stron internetowych oraz aplikacji webowych. Jego popularność wynika z tego, że jest łatwy do nauki i ma wiele wbudowanych funkcji i bibliotek.

### ⬇️ Instalacja PHP 
Aby rozpocząć programowanie w PHP, należy najpierw zainstalować PHP na swoim komputerze. Można to zrobić, pobierając pakiet XAMPP lub WAMP, który zawiera PHP, Apache i MySQL.

Proces instalacji PHP może różnić się w zależności od systemu operacyjnego. Poniżej przedstawiam ogólny opis instalacji PHP na systemach Windows, Linux i macOS.
<details>
<summary> 

#### 🪟 Instalacja na systemie Windows

</summary>

1. Pobierz plik instalacyjny PHP z oficjalnej strony internetowej: https://windows.php.net/download/

2. Uruchom plik instalacyjny i postępuj zgodnie z instrukcjami na ekranie. Podczas instalacji wybierz wszystkie wymagane komponenty, takie jak serwer WWW Apache, jeśli chcesz zainstalować PHP jako moduł do Apache.

3. Po zakończeniu instalacji upewnij się, że ścieżka do katalogu z plikiem wykonywalnym PHP jest dodana do zmiennej środowiskowej ``PATH``.

</details>

<details>
<summary>

#### 🐧 Instalacja na systemie Linux 

</summary>

1. Zainstaluj pakiet PHP z repozytorium systemowego. W większości dystrybucji Linuxa można to zrobić za pomocą menedżera pakietów, np. apt na Ubuntu/Debian, yum na CentOS/Fedora, pacman na Arch Linux itp. Przykładowo, aby zainstalować PHP na Ubuntu, wykonaj polecenie: `sudo apt install php`.
2. Po zainstalowaniu PHP, uruchom serwer WWW, np. Apache, aby umożliwić wykonywanie skryptów PHP.

</details>

<details>
<summary>

#### 🍎 Instalacja na systemie macOS

</summary>

1. Zainstaluj menedżer pakietów Homebrew (jeśli jeszcze go nie masz) za pomocą polecenia: `/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"`
2. Zainstaluj PHP za pomocą polecenia: `brew install php`
3. Po zainstalowaniu PHP, uruchom serwer WWW, np. Apache, aby umożliwić wykonywanie skryptów PHP.

</details>

Po zakończeniu instalacji PHP, możesz przetestować jego działanie, tworząc prosty skrypt PHP i uruchamiając go w przeglądarce internetowej.

### 📑 Podstawowe składni PHP

PHP jest językiem programowania interpretowanym, co oznacza, że kod jest wykonywany w momencie jego interpretacji. Oto przykładowa składnia PHP:

```php
<?php // Początek kodu PHP

echo "Witaj świecie!";

?> // Koniec kodu PHP 
```

Kod PHP zawsze musi być umieszczony w tagach `<?php ?>`. W tym przykładzie użyto funkcji `echo` do wyświetlenia tekstu "Witaj świecie!".

#### ✉️ Zmienne w PHP

W PHP zmienne są deklarowane za pomocą znaku dolara (`$`) i mogą przechowywać różne typy danych, takie jak liczby, ciągi znaków i tablice. Oto przykład deklaracji zmiennej:

```php
<?php

$imie = "Daman";
$wiek = 24;

echo "Cześć, nazywam się " . $imie . " i mam " . $wiek . " lat.";

?>
```

W tym przykładzie zmienna `$imie` przechowuje ciąg znaków, a zmienna `$wiek` przechowuje liczbę. Funkcja `echo` jest używana do wyświetlenia łączenia tekstu i wartości zmiennych.

#### 💱 Konwersja typów

to proces zmiany typu danych z jednego typu na inny w programowaniu. W PHP, konwersja typu może być wykonywana w celu przekonwertowania jednego typu danych na inny typ, co może być przydatne przy różnych operacjach matematycznych, porównywaniu wartości, wyświetlaniu danych, itp.

W PHP, konwersja typu jest często nazywana rzutowaniem (ang. casting), a do rzutowania zmiennych można użyć specjalnych operatorów, takich jak:

- `(int)`: przekształca wartość na typ całkowity ``integer``
- `(float)` lub `(double)`: przekształca wartość na typ zmiennoprzecinkowy ``float``
- `(string)`: przekształca wartość na typ ``string``
- `(bool)`: przekształca wartość na typ logiczny ``boolean``

Przykład użycia rzutowania w PHP

```php
<?php
$liczba = "10";
$suma = $liczba + 5; // $suma będzie równa 15

$liczba_calkowita = (int) $liczba; // będzie równa 10
$liczba_zmiennoprzecinkowa = (float) $liczba; // będzie równa 10.0
$liczba_jako_string = (string) $liczba; // będzie równa "10"
$czy_prawda = (bool) $liczba; // będzie równa true, ponieważ $liczba ma wartość inna niż zero
?>
```

###### ❗ W powyższym przykładzie, wartość zmiennej ``$liczba`` jest przechowywana jako string, ale jest konwertowana na typ liczbowy przy użyciu rzutowania. Następnie, wynikowe wartości są przypisywane do zmiennych o różnych typach danych.

#### ❔ Instrukcje warunkowe w PHP
W PHP możesz użyć instrukcji warunkowych do wykonywania różnych działań w zależności od spełnienia określonego warunku. Oto przykład instrukcji warunkowej `if`:

```php
<?php

$wiek = 24;

if ($wiek >= 18) {
    echo "Jesteś pełnoletni.";
} else {
    echo "Nie jesteś jeszcze pełnoletni.";
}

?>
```

W tym przykładzie, jeśli wartość zmiennej `$wiek` jest większa lub równa 18, zostanie wyświetlony tekst "Jesteś pełnoletni". W przeciwnym razie zostanie wyświetlony tekst "Nie jesteś jeszcze pełnoletni".

#### ➰ Pętle w PHP

W PHP możesz użyć pętli do powtarzania określonych działań. Najczęściej stosowanymi pętlami są pętla `for` i pętla `while`. Oto przykład pętli `for`:

```php
<?php

for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

?>
```

W tym przykładzie pętla `for` wyświetla liczby od 1 do 10. Zmienna `$i` jest ``inkrementowana`` o 1 w każdej iteracji.

#### 🔢 Tablice w PHP

to jedna z podstawowych struktur danych, które pozwalają przechowywać zbiory elementów o różnych typach. Każdy element w tablicy jest indeksowany za pomocą klucza, którym może być liczba lub ciąg znaków.

Tablice w PHP mogą być ``jednowymiarowe`` i ``wielowymiarowe``. W przypadku jednowymiarowych tablic, każdy element ma jeden indeks. Natomiast w przypadku wielowymiarowych tablic, każdy element ma dwa lub więcej indeksów, co pozwala na zagnieżdżanie tablic w tablicach.

Do deklarowania tablic w PHP używa się funkcji array lub nawiasów ``kwadratowych`` (czyli tych ``[]``).

```php
<?php

$tablica1 = array(1, 2, 3, 4, 5);
$tablica2 = [6, 7, 8, 9, 10];

?>
```

Możliwe jest również podanie kluczy indeksów w przypadku ``tablic asocjacyjnych``:

```php
<?php

$tablica3 = array('imie' => 'Anna', 'nazwisko' => 'Kowalska', 'wiek' => 30);

?>
```

W celu pobrania wartości z tablicy, należy użyć indeksu.

```php
<?php

echo $tablica1[0]; // wyświetli 1
echo $tablica3['imie']; // wyświetli Anna

?>
```

Można również użyć pętli for lub foreach do iterowania przez tablicę.

```php
<?php
for ($i = 0; $i < count($tablica1); $i++) {
    echo $tablica1[$i];
}

foreach ($tablica3 as $key => $value) {
    echo $key . ': ' . $value;
}
?>
```

W przypadku ``wielowymiarowych`` tablic, konieczne jest użycie wielu indeksów, aby uzyskać dostęp do elementów

```php
<?php

$tablica4 = array(array(1, 2), array(3, 4), array(5, 6));
echo $tablica4[1][0]; // wyświetli 3

?>
```

Tablice w PHP posiadają wiele wbudowanych funkcji, takich jak sortowanie, dodawanie elementów, usuwanie elementów, łączenie tablic itp. Wszystkie te funkcje pozwalają na elastyczne zarządzanie danymi w tablicach.

#### 📦 Funkcje w PHP

W PHP możesz tworzyć własne funkcje, aby wykonywać określone zadania. Funkcje są użyteczne, ponieważ pozwalają na wielokrotne użycie określonego kodu. Oto przykład funkcji:

```php
<?php

function dodaj($x, $y) {
    $wynik = $x + $y;
    return $wynik;
}

$suma = dodaj(2, 3);
echo "Suma wynosi: " . $suma;

?>
```

W tym przykładzie funkcja `dodaj` dodaje dwie liczby i zwraca wynik. Funkcja jest wywoływana z parametrami `2` i `3`, a wynik jest przypisywany do zmiennej `$suma`.

### 🌟 Zadania do wykonania

1. Napisz program, który wyświetli wszystkie liczby od 1 do 100, które są podzielne przez 3.

2. Napisz funkcję, która przyjmuje tablicę liczb i zwraca ich sumę.

3. Napisz program, który pobierze od użytkownika liczbę i wyświetli informację, czy jest ona parzysta, czy nieparzysta.

    <details>
    <summary> 🌠 Wskazówka </summary>

    > Aby pobrać wartość od użytkownika w PHP, możesz użyć funkcji `readline()`, która pobiera dane od użytkownika z konsoli lub terminala.

    >Na przykład, aby pobrać wartość liczbową od użytkownika, można użyć następującego kodu:

    ```php
    $liczba = readline("Podaj liczbę: ");
    ```

    > Użytkownik zostanie poproszony o wpisanie liczby, a następnie ta liczba zostanie przypisana do zmiennej `$liczba`. Możesz użyć tej zmiennej w dalszej części swojego programu.
    
    > Jeśli chcesz pobrać ciąg znaków od użytkownika, możesz użyć tej samej funkcji `readline()`, ale bez przekazywania żadnego parametru. W tym przypadku funkcja zwróci wprowadzony przez użytkownika ciąg znaków jako wartość.

    ```php
    $tekst = readline();
    ```

    > Podobnie jak w poprzednim przykładzie, wprowadzony ciąg znaków zostanie przypisany do zmiennej `$tekst`, którą możesz wykorzystać w swoim programie.

    </details>

4. ⭐ Napisz funkcję, która sprawdzi, czy dany ciąg znaków jest palindromem.

    <details>
    <summary> 🌠 Wskazówka </summary>
    Palindrom to wyrażenie, słowo lub ciąg znaków, który brzmi tak samo czytany od lewej do prawej oraz od prawej do lewej. Przykładem prostego palindromu jest słowo "kajak", które czytane od lewej do prawej i od prawej do lewej brzmi tak samo. Inne przykłady palindromów to: "radar", "Kobyła ma mały bok", "A man, a plan, a canal, Panama!".
    </details>

5. Napisz program, który wyświetli wszystkie liczby pierwsze z zakresu od 1 do 100.

6. Napisz funkcję, która przyjmie dwa argumenty: ciąg znaków i liczbę, a następnie zwróci taki sam ciąg znaków, ale każdy jego znak powtórzony tyle razy, ile wynosi drugi argument funkcji.

7. Napisz program, który wyświetli wszystkie liczby od 1 do 100, ale zamiast liczby podzielnej przez 3 wyświetli ``Fizz``, zamiast liczby podzielnej przez 5 wyświetli ``Buzz``, a zamiast liczby podzielnej przez 3 i 5 wyświetli ``FizzBuzz``.

8. Napisz funkcję, która przyjmie ciąg znaków i zwróci jego długość.

9. Napisz program, który pobierze od użytkownika dwie liczby i wyświetli ich iloczyn.

10. Napisz funkcję, która przyjmie ciąg znaków i zwróci go odwróconego.

12. Napisz funkcję, która przyjmie dwie liczby i zwróci większą z nich.

13. Napisz program, który pobierze od użytkownika ciąg znaków i wyświetli go w odwrotnej kolejności.

14. Napisz funkcję, która przyjmie tablicę liczb i zwróci ich średnią arytmetyczną.

15. Napisz program, który wyświetli tabliczkę mnożenia dla liczb od 1 do 10.

16. Wyświetl liczbę ``𝜋``.
17. Kalkulator BMI:
   - Użytkownik podaje swoją wagę (w kilogramach) i wzrost (w metrach).
   - Program oblicza BMI według wzoru: BMI = masa ciała (kg) / (wzrost (m) * wzrost (m)).
   - Program porównuje uzyskane BMI z zakresami wartości, aby określić, czy użytkownik jest niedowagą, nadwagą, czy ma prawidłową wagę.
   - Przykładowe zakresy wartości BMI:
     - BMI < 18.5: Niedowaga
     - 18.5 <= BMI < 24.9: Prawidłowa waga
     - BMI >= 25: Nadwaga

18. Gra w kamień, papier, nożyce:
   - Użytkownik wybiera jedną z opcji: kamień, papier lub nożyce.
   - Program losowo wybiera jedną z tych samych opcji.
   - Program porównuje wybory użytkownika i komputera, aby określić wynik:
     - Kamień pokonuje nożyce.
     - Nożyce tną papier.
     - Papier owija kamień.
   - Program ogłasza zwycięzcę lub remis.
    <details>
        <summary> Funkcja losująca wynik komputera </summary>
    
       ```php
        function komputerWybiera()
        {
            $opcje = ['kamień', 'papier', 'nożyce'];
            $losowaOpcja = array_rand($opcje);
            return $opcje[$losowaOpcja];
        }
       ```
   </details>

19. Logowanie z autoryzacją:
   - Użytkownik podaje nazwę użytkownika i hasło.
   - Program porównuje podane dane z danymi autoryzacyjnymi przechowywanymi w bazie danych lub pliku.
   - Jeśli dane są zgodne, użytkownik zostaje zalogowany.
   - Jeśli dane są nieprawidłowe, program wyświetla komunikat o błędzie i nie udziela dostępu.

20. Kalkulator podatku dochodowego:
   - Użytkownik podaje swoje roczne dochody.
   - Program oblicza podatek dochodowy na podstawie określonych stawek podatkowych.
   - Program może używać różnych progów podatkowych, na przykład:
     - Dochód do 50 000 zł: 10% podatku
     - Dochód od 50 001 zł do 100 000 zł: 20% podatku
     - Dochód powyżej 100 000 zł: 30% podatku

21. Sprawdzanie roku przestępnego:
   - Użytkownik podaje rok, który chce sprawdzić.
   - Program sprawdza, czy rok jest przestępny na podstawie określonych reguł:
     - Rok jest przestępny, jeśli jest podzielny przez 4, ale nie jest podzielny przez 100, chyba że jest podzielny przez 400.
   - Program informuje użytkownika, czy podany rok jest przestępny czy nie.

22. Wyszukiwanie w tablicy:
   - Utwórz tablicę z różnymi elementami, np. liczbami całkowitymi lub ciągami znaków.
   - Napisz program, który pozwoli użytkownikowi wprowadzić poszukiwany element.
   - Użyj pętli `for` lub `foreach`, aby iterować przez tablicę i sprawdzić, czy poszukiwany element znajduje się w tablicy.
   - Wyświetl informację, czy element został znaleziony, a jeśli tak, to w którym indeksie tablicy.

23. Mnożenie elementów tablicy:
   - Utwórz tablicę zawierającą liczby całkowite.
   - Napisz program, który pobierze liczbę, przez którą każdy element tablicy ma zostać pomnożony.
   - Użyj pętli `for` lub `foreach`, aby pomnożyć każdy element tablicy przez podaną liczbę.
   - Wynik zapisz w nowej tablicy.

24. Średnia arytmetyczna z tablicy:
   - Utwórz tablicę zawierającą liczby.
   - Napisz pętlę, która iteruje przez tablicę i sumuje wszystkie jej elementy.
   - Po zakończeniu pętli podziel sumę przez liczbę elementów w tablicy, aby obliczyć średnią arytmetyczną.

25. Filtrowanie i przekształcanie tablicy:
   - Utwórz tablicę zawierającą różne elementy, np. liczby całkowite i ciągi znaków.
   - Napisz pętlę, która przefiltruje tablicę, zachowując tylko elementy spełniające określone kryterium (np. tylko liczby parzyste).
   - Przekształć wynik w nową tablicę, która zawiera tylko wybrane elementy.

26. Tablica asocjacyjna i pętla foreach:
   - Utwórz tablicę asocjacyjną, gdzie klucze reprezentują nazwy studentów, a wartości to ich oceny.
   - Napisz pętlę `foreach`, która przejdzie przez tę tablicę i wyświetli nazwy studentów wraz z ich ocenami.

27. Kalkulator podstawowych operacji matematycznych:
   - Funkcja przyjmuje dwie liczby i operator (+, -, *, /) jako argumenty.
   - Na podstawie operatora funkcja wykonuje odpowiednią operację matematyczną.
   - Wynik operacji jest zwracany jako wynik funkcji.

28. Generowanie losowego hasła:
   - Funkcja przyjmuje długość hasła jako argument.
   - Generowane hasło powinno zawierać różne rodzaje znaków (litery, cyfry, znaki specjalne).
   - Wynik funkcji to losowe hasło.

29. Przeliczanie jednostek miar:
   - Funkcja przyjmuje wartość, jednostkę źródłową i jednostkę docelową jako argumenty.
   - Wykonuje konwersję jednostek miar na podstawie określonych przeliczników (cm <-> cale, m <-> stopy, kilometry <-> mile, celcjusze <-> fahrenheity).
   - Wynik funkcji to przeliczona wartość w jednostce docelowej.

30. Tworzenie skrótu sha512 ([hash](https://www.php.net/manual/en/function.hash.php)) z hasła:
   - Funkcja przyjmuje hasło jako argument.
   - Generuje skrót (hash) hasła, który może być używany do przechowywania haseł w bezpieczny sposób, zwykle przy użyciu algorytmu, takiego jak bcrypt lub SHA-256.
   - Wynik funkcji to skrót hasła.

31. Sortowanie tablicy wielowymiarowej:
   - Funkcja przyjmuje tablicę wielowymiarową i klucz lub kolumnę do sortowania jako argumenty.
   - Sortuje tablicę wielowymiarową na podstawie wybranego klucza lub kolumny.
   - Wynik to posortowana tablica.


## Obsługa bazy danych w PHP
> Do obsługi bazy danych możemy wykorzystać bibliotekę MySQLi

### 📑 MySQLi
MySQLi to biblioteka PHP służąca do obsługi baz danych MySQL. Została wprowadzona w PHP 5.0 jako alternatywa dla biblioteki MySQL, aby umożliwić programistom korzystanie z nowszych funkcjonalności MySQL, takich jak przygotowywanie zapytań czy transakcje.

MySQLi udostępnia wiele funkcji i metod, które ułatwiają obsługę baz danych MySQL, takie jak:

- ``mysqli_connect()`` - funkcja służąca do nawiązania połączenia z bazą danych
- ``mysqli_query()`` - funkcja służąca do wykonania zapytania SQL na bazie danych
- ``mysqli_fetch_assoc()`` - funkcja służąca do pobierania wyników zapytania w formie asocjacyjnej tablicy
- ``mysqli_prepare()`` - funkcja służąca do przygotowywania zapytań SQL z parametrami
- ``mysqli_stmt_bind_param()`` - funkcja służąca do przypisywania wartości do przygotowanych zapytań SQL
- ``mysqli_real_escape_string()`` - funkcja służąca do zabezpieczania wartości przed atakami typu SQL Injection

#### 🔗 Łączenie się z bazą danych
Aby połączyć się z bazą danych MySQL przy użyciu MySQLi należy zdefiniować skrypt

```php
// DANE DO POŁĄCZENIA Z BAZĄ DANYCH
$servername = "localhost";
$username = "nazwa_użytkownika";
$password = "hasło";
$dbname = "nazwa_bazy_danych";

// TWORZENIE POŁĄCZENIA
$conn = mysqli_connect($servername, $username, $password, $dbname);

// SPRAWDZANIE CZY POŁĄCZENIE ZOSTAŁO UTWORZONE
if (!$conn) {
    die("Nieudane połączenie: " . mysqli_connect_error());
}
echo "Połączenie udane!";
```

Funkcja ``mysqli_connect()`` przyjmuje cztery parametry: ``nazwę hosta``, ``nazwę użytkownika``, ``hasło`` i ``nazwę bazy danych``. Jeśli połączenie zostanie nawiązane pomyślnie, funkcja zwróci ``obiekt połączenia``, który można wykorzystać w dalszej pracy.

#### ❔ Zapytania do bazy danych

Wykonanie zapytań jest możliwe za pomocą funkcji ``mysqli_query()``.

```php
// PRZYKŁADOWE ZAPYTANIE
$sql = "SELECT * FROM users";

// WYKONANIE ZAPYTANIA
$result = mysqli_query($conn, $sql);

// SPRAWDZANIE CZY ZAPYTANIE ZWRÓCIŁO WYNIKI
if (mysqli_num_rows($result) > 0) {
// Pobranie wyników i wyświetlenie ich na stronie
    while($row = mysqli_fetch_assoc($result)) {
        echo "Id: " . $row["id"] . " - Imię: " . $row["firstname"] . " - Nazwisko: " . $row["lastname"] . "<br>";
    }
} else {
    echo "Brak wyników";
}

// ZWOLNIENIE ZASOBÓW
mysqli_free_result($result);

```

#### ❔🔒Zapytania parametryzowane do bazy danych

Przygotowanie zapytania w MySQL polega na zastępywaniu wartości parametrów znakiem zapytania "?".

```php
$sql = "SELECT * FROM users WHERE id = ? AND lastname = ?";
```

Aby przygotować zmienną typu ``statement``, używając funkcji ``mysqli_prepare()``, która przyjmuje dwa parametry: ``obiekt połączenia`` i ``zapytanie SQL``.

```php
$stmt = mysqli_prepare($conn, $sql);
```

Następnie należy przypisać wartości parametrów do zmiennej typu ``statement``, używając funkcji ``mysqli_stmt_bind_param()``, która przyjmuje jako pierwszy parametr zmienną typu ``statement``, a następnie ``listę wartości parametrów``. W przypadku zapytania SQL z dwoma parametrami typu integer, należy użyć typu ``i``.

```php
$id = 1;
$lastname = "Kowalski";
mysqli_stmt_bind_param($stmt, "is", $id, $lastname);
```

Aby wykonać zapytanie, należy użyć funkcji ``mysqli_stmt_execute()``, która przyjmuje jako parametr zmienną typu ``statement``.

```php
mysqli_stmt_execute($stmt);
```

Ostatecznie pobranie wyników zapytania, dokonuje się używając funkcji ``mysqli_stmt_get_result()``, która przyjmuje jako parametr zmienną typu ``statement``.

```php
$result = mysqli_stmt_get_result($stmt);
```

Przetworzenie wyniku zapytania, używając funkcji ``mysqli_fetch_assoc()`` lub ``mysqli_fetch_array()``.
Pierwsza funkcja zwróci tablice asocjacyjną, druga zwykłą.

```php
while($row = mysqli_fetch_assoc($result)) {
    echo "Id: " . $row["id"] . " - Imię: " . $row["firstname"] . " - Nazwisko: " . $row["lastname"] . "<br>";
}
```

Należałoby również zwolnić zasoby, używając funkcji ``mysqli_free_result()`` i ``mysqli_stmt_close()``.

```php
mysqli_free_result($result);
mysqli_stmt_close($stmt);
```

Całość powinna wyglądać mniej wiecej tak:

```php
$sql = "SELECT firstname, lastname FROM users WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
$id = 1;
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $firstname, $lastname);
mysqli_stmt_fetch($stmt);
echo "Imię: " . $firstname . " - Nazwisko: " . $lastname . "<br>";
mysqli_stmt_close($stmt);
```

W pierwszej funkcji, czyli ``mysqli_stmt_bind_param()``, przekazujemy do funkcji argumenty w kolejności, w jakiej są użyte w zapytaniu SQL. Następnie musimy określić ich typy, które zależą od typów wartości w bazie danych oraz od typów PHP. Na końcu przypisujemy do tych argumentów wartości.

Kolejna funkcja, ``mysqli_stmt_execute()``, wywołuje zapytanie SQL z użyciem przypisanych wartości z poprzedniej funkcji.

Funkcja ``mysqli_fetch_assoc()`` pobiera kolejne wiersze z wyniku zapytania i zwraca je jako asocjacyjną tablicę, gdzie kluczami są nazwy kolumn, a wartościami wartości wierszy.

Funkcja ``mysqli_stmt_bind_result()`` pozwala na przypisanie wyniku zapytania SQL do zmiennych. Przy użyciu tej funkcji możemy pobrać wyniki zapytania w formie zmiennych, co umożliwia łatwiejszą dalszą obróbkę wyników.

#### 👨‍✈️Kontrolowanie wyników zapytań do bazy danych

Funkcja ``mysqli_affected_rows()`` zwraca liczbę wierszy dotkniętych ostatnim zapytaniem SQL. Jest to przydatne, gdy chcemy np. sprawdzić, ile rekordów zostało zmienionych w wyniku zapytania ``UPDATE`` lub ``DELETE``.

```php
$sql = "UPDATE users SET lastname = 'Nowak' WHERE firstname = 'Jan'";
mysqli_query($conn, $sql);
$num_rows = mysqli_affected_rows($conn);
echo "Zaktualizowano " . $num_rows . " wierszy.";
```

Funkcja ``mysqli_num_rows()`` zwraca liczbę wierszy w wyniku zapytania ``SELECT``. Dzięki temu możemy łatwo sprawdzić, ile rekordów zostało zwróconych przez zapytanie.

```php
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($result);
echo "Liczba użytkowników: " . $num_rows;
mysqli_free_result($result);
```

Funkcja ``mysqli_insert_id()`` zwraca ID ostatnio dodanego rekordu. Ta funkcja jest przydatna, gdy dodajemy rekordy do tabeli z autoinkrementowanym kluczem głównym i chcemy później odwołać się do ID dodanego rekordu.

```php
$sql = "INSERT INTO users (firstname, lastname) VALUES ('Jan', 'Kowalski')";
mysqli_query($conn, $sql);
$id = mysqli_insert_id($conn);
echo "Dodano użytkownika o ID: " . $id;
```

Funkcja ``mysqli_error()`` zwraca ostatni błąd związany z połączeniem z bazą danych. Jest to przydatne, gdy chcemy szybko sprawdzić, dlaczego zapytanie nie zostało wykonane poprawnie.

```php
$sql = "SELECT * FROM non_existent_table";
$result = mysqli_query($conn, $sql);
if(!$result) {
    echo "Błąd: " . mysqli_error($conn);
}
```

Funkcje z biblioteki MySQLi pozwalają na wykonywanie zapytań SQL do bazy danych oraz na efektywne zarządzanie połączeniem z bazą danych. Aby korzystać z tych funkcji, należy najpierw nawiązać połączenie z bazą danych za pomocą funkcji mysqli_connect() lub mysqli_init(). Następnie można wykonywać zapytania SQL, korzystając z funkcji takich jak mysqli_query(), mysqli_prepare(), mysqli_stmt_execute() oraz mysqli_fetch_assoc(). Ważne jest również pamiętanie o poprawnym sanitizingu wartości parametrów oraz o zabezpieczeniu przed atakami typu SQL injection poprzez użycie prepared statements.

#### 📄 Obsługa formularzy

W PHP, obsługa formularzy HTML odbywa się poprzez użycie dwóch superglobalnych zmiennych: ``$_GET`` i ``$_POST``. Oba są tablicami asocjacyjnymi, które przechowują dane wysłane z formularza.

``$_GET`` przechowuje dane wysłane z formularza metodą GET, czyli dane są dołączone do adresu URL, natomiast ``$_POST`` przechowuje dane wysłane metodą POST, czyli dane są przesyłane w tle bez ich widoczności w adresie URL.

Aby przesłać dane z formularza, należy użyć tagu ``<form>`` w HTML. Najważniejsze atrybuty tego tagu to action i method. Atrybut action określa, jaki skrypt PHP powinien odbierać dane z formularza, a atrybut method określa, jakimi metodami dane mają być przesłane.

```html
<form action="dane.php" method="POST">
  <label for="imie">Imię:</label>
  <input type="text" name="imie" id="imie">

  <label for="nazwisko">Nazwisko:</label>
  <input type="text" name="nazwisko" id="nazwisko">

  <input type="submit" value="Wyślij">
</form>
```

W powyższym przykładzie, formularz wysyła dane do skryptu ``dane.php`` metodą POST. Formularz zawiera dwa pola tekstowe: ``imie`` i ``nazwisko``. Po kliknięciu przycisku ``Wyślij``, dane z formularza zostaną przesłane do skryptu PHP.

Aby odczytać dane przesłane z formularza w skrypcie PHP, należy użyć zmiennej $_POST. Wartość każdego pola formularza jest przechowywana jako element tablicy $_POST, którego kluczem jest nazwa pola. Na przykład, aby odczytać wartość pola "imie".

```php
$imie = $_POST['imie'];
```

Następnie, dane z formularza można przetworzyć, np. zapisać do bazy danych lub wyświetlić w odpowiedzi dla użytkownika.

```php
if(isset($_POST['imie']) && isset($_POST['nazwisko'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    echo "Witaj, $imie $nazwisko!";
}
```

### 🌟 Zadania do wykonania
Do wykonania zadań potrzebna będzie przygotowana baza danych z konkretną tabelą przygotowaną poniżej:

<details>
<summary>Baza danych do zadania</summary>

```sql
CREATE DATABASE IF NOT EXISTS php_przyklad;
USE php_przyklad;
    
CREATE TABLE uzytkownicy (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nazwa VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  haslo VARCHAR(255) NOT NULL,
  utworzone TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  zaktualizowane TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE produkty (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  nazwa VARCHAR(100) NOT NULL,
  opis TEXT,
  cena DECIMAL(10,2) NOT NULL,
  dostępność TINYINT(1) DEFAULT 0,
  kategoria VARCHAR(50)
);

CREATE TABLE koszyk (
    id_koszyka INT AUTO_INCREMENT PRIMARY KEY,
    id_uzytkownika INT NOT NULL,
    id_produktu INT NOT NULL,
    FOREIGN KEY (id_uzytkownika) REFERENCES uzytkownicy(id),
    FOREIGN KEY (id_produktu) REFERENCES produkty(id)
);

INSERT INTO produkty (nazwa, opis, cena, dostępność, kategoria)
VALUES
  ('Komputer stacjonarny', 'Bardzo szybki komputer z procesorem Intel Core i7', 3999.99, 1, 'Komputery'),
  ('Laptop Dell', 'Laptop z procesorem Intel Core i5 i dyskiem SSD', 2599.99, 1, 'Laptopy'),
  ('Telewizor Samsung', 'Telewizor o przekątnej 55 cali i rozdzielczości 4K', 3499.00, 1, 'Telewizory'),
  ('Konsola Xbox', 'Konsola do gier z dyskiem twardym o pojemności 1 TB', 1999.99, 1, 'Konsole do gier'),
  ('Smartfon Samsung Galaxy', 'Smartfon z ekranem 6,2 cala i podwójnym aparatem fotograficznym', 1599.00, 1, 'Smartfony'),
  ('Słuchawki bezprzewodowe Sony', 'Słuchawki z funkcją redukcji szumów i długoletnim czasem pracy na baterii', 699.00, 1, 'Słuchawki'),
  ('Zestaw głośnikowy Logitech', 'Zestaw głośnikowy 2.1 z mocą 120 W i pilotem zdalnego sterowania', 399.00, 1, 'Głośniki'),
  ('Myszka bezprzewodowa Microsoft', 'Myszka z technologią BlueTrack i ergonomicznym kształtem', 99.00, 1, 'Akcesoria komputerowe'),
  ('Klawiatura mechaniczna Corsair', 'Klawiatura z podświetleniem RGB i wygodnymi przyciskami makro', 499.00, 1, 'Akcesoria komputerowe'),
  ('Gra komputerowa Assassin\'s Creed', 'Gra akcji osadzona w czasach średniowiecza', 179.99, 1, 'Gry komputerowe');
    
INSERT INTO uzytkownicy (nazwa, email, haslo)
VALUES ('john_doe', 'john_doe@example.com', 'password1'),
    ('jane_smith', 'jane_smith@example.com', 'password2'),
    ('bob_johnson', 'bob_johnson@example.com', 'password3');
    
INSERT INTO koszyk (id_uzytkownika, id_produktu) VALUES (1, 2),(3,5),(1,10);

```

</details>


1. Wyświetl wszystkich użytkowników z tabeli "users".

1. Wyświetl użytkownika o określonym identyfikatorze.

1. Dodaj nowego użytkownika do tabeli "users".

1. Aktualizuj nazwę użytkownika dla określonego identyfikatora.

1. Utwórz skrypt PHP do dodawania nowych użytkowników do bazy danych MySQL.

1. Utwórz skrypt PHP do wyświetlania produktów z bazy danych MySQL.
