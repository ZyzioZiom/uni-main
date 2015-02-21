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

Obsługa wysyłki jest realizowana przez Mandrill, na którym zweryfikowane są domeny aiesec.org.pl oraz lckrakow.vot.pl
Maile są podpisane university@aiesec.org.pl, który przekierowuje wiadomości na learnbyplay.krakow@gmail.com


Jak na razie formularz jest napisany ręcznie i trzeba go będzie modyfikować, kiedy zmieni się oferta językowa. Może w przyszłości (kiedy będę miał trochę czasu i chęci) formularz będzie tworzony dynamicznie na podstawie pobranej aplikacji i jej pól.



---------
Jak dokończyć automatyzację i przygotować aplikację na przyszłe edycje warsztatów:

Należy napisać funkcję, która stworzy formularz dynamicznie, pobierając nazwy języków oraz dostępne poziomy z aplikacji w Podio.
Schemat języków powinien wyglądać tak: "NAZWA_JĘZYKA POZIOM", np. "NIEMIECKI B2"

Należy pobierać item->title i wyrażeniem regularnym (pierwsze słowo w title) zebrać grupy jednego języka, potem wylistować je po kolei jako grupy do wybrania przez kursanta (input type=radio w formularzu, value pobrać z numeru kategorii w Podio) 