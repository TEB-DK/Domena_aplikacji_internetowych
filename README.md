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

![tbc](https://user-images.githubusercontent.com/125214141/234108053-73df8e5e-75cd-456d-b321-59ed9fa7eed2.png)
