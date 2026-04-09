<div align='center'>

#  🌐 Wprowadzenie do aplikacji internetowych 🌐

</div>

<div align='justify'>

## 🌐 HTML5 (Hypertext Markup Language)
To język używany do tworzenia stron internetowych. Podobnie jak w przypadku pisania lub projektowania, struktura jest kluczowym elementem tworzenia stron.

### Znaczniki

``Znacznik`` w kontekście HTML to specjalny element lub instrukcja używana do definiowania struktury i zawartości strony internetowej. Znaczniki określają, jakie elementy znajdują się na stronie i jak są one prezentowane w przeglądarce internetowej. Każdy znacznik HTML jest otoczony nawiasami trójkątnymi `< >` i ma swoją nazwę, np. `<p>`, `<h1>`, `<a>`, itp.

Znaczniki HTML dzielimy na dwa główne rodzaje:

1. **Znaczniki blokowe :** Są to znaczniki, które definiują blok treści na stronie. Elementy blokowe zazwyczaj rozpoczynają się od nowej linii i zajmują całą dostępną szerokość, tworząc w ten sposób oddzielne bloki na stronie. Przykłady to `<div>`, `<p>`, `<h1>`, `<ul>`, `<li>`, `<table>`, itp.

2. **Znaczniki liniowe :** Są to znaczniki, które nie tworzą oddzielnych bloków, ale wprowadzają zmiany wewnątrz bloków. Elementy liniowe zazwyczaj nie przerywają bieżącej linii tekstu i zajmują tylko tyle miejsca, ile jest potrzebne, aby pomieścić ich zawartość. Przykłady to `<a>`, `<strong>`, `<em>`, `<span>`, itp.

Korzystanie z znaczników polega na umieszczeniu ich w kodzie źródłowym strony w odpowiednich miejscach, aby zdefiniować strukturę i wygląd treści. Na przykład, aby utworzyć akapit tekstu, używamy znacznika `<p>`, a treść akapitu umieszczamy między otwierającym `<p>` a zamykającym `</p>` znacznikiem, jak w poniższym przykładzie:

```html
<p>To jest przykładowy akapit tekstu.</p>
```

Każdy znacznik HTML może mieć również różne atrybuty, które pozwalają na dodanie dodatkowych informacji lub właściwości do elementu. Na przykład, znacznik `<a>` (do tworzenia linków) ma atrybut `href`, który określa docelowy adres URL linku. Przykład:

```html
<a href="https://www.github.com/teb-dk">Przykładowy link</a>
```

Ważne jest, aby pamiętać o odpowiednim zamykaniu znaczników HTML, czyli używaniu zarówno otwierających (`<p>`) jak i zamykających (`</p>`) znaczników, aby uniknąć błędów w kodzie HTML. W przeciwnym razie przeglądarka może źle interpretować strukturę strony.

<div align='center'>

| Znacznik         | Opis                                       |
|------------------|---------------------------------------------------------------|
| `<html>`         | Określa początek i koniec dokumentu HTML.                    |
| `<head>`         | Zawiera metadane dokumentu, takie jak tytuł i łącza do CSS.   |
| `<title>`        | Określa tytuł dokumentu, który jest wyświetlany na karcie przeglądarki. |
| `<body>`         | Zawiera widoczny zawartość strony internetowej.              |
| `<h1>`, `<h2>`, `<h3>`, ... | Tworzy nagłówki różnych poziomów, gdzie `<h1>` to najważniejszy. |
| `<p>`            | Tworzy paragraf tekstu.                                       |
| `<ul>`           | Rozpoczyna wypunktowaną listę.                               |
| `<ol>`           | Rozpoczyna numerowaną listę.                                 |
| `<li>`           | Definiuje element listy w `<ul>` lub `<ol>`.                 |
| `<a>`            | Tworzy hiperłącze (link) do innej strony lub zasobu.         |
| `<img>`          | Wstawia obraz na stronie.                                    |
| `<table>`        | Rozpoczyna tabelę.                                           |
| `<tr>`           | Określa wiersz tabeli.                                       |
| `<th>`           | Określa komórkę nagłówka w tabeli.                           |
| `<td>`           | Określa komórkę danych w tabeli.                             |
| `<form>`         | Rozpoczyna formularz do zbierania danych od użytkownika.      |
| `<input>`        | Tworzy pole wejściowe w formularzu.                          |
| `<button>`       | Tworzy przycisk w formularzu.                                |
| `<select>`       | Tworzy pole wyboru w formularzu.                             |
| `<option>`       | Definiuje opcje wyboru w elemencie `<select>`.               |
| `<hr>`       | Określa linię horyzontalną.               |

</div>

#### Znaczniki niesemantyczne
Znaczniki niesemantyczne w HTML to elementy, które nie niosą znaczenia semantycznego, czyli nie opisują struktury ani znaczenia zawartości strony. Zamiast tego są używane do dostosowywania wyglądu lub stylizacji elementów na stronie. Są to znaczniki, które nie mają określonego znaczenia dla przeglądarek internetowych ani dla wyszukiwarek, co oznacza, że nie opisują, co znajduje się wewnątrz nich, ani jakie jest ich znaczenie w kontekście strony. Znaczniki niesemantyczne są często wykorzystywane do układu, stylizacji i manipulacji treścią za pomocą CSS i JavaScript.

1. **Znacznik `<div>`:** Jest to jednym z najczęściej używanych znaczników niesemantycznych. Służy do tworzenia kontenerów lub bloków, które mogą być stylizowane lub manipulowane za pomocą CSS lub JavaScript. Na przykład:

   ```html
   <div class="kontener">
       Treść wewnątrz kontenera
   </div>
   ```

2. **Znacznik `<span>`:** Jest to znacznik niesemantyczny do wyróżnienia fragmentów tekstu lub innych elementów wewnątrz linii tekstu. Może być używany do stosowania stylów lub manipulacji za pomocą JavaScript. Na przykład:

   ```html
   <p>To jest <span class="wyróżnienie">ważny</span> tekst.</p>
   ```

3. **Znacznik `<div>` jako pojemnik na formularz:** Często używa się znacznika `<div>` jako pojemnika na cały formularz lub jego fragmenty, aby dostosować układ formularza. Na przykład:

   ```html
   <div class="formularz">
       <label for="nazwa">Imię:</label>
       <input type="text" id="nazwa" name="nazwa">
   </div>
   ```

4. **Znacznik `<span>` w celu stylizacji tekstu:** Znacznik `<span>` może być używany do stylizacji fragmentów tekstu, na przykład zmiany koloru lub rozmiaru czcionki za pomocą CSS. Na przykład:

   ```html
   <p>To jest <span style="color: red;">czerwony tekst</span>.</p>
   ```

> Chociaż znaczniki niesemantyczne nie przekazują znaczenia strukturalnego ani semantycznego, są one nadal ważne w projektowaniu stron internetowych, ponieważ pozwalają na dostosowanie wyglądu i układu treści. Jednak zawsze warto dążyć do używania znaczników semantycznych tam, gdzie to możliwe, aby strony były bardziej zrozumiałe dla przeglądarek internetowych i wyszukiwarek oraz bardziej dostępne dla użytkowników.

### 🌟 Zadanie do wykonania
Twoim celem jest stworzenie bardzo *zaawansowanej* strony internetowej, która wykorzystuje znaczniki niesemantyczne, formularz i skomplikowane style.

   1. Utwórz plik HTML o nazwie "index.html".
   
   2. Wykorzystaj co najmniej pięć różnych znaczników niesemantycznych, aby stworzyć układ strony.
   
   3. Dodaj formularz do strony. Formularz ten powinien zawierać następujące podstawowe elementy:
      - Pole tekstowe.
      - Pole wyboru.
      - Pole wprowadzenia daty.
      - Przycisk do wysłania formularza.
   
   4. Wykorzystaj atrybuty formularza, takie jak `name`, `id`, `value`, aby dostosować każdy z elementów formularza.
   
   5. Dodaj odpowiednie etykiety (znaczniki `<label>`) do każdego pola formularza.
      
      <details>
         <summary> => Etykietowanie pól formularza <= </summary>
      
      ```html
      <label for="pole">Podaj login:</label>
      <input type="text" id="pole"> 
      ```
      > W tej wersji etykieta zamknięta jest przed znacznikiem <input>, ale pojawia się dodatkowo atrybut for (ang. "dla") określający dla jakiego elementu jest to etykieta. Wartością atrybutu for jest               identyfikator, podany także w atrybucie id wewnątrz <input>. Obydwa identyfikatory rzecz jasna koniecznie muszą być identyczne. To właśnie w ten sposób następuje logiczne powiązanie pomiędzy kontrolką formularza i jego etykietą. Co najważniejsze: prawidłowo ustawiona etykieta reaguje na kliknięcie – powiązana z nią kontrolka formularza zyskuje aktywność.   
      </details>

#### Znaczniki semantyczne
Znaczniki semantyczne w HTML to elementy, które mają znaczenie semantyczne i opisują strukturę oraz znaczenie zawartości strony internetowej. Korzystając z tych znaczników, można jasno określić, jakie są różne sekcje i elementy na stronie, co pomaga przeglądarkom internetowym i wyszukiwarkom w zrozumieniu treści oraz dostarcza lepszych informacji dla użytkowników, w szczególności dla tych z niepełnosprawnościami. Znaczniki semantyczne pomagają również w tworzeniu bardziej dostępnych i bardziej czytelnych stron internetowych.

1. **Znacznik `<header>`:** Ten znacznik jest używany do określenia nagłówka strony lub sekcji. Może zawierać elementy takie jak logo, nazwa strony i menu nawigacyjne.

   ```html
   <header>
       <h1>Nazwa Strony</h1>
       <nav>
           <ul>
               <li><a href="/">Strona główna</a></li>
               <li><a href="/o-nas">O nas</a></li>
               <li><a href="/kontakt">Kontakt</a></li>
           </ul>
       </nav>
   </header>
   ```

2. **Znacznik `<nav>`:** Ten znacznik jest używany do definiowania nawigacji na stronie, takiej jak menu główne lub menu boczne.

   ```html
   <nav>
       <ul>
           <li><a href="/">Strona główna</a></li>
           <li><a href="/o-nas">O nas</a></li>
           <li><a href="/kontakt">Kontakt</a></li>
       </ul>
   </nav>
   ```

3. **Znacznik `<main>`:** Ten znacznik oznacza główną treść strony, która jest unikalna dla danej strony lub sekcji.

   ```html
   <main>
       <h1>Nowości</h1>
       <p>Ostatnie artykuły i aktualności.</p>
       <!-- Inne treści strony -->
   </main>
   ```

4. **Znacznik `<article>`:** Ten znacznik jest używany do opisania niezależnego artykułu, posta lub treści na stronie, która może być dostępna samodzielnie.

   ```html
   <article>
       <h2>Artykuł: Jak nauczyć się HTML</h2>
       <p>W tym artykule opowiemy o nauce HTML...</p>
   </article>
   ```

5. **Znacznik `<section>`:** Ten znacznik jest używany do grupowania treści na stronie w logiczne sekcje lub bloki tematyczne.

   ```html
   <section>
       <h2>Ostatnie Aktualności</h2>
       <p>Nowości ze świata technologii...</p>
   </section>
   ```

6. **Znacznik `<footer>`:** Ten znacznik określa stopkę strony, która może zawierać informacje kontaktowe, linki do mediów społecznościowych i inne informacje.

   ```html
   <footer>
       <p>Kontakt: kontakt@strona.pl</p>
       <ul>
           <li><a href="#">Facebook</a></li>
           <li><a href="#">Twitter</a></li>
       </ul>
   </footer>
   ```

#### Układ semantyczny strony

<div align='center'>

<table>
        <tr><th colspan="3" >&lt;header&gt;</th></tr>
        <tr>
            <th colspan="3" width="600">&lt;nav&gt;</th>
        </tr>
        <tr></tr>
        <tr>
            <td rowspan="3" width="200">&lt;aside&gt;</td>
            <td colspan="2" rowspan="3" width="400">
              &lt;main&gt;
              <table>
                <thead>
                  <tr><th width="300" height='200'>&lt;article&gt;</th></tr>
                </thead>
                <tbody>
                  <tr><td width="300" height='50'>&lt;section&gt;</td></tr>
                </tbody>
              </table>
          </td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr><td colspan="3">&lt;footer&gt;</td></tr>
    </tbody>
</table>

  
| Znacznik         | Opis                                     |
|------------------|----------------------------------------------------------|
| `<header>`       | Nagłówek strony, zwykle zawierający logo i nawigację.    |
| `<nav>`          | Sekcja z nawigacją strony.                               |
| `<main>`         | Główna zawartość strony.                                  |
| `<section>`      | Oznacza sekcję strony, taką jak rozdział lub blok treści. |
| `<article>`      | Oznacza niezależny artykuł lub treść samodzielną od reszty strony. |
| `<aside>`        | Zawiera treść powiązaną z treścią główną, ale nieobowiązkową. |
| `<footer>`       | Stopka strony, zawiera zwykle informacje o autorze i prawach autorskich. |
| `<mark>`       | Podkreślenie tekstu. |


</div>

### Atrybuty

Atrybuty w znacznikach HTML to dodatkowe informacje lub właściwości, które można przypisać elementom na stronie internetowej. Atrybuty pomagają dostosować zachowanie i wygląd elementów oraz dostarczyć dodatkowych danych, które są niezbędne dla niektórych znaczników.

- **Atrybut `href` (Hyperlink Reference):** Ten atrybut jest używany w znaczniku `<a>` do określenia docelowego adresu URL linku. Przykład:

   ```html
   <a href="https://www.example.com">Przykładowy link</a>
   ```

- **Atrybut `src` (Source):** Jest używany w znacznikach obrazów (`<img>`) lub multimedialnych (`<video>`, `<audio>`) do określenia źródła pliku. Przykład:

   ```html
   <img src="obraz.jpg" alt="Opis obrazu">
   ```

- **Atrybut `alt` (Alternative Text):** Ten atrybut jest używany w znaczniku `<img>` do dostarczenia alternatywnego tekstu, który zostanie wyświetlony, jeśli obraz nie może być wczytany lub dla użytkowników korzystających z czytników ekranowych. Przykład:

   ```html
   <img src="obraz.jpg" alt="Opis obrazu">
   ```

- **Atrybut `class`:** Atrybut ten służy do nadawania elementom klas, które mogą być później stylizowane przy użyciu CSS lub wykorzystywane do manipulacji elementami za pomocą JavaScript. Przykład:

   ```html
   <p class="ważny-tekst">To jest ważny tekst</p>
   ```

- **Atrybut `id`:** Atrybut ten jest używany do nadawania unikalnych identyfikatorów elementom na stronie. Jest przydatny w celu identyfikacji konkretnych elementów do celów stylizacji lub manipulacji za pomocą JavaScript. Przykład:

   ```html
   <div id="nagłówek">Tytuł strony</div>
   ```

- **Atrybut `style`:** Ten atrybut pozwala na dodawanie stylów CSS bezpośrednio do elementu. Jest to przydatne, gdy chcemy dostosować wygląd pojedynczego elementu. Przykład:

   ```html
   <p style="color: blue; font-size: 16px;">Ten tekst jest niebieski i ma rozmiar 16px</p>
   ```

- **Atrybut `data-*`:** Możemy tworzyć niestandardowe atrybuty zaczynające się od "data-", które pozwalają na przechowywanie niestandardowych danych w elemencie. Te dane mogą być używane w JavaScript lub innym celu. Przykład:

   ```html
   <div data-user-id="123">Informacje o użytkowniku</div>
   ```

Te to tylko niektóre z wielu atrybutów dostępnych w znacznikach HTML. Atrybuty pozwalają na dostosowanie i wzbogacenie treści strony oraz wpływają na jej zachowanie i styl. Ważne jest, aby stosować atrybuty zgodnie z ich przeznaczeniem i zrozumieć, jak wpływają na strukturę i działanie strony internetowej.

### Formularze

Formularze w HTML to ważny element tworzenia interaktywnych i dynamicznych stron internetowych. Pozwalają one użytkownikom wprowadzać dane, które można przesłać na serwer do dalszego przetwarzania lub wykorzystać do innych celów. Formularze są używane do różnych celów, takich jak logowanie, rejestracja, przesyłanie komentarzy, zamawianie produktów i wiele innych.

#### Podstawowe elementy formularza

- **form**: Znacznik `<form>` służy do definiowania formularza i otacza całą zawartość formularza. Atrybuty `action` i `method` są używane do określenia, gdzie i w jaki sposób dane z formularza zostaną przesłane na serwer.

   ```html
   <form action="przetwarzanie_formularza.php" method="POST">
       <!-- Elementy formularza zostaną umieszczone tutaj -->
   </form>
   ```

- **input**: Znacznik `<input>` służy do tworzenia różnych rodzajów pól formularza, takich jak pola tekstowe, przyciski, pola wyboru itp. Atrybuty `type` określają rodzaj pola.

   ```html
   <input type="text" name="username">
   <input type="password" name="password">
   <input type="submit" value="Zaloguj się">
   ```

- **textarea**: Znacznik `<textarea>` służy do tworzenia wieloliniowych pól tekstowych, które pozwalają użytkownikom wprowadzać dłuższe teksty.

   ```html
   <textarea name="message" rows="4" cols="50"></textarea>
   ```

- **select/option**: Znacznik `<select>` tworzy rozwijaną listę wyboru, a znaczniki `<option>` definiują dostępne opcje w tej liście.

   ```html
   <select name="country">
       <option value="us">Stany Zjednoczone</option>
       <option value="ca">Kanada</option>
       <option value="uk">Wielka Brytania</option>
   </select>
   ```

- **button**: Znacznik `<button>` tworzy przycisk, który może być używany do zatwierdzania formularza lub wykonywania innych działań w skrypcie JavaScript.

   ```html
   <button type="submit">Zapisz</button>
   ```

- **label**: Znacznik `<label>` służy do opisywania pól formularza. Pomaga to użytkownikom zrozumieć, do czego dane pole służy. Atrybut `for` łączy etykietę z odpowiednim polem za pomocą atrybutu `id`.

   ```html
   <label for="username">Nazwa użytkownika:</label>
   <input type="text" id="username" name="username">
   ```

#### Atrybuty formularza

- **action**: Określa, gdzie zostaną przesłane dane formularza po jego zatwierdzeniu. Może to być adres URL lub nazwa pliku skryptu na serwerze.

- **method**: Określa metodę przesyłania danych formularza. Najczęściej używane metody to "GET" (dane przesyłane w adresie URL) i "POST" (dane przesyłane w ciele żądania HTTP).

- **name**: Nazwa pola formularza, która jest używana do identyfikowania danych po przesłaniu formularza.

- **id**: Unikalny identyfikator pola formularza, który może być używany do połączenia etykiety z polem.

- **type**: Określa rodzaj pola formularza, np. "text", "password", "email", "checkbox", "radio", "submit", itp.

- **value**: Domyślna wartość pola, która jest wyświetlana w polu formularza.

- **required**: Atrybut, który wymusza, aby pole było wypełnione przed zatwierdzeniem formularza. (HTML5)

- **disabled**: Atrybut, który wyłącza pole formularza, uniemożliwiając jego edycję przez użytkownika.

#### Pseudo-Klasy CSS dla formularzy

Pseudo-klasy CSS, takie jak `:hover`, `:focus`, `:active`, pozwalają na dostosowanie wyglądu elementów formularza w zależności od interakcji użytkownika. Na przykład, `:hover` pozwala na zmianę koloru tła przycisku po najechaniu myszką, a `:focus` pozwala dostosować styl pola formularza, gdy jest w fokusie.

#### Przetwarzanie formularza
> Po zatwierdzeniu formularza dane są przesyłane na serwer do dalszego przetwarzania. W języku PHP, Python, Ruby lub innym języku programowania można napisać skrypt, który odbierze te dane, przetworzy je i podjąć odpowiednie działania, takie jak zapisanie ich w bazie danych lub wysłanie wiadomości e-mail.

### 🌟 Zadanie do wykonania
Twoim zadaniem jest stworzenie formularza kontaktowego dla strony internetowej. Formularz ten powinien umożliwiać użytkownikom wprowadzenie swoich danych kontaktowych oraz treści wiadomości. 
   
   1. Utwórz plik HTML i nadaj mu odpowiednią strukturę.
   
   2. Dodaj znacznik `<form>` wewnątrz pliku HTML. Ustaw atrybuty `action` na cel przetwarzania formularza (może to być adres URL lub skrypt na serwerze) oraz `method` na "POST" lub "GET", w zależności od Twoich potrzeb.
   
   3. Wewnątrz formularza dodaj następujące elementy:
   
      - Pole tekstowe do wprowadzenia imienia użytkownika.
      - Pole tekstowe do wprowadzenia adresu e-mail.
      - Lista rozwijana (`<select>`) z wyborem tematu wiadomości (np. "Pytanie ogólne", "Wsparcie techniczne", "Skargi i sugestie").
      - Pole tekstowe wielolinijkowe do wprowadzenia treści wiadomości.
      - Przycisk "Wyślij", który pozwoli na przesłanie formularza.
   
   4. Dodaj etykiety (`<label>`) do każdego pola formularza, aby opisać, do czego dane pole służy.
   
   5. Zastosuj odpowiednie atrybuty, takie jak `name`, `id` i `required`, aby dostosować formularz do Twoich potrzeb.
   
   6. Dostosuj wygląd formularza za pomocą CSS, aby nadać mu atrakcyjny wygląd.
   
   7. Dodaj odpowiednią walidację formularza, sprawdzając, czy wymagane pola są wypełnione poprawnie przed przesłaniem formularza.
   
   8. Ostatecznie, przetestuj formularz, wprowadzając w nim przykładowe dane i przesyłając go, aby upewnić się, że działa zgodnie z oczekiwaniami.
   
   Twoim celem jest stworzenie pełnoprawnego formularza kontaktowego, który pozwoli użytkownikom skontaktować się z właścicielem strony lub firmą.

## 🖌️ CSS (Cascading Style Sheets)
Język używany do definiowania wyglądu i stylizacji elementów na stronach internetowych. CSS pozwala projektantom i programistom kontrolować prezentację treści HTML, takie jak kolor, czcionka, marginesy, odstępy między elementami, tło i wiele innych właściwości, aby uzyskać pożądany wygląd strony.

Tabela zawierająca najważniejsze atrybuty CSS:

| Atrybut CSS            | Opis                                                | Przykład                                     |
|------------------------|-----------------------------------------------------|----------------------------------------------|
| `color`                | Kolor tekstu                                        | `color: blue;`                              |
| `font-size`            | Rozmiar czcionki                                    | `font-size: 16px;`                          |
| `font-family`          | Rodzina czcionek                                    | `font-family: Arial, sans-serif;`           |
| `font-weight`          | Grubość czcionki (np. bold)                         | `font-weight: bold;`                        |
| `text-align`           | Wyrównanie tekstu                                   | `text-align: center;`                       |
| `text-decoration`      | Dekoracja tekstu (np. underline)                   | `text-decoration: underline;`               |
| `background-color`     | Kolor tła                                           | `background-color: #f0f0f0;`                |
| `margin`               | Margines                                           | `margin: 10px;`                             |
| `padding`              | Wypełnienie (odstęp wewnętrzny)                    | `padding: 5px;`                             |
| `border`               | Ramka wokół elementu                                | `border: 1px solid #000;`                   |
| `width`                | Szerokość elementu                                  | `width: 200px;`                             |
| `height`               | Wysokość elementu                                   | `height: 100px;`                            |
| `display`              | Typ wyświetlania elementu (np. block, inline)      | `display: block;`                           |
| `position`             | Pozycja elementu (np. relative, absolute)          | `position: relative;`                       |
| `top`, `right`, `bottom`, `left` | Pozycja względem rodzica (dla `position: absolute`) | `top: 10px;`                                |
| `float`                | Odbijanie elementu na lewo lub prawo               | `float: left;`                              |
| `clear`                | Czyszczenie obiektów float                         | `clear: both;`                              |
| `z-index`              | Warstwa elementu w stosie z-index                  | `z-index: 1;`                                |
| `overflow`             | Zachowanie elementu przy przekroczeniu rozmiaru   | `overflow: hidden;`                         |
| `text-transform`       | Transformacja tekstu (np. uppercase)               | `text-transform: uppercase;`                |
| `line-height`          | Wysokość linii                                      | `line-height: 1.5;`                         |
| `list-style`           | Styl listy (np. typ i obrazek punktu listy)        | `list-style: square inside;`                |
| `opacity`              | Przezroczystość elementu                           | `opacity: 0.5;`                             |
| `box-shadow`           | Cień elementu                                      | `box-shadow: 2px 2px 5px #888888;`          |
| `transition`           | Efekty przejścia (np. dla animacji)               | `transition: width 1s ease-in-out;`         |

> To tylko kilka podstawowych atrybutów CSS, a język ten jest znacznie bardziej rozbudowany.

### Podpięcie .css do HTML5
Jak podpiąć zewnętrzny arkusz stylów CSS do pliku HTML?

- **Stwórz plik CSS:** Stwórz plik CSS w tym samym folderze co plik HTML5, z rozszerzeniem `.css` i zdefiniuj w nim wszystkie style dla swojej strony.
- **Podpięcie CSS do HTML:**
   Otwórz swój plik HTML i dodaj następujący kod w sekcji `<head>`:

   ```html
   <link rel="stylesheet" href="nazwa_pliku.css">
   ```

   - W atrybucie `href` podaj nazwę swojego pliku CSS. Jeśli plik CSS znajduje się w tym samym katalogu co plik HTML, wystarczy podać jego nazwę. W przeciwnym razie podaj pełną ścieżkę do pliku CSS.

> Teraz masz podpięty zewnętrzny arkusz stylów CSS do swojego pliku HTML, co pozwala na oddzielenie treści od wyglądu i umożliwia łatwe zarządzanie stylami na stronie internetowej.

### Selektory
To część reguł CSS, która określa, które elementy na stronie będą podlegać zmianom stylu. Selektory mogą być bardzo ogólnie lub bardzo precyzyjnie zdefiniowane, co pozwala na dokładne kontrolowanie wyglądu elementów. Przykłady selektorów:

- **Selektor elementu:** Stylizacja dotyczy wszystkich elementów tego typu na stronie. Na przykład, `p` odnosi się do wszystkich paragrafów.
  
  ```css
  p {
      color: blue;
  }
  ```

- **Selektor klasy:** Przypisanie stylu do elementów o określonej klasie. Klasa zaczyna się od kropki, np. `.nagłówek`.

  ```css
  .nagłówek {
      font-size: 24px;
  }
  ```

- **Selektor identyfikatora:** Przypisanie stylu do jednego, unikalnego elementu o określonym ID. ID zaczyna się od znaku `#`, np. `#logo`.

  ```css
  #logo {
      width: 200px;
  }
  ```

- **Deklaracje CSS:** Deklaracje to właściwości i ich wartości, które określają, jak element ma być stylizowany. Każda deklaracja składa się z pary klucz-wartość. Przykłady deklaracji:

  ```css
  p {
      color: blue; /* Właściwość: Wartość */
      font-size: 16px;
      margin-top: 20px;
  }
  ```

- **Wartości jednostek w CSS:** W CSS można używać różnych jednostek do określania wartości, takich jak piksele (``px``), procenty (``%``), ``em``, ``rem`` i ``wartości viewport``. Jednostki te pozwalają na precyzyjne dostosowanie rozmiarów i odstępów.
  
  ```css
  p {
      font-size: 16px; /* Rozmiar czcionki w pikselach */
      margin-left: 10%; /* Margines lewy jako procent szerokości elementu nadrzędnego */
      padding: 1em; /* Wypełnienie jako jedna em (elastyczna jednostka) */
  }
  ```
### Pseudo-klasy
Pseudo-klasy w CSS to specjalne selektory, które pozwalają na wybieranie elementów HTML na podstawie ich stanu lub położenia względem użytkownika. Pseudo-klasy są poprzedzane dwukropkiem (`:`) i stosuje się je, aby dostosować styl elementów w zależności od różnych warunków.

1. **:hover** - Pseudo-klasa `:hover` służy do stylizacji elementu, gdy użytkownik najedzie na niego kursorem myszy. Jest to często stosowane do tworzenia interaktywnych efektów, takich jak zmiana koloru tła przycisku po najechaniu myszką.

   Przykład:
   ```css
   button:hover {
     background-color: #ff0000;
   }
   ```

2. **:active** - Pseudo-klasa `:active` pozwala na dostosowanie stylu elementu, gdy jest on aktywowany, np. wciśnięcie przycisku myszy.

   Przykład:
   ```css
   a:active {
     color: purple;
   }
   ```

3. **:focus** - Pseudo-klasa `:focus` pozwala na dostosowanie stylu elementu, gdy jest on w fokusie, na przykład gdy użytkownik ``kliknie`` na pole formularza.

   Przykład:
   ```css
   input:focus {
     border-color: blue;
   }
   ```

4. **:nth-child(n)** - Pseudo-klasa `:nth-child(n)` pozwala na wybieranie elementów na podstawie ich pozycji w kontenerze. Możesz używać różnych wartości `n`, aby wybrać konkretne elementy w danym kontenerze.

   Przykład:
   ```css
   ul li:nth-child(odd) {
     background-color: #f0f0f0;
   }
   ```

5. **:not(selector)** - Pseudo-klasa `:not(selector)` pozwala na wybieranie elementów, które nie pasują do określonego selektora. To przydatne do wykluczania pewnych elementów z zestawu wybranych elementów.

   Przykład:
   ```css
   p:not(.special) {
     font-style: italic;
   }
   ```

6. **:first-child** i **:last-child** - Pseudo-klasy `:first-child` i `:last-child` pozwalają na wybieranie pierwszego i ostatniego elementu w obrębie ich rodzica.

   Przykład:
   ```css
   li:first-child {
     font-weight: bold;
   }
   
   li:last-child {
     font-style: italic;
   }
   ```

> Pseudo-klasy są potężnym narzędziem do dokładnej kontroli stylizacji elementów na stronie internetowej, szczególnie w odpowiedzi na interakcje użytkownika lub strukturę dokumentu.


### Model pudełka
> Model pudełka to koncepcja określająca, jak przeglądarka renderuje elementy HTML. Składa się z czterech głównych właściwości: margines, obramowanie, wypełnienie i szerokość/wysokość.

- **Margines (margin):** To odstęp między elementem a ``*jego otoczeniem*``.
- **Obramowanie (border):** To ``granica`` wokół elementu.
- **Wypełnienie (padding):** To odstęp między obramowaniem a treścią elementu.
- **Szerokość/Wysokość (width/height):** Określa, jak dużo miejsca zajmuje element w układzie strony.

<div align='center'>
 
![Box model](https://github.com/TEB-DK/Domena_aplikacji_internetowych/assets/125214141/2cb4e3d0-772d-473c-9153-54782c24ee31)

</div>

> To tylko krótka prezentacja głównych aspektów CSS. Ten język jest niezwykle wszechstronny i potrafi dostarczyć wiele narzędzi do kreatywnego projektowania stron internetowych. Zrozumienie tych podstaw pozwala na tworzenie bardziej atrakcyjnych, responsywnych i dostępnych witryn internetowych.

</div>

### Viewport

Jednostki `vw` (viewport width) i `vh` (viewport height) są jednostkami względnymi w CSS, które pozwalają na określenie wielkości elementów w odniesieniu do szerokości (`vw`) i wysokości (`vh`) widoku przeglądarki.

1. **vw (viewport width)**:

   - Jednostka `vw` reprezentuje procent szerokości widoku przeglądarki. 1vw to 1% szerokości widoku.
   - Jest przydatna do tworzenia elementów, które skalują się w zależności od szerokości okna przeglądarki.
   - Może być stosowana do ustalania szerokości tekstu, marginesów, paddingu i innych elementów w sposób responsywny.
   - Przykład: Jeśli chcesz, aby element zajmował 50% szerokości widoku przeglądarki, możesz użyć `width: 50vw;`.

2. **vh (viewport height)**:

   - Jednostka `vh` reprezentuje procent wysokości widoku przeglądarki. 1vh to 1% wysokości widoku.
   - Jest przydatna do tworzenia elementów, które skalują się w zależności od wysokości okna przeglądarki.
   - Często wykorzystywana w projektowaniu responsywnych układów, takich jak sekcje strony, które powinny zajmować określoną część dostępnej wysokości.
   - Przykład: Możesz użyć `height: 70vh;`, aby ustawić wysokość elementu na 70% wysokości widoku przeglądarki.

Przykład użycia `vw` i `vh` w praktyce:

```css
.container {
  width: 80vw; /* Element zajmie 80% szerokości widoku */
  height: 60vh; /* Element zajmie 60% wysokości widoku */
  padding: 2vw; /* Padding będzie skalował się w zależności od szerokości widoku */
  font-size: 3vh; /* Rozmiar czcionki dostosowany do wysokości widoku */
}
```

Jednostki `vw` i `vh` są przydatne w projektowaniu responsywnych stron internetowych, ponieważ pozwalają na elastyczne dostosowywanie elementów do różnych rozmiarów ekranu i urządzeń. Warto jednak używać ich z umiarem i testować wygląd strony na różnych urządzeniach, aby upewnić się, że zachowuje ona odpowiednią czytelność i estetykę.

#### Różnica między `%`, a `vw` / `vh`
Różnica między % a vw/vh wynika z kontekstu i sposobu, w jaki te jednostki są obliczane:

   - Procenty `%` są obliczane względem wielkości kontenera nadrzędnego. Jeśli element znajduje się wewnątrz innego elementu, to jego rozmiar zależy od wielkości tego nadrzędnego elementu.

   - Jednostki `vw` i `vh` są obliczane względem szerokości (vw) lub wysokości (vh) całego widoku przeglądarki. Niezależnie od struktury DOM, te jednostki zawsze odnoszą się do widoku przeglądarki, co czyni je bardziej odpowiednimi do tworzenia elementów, które mają dostosowywać się do całego widoku, niezależnie od rodzica.
    
### Model Flexbox

Flexbox (skrót od "Flexible Box Layout") to technika układania elementów na stronie internetowej w sposób elastyczny i dynamiczny. Jest to jedno z narzędzi w CSS, które ułatwia tworzenie responsywnych układów strony oraz zarządzanie rozmieszczeniem i przestrzenią między elementami. Flexbox jest szczególnie przydatny w projektowaniu układów interfejsów użytkownika.

1. **Kontener Flexbox**: Aby rozpocząć korzystanie z flexbox, tworzymy "kontener flexbox" (często jest to div lub inny element) i nadajemy mu właściwość `display: flex;` w CSS. To sprawia, że wszystkie bezpośrednie dzieci kontenera stają się "elementami flexbox".

   ```css
   .flex-container {
     display: flex;
   }
   ```

2. **Kierunek układu (flex-direction)**: Kierunek, w jakim elementy flexbox są układane wewnątrz kontenera, jest kontrolowany za pomocą właściwości `flex-direction`. Możliwe wartości to `row` (domyślnie), `row-reverse`, `column` i `column-reverse`.

   ```css
   .flex-container {
     flex-direction: row; /* Poziomy układ (domyślny) */
   }
   ```

3. **Równomierne rozmieszczenie (justify-content)**: Właściwość `justify-content` kontroluje, w jaki sposób elementy flexbox są rozmieszczane wzdłuż głównego osi kontenera. Możliwe wartości to `flex-start` (domyślnie), `flex-end`, `center`, `space-between` i `space-around`.

   ```css
   .flex-container {
     justify-content: center; /* Centrowanie elementów w poziomie */
   }
   ```

4. **Równomierne rozłożenie w pionie (align-items)**: Właściwość `align-items` kontroluje, w jaki sposób elementy flexbox są rozmieszczane wzdłuż osi krzyżowej kontenera. Możliwe wartości to `stretch` (domyślnie), `flex-start`, `flex-end`, `center` i `baseline`.

   ```css
   .flex-container {
     align-items: center; /* Centrowanie elementów w pionie */
   }
   ```

5. **Równomierne rozłożenie w pionie (align-content)**: Właściwość `align-content` kontroluje rozmieszczenie elementów flexbox w kontenerze, jeśli jest dostępna dodatkowa przestrzeń wzdłuż osi krzyżowej. Możliwe wartości to `stretch` (domyślnie), `flex-start`, `flex-end`, `center`, `space-between` i `space-around`.

   ```css
   .flex-container {
     align-content: space-between; /* Rozłożenie przestrzeni w pionie */
   }
   ```

6. **Elastyczność (flex)**: Każdy element flexbox ma właściwość `flex`, która określa, jak wiele przestrzeni może on zająć w stosunku do innych elementów flexbox. Im większa wartość `flex`, tym więcej miejsca zajmie. Domyślnie wartość `flex` wynosi `0 1 auto`, co oznacza, że element nie będzie się rozciągał i będzie zajmował tylko dostępną przestrzeń.

   ```css
   .flex-item {
     flex: 2; /* Element o flex: 2 zajmuje dwukrotnie więcej miejsca niż element o flex: 1 */
   }
   ```

7. **Zamiana kolejności (order)**: Właściwość `order` pozwala na zmianę kolejności wyświetlania elementów flexbox. Domyślnie elementy mają wartość `order: 0`, ale można je przestawiać na różne pozycje.

   ```css
   .flex-item {
     order: 1; /* Element zostanie przesunięty na koniec listy */
   }
   ```

8. **Wielowierszowość (flex-wrap)**: Właściwość `flex-wrap` kontroluje, czy elementy flexbox powinny układać się w jednym wierszu (domyślnie) czy w wielu wierszach, jeśli nie ma wystarczającej szerokości kontenera. Możliwe wartości to `nowrap`, `wrap`, i `wrap-reverse`.

   ```css
   .flex-container {
     flex-wrap: wrap; /* Elementy flexbox układają się w wielu wierszach */
   }
   ```

### :star2: Zadanie do wykonania 🐸
###### W celu praktyki flexbox, następnym krokiem będzie przejście 24 poziomów na stronie [Flexbox froggy](https://flexboxfroggy.com/) i umożliwienie żabkom wygodne siedzenie na liściach.

