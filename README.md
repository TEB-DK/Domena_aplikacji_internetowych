<div align='center'>

#  🌐 Projekty domen aplikacji 📚

</div>

> Projekty zostały podzielone na: zaliczeniowe, zadaniowe, zwolnieniowe.

<div align='justify'>

## Projekty `zadaniowe`

<details>
   <summary>

   ### -3. **Sweet Candy Factory** / 1 os.
      
   </summary>

**Wygląd strony**

<img src='https://github.com/user-attachments/assets/9b45987a-85cd-4085-97cc-c95ed831a4db' width="69%">

**Materiały do wykorzystania**

- Ikony: [SVGRepo](https://svgrepo.com/)
- Kolorystyka: #FFD41D, #0084FF, #FF638A, #F3437F, #E5E5E5, #121212, #FAFAFA
- Czcionki: [Fredoka](https://fonts.google.com/specimen/Fredoka?query=Fredoka)
- Baza danych:
```sql

CREATE TABLE category (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    image_filename VARCHAR(255)
);

INSERT INTO category (name, image_filename) VALUES
('Poisonous Candy', 'poison.png'),
('Mint Candy', 'candy.png'),
('Piñata Candy', 'pinata.png'),
('Sugar Candy', 'candysugar.png'),
('Chocolate', 'chocolate.png'),
('Wrapped Candy', 'wrappedcandy.png'),
('Halloween Candy', 'candyhalloween.png'),
('Candy Bucket', 'candysweet.png'),
('Candy Cane', 'canecandy.png');

CREATE TABLE candies (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    description TEXT,
    stock INT,
    max_stock INT,
    category_id INT,
    price DECIMAL(5,2),
    contains_alcohol BOOLEAN,
    FOREIGN KEY (category_id) REFERENCES category(id)
);

INSERT INTO candies (name, description, stock, max_stock, category_id, price, contains_alcohol) VALUES
('Toxic Delight', 'Mysterious candy with a strong kick.', 100, 500, 1, 6.99, TRUE),
('Skull Syrup', 'Spooky syrup-like candy.', 120, 400, 1, 5.99, FALSE),
('Venom Drops', 'Sour drops with an intense flavor.', 80, 300, 1, 4.49, FALSE),
('Peppermint Swirl', 'Classic peppermint candy.', 0, 800, 2, 2.99, FALSE),
('Winter Breeze', 'Cool mint flavor with a hint of vanilla.', 150, 600, 2, 3.49, FALSE),
('Frosty Mint Chews', 'Soft and chewy mint candy.', 90, 400, 2, 4.29, FALSE),
('Piñata Surprise', 'A mix of fruity and chewy candies.', 300, 1000, 3, 5.99, FALSE),
('Fiesta Mix', 'A vibrant assortment of flavors.', 240, 700, 3, 5.49, FALSE),
('Party Blast', 'Explosive fruit-filled candies.', 180, 600, 3, 6.29, FALSE),
('Golden Stripes', 'Sweet caramelized sugar sticks.', 260, 900, 4, 3.99, FALSE),
('Classic Rock Candy', 'Hard and crunchy sugar candy.', 190, 700, 4, 4.29, FALSE),
('Rainbow Sticks', 'Colorful sugar sticks with fruity flavors.', 170, 600, 4, 4.99, FALSE),
('Dark Choco Bites', 'Rich and smooth dark chocolate.', 0, 1000, 5, 6.99, FALSE),
('Caramel-Filled Chocolate', 'Sweet caramel inside a chocolate shell.', 300, 800, 5, 7.49, FALSE),
('Rum Truffles', 'Delicious truffles with a touch of rum.', 90, 300, 5, 8.99, TRUE),
('Golden Caramel Wraps', 'Soft caramel wrapped in golden foil.', 230, 900, 6, 4.99, FALSE),
('Fruit Explosion', 'Wrapped fruit-flavored chewy candy.', 210, 800, 6, 3.99, FALSE),
('Lemon Zest Wraps', 'Sweet and tangy lemon candy.', 140, 600, 6, 4.29, FALSE),
('Pumpkin Spice Treats', 'Spooky pumpkin-flavored candy.', 0, 700, 7, 5.99, FALSE),
('Spooky Gummies', 'Halloween-themed gummy candies.', 180, 800, 7, 4.99, FALSE),
('Witch’s Brew', 'A mysterious mix of sour and sweet.', 130, 500, 7, 6.49, FALSE),
('Jack-o-Lantern Mix', 'A Halloween bucket filled with sweets.', 250, 1000, 8, 9.99, FALSE),
('Surprise Candy Basket', 'A variety of candies in a cute bucket.', 200, 800, 8, 8.49, FALSE),
('Deluxe Candy Assortment', 'Premium selection of candies.', 140, 600, 8, 10.99, FALSE),
('Classic Candy Cane', 'Traditional peppermint candy cane.', 300, 1000, 9, 2.49, FALSE),
('Chocolate Dipped Cane', 'Candy cane with chocolate coating.', 260, 800, 9, 3.99, FALSE),
('Berry Swirl Cane', 'Fruity candy cane with berry flavors.', 180, 600, 9, 3.49, FALSE);

```
   
</details>

---

<details>
   <summary>

   ### -2. **WebCV** / 1 os.
      
   </summary>

**Wygląd strony**

<img src='https://github.com/user-attachments/assets/cb711fe8-b5fd-4911-bcb6-5f3a7d6eca89' width="69%">

<img src='https://github.com/user-attachments/assets/07232b98-ff0a-4119-a504-23b6eb7eba9b' width="69%">

**Materiały do wykorzystania**

- Ikony: [SVGRepo](https://svgrepo.com/)
- Kolorystyka: #1E1E1E, #0B8673, #F5FAFF
- Czcionki: [Nunito](https://fonts.google.com/specimen/Nunito), [Lilita One](https://fonts.google.com/specimen/Lilita+One)
- Avatar: [Color Avatar](https://vue-color-avatar.leoku.dev/)
   
</details>

---

<details>
   <summary>

   ### -1. **CoffiShop** / 1 os.
      
   </summary>

**Wygląd strony**

<img src='https://github.com/user-attachments/assets/2788af4e-3b1e-4c2e-9813-0629872c4d43' width="69%">

**Materiały do wykorzystania**

![Group 4(1)](https://github.com/user-attachments/assets/abe1b38f-0e28-4723-9bae-26848a46327b)

- Ikony: [SVGRepo](https://svgrepo.com/)
- Kolorystyka: #9A5D32, #F5DEB3, #B48C70, #89FD7F, #E8E8E8
- Czcionki: [Jua](https://fonts.google.com/specimen/Jua?query=Jua), [Lemon](https://fonts.google.com/specimen/Lemon?query=Lemon)
- Schemat bazy danych:
<img src='https://github.com/user-attachments/assets/d8acf8a5-ca9a-4bd8-a230-4845622a77e0' width="69%">

   
</details>

---

<details>
   <summary>

   ### 0. **Biblioteka w Książkowicach Wielkich** / 1 os.
      
   </summary>

**Wygląd strony**
   
<img src='https://github.com/user-attachments/assets/e307d1b0-8c26-44e8-a8e0-2be92c082a37' width="69%">

**Materiały do wykorzystania**

- Ikony: [SVGRepo](https://svgrepo.com/)
- Kolorystyka: #064D3F, #B2DFDA, #AB6939, #282B2A
- Czcionki: [Inika](https://fonts.google.com/specimen/Inika?query=Inika), [Inria Serif](https://fonts.google.com/specimen/Inria+Serif?query=Inria+serif) lub [Sans](https://fonts.google.com/specimen/Inria+Sans?query=Inria+sans)
- Baza danych:
```mysql
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 04, 2024 at 11:49 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `autorzy`
--

CREATE TABLE `autorzy` (
`id` int(11) NOT NULL,
`imie` varchar(15) NOT NULL,
`nazwisko` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `autorzy`
--

INSERT INTO `autorzy` (`id`, `imie`, `nazwisko`) VALUES
(1, 'Adam', 'Mickiewicz'),
(2, 'Henryk', 'Sienkiewicz');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `czytelnicy`
--

CREATE TABLE `czytelnicy` (
`id` int(11) NOT NULL,
`imie` varchar(30) NOT NULL,
`nazwisko` varchar(50) NOT NULL,
`kod` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `czytelnicy`
--

INSERT INTO `czytelnicy` (`id`, `imie`, `nazwisko`, `kod`) VALUES
(1, 'Kamil', 'Nowak', '666666'),
(2, 'Borubar', 'Kostecki', '098123'),
(3, 'Bartosz', 'Barotoszowicz', '123123'),
(4, 'Michał', 'Jachaś', '690420'),
(5, 'Jan', 'Torpeda', '120330');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
`id` int(11) NOT NULL,
`nazwa` varchar(46) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategorie`
--

INSERT INTO `kategorie` (`id`, `nazwa`) VALUES
(1, 'Sci-Fi'),
(2, 'Fantasy'),
(3, 'Historyczne'),
(4, 'Dramat');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
`id` int(11) NOT NULL,
`id_kategoria` int(11) NOT NULL,
`tytul` varchar(255) NOT NULL,
`id_autor` int(11) NOT NULL,
`id_wydawnictwo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ksiazki`
--

INSERT INTO `ksiazki` (`id`, `id_kategoria`, `tytul`, `id_autor`, `id_wydawnictwo`) VALUES
(1, 3, 'Galaktyczne lektury', 2, 1),
(2, 2, 'Ogniem i mieczem', 1, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wydawnictwa`
--

CREATE TABLE `wydawnictwa` (
`id` int(11) NOT NULL,
`nazwa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wydawnictwa`
--

INSERT INTO `wydawnictwa` (`id`, `nazwa`) VALUES
(1, 'Helion'),
(2, 'Sowa SA');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczenia`
--

CREATE TABLE `wypozyczenia` (
`id` int(20) NOT NULL,
`id_czytelnik` int(11) NOT NULL,
`id_ksiazka` int(11) NOT NULL,
`data_wypozyczenia` date NOT NULL,
`data_oddania` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wypozyczenia`
--

INSERT INTO `wypozyczenia` (`id`, `id_czytelnik`, `id_ksiazka`, `data_wypozyczenia`, `data_oddania`) VALUES
(2, 2, 1, '2024-06-05', '2024-06-30'),
(3, 1, 2, '2024-06-05', '2024-06-06'),
(4, 4, 2, '2024-06-04', '2024-06-26'),
(5, 3, 2, '2024-06-03', '2024-06-07');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `autorzy`
--
ALTER TABLE `autorzy`
ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `czytelnicy`
--
ALTER TABLE `czytelnicy`
ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
ADD PRIMARY KEY (`id`),
ADD KEY `kategoria_fk` (`id_kategoria`),
ADD KEY `autor_fk` (`id_autor`),
ADD KEY `wydawnictwo_fk` (`id_wydawnictwo`);

--
-- Indeksy dla tabeli `wydawnictwa`
--
ALTER TABLE `wydawnictwa`
ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
ADD PRIMARY KEY (`id`),
ADD KEY `czytenik_fk` (`id_czytelnik`),
ADD KEY `ksiazka_fk` (`id_ksiazka`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autorzy`
--
ALTER TABLE `autorzy`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `czytelnicy`
--
ALTER TABLE `czytelnicy`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategorie`
--
ALTER TABLE `kategorie`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ksiazki`
--
ALTER TABLE `ksiazki`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wydawnictwa`
--
ALTER TABLE `wydawnictwa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ksiazki`
--
ALTER TABLE `ksiazki`
ADD CONSTRAINT `autor_fk` FOREIGN KEY (`id_autor`) REFERENCES `autorzy` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `kategoria_fk` FOREIGN KEY (`id_kategoria`) REFERENCES `kategorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `wydawnictwo_fk` FOREIGN KEY (`id_wydawnictwo`) REFERENCES `wydawnictwa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
ADD CONSTRAINT `czytenik_fk` FOREIGN KEY (`id_czytelnik`) REFERENCES `czytelnicy` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ksiazka_fk` FOREIGN KEY (`id_ksiazka`) REFERENCES `ksiazki` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
```   
</details>

---

<details>
   <summary> 
      
   ### 1. **UFO Anomalies** / 1 os. 
      
   </summary>

   # Projekt UFO Anomalies

> <div align="right"><sub>Rysunek 1.1 - Podgląd oczekiwanej strony</sub></div>

![Podglad strony](https://user-images.githubusercontent.com/125214141/219973113-32066abc-86c5-4c45-af70-4fb416f73e57.png)

## Zawartość strony

  - Witryna napisana w języku HTML5.
  - Plik musi nazywać się index.html.
  - Zastosowany standard kodowania polskich znaków.
  - Język witryny - polski.
  - Tytuł strony - "UFO Anomalies".
  - Zastosowany zewnętrzny arkusz stylów.
  - Wykorzystanie semantycznych elementów blokowych.
  ### Nagłowek semantyczny
  - Nagłówek semantyczny posiada nagłówek stopnia pierwszego w którym umieszczony jest tekst logo 
  ### Nawigacja
  - Zawiera cztery znaczniki hiperłącza z przypisanym łączem "#"
  ### Kontent strony
  - Głowna strona kontekstu składa się z artykułu oraz elementu bocznego, które są w elemencie blokowym o id "main-wrapper".
    - #### Artykuł
      - Składa się z znacznika sekcji w którym znajdują się: znacznik nagłówka stopnia drugiego, paragraf.
    - #### Element boczny
      - Składa się z formularza w którym znajdują się nagłowek drugiego stopnia, pola wprowadzania typu: email, radio, checkbox; przycisku button, a także etykiet dla odpowiednich pól.
      - Formularz również posiada domyślny przycisk wysyłania typu submit.
      - Pola wprowadzania dla email, checkbox powinny mieć atrybut dzięki któremu są wymagane
      - Pole wprowadzania typu email powinno posiadać tekst zastępczy "Wprowadź adres email", a także atrybut wzoru, który weryfikuje poprawność wprowadzonego tekstu
        - wzór dopuszcza złożenie tekstu z dużych i małych liter alfabetu oraz cyfr, a także kropek oraz podłóg i plusów, po znaku "@" przyjmuje tylko ciąg znaków "gmail", a po znaku "." ciąg znaków "com".
      - Pola wprowadzania typu radio muszą posiadać wykorzystany atrybut "zaznaczony" dla jednego z pól.
      - Przycisk wysłania formularza posiada atrybut "wyłączony"
  ### Stópka
  - Składa się z znacznika nagłówka stopnia piątego.
  - W stópce musi się znaleźć imie i nazwisko wykonującego projekt.

## Wygląd strony

- Strona ma przypominać w jak najlepszym odwzorowaniu stronę zamieszczoną na początku dokumentu.
- Style powinny być zdefiniowane w pliku "main.css"
- Na początku dokumentu należy zdefiniować zmienne dla następujących kolorów
  - main-color: #4B4E6D
  - secondary-color: #92D8A9
  - contrast-color: #F3F3F3
  - light-color: #BECEC5
  - dark-color: #222222


  ### Znacznik body
  - Sposób wyświetlania: "elastyczny"
  - Kierunek wyświetlania elementów: kolumnowy
  - Elementy wyśrodkowane wertykalnie
  - Elementy rozłożone typem "miejsce pomiędzy" horyzontalnie
  - Odstęp wewnętrzny dla każdej ze stron poza dołem: 1vw

  ### Semantyczny znacznik nagłówkowy
  - Kolor tła: main-color
  - Promień obramowania: 2px

  ### Nagłówek pierwszego stopnia w semantycznym zniaczku nagłówkowym
  - Kolor tekstu: contrast-color
  - Tekst wyśrodkowany
  - Odstęp wewnętrzny: 15px 0;
  - Margines wyzerowany
  ### Linia pozioma
  - Margines górny i dolny: 15px;
  - Margines prawy i lewy: 30px;

  ### Element blokowy o id "main-wrapper"
  - Sposób wyświetlania: "elastyczny"
  - Wysokość 100 punktów wysokości widoku

  ### Artykuł
  - Kolor tła: main-color,
  - Szerokość ustawiona na 69 punktów szerokości widoku
  - Odstęp wewnętrzny na 2 punkty szerokości widoku

  ### Sekcja w artykule
  - Margines dolny ustawiony na 3 punkty wysokości widoku

  ### Nagłówek drugiego stopnia w sekcji artykułu
  - Kolor tekstu: contrast-color

  ### Paragraf w sekcji artykułu
  - Kolor tekstu: light-color
  - Tekst wyjustowany

  ### Element boczny
  - Kolor tła: aliceblue
  - Szerokość ustawiona na 31 punktów szerokości widoku

  ### Formularz
  - Sposób wyświetlania: "elastyczny"
  - Kierunek wyświetlania elementów: kolumnowy
  - Odstęp wewnętrzny ustawiony na 1 punkt szerokości widoku

  ### Pole email formularza
  - Wysokość ustawiona na 5 punktów wysokości widoku;
  - Odstęp wewnętrzny ustawiony na 1 punkt szerokości widoku;
  - Margines dolny ustawiony na 2.5 punkta wysokości widoku;
  - Obramowanie: 1px, kolor: #4B4E6D, pełne;
  - Kolor tekstu: dark-color
  - Promień obramowania: 2px

  ### Przycisk formularza
  - Odstęp wewnętrzny ustawiony na 2 punkty wysokości widoku
  - Margines górny i dolny ustawiony na 3 punkty wysokości widoku
  - Kolor tła: main-color
  - Obramowanie: żadne
  - Promień obramowania: 2px
  - Wielkość czcionki: 1em
  - Kolor tekstu: contrast-color

  - W trybie "wyłączony" przycisk jest wyszarzony.

  ### Nawigacja
  - Sposób wyświetlania: "elastyczny"
  - Elementy rozłożone typem "równo" horyzontalnie
  - Wysokość ustawiona na 8 punktów wysokości widoku

  ### Hiperłącze w nawigacji
  Po najechaniu na hiperłącze kolory tekstu i tła powinny się odwracać.
  - Kolor tła: main-color
  - Kolor tekstu: contrast-color
  - Szerokość obliczona odpowiednio przez podzielenie dostępnej szerokości i podzielona przez ilość elementów nawigacji
  - Tekst wyśrodkowany
  - Wysokość linii: 8 punktów wysokości widoku
  - Wielkość czcionki: 1.2em
  - Dekoracja tekstu: żadna

  ### Stópka
  - Kolor tła: dark-color
  - Kolor tekstu: contrast-color
  - Szerokość: 100%
  - Pozycja ustawiona na "lepiącą"
  - Odległość od dołu: 0
  - Odległość od lewej strony: 50%

## Skrypt strony
  
  #### Uwcześnie proszę utworzyć konto na: [ 🔗 Elasticemail](https://elasticemail.com/account#/create-account).

  #### Zaszyfrowanie danych oraz funkcja wysyłająca dane możliwe dzięki: [ 🔗 SMTPjs](https://www.smtpjs.com/).

  #### Wymagania skryptu:
  - Podłączony do strony w sekcji head
  - Opracowany na funkcjach

  #### Działanie skryptu: 
  1. Dodać wybranie elementów DOM
  2. Utworzyć funkcje sprawdzające zawartość elementów DOM.
      - Sprawdzenie czy e-mail nie jest pusty
      - Sprawdzenie jaka wartość jest zaznaczona w płci
  3. Zastosować wartości z elementów DOM
     - Gdy checkbox zostanie zaznaczony
    jego tło ma zmienić kolor odpowiedni dla wybranego pola:
        - Mężczyzna == ``steelblue``

        - Kobieta == ``hotpink``

        - Inne == ``indigo``

     a następnie przycisk "Zapisz mnie!" zostanie zmieniony na dostępny.
  
     w przeciwnym wypadku ma pozostać czarny, a tekst zmienić kolor na ``indianred``

  4. Zintegrowanie wartości do funkcji wysyłającej newsletter.

</details>

---

<details>
   <summary> 
      
   ### 2. **PHP Register** / 2 os.

   </summary>

   #### Opis ogólny:
`PHP Register` to aplikacja internetowa umożliwiająca użytkownikom rejestracje ich kont, konta te oczekują na akceptacje po stronie panelu zarządzania. Panel zarządzania posiada dodatkowe funkcjonalności takie jak: Dodanie listy zakazanych słów w nazwie użytkownika, Włączenie bezpieczeństwa hasła, Włączenie bezpieczeństwa loginu, Włączenie/Wyłączenie panelu rejestracji. Każda z akcji po włączeniu zwraca "toast" na stronie rejestracji, informując użytkowników o zaistniałej akcji. Prócz tego, gdy rejestracja zostanie wysłana, użytkownik trafia na ekran oczekiwania na którym może spróbować swoich sił w mini-grze odnajdując 3 takie same loga PHP.

#### Wizualizacja

   ![MacBook Pro 14_ - Register](https://github.com/user-attachments/assets/fbb34dd4-d9c2-4bf8-86bf-c8e05afab8e4)
   ![MacBook Pro 14_ - Control](https://github.com/user-attachments/assets/3409b70f-9e08-4ee8-8703-d4452acae343)
   ![MacBook Pro 14_ - Thanks](https://github.com/user-attachments/assets/b163aa35-4f14-45d0-9802-dab5e7cb2bd4)


#### Technologie:
- Backend: PHP.
- Baza danych: MySQL / PostgresSQL / MSSQL.
- Frontend: HTML (semantyka), CSS / Tailwind, JavaScript.

#### Struktura bazy danych:
- Baza danych musi składać się z odpowiedniej ilości encji oraz przemyślanego planu funkcjonowania aplikacji.
      
#### Funkcjonalność aplikacji:

1. **Formularz rejestracji**
   - Wysyłanie zapytań przez `POST`
   - Po wysłaniu zapytania dodającego informacje do bazy, następuje przeniesienie na ekran oczekiwania (ostatni z wizualizacji).
   - Sprawdzenie czy na pewno post został dodany do bazy danych

2. **Panel zarządzania**
   - Każdy użytkownik może zostać dodany lub odrzucony (`DELETE` lub `UPDATE` jako zapytanie do bazy danych) z kolejki oczekujących na zatwierdzenie, zapytanie `UPDATE` wyslane metodą `POST`.
   - Sprawdzenie czy na pewno post (tj. zapytanie) został zmodyfikowany w bazie danych.
   - Modyfikacja odbywa się za pomocą wskazania konkretego ID przy wyświetleniu użytkownika.

3. **Panel oczekiwania**
   - Przesłane zostaje imie rejestrującego się użytkownika by móc je wyświetlić w podziękowaniu.
   - Logika gry musi zostać zaimplementowana w języku JavaScript
   - Celem gry jest odkrycie 3 identycznych bloczków by odnaleźć logo PHP.
   - Jeżeli przy 3 odkrytych blokach nie występują bloki z logo PHP, bloczki są zakrywane i przemieszane na nowo.
   - Gracz posiada za każdym razem tylko jedną szansę trafienia 3 identycznych bloków.
   - Gdy graczowi uda się odkryć 3 identyczne loga PHP, dostaje prosty alert gratulujący użytkownikowi, gra zostaje zresetowana a licznik wygranych pojawia się w prawym górnym rogu (należy wykorzystać localstorage lub zmienne sesyjne do tego celu).

> Projekt traktowany jest jako dla 2 osób, przy czym podział prac traktuję jako część PHP / część JS. Im wiecej będzie współpracy tym lepiej :-)
     
</details>

---

<details>
   <summary> 
      
   ### 3. **CRUD Panel** / 1 os.

   </summary>

   #### Opis ogólny:
`CRUD Panel` to aplikacja internetowa umożliwiająca tworzenie, modyfikowanie i usuwanie postów za pomocą prostego panelu widocznego na przykładowym obrazku. Aplikacja polega na nauce operacji bazodanowych i modyfikacji zawartości encji w bazie danych, strona została podzielona na dwie główne części, po jednej stronie widnieje panel z trzema formularzami do dodawania, modyfikacji oraz usuwania wierszy z encji oraz po prawej wizualna reprezentacja zawartości encji.

#### Wizualizacja

   ![CRUD PHP](https://github.com/TEB-DK/Domena_aplikacji_internetowych/assets/125214141/ad22a45c-b2ac-4865-80f4-f7c1c1e01ca5)

#### Technologie:
- Backend: PHP.
- Baza danych: MySQL / PostgresSQL / MSSQL.
- Frontend: HTML (semantyka), CSS, JavaScript (opcjonalnie).

#### Struktura bazy danych (5 encji):

1. **Encja posts**:

    - post_id (klucz główny)
    - post_title
    - post_content
    - created_at
    - updated_at
      
#### Funkcjonalność aplikacji:

1. **Formularz dodajacy post**
   - Wysyłanie zapytań przez `POST`
   - Po wysłaniu zapytania dodającego informacje do bazy, następuje doliczenie wartości do zmiennej sesyjnej ( która będzie w dowolnym miejscu wyświetlona ) o ilości dodanych postów.
   - Sprawdzenie czy na pewno post został dodany do bazy danych

2. **Formularz modyfikujący post**
   - Wysyłanie zapytań za pomocą `POST`
   - Po wysłaniu zapytania modyfikującego informacje do bazy, następuje doliczenie wartości do zmiennej sesyjnej ( która będzie w dowolnym miejscu wyświetlona ) o ilości zmodyfikowanych postów.
   - Sprawdzenie czy na pewno post (tj. zapytanie) został zmodyfikowany w bazie danych.
   - Modyfikacja odbywa się za pomocą wskazania konkretego tytułu lub po przez wprowadzenie ID posta.

3. **Formularz usuwajacy post**
   - Po wysłaniu zapytania usuwającego informacje z bazy, następuje doliczenie wartości do zmiennej sesyjnej ( która będzie w dowolnym miejscu wyświetlona ) o ilości usuniętych postów.
   - Usunięcie odbywa się za pomocą wskazania konkretego tytułu lub po przez wprowadzenie ID posta.
     
  
> Najlepiej aby zmienne sesyjne wyświetlały się gdzieś w obrębie formularza do którego należą.
     
</details>

---

## Projekty `zaliczeniowe`

## Projekty `zwolnieniowe`

<details>
   <summary>
      
   ### 1. **SecureContentManager** / 2 os.
      
   </summary> 

#### Opis ogólny:
`SecureContentManager` to aplikacja internetowa zapewniająca bezpieczne zarządzanie treściami na stronie internetowej. Główne funkcje obejmują panel logowania, autoryzację i zarządzanie treściami. W trakcie wykonywania projektu zadbaj o jak najbardziej profesjonalne podejście (tj. odpowiednie nazewnictwo {nawet angielskie}, optymalizacja bazy danych, atomizacja encji), które będzie dodatkowo punktowane.

#### Technologie:
- Backend: PHP (? ostatecznie Laravel).
- Baza danych: MySQL / MSSQL.
- Frontend: HTML (semantyka), CSS, JavaScript.

#### Struktura bazy danych (5 tabel):

1. **users**
   - user_id (primary key)
   - username
   - password_hash
   - email
   - role (admin/user) {opcjonalnie wykonać dodatkową encję z podziałem ról}

2. **sessions**
   - session_id (primary key)
   - user_id (foreign key to users)
   - session_token
   - expiration_time

3. **content_categories**
   - category_id (primary key)
   - category_name

4. **content_items**
   - item_id (primary key)
   - category_id (foreign key to content_categories)
   - title
   - content
   - created_at
   - updated_at

5. **logs**
   - log_id (primary key)
   - user_id (foreign key to users)
   - action
   - timestamp

#### Funkcje aplikacji:

1. **Panel logowania:**
   - Bezpieczne przechowywanie haseł w formie hashy.
   - Generowanie i przechowywanie unikalnego tokena sesji po udanym zalogowaniu.
   - Ograniczenie liczby prób logowania w celu zabezpieczenia przed atakami typu brute-force.

2. **Panel autoryzacji:**
   - Różne poziomy dostępu (administrator, użytkownik).
   - Sprawdzanie uprawnień przed wykonaniem operacji związanych z zarządzaniem treściami.

3. **Panel zarządzania treścią:**
   - Dodawanie, edytowanie i usuwanie kategorii treści.
   - Dodawanie, edytowanie i usuwanie treści w ramach kategorii.
   - Logowanie każdej akcji w tabeli logs.

4. **Bezpieczeństwo:**
   - Używanie przygotowanych instrukcji SQL (prepared statements) w celu zapobiegania atakom SQL Injection.
   - Regularne aktualizacje tokenów sesji i ich ograniczony czas życia w celu zabezpieczenia przed atakami typu Session Fixation i Session Hijacking.
   - Wprowadzenie mechanizmu blokady konta po przekroczeniu limitu nieudanych prób logowania.

5. **Dodatkowe funkcje:**
   - Panel zmiany hasła dla użytkowników.
   - Możliwość przywracania hasła poprzez e-mail.
   - Zabezpieczenia przed atakami CSRF (Cross-Site Request Forgery) przy wykonywaniu operacji związanych z zarządzaniem treściami.

#### JavaScript

1. **Wyszukiwarka treści**
   - Dodaj funkcję wyszukiwania z wynikami w czasie rzeczywistym. Po załadowaniu wyników umożliw wyszukanie określonej treści za pomocą fragmentu tekstu wprowadzonego w pole wyszukiwarki.
3. **Walidacja formularzy**
   - Dodaj walidację w czasie rzeczywistym i interaktywne (popupy) komunikaty dla formularzy.
4. **Galeria**
   - Dodaj interaktywną galerię zdjęć z efektami przejścia między zdjęciami. Może być to prosta galeria dostępna na stronie w stópce.

</details>

</div>

<div align="right">
<blockquote>
<sub>
<sub>
<sub align="right">
   Standard akcje wakacje w Vaterlandzie<br>
   O 14 pod teatrem na popychawce [...]
</sub>
</sub>
</sub>
</blockquote>
</div>
