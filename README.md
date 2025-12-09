<div align='center'>

#  🌐 Projekty domen aplikacji 📚

</div>

> Projekty zostały podzielone na: zaliczeniowe, zadaniowe, zwolnieniowe.

<div align='justify'>

## Projekty `zadaniowe`


<details>
   <summary>

   ### -9. **Shus - Sklep z butami** / 1 os.
   
   </summary>

   **Wygląd strony**
   
   - <img width="69%" alt="MacBook Pro 14_ - 1" src="https://github.com/user-attachments/assets/3288c5e4-707e-49a2-a078-bc68cc57d454" />

   **Materiały od wykorzystania**
   - Materiały: [Pliki](https://www.dropbox.com/scl/fo/1oqqsimz841iogswqqv36/AHHhHLTj0_SP3_DzdvQpgkw?rlkey=t3izl4x06a11038mjbntv121a&st=1qno7ivh&dl=0)
   - Ikony: [SVGRepo](https://svgrepo.com/)
   - Kolorystyka: #2DA046, #E0FAD7, #3F3F3F, #FFFFFF, #000000
   - Czcionka: [Poppins](https://fonts.google.com/specimen/Poppins)
   - Baza danych:

   ```sql
CREATE DATABASE shus;
USE shus;

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT NOT NULL,
    name VARCHAR(200) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    description TEXT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

CREATE TABLE product_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(200) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL
);

CREATE TABLE favorites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

INSERT INTO categories (name) VALUES
('Futuristic'),
('TRX'),
('AeroStep'),
('VoltRun'),
('UrbanKicks'),
('TrailForge'),
('NovaSprint'),
('SkyFlex'),
('TerraMove'),
('PrimeStride'),
('MoonPulse'),
('StreetWave');

INSERT INTO products (category_id, name, price) VALUES
(1, 'Futuristic X2', 333),
(1, 'Futuristic X2 Black', 364),
(1, 'Futuristic High', 364),
(1, 'Futuristic X2 Low Blue', 400),
(2, 'TRX Classic High', 185),
(2, 'TRX Bulky', 160),
(2, 'TRX Bulky 2', 120),
(2, 'TRX Default', 100),
(2, 'TRX Casual', 120),
(2, 'TRX Bulky Moro', 689),
(3, 'AeroStep Breeze X1', 289),
(3, 'AeroStep Breeze X2', 319),
(3, 'AeroStep UltraLite', 399),
(3, 'AeroStep Flow Runner', 359),
(3, 'AeroStep CloudMax', 449),
(3, 'AeroStep WindRush', 279),
(3, 'AeroStep Phantom Walk', 379),
(3, 'AeroStep Velocity Pro', 499),
(3, 'AeroStep SoarLite', 229),
(3, 'AeroStep AirDrive', 339),
(4, 'VoltRun Bolt X1', 349),
(4, 'VoltRun Bolt X2', 389),
(4, 'VoltRun ShockWave', 459),
(4, 'VoltRun EnergyFlex', 299),
(4, 'VoltRun NitroPulse', 529),
(4, 'VoltRun ReactPro', 399),
(4, 'VoltRun IgniteMax', 449),
(4, 'VoltRun FlashStep', 279),
(4, 'VoltRun PhaseRunner', 359),
(4, 'VoltRun ElectraFlow', 429),
(5, 'UrbanKicks Classic High', 199),
(5, 'UrbanKicks StreetLow', 159),
(5, 'UrbanKicks RetroWave', 249),
(5, 'UrbanKicks MonoLite', 189),
(5, 'UrbanKicks PatchStyle', 175),
(5, 'UrbanKicks PrimeHigh', 219),
(5, 'UrbanKicks UrbanFlex', 289),
(5, 'UrbanKicks PureWhite', 149),
(5, 'UrbanKicks StreetRad', 169),
(5, 'UrbanKicks NeoGrip', 239),
(6, 'TrailForge MountainGrip', 599),
(6, 'TrailForge Summit X2', 649),
(6, 'TrailForge RidgeWalker', 529),
(6, 'TrailForge TerrainMax', 579),
(6, 'TrailForge TrekPro', 619),
(6, 'TrailForge RockTrail', 489),
(6, 'TrailForge BushRunner', 539),
(6, 'TrailForge ToughClimb', 559),
(6, 'TrailForge WildPath', 499),
(6, 'TrailForge PeakMotion', 569),
(7, 'NovaSprint SpeedX', 329),
(7, 'NovaSprint SpeedX Pro', 379),
(7, 'NovaSprint HyperRun', 449),
(7, 'NovaSprint FeatherLite', 299),
(7, 'NovaSprint AeroFast', 339),
(7, 'NovaSprint NitroBoost', 459),
(7, 'NovaSprint VectorRun', 409),
(7, 'NovaSprint SharpFlux', 289),
(7, 'NovaSprint MotionPrime', 369),
(7, 'NovaSprint AccelEdge', 399),
(8, 'SkyFlex CloudStep', 279),
(8, 'SkyFlex CloudStep X2', 309),
(8, 'SkyFlex FeatherRide', 329),
(8, 'SkyFlex SkyMax', 389),
(8, 'SkyFlex NimbusFlex', 429),
(8, 'SkyFlex SoftFlow', 259),
(8, 'SkyFlex AirRise', 349),
(8, 'SkyFlex GlideWave', 309),
(8, 'SkyFlex ComfortLine', 239),
(8, 'SkyFlex AirNova', 359),
(9, 'TerraMove EarthGrip', 469),
(9, 'TerraMove TerraCore', 499),
(9, 'TerraMove RootRunner', 389),
(9, 'TerraMove SoilFlex', 359),
(9, 'TerraMove HardTrail', 549),
(9, 'TerraMove CliffPro', 579),
(9, 'TerraMove RawTrack', 429),
(9, 'TerraMove CoreMotion', 399),
(9, 'TerraMove GeoStep', 349),
(9, 'TerraMove PrimeTrail', 519);







INSERT INTO product_images (product_id, image_url) VALUES
(1, 'img/product_1.png'),
(2, 'img/product_2.png'),
(3, 'img/product_3.png'),
(4, 'img/product_4.png'),
(5, 'img/product_5.png'),
(6, 'img/product_6.png'),
(7, 'img/product_7.png'),
(8, 'img/product_8.png'),
(9, 'img/product_9.png'),
(10, 'img/product_1.png'),
(11, 'img/product_1.png'),
(12, 'img/product_2.png'),
(13, 'img/product_3.png'),
(14, 'img/product_4.png'),
(15, 'img/product_5.png'),
(16, 'img/product_6.png'),
(17, 'img/product_7.png'),
(18, 'img/product_8.png'),
(19, 'img/product_9.png'),
(20, 'img/product_2.png'),
(21, 'img/product_1.png'),
(22, 'img/product_2.png'),
(23, 'img/product_3.png'),
(24, 'img/product_2.png'),
(25, 'img/product_2.png'),
(26, 'img/product_2.png'),
(27, 'img/product_7.png'),
(28, 'img/product_8.png'),
(29, 'img/product_9.png'),
(30, 'img/product_3.png'),
(31, 'img/product_1.png'),
(32, 'img/product_2.png'),
(33, 'img/product_3.png'),
(34, 'img/product_4.png'),
(35, 'img/product_3.png'),
(36, 'img/product_9.png'),
(37, 'img/product_7.png'),
(38, 'img/product_8.png'),
(39, 'img/product_9.png'),
(40, 'img/product_4.png'),
(41, 'img/product_4.png'),
(42, 'img/product_4.png'),
(43, 'img/product_3.png'),
(44, 'img/product_4.png'),
(45, 'img/product_5.png'),
(46, 'img/product_6.png'),
(47, 'img/product_7.png'),
(48, 'img/product_8.png'),
(49, 'img/product_4.png'),
(50, 'img/product_5.png'),
(51, 'img/product_1.png'),
(52, 'img/product_5.png'),
(53, 'img/product_3.png'),
(54, 'img/product_4.png'),
(55, 'img/product_5.png'),
(56, 'img/product_5.png'),
(57, 'img/product_5.png'),
(58, 'img/product_8.png'),
(59, 'img/product_9.png'),
(60, 'img/product_6.png'),
(61, 'img/product_1.png'),
(62, 'img/product_6.png'),
(63, 'img/product_6.png'),
(64, 'img/product_6.png'),
(65, 'img/product_5.png'),
(66, 'img/product_6.png'),
(67, 'img/product_7.png'),
(68, 'img/product_8.png'),
(69, 'img/product_9.png'),
(70, 'img/product_1.png'),
(71, 'img/product_1.png'),
(72, 'img/product_2.png'),
(73, 'img/product_3.png'),
(74, 'img/product_4.png'),
(75, 'img/product_5.png'),
(76, 'img/product_6.png'),
(77, 'img/product_7.png'),
(78, 'img/product_8.png'),
(79, 'img/product_7.png');

   ```
   

</details>


---

<details>
   <summary>

   ### -8. **Colormix - Mieszalnia farb** / 1 os.
   
   </summary>

   **Wygląd strony**
   
   - <img width="69%"  alt="MacBook Pro 14_ - 1 (3)" src="https://github.com/user-attachments/assets/3d85ad93-5569-4629-8637-a3b11ff30b32" />

   **Materiały od wykorzystania**
   - Egzamin: [Arkusz](https://ee-informatyk.pl/inf03-ee09/praktyka/INF.03-08-25.01-SG)
   - Materiały: [Pobierz](https://ee-informatyk.pl/arkusze-praktyczne/INF.03-08-25.01-SG-pliki.zip)
   - Ikony: [SVGRepo](https://svgrepo.com/)
   - Kolorystyka: Zgodna z wyglądem strony.
   - Czcionka: [Grandstander](https://fonts.google.com/specimen/Grandstander), [Hind](https://fonts.google.com/specimen/Hind)
   - Baza danych:

   ```sql
   -- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Lis 2021, 15:41
-- Wersja serwera: 10.4.6-MariaDB
-- Wersja PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `mieszalnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `Id` int(11) NOT NULL,
  `Nazwisko` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `Imie` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `Data_ur` date NOT NULL,
  `Plec` char(1) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`Id`, `Nazwisko`, `Imie`, `Data_ur`, `Plec`) VALUES
(1, 'Kowalski', 'Jan', '1995-11-12', 'm'),
(2, 'Winiarski', 'Patryk', '2000-02-04', 'm'),
(3, 'Ozimek', 'Krzysztof', '1998-05-15', 'm'),
(4, 'Nowakowski', 'Karol', '1999-12-19', 'm'),
(5, 'Malinowski', 'Mariusz', '2000-03-30', 'm'),
(6, 'Klocek', 'Joanna', '1998-10-01', 'k'),
(7, 'Skalski', 'Robert', '2001-06-22', 'm'),
(8, 'Kowal', 'Tomasz', '2001-06-22', 'm'),
(9, 'Misiak', 'Katarzyna', '1997-08-02', 'k'),
(10, 'Olszowy', 'Grzegorz', '1996-05-16', 'm'),
(11, 'Raciborska', 'Karolina', '2008-03-02', 'k'),
(12, 'Krakowiak', 'Konrad', '2003-08-22', 'm'),
(13, 'Rozenek', 'Wiktoria', '2010-02-27', 'k'),
(14, 'Paluch', 'Tomasz', '2010-05-01', 'm'),
(15, 'Burek', 'Ilona', '2000-09-11', 'k'),
(16, 'Kotek', 'Patryk', '2004-11-09', 'm'),
(17, 'Zebzda', 'Adam', '2010-12-07', 'm');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id` int(11) NOT NULL,
  `kod_koloru` varchar(7) COLLATE utf8_polish_ci NOT NULL,
  `data_odbioru` date NOT NULL,
  `pojemnosc` int(11) NOT NULL,
  `id_klienta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`id`, `kod_koloru`, `data_odbioru`, `pojemnosc`, `id_klienta`) VALUES
(1, 'FFFFFF', '2021-11-07', 100, 3),
(2, '769944', '2021-10-12', 800, 1),
(3, '1b69aa', '2021-08-18', 800, 3),
(4, '11c153', '2021-09-19', 1000, 3),
(5, 'aa6a43', '2021-09-21', 500, 5),
(6, 'f6a133', '2021-08-24', 250, 8),
(7, '0fc3c5', '2021-11-06', 1000, 2),
(8, 'd8fafa', '2021-10-03', 800, 9),
(9, 'b7e284', '2021-10-09', 100, 11),
(10, '616ff9', '2021-12-12', 800, 17),
(11, 'c971f2', '2021-09-11', 100, 13),
(12, '3df557', '2021-11-10', 1000, 7),
(13, '707270', '2021-10-18', 800, 4),
(14, 'fb788b', '2021-10-24', 250, 8),
(15, 'e7ede5', '2021-08-26', 250, 6),
(16, '446784', '2021-08-21', 100, 14),
(17, 'ef5c03', '2021-09-18', 250, 12),
(18, 'b68e2e', '2021-09-13', 100, 9),
(19, '7139a1', '2021-08-19', 1000, 5),
(20, '1d9dff', '2021-11-21', 1000, 17),
(21, 'e43624', '2021-11-22', 500, 16),
(22, '2f2727', '2021-10-29', 1000, 11),
(23, '952f24', '2021-09-20', 250, 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
   ```
   

</details>

---

<details>
   <summary>

   ### -7. **Gamelypso - Portal o grach** / 1 os.
   
   </summary>

   **Wygląd strony**
   
   - <img width="69%" alt="MacBook Pro 14_ - inf_03_2025_06_01_SG (1)" src="https://github.com/user-attachments/assets/6ede8e93-9c20-425a-a1ff-a428b7944feb" />

   **Materiały od wykorzystania**
   - Egzamin: [Arkusz](https://www.praktycznyegzamin.pl/inf03ee09e14/praktyka/file/arkusze/2025/lato/inf_03_2025_06_01_SG_kolor.pdf)
   - Materiały: [Pobierz](https://www.dropbox.com/scl/fo/45mlp5g8a8jgchoc2dk8u/AGIzR7asEXCDc38xqywAp1A?rlkey=huuywhcb7j6zq0gi488st34vj&st=833dt0c0&dl=0)
   - Ikony: [SVGRepo](https://svgrepo.com/)
   - Kolorystyka: #4B0081, #F4674D, #FAFAFA, #171717, #5E5E5E, #D9D9D9, #A2A2A2
   - Czcionka: [Joan](https://fonts.google.com/specimen/Joan)
   

</details>


---

<details>
   <summary>

   ### -6. **PrzeRZUT - Usługi transportowe** / 1 os.
   
   </summary>

   **Wygląd strony**

   - <img width="69%" alt="Bettered - INF_03_2025_06_04_SG" src="https://github.com/user-attachments/assets/987c8943-83a3-41b0-a672-8d3febaab507" />

   **Materiały od wykorzystania**
   - Egzamin: [Arkusz](https://www.praktycznyegzamin.pl/inf03ee09e14/praktyka/file/arkusze/2025/lato/inf_03_2025_06_04_SG_kolor.pdf)
   - Ikony: [SVGRepo](https://svgrepo.com/)
   - Logo: <img height="300" alt="PrzeRZUT" src="https://github.com/user-attachments/assets/196cd0be-71f3-4dc5-9c53-c15bd487b3be" />
   - Ducato: <img height="300" alt="ducato 1" src="https://github.com/user-attachments/assets/bce2a3ff-2431-4e66-8a9f-8f0c6a6ea104" />
   - Kolorystyka: #3CA666, #0A6446, #B7B7B7, #222222
   - Czcionka: Arial
   

</details>

---

<details>
   <summary>

   ### -5. **Futurit - Kursy komputerowe** / 1 os.
      
   </summary>

   **Wygląd strony**

   - <img align='center' width="69%" alt="MacBook Pro 14_ - Strona główna" src="https://github.com/user-attachments/assets/27147f3b-e0d9-4920-ae09-4f00a5257744" />
   - <img align='center' width="69%" alt="MacBook Pro 14_ - Kalkulator rat" src="https://github.com/user-attachments/assets/862358ad-e55c-428e-9e5b-01de8e191bf0" />
   - <img align='center' width="69%" alt="MacBook Pro 14_ - Nasz partner" src="https://github.com/user-attachments/assets/7e4fb7c9-5134-4c0e-9a56-39214b9a06ad" />

   **Materiały od wykorzystania**
   - Ikony: [SVGRepo](https://svgrepo.com/)
   - Logo: <img align='center' width="312" height="115" alt="LOGO (1)" src="https://github.com/user-attachments/assets/ba5e4192-cb67-4ada-9306-887301d18d98" />
   - Tło mapy: <img align='center' width="225" height="79" alt="mapa" src="https://github.com/user-attachments/assets/71de1c0b-3cdf-4ab1-b57c-8e6ebaf5f5a9" />
   - Tło headera: <img align='center' height="100" alt="heading_bg" src="https://github.com/user-attachments/assets/05907420-fb08-4f53-9bf5-b3602198a61e" />
   - Kolorystyka: #000000, #4B4B4B, #EAC100, #FAFAFA, #61DBFB, #42B883, #787CB5, #BC0B15, #D9D9D9
   - Czcionka: [Inter](https://fonts.google.com/specimen/Inter)
   - Baza danych:
```sql
-- Tworzenie bazy danych
CREATE DATABASE futurit;
USE futurit;

-- Tabela: Kursy
CREATE TABLE kursy (
    id_kursu INT AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(100) NOT NULL,
    cena DECIMAL(10, 2) NOT NULL,
    czas_trwania VARCHAR(50) NOT NULL
);

-- Tabela: Kontakt
CREATE TABLE kontakt (
    id_kontaktu INT AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(50) NOT NULL,
    numer_telefonu VARCHAR(20),
    tresc_wiadomosci TEXT,
    nawiazany BOOLEAN DEFAULT FALSE
);
-- Wstawienie przykładowych kursów
INSERT INTO kursy (nazwa, cena, czas_trwania)
VALUES
('React', 499.99, '6 tygodni'),
('Vue.JS', 699.00, '8 tygodni'),
('PHP', 299.50, '4 tygodnie');

-- Wstawienie przykładowych kontaktów
INSERT INTO kontakt (imie, numer_telefonu, tresc_wiadomosci, nawiazany)
VALUES
('Anna', '123456789', 'Chciałabym zapisać się na kurs Pythona.', TRUE),
('Marek', '987654321', 'Czy są dostępne zniżki dla studentów?', FALSE);

```


   **Polecenie do skryptu**
   
   `Na podstronie Kalkulator rat należy wykorzystać język Javascript do obliczenia miesięcznej raty za wybrane kursy, jeżeli żaden kurs nie zostanie wybrany, należy wyświetlić alert z odpowiednim komunikatem po kliknięciu przycisku "Oblicz". Liczba rat musi być mniejsza bądź równa 36 ale większa niż 1, aby możliwe było wyliczenie raty. Po kliknięciu checkbox'a wybierającego kurs, należy zaktualizować dynamicznie pole kalkulacyjne znajdujące się pod polem wprowadzenia ilości rat`


</details>

---

<details>
   <summary>

   ### -4. **Time & Date Page** / 1 os.
      
   </summary>

   **Wygląd strony**

   <img width="69%" alt="timedate" src="https://github.com/user-attachments/assets/6b482917-4375-416d-9ed2-c736333079b3" />

   **Materiały od wykorzystania**
   - Ikony: [SVGRepo](https://svgrepo.com/)
   - Tło: <img align='middle' width="30%" alt='xd' src='https://github.com/user-attachments/assets/8d6abdd9-8198-4ef8-8d58-16285fd766b4' />

   <details>
      <summary>Baza danych</summary>
      
```sql
   -- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Paź 06, 2025 at 08:27 AM
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
-- Database: `timeanddate`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `imieniny`
--

CREATE TABLE `imieniny` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `imiona` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `imieniny`
--

INSERT INTO `imieniny` (`id`, `data`, `imiona`) VALUES
(1, '2024-01-01', 'Monika, Agnieszka, Barnaba, Tekla'),
(2, '2024-01-02', 'Marta, Aleksandra'),
(3, '2024-01-03', 'Sylwia, Oskar, Barnaba, Artur'),
(4, '2024-01-04', 'Mieczysław, Andrzej'),
(5, '2024-01-05', 'Agnieszka, Jadwiga'),
(6, '2024-01-06', 'Dominika, Kamil'),
(7, '2024-01-07', 'Agnieszka, Wojciech, Renata, Bartosz'),
(8, '2024-01-08', 'Igor, Artur, Krzysztof, Marta'),
(9, '2024-01-09', 'Mieczysław, Tekla, Kazimiera'),
(10, '2024-01-10', 'Eugeniusz, Kazimiera'),
(11, '2024-01-11', 'Igor, Andrzej'),
(12, '2024-01-12', 'Tekla, Natalia, Patrycja'),
(13, '2024-01-13', 'Sylwia, Jadwiga, Bianka'),
(14, '2024-01-14', 'Wiktoria, Blanka'),
(15, '2024-01-15', 'Stanisław, Lucyna, Kazimiera'),
(16, '2024-01-16', 'Antoni, Tomasz'),
(17, '2024-01-17', 'Paulina, Bianka, Magdalena, Dominik'),
(18, '2024-01-18', 'Nadia, Przemysław, Henryk'),
(19, '2024-01-19', 'Roman, Grażyna, Radosław'),
(20, '2024-01-20', 'Barbara, Hubert'),
(21, '2024-01-21', 'Feliks, Halina'),
(22, '2024-01-22', 'Liliana, Dominika'),
(23, '2024-01-23', 'Bianka, Tekla'),
(24, '2024-01-24', 'Sebastian, Nadia, Lidia'),
(25, '2024-01-25', 'Karina, Wiktoria'),
(26, '2024-01-26', 'Kacper, Urszula'),
(27, '2024-01-27', 'Patryk, Marek, Helena, Stanisław'),
(28, '2024-01-28', 'Joela, Rafał, Antoni, Angelika'),
(29, '2024-01-29', 'Adam, Bianka'),
(30, '2024-01-30', 'Sebastian, Damian, Wojciech'),
(31, '2024-01-31', 'Patryk, Roksana'),
(32, '2024-02-01', 'Dominika, Honorata'),
(33, '2024-02-02', 'Kazimiera, Tamara'),
(34, '2024-02-03', 'Urszula, Zofia, Patrycja'),
(35, '2024-02-04', 'Bartosz, Tamara, Patrycja, Bartłomiej'),
(36, '2024-02-05', 'Tymon, Marek, Tomasz'),
(37, '2024-02-06', 'Lucyna, Aleksandra'),
(38, '2024-02-07', 'Czesław, Wojciech'),
(39, '2024-02-08', 'Lucyna, Czesław, Leszek, Andrzej'),
(40, '2024-02-09', 'Jan, Lidia, Marta, Aleksandra'),
(41, '2024-02-10', 'Szymon, Jadwiga, Emil, Ewa'),
(42, '2024-02-11', 'Natalia, Przemysław'),
(43, '2024-02-12', 'Celestyna, Patryk'),
(44, '2024-02-13', 'Zbigniew, Zofia, Sabina'),
(45, '2024-02-14', 'Zbigniew, Adam, Mariusz'),
(46, '2024-02-15', 'Dominik, Maria, Patryk'),
(47, '2024-02-16', 'Monika, Patryk, Rafał, Emil'),
(48, '2024-02-17', 'Feliks, Marek, Daria'),
(49, '2024-02-18', 'Halina, Paweł'),
(50, '2024-02-19', 'Tomasz, Anna'),
(51, '2024-02-20', 'Aleksy, Lucyna, Kamil, Eugeniusz'),
(52, '2024-02-21', 'Kamil, Sylwia'),
(53, '2024-02-22', 'Weronika, Milena, Sebastian, Kamil'),
(54, '2024-02-23', 'Renata, Natalia, Karina, Eugeniusz'),
(55, '2024-02-24', 'Artur, Władysław'),
(56, '2024-02-25', 'Anna, Zbigniew, Roksana, Filip'),
(57, '2024-02-26', 'Monika, Lidia'),
(58, '2024-02-27', 'Marzena, Elżbieta, Dawid'),
(59, '2024-02-28', 'Magdalena, Antoni'),
(60, '2024-02-29', 'Stefania, Zofia, Eugeniusz'),
(61, '2024-03-01', 'Feliks, Joanna, Hubert, Jakub'),
(62, '2024-03-02', 'Joela, Lucyna, Mariusz, Stanisław'),
(63, '2024-03-03', 'Patrycja, Artur, Emil'),
(64, '2024-03-04', 'Damian, Renata, Bartosz, Marianna'),
(65, '2024-03-05', 'Kacper, Bartłomiej, Karina'),
(66, '2024-03-06', 'Grzegorz, Marcin, Paulina'),
(67, '2024-03-07', 'Marta, Zofia'),
(68, '2024-03-08', 'Katarzyna, Mieczysław, Dominik'),
(69, '2024-03-09', 'Mieczysław, Marta'),
(70, '2024-03-10', 'Helena, Radosław'),
(71, '2024-03-11', 'Elżbieta, Dominika, Zofia, Małgorzata'),
(72, '2024-03-12', 'Helena, Łukasz, Marzena'),
(73, '2024-03-13', 'Kacper, Filip, Patrycja'),
(74, '2024-03-14', 'Joanna, Aleksy, Roman, Jakub'),
(75, '2024-03-15', 'Bronisław, Jakub'),
(76, '2024-03-16', 'Grażyna, Dorota, Hubert'),
(77, '2024-03-17', 'Wiktoria, Andrzej, Piotr'),
(78, '2024-03-18', 'Antoni, Ewa, Oskar'),
(79, '2024-03-19', 'Marek, Dorota, Elżbieta, Jan'),
(80, '2024-03-20', 'Daria, Genowefa, Sylwia, Angelika'),
(81, '2024-03-21', 'Grażyna, Rafał'),
(82, '2024-03-22', 'Aleksandra, Andrzej, Justyna'),
(83, '2024-03-23', 'Adam, Angelika, Helena'),
(84, '2024-03-24', 'Kazimiera, Liliana, Dominik'),
(85, '2024-03-25', 'Ewa, Bartłomiej'),
(86, '2024-03-26', 'Milena, Maria, Jadwiga, Emil'),
(87, '2024-03-27', 'Joela, Piotr'),
(88, '2024-03-28', 'Mateusz, Patrycja, Jan'),
(89, '2024-03-29', 'Joela, Bianka'),
(90, '2024-03-30', 'Sabina, Lucyna'),
(91, '2024-03-31', 'Izabela, Andrzej, Igor'),
(92, '2024-04-01', 'Bronisław, Wojciech, Hubert, Bartosz'),
(93, '2024-04-02', 'Natalia, Grażyna, Halina'),
(94, '2024-04-03', 'Elżbieta, Leszek'),
(95, '2024-04-04', 'Artur, Elżbieta, Czesław, Tamara'),
(96, '2024-04-05', 'Ewa, Leszek'),
(97, '2024-04-06', 'Kamil, Liliana, Mariusz'),
(98, '2024-04-07', 'Elżbieta, Łukasz'),
(99, '2024-04-08', 'Blanka, Justyna'),
(100, '2024-04-09', 'Zbigniew, Zofia'),
(101, '2024-04-10', 'Marzena, Jan, Paulina, Dawid'),
(102, '2024-04-11', 'Leszek, Zbigniew'),
(103, '2024-04-12', 'Henryk, Magdalena'),
(104, '2024-04-13', 'Hubert, Leszek, Dawid'),
(105, '2024-04-14', 'Tamara, Lucyna, Karolina, Kacper'),
(106, '2024-04-15', 'Tamara, Marzena, Lucyna, Tymon'),
(107, '2024-04-16', 'Kacper, Marek'),
(108, '2024-04-17', 'Tomasz, Tamara, Emil'),
(109, '2024-04-18', 'Maria, Tomasz'),
(110, '2024-04-19', 'Dawid, Dorota, Helena, Rafał'),
(111, '2024-04-20', 'Kamil, Lucyna'),
(112, '2024-04-21', 'Emilia, Zofia'),
(113, '2024-04-22', 'Karina, Izabela'),
(114, '2024-04-23', 'Michał, Nadia'),
(115, '2024-04-24', 'Radosław, Weronika, Jacek, Kazimiera'),
(116, '2024-04-25', 'Mariusz, Maria, Kacper, Stefania'),
(117, '2024-04-26', 'Weronika, Hubert, Sylwia, Aleksandra'),
(118, '2024-04-27', 'Monika, Sylwia, Czesław'),
(119, '2024-04-28', 'Natalia, Urszula, Izabela, Stanisław'),
(120, '2024-04-29', 'Bartosz, Daria'),
(121, '2024-04-30', 'Patryk, Sebastian'),
(122, '2024-05-01', 'Kamil, Filip, Angelina'),
(123, '2024-05-02', 'Jadwiga, Sebastian'),
(124, '2024-05-03', 'Nadia, Tekla, Barbara'),
(125, '2024-05-04', 'Liliana, Feliks'),
(126, '2024-05-05', 'Sebastian, Lucyna'),
(127, '2024-05-06', 'Barnaba, Michał'),
(128, '2024-05-07', 'Radosław, Andrzej, Wojciech, Maria'),
(129, '2024-05-08', 'Helena, Damian'),
(130, '2024-05-09', 'Artur, Małgorzata'),
(131, '2024-05-10', 'Leszek, Dominik, Iwona'),
(132, '2024-05-11', 'Joanna, Barbara, Marianna'),
(133, '2024-05-12', 'Celestyna, Barbara, Wiktoria'),
(134, '2024-05-13', 'Patryk, Angelika'),
(135, '2024-05-14', 'Sylwia, Wiktoria, Władysław, Wojciech'),
(136, '2024-05-15', 'Henryk, Czesław, Natalia'),
(137, '2024-05-16', 'Kinga, Genowefa'),
(138, '2024-05-17', 'Piotr, Agnieszka'),
(139, '2024-05-18', 'Barnaba, Liliana'),
(140, '2024-05-19', 'Genowefa, Kacper, Barnaba'),
(141, '2024-05-20', 'Urszula, Kinga'),
(142, '2024-05-21', 'Sylwia, Bianka, Małgorzata, Liliana'),
(143, '2024-05-22', 'Marta, Renata, Stefania'),
(144, '2024-05-23', 'Emilia, Marianna, Honorata'),
(145, '2024-05-24', 'Marta, Agnieszka'),
(146, '2024-05-25', 'Grażyna, Jan, Liliana, Tekla'),
(147, '2024-05-26', 'Feliks, Tekla'),
(148, '2024-05-27', 'Marek, Łukasz, Jan'),
(149, '2024-05-28', 'Milena, Rafał, Liliana, Agnieszka'),
(150, '2024-05-29', 'Lucyna, Beata'),
(151, '2024-05-30', 'Lucyna, Małgorzata, Sylwia, Zbigniew'),
(152, '2024-05-31', 'Emilia, Antoni, Bronisław'),
(153, '2024-06-01', 'Paweł, Stanisław, Łukasz'),
(154, '2024-06-02', 'Sabina, Roman'),
(155, '2024-06-03', 'Angelina, Barbara'),
(156, '2024-06-04', 'Paweł, Anna, Grzegorz, Kazimiera'),
(157, '2024-06-05', 'Patryk, Aleksy, Barnaba, Kacper'),
(158, '2024-06-06', 'Lidia, Paweł'),
(159, '2024-06-07', 'Kacper, Liliana'),
(160, '2024-06-08', 'Tamara, Hubert, Blanka, Paulina'),
(161, '2024-06-09', 'Weronika, Kamil, Marianna, Kacper'),
(162, '2024-06-10', 'Roksana, Jan, Igor'),
(163, '2024-06-11', 'Dominik, Joanna, Grażyna'),
(164, '2024-06-12', 'Kacper, Bianka, Oskar'),
(165, '2024-06-13', 'Beata, Jacek, Dawid, Weronika'),
(166, '2024-06-14', 'Dominik, Nadia, Anna'),
(167, '2024-06-15', 'Izabela, Karolina, Paweł'),
(168, '2024-06-16', 'Stanisław, Bartłomiej, Roksana, Adam'),
(169, '2024-06-17', 'Michał, Oskar, Patrycja'),
(170, '2024-06-18', 'Jakub, Celestyna, Barnaba, Joela'),
(171, '2024-06-19', 'Magdalena, Izabela, Łukasz, Hubert'),
(172, '2024-06-20', 'Henryk, Liliana, Jadwiga, Stefania'),
(173, '2024-06-21', 'Oskar, Marianna'),
(174, '2024-06-22', 'Kazimiera, Renata'),
(175, '2024-06-23', 'Agnieszka, Barbara'),
(176, '2024-06-24', 'Jakub, Jacek'),
(177, '2024-06-25', 'Tomasz, Krzysztof'),
(178, '2024-06-26', 'Roman, Grażyna, Bartosz, Igor'),
(179, '2024-06-27', 'Szymon, Jan, Angelika'),
(180, '2024-06-28', 'Bartłomiej, Damian'),
(181, '2024-06-29', 'Emil, Feliks'),
(182, '2024-06-30', 'Władysław, Andrzej'),
(183, '2024-07-01', 'Beata, Genowefa'),
(184, '2024-07-02', 'Grzegorz, Adam, Ewa, Wojciech'),
(185, '2024-07-03', 'Blanka, Paulina'),
(186, '2024-07-04', 'Aleksandra, Genowefa, Adam'),
(187, '2024-07-05', 'Mariusz, Wojciech, Zbigniew, Tamara'),
(188, '2024-07-06', 'Jacek, Stefania, Aleksy'),
(189, '2024-07-07', 'Andrzej, Nadia, Dominik, Marcin'),
(190, '2024-07-08', 'Czesław, Jakub'),
(191, '2024-07-09', 'Lucyna, Emil, Angelika'),
(192, '2024-07-10', 'Tekla, Feliks, Władysław, Grzegorz'),
(193, '2024-07-11', 'Przemysław, Marzena, Tekla'),
(194, '2024-07-12', 'Helena, Bartosz, Izabela'),
(195, '2024-07-13', 'Urszula, Liliana'),
(196, '2024-07-14', 'Artur, Magdalena, Aleksandra'),
(197, '2024-07-15', 'Dominika, Sabina'),
(198, '2024-07-16', 'Natalia, Radosław, Patrycja, Zofia'),
(199, '2024-07-17', 'Piotr, Liliana, Artur'),
(200, '2024-07-18', 'Krzysztof, Elżbieta, Karolina'),
(201, '2024-07-19', 'Sabina, Feliks, Leszek'),
(202, '2024-07-20', 'Katarzyna, Liliana, Eugeniusz, Roman'),
(203, '2024-07-21', 'Mateusz, Anna, Wiktoria'),
(204, '2024-07-22', 'Emil, Sabina, Liliana'),
(205, '2024-07-23', 'Rafał, Czesław, Barnaba'),
(206, '2024-07-24', 'Genowefa, Stanisław, Marta, Filip'),
(207, '2024-07-25', 'Urszula, Paweł'),
(208, '2024-07-26', 'Agnieszka, Sabina, Daria'),
(209, '2024-07-27', 'Oskar, Genowefa, Jan, Aleksy'),
(210, '2024-07-28', 'Milena, Adam'),
(211, '2024-07-29', 'Henryk, Rafał'),
(212, '2024-07-30', 'Tymon, Mieczysław'),
(213, '2024-07-31', 'Hubert, Agnieszka, Magdalena, Marek'),
(214, '2024-08-01', 'Aleksandra, Adam, Justyna'),
(215, '2024-08-02', 'Lucyna, Bianka'),
(216, '2024-08-03', 'Patrycja, Tomasz, Roksana'),
(217, '2024-08-04', 'Eugeniusz, Bianka, Tekla'),
(218, '2024-08-05', 'Angelina, Nadia, Magdalena'),
(219, '2024-08-06', 'Katarzyna, Czesław, Artur'),
(220, '2024-08-07', 'Emilia, Marta'),
(221, '2024-08-08', 'Zofia, Władysław, Bartłomiej, Barbara'),
(222, '2024-08-09', 'Angelika, Renata'),
(223, '2024-08-10', 'Henryk, Natalia'),
(224, '2024-08-11', 'Joanna, Jakub'),
(225, '2024-08-12', 'Monika, Dawid, Patrycja, Adam'),
(226, '2024-08-13', 'Angelina, Feliks, Karina, Joela'),
(227, '2024-08-14', 'Stanisław, Czesław, Bartosz, Monika'),
(228, '2024-08-15', 'Marianna, Sylwia'),
(229, '2024-08-16', 'Agnieszka, Marianna, Roman, Oskar'),
(230, '2024-08-17', 'Tymon, Bartosz, Renata'),
(231, '2024-08-18', 'Mieczysław, Damian'),
(232, '2024-08-19', 'Angelika, Sylwia, Igor, Feliks'),
(233, '2024-08-20', 'Blanka, Patryk, Zbigniew'),
(234, '2024-08-21', 'Celestyna, Dawid'),
(235, '2024-08-22', 'Emilia, Rafał'),
(236, '2024-08-23', 'Hubert, Karina, Zofia'),
(237, '2024-08-24', 'Marek, Daria, Maria, Blanka'),
(238, '2024-08-25', 'Honorata, Filip, Sylwia'),
(239, '2024-08-26', 'Lidia, Sebastian, Nadia'),
(240, '2024-08-27', 'Radosław, Natalia, Paweł'),
(241, '2024-08-28', 'Antoni, Grzegorz'),
(242, '2024-08-29', 'Urszula, Jacek, Kazimiera, Rafał'),
(243, '2024-08-30', 'Adam, Paweł, Honorata'),
(244, '2024-08-31', 'Mieczysław, Urszula, Roksana, Liliana'),
(245, '2024-09-01', 'Nadia, Jadwiga'),
(246, '2024-09-02', 'Marcin, Angelika, Emil'),
(247, '2024-09-03', 'Dawid, Jacek, Kacper'),
(248, '2024-09-04', 'Daria, Agnieszka, Szymon'),
(249, '2024-09-05', 'Justyna, Filip, Patrycja'),
(250, '2024-09-06', 'Genowefa, Lucyna, Daria'),
(251, '2024-09-07', 'Zbigniew, Igor, Tekla'),
(252, '2024-09-08', 'Maria, Grzegorz, Grażyna, Magdalena'),
(253, '2024-09-09', 'Aleksy, Piotr'),
(254, '2024-09-10', 'Wojciech, Eugeniusz, Marzena'),
(255, '2024-09-11', 'Jakub, Marek, Bartosz, Filip'),
(256, '2024-09-12', 'Celestyna, Katarzyna, Jadwiga'),
(257, '2024-09-13', 'Marta, Jan, Damian'),
(258, '2024-09-14', 'Marianna, Hubert'),
(259, '2024-09-15', 'Karina, Jakub, Dominik, Mariusz'),
(260, '2024-09-16', 'Andrzej, Czesław, Dominik'),
(261, '2024-09-17', 'Wiktoria, Igor, Tomasz'),
(262, '2024-09-18', 'Marianna, Angelina, Dominika'),
(263, '2024-09-19', 'Aleksy, Grażyna'),
(264, '2024-09-20', 'Paulina, Czesław, Rafał'),
(265, '2024-09-21', 'Justyna, Grażyna, Patrycja, Barnaba'),
(266, '2024-09-22', 'Tekla, Aleksy, Mieczysław'),
(267, '2024-09-23', 'Zbigniew, Izabela, Dorota, Nadia'),
(268, '2024-09-24', 'Halina, Dominika'),
(269, '2024-09-25', 'Beata, Weronika, Maria'),
(270, '2024-09-26', 'Rafał, Joanna, Tekla, Barbara'),
(271, '2024-09-27', 'Dominik, Halina'),
(272, '2024-09-28', 'Joanna, Sebastian, Emil, Filip'),
(273, '2024-09-29', 'Maria, Roman'),
(274, '2024-09-30', 'Jakub, Mateusz, Michał'),
(275, '2024-10-01', 'Justyna, Ewa, Angelina'),
(276, '2024-10-02', 'Monika, Honorata, Zofia'),
(277, '2024-10-03', 'Filip, Helena, Roman'),
(278, '2024-10-04', 'Patryk, Ewa, Natalia, Kazimiera'),
(279, '2024-10-05', 'Weronika, Magdalena, Angelika, Paulina'),
(280, '2024-10-06', 'Eugeniusz, Krzysztof, Stanisław, Zbigniew'),
(281, '2024-10-07', 'Marta, Władysław, Grzegorz, Bianka'),
(282, '2024-10-08', 'Michał, Weronika, Mieczysław'),
(283, '2024-10-09', 'Marianna, Dawid, Henryk'),
(284, '2024-10-10', 'Jacek, Barnaba'),
(285, '2024-10-11', 'Eugeniusz, Karolina'),
(286, '2024-10-12', 'Patrycja, Lucyna, Hubert, Magdalena'),
(287, '2024-10-13', 'Marzena, Beata'),
(288, '2024-10-14', 'Helena, Kinga, Anna, Piotr'),
(289, '2024-10-15', 'Damian, Zbigniew, Jakub'),
(290, '2024-10-16', 'Małgorzata, Dominika, Izabela'),
(291, '2024-10-17', 'Izabela, Igor, Tomasz, Helena'),
(292, '2024-10-18', 'Dominika, Lucyna, Bronisław, Celestyna'),
(293, '2024-10-19', 'Mieczysław, Hubert, Genowefa, Renata'),
(294, '2024-10-20', 'Monika, Artur, Marta'),
(295, '2024-10-21', 'Natalia, Urszula, Honorata, Iwona'),
(296, '2024-10-22', 'Elżbieta, Joela'),
(297, '2024-10-23', 'Zbigniew, Czesław, Honorata'),
(298, '2024-10-24', 'Izabela, Michał, Paulina, Adam'),
(299, '2024-10-25', 'Weronika, Igor, Jan, Urszula'),
(300, '2024-10-26', 'Artur, Szymon, Michał, Magdalena'),
(301, '2024-10-27', 'Barbara, Paweł, Barnaba, Roksana'),
(302, '2024-10-28', 'Angelina, Agnieszka, Jadwiga, Dominika'),
(303, '2024-10-29', 'Milena, Roman, Mieczysław, Katarzyna'),
(304, '2024-10-30', 'Honorata, Urszula, Roman, Barbara'),
(305, '2024-10-31', 'Jakub, Grzegorz'),
(306, '2024-11-01', 'Michał, Tekla, Justyna, Leszek'),
(307, '2024-11-02', 'Sebastian, Stefania, Filip'),
(308, '2024-11-03', 'Jakub, Emilia'),
(309, '2024-11-04', 'Liliana, Roksana, Kacper'),
(310, '2024-11-05', 'Liliana, Kinga'),
(311, '2024-11-06', 'Piotr, Damian, Szymon'),
(312, '2024-11-07', 'Hubert, Jan, Stefania'),
(313, '2024-11-08', 'Małgorzata, Tomasz, Jadwiga, Tamara'),
(314, '2024-11-09', 'Roksana, Monika, Feliks'),
(315, '2024-11-10', 'Łukasz, Honorata, Anna'),
(316, '2024-11-11', 'Artur, Adam, Piotr, Ewa'),
(317, '2024-11-12', 'Grzegorz, Lidia'),
(318, '2024-11-13', 'Emil, Szymon, Przemysław, Michał'),
(319, '2024-11-14', 'Karolina, Urszula'),
(320, '2024-11-15', 'Joanna, Izabela, Michał, Igor'),
(321, '2024-11-16', 'Paulina, Agnieszka, Przemysław'),
(322, '2024-11-17', 'Genowefa, Marzena, Radosław, Kinga'),
(323, '2024-11-18', 'Dominik, Maria, Piotr'),
(324, '2024-11-19', 'Marta, Milena'),
(325, '2024-11-20', 'Adam, Paulina'),
(326, '2024-11-21', 'Nadia, Natalia, Szymon, Bartosz'),
(327, '2024-11-22', 'Łukasz, Radosław, Urszula'),
(328, '2024-11-23', 'Nadia, Mateusz, Jakub'),
(329, '2024-11-24', 'Tomasz, Dominik'),
(330, '2024-11-25', 'Sabina, Grażyna'),
(331, '2024-11-26', 'Łukasz, Czesław, Aleksandra, Zofia'),
(332, '2024-11-27', 'Feliks, Celestyna, Liliana'),
(333, '2024-11-28', 'Daria, Bronisław, Kamil'),
(334, '2024-11-29', 'Honorata, Anna, Izabela'),
(335, '2024-11-30', 'Weronika, Milena, Mieczysław, Leszek'),
(336, '2024-12-01', 'Filip, Natalia, Marcin, Rafał'),
(337, '2024-12-02', 'Emilia, Liliana, Dominik'),
(338, '2024-12-03', 'Bianka, Tomasz, Roksana, Grażyna'),
(339, '2024-12-04', 'Marzena, Roman, Sabina, Dominika'),
(340, '2024-12-05', 'Barbara, Tamara, Czesław'),
(341, '2024-12-06', 'Radosław, Kazimiera, Bianka'),
(342, '2024-12-07', 'Hubert, Celestyna, Honorata'),
(343, '2024-12-08', 'Natalia, Szymon, Małgorzata, Joanna'),
(344, '2024-12-09', 'Mieczysław, Liliana, Dorota, Blanka'),
(345, '2024-12-10', 'Dorota, Mariusz, Tomasz'),
(346, '2024-12-11', 'Aleksy, Iwona'),
(347, '2024-12-12', 'Bartłomiej, Natalia, Helena'),
(348, '2024-12-13', 'Bronisław, Lucyna, Daria'),
(349, '2024-12-14', 'Damian, Tymon, Bartłomiej, Magdalena'),
(350, '2024-12-15', 'Liliana, Oskar, Rafał'),
(351, '2024-12-16', 'Tamara, Przemysław, Bartosz'),
(352, '2024-12-17', 'Artur, Małgorzata, Henryk'),
(353, '2024-12-18', 'Marzena, Przemysław'),
(354, '2024-12-19', 'Izabela, Dominika, Czesław, Jadwiga'),
(355, '2024-12-20', 'Dorota, Eugeniusz, Sebastian'),
(356, '2024-12-21', 'Dorota, Michał, Joela, Damian'),
(357, '2024-12-22', 'Agnieszka, Barbara, Roksana'),
(358, '2024-12-23', 'Halina, Wiktoria'),
(359, '2024-12-24', 'Paweł, Iwona, Angelika'),
(360, '2024-12-25', 'Piotr, Dawid, Patryk, Celestyna'),
(361, '2024-12-26', 'Joela, Beata'),
(362, '2024-12-27', 'Jacek, Bianka'),
(363, '2024-12-28', 'Patryk, Marzena, Szymon, Leszek'),
(364, '2024-12-29', 'Dominika, Adam'),
(365, '2024-12-30', 'Angelina, Tomasz, Kacper, Maria'),
(366, '2024-12-31', 'Izabela, Oskar, Artur'),
(367, '2025-01-01', 'Helena, Michał');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `imieniny`
--
ALTER TABLE `imieniny`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uk_data` (`data`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imieniny`
--
ALTER TABLE `imieniny`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=368;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


```
      
   </details>
   
   - Kolorystyka: <div display='flex'>
     <img src='https://www.thecolorapi.com/id?format=svg&hex=FAC748'> <p>#FAC748</p>
     <img src='https://www.thecolorapi.com/id?format=svg&hex=E5E6EB'> <p>#E5E6EB</p>
     <img src='https://www.thecolorapi.com/id?format=svg&hex=027DE5'> <p>#027DE5</p> 
     <img src='https://www.thecolorapi.com/id?format=svg&hex=493FA7'> <p>#493FA7</p> 
     <img src='https://www.thecolorapi.com/id?format=svg&hex=1B2021'> <p>#1B2021</p> 
     <img src='https://www.thecolorapi.com/id?format=svg&hex=000000'> <p>#000000</p>
     <img src='https://www.thecolorapi.com/id?format=svg&hex=FAFAFA'> <p>#FAFAFA</p> </div>

</details>

---

<details>
   <summary>

   ### -3. **Sweet Candy Factory** / 1 os.
      
   </summary>

**Wygląd strony**

<img src='https://github.com/user-attachments/assets/17b57750-95b8-4f3f-8755-9242ddce7343' width="69%">

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
