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
