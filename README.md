# Przygotowanie środowiska PHP 🐘
PHP jest językiem skryptowym, który jest szeroko stosowany w tworzeniu stron internetowych oraz aplikacji webowych. Jego popularność wynika z tego, że jest łatwy do nauki i ma wiele wbudowanych funkcji i bibliotek.

## ➡️ **Krok 1**

### ⬇️ Instalacja PHP 
Aby rozpocząć programowanie w PHP, należy najpierw zainstalować PHP na swoim komputerze. Można to zrobić, pobierając pakiet XAMPP lub WAMP, który zawiera PHP, Apache i MySQL.

Proces instalacji PHP może różnić się w zależności od systemu operacyjnego. Poniżej przedstawiam ogólny opis instalacji PHP na systemach Windows, Linux i macOS.
<details>
<summary> 

#### 🪟 Instalacja na systemie Windows

</summary>

1. Pobierz plik instalacyjny PHP z oficjalnej strony internetowej: [🔗 Apache friends](https://www.apachefriends.org/pl/index.html)

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

---

## ➡️ **Krok 2**

Po zakończeniu instalacji PHP, możesz przetestować jego działanie, tworząc prosty skrypt PHP i uruchamiając go w przeglądarce internetowej.

>[!IMPORTANT]
> Aby utworzyć projekt w języku PHP:
>
> Należy utworzyć folder z `nazwa_projektu` w lokalizacji xamppa w folderze `htdocs`.
>
> Aby przejść do tego folderu należy wybrac `Explorer` w aplikacji xampp.
>
> <img  height="450" alt="image" src="https://github.com/user-attachments/assets/1efc3a7b-d158-428c-a2bf-aba5f8ac9fa5" />
>
> <img  height="450" alt="image" src="https://github.com/user-attachments/assets/355502c9-e138-4a4a-8cba-9c57b1db04a2" />
> 
> Gdy to już mamy za sobą, należy uruchomić w xampp moduł `Apache` oraz `MySQL`.
> 
> <img height="450" alt="image" src="https://github.com/user-attachments/assets/d5586fe8-b888-4061-aaa3-7db474e49116" />


---

## ➡️ **Krok 3**

Uruchomienie naszego projektu należy teraz do kwestii przeglądarki.

Aby otworzyć nasz projekt na stronie należy wejść na adres `localhost/nazwa_projektu`.

<img height="450" alt="image" src="https://github.com/user-attachments/assets/46c780f9-431d-4c83-ae80-0d12719d742c" />

