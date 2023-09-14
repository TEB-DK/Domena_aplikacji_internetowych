<div align='center'>

# Domena aplikacji internetowych

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

#### Znaczniki semantyczne
Znaczniki semantyczne w HTML to elementy, które mają znaczenie semantyczne i opisują strukturę oraz znaczenie zawartości strony internetowej. Korzystając z tych znaczników, można jasno określić, jakie są różne sekcje i elementy na stronie, co pomaga przeglądarkom internetowym i wyszukiwarkom w zrozumieniu treści oraz dostarcza lepszych informacji dla użytkowników, w szczególności dla tych z niepełnosprawnościami. Znaczniki semantyczne pomagają również w tworzeniu bardziej dostępnych i bardziej czytelnych stron internetowych. Oto kilka znaczników semantycznych i ich zastosowań:

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

Atrybuty w znacznikach HTML to dodatkowe informacje lub właściwości, które można przypisać elementom na stronie internetowej. Atrybuty pomagają dostosować zachowanie i wygląd elementów oraz dostarczyć dodatkowych danych, które są niezbędne dla niektórych znaczników. Oto kilka przykładów atrybutów i jak z nich korzystać:

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


## 🖌️ CSS (Cascading Style Sheets)
Język używany do definiowania wyglądu i stylizacji elementów na stronach internetowych. CSS pozwala projektantom i programistom kontrolować prezentację treści HTML, takie jak kolor, czcionka, marginesy, odstępy między elementami, tło i wiele innych właściwości, aby uzyskać pożądany wygląd strony.

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
