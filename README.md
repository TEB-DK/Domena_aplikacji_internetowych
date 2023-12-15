<div align='center'>

#  🌐 Projekty domen aplikacji 📚

</div>

> Projekty zostały podzielone na: zaliczeniowe, zadaniowe, zwolnieniowe.

<div align='justify'>

## Projekty `zadaniowe`

<details>
   <summary> 
      
   ### 1. **CRUD Panel** / 1 os.

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
