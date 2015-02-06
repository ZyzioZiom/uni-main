Strona jest napisana na Boostrapie 3.3.1 w czystym PHP i JQuery o jakości kodu, której będę się wstydził do końca swoich dni.

Wykorzystuje Podio API (https://github.com/podio/podio-php)

Ustawienia, tokeny i API keye są w pliku /config.php

Formularz rejestracji wysyła dane przez AJAX, kod jest w /js/form-handler.js

Są tutaj wykorzystane trzy aplikacje w Podio:
Harmonogram - harmonogram.php (plan zajęć)
Aktualności - news.php (aktualności w kursie)
Kursanci - signup.php (rejestracja na warsztaty)

Cookies (/setcookie.php) są wykorzystywane do zapisywania parametrów URL: UTM i gclid, aby pierwsze źródło wizyty zostało zapisane dla każdego użytkownika w bazie danych, co potem pozwoli nam zmierzyć zwrot z inwestycji (kto z jakiego źródła zapłacił po rejestracji)

Jest zainstalowany również PHPMailer, który wysyła wiadomość powitalną dla każdej zarejestrowanej osoby - wszystko jest w /mailer.php

Jak na razie formularz jest napisany ręcznie i trzeba go będzie modyfikować, kiedy zmieni się oferta językowa. Może w przyszłości (kiedy będę miał trochę czasu i chęci) formularz będzie tworzony dynamicznie na podstawie pobranej aplikacji i jej pól.


Krótka instrukcja do zmiany obsługiwanej aplikacji:
Jeśli klonujesz dotychczasowe aplikacje, nowe mają inne klucze i tokeny.
Musisz podmienić je w pliku /config.php

App tokeny: wejdź do aplikacji i w jej ustawieniach (ikonka narzędzia) kliknij Developer.
Pierwsze pole to app_id, a drugie app_token

API keye: wejdź w ustawienia swojego konta (Account Settings), kliknij w zakładkę API Keys. Musisz wygenerować nowy klucz.
Nazwa aplikacji: włącz swoją aplikację i spójrz na pasek adresu przeglądarki.
Powinno to wyglądać mniej więcej tak:
https://podio.com/aiesec-krakow-local-committee/1415-uni-delivery/apps/kursanci

W tym przypadku nazwa aplikacji to "kursanci".
Wpisz ją do pierwszego pola (bez cudzysłowia)

Full domain: musisz wiedzieć, pod jakim adresem www będzie nasza strona. Najprawdopodobniej będzie to aiesec.pl

Wygeneruj klucz, a nowe wartości pojawią się poniżej. Przeklej je do config.php jako client_id oraz client_secret

---------
Jak dokończyć automatyzację i przygotować aplikację na przyszłe edycje warsztatów:

Należy napisać funkcję, która stworzy formularz dynamicznie, pobierając nazwy języków oraz dostępne poziomy z aplikacji w Podio.
Schemat języków powinien wyglądać tak: "NAZWA_JĘZYKA POZIOM", np. "NIEMIECKI B2"

Należy pobierać item->title i wyrażeniem regularnym (pierwsze słowo w title) zebrać grupy jednego języka, potem wylistować je po kolei jako grupy do wybrania przez kursanta (input type=radio w formularzu, value pobrać z numeru kategorii w Podio) 