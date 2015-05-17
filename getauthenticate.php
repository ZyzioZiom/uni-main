<?
// form-handler.js opisany ręcznie
// pobierz języki z harmonogramu
// pobierz wszystkie numery grup dla danego języka (po kropce)
// dla każdej grupy odnajdź itemy w harmonogramie i wylistuj ich dni oraz godziny


require_once "config.php";
// include Podio API
require_once 'podio-php-4.0.2/PodioAPI.php';

// authenticate client to Podio
Podio::setup($harmonogram_client_id, $harmonogram_client_secret);

// authenticate client to app
try {
  Podio::authenticate_with_app($harmonogram_app_id, $harmonogram_app_token);
  // Authentication was a success, now you can start making API calls.
}
catch (PodioError $e) {
  // Something went wrong. Examine $e->body['error_description'] for a description of the error.
	echo $e . "<br><br><br>";
  }


// weekdays
$days = array(NULL, "Poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota", "Niedziela");

// create array for language groups
$groupsActive = array();
// create array for language groups which are disabled
$groupsDisabled = array();


  // Get all groups by names
  $collection = PodioItem::filter($harmonogram_app_id, array(
	"sort_by" => "title",
	"sort_desc" => false,
    "limit" => 100/*,
    "filters" => array( 
      // jebnąłem się przy modyfikowaniu nazwy i takie mi zrobiło <smuteczek>
      // show only groups where there is still available space
      "czy-w-grupie-sa-wolne-miejsca-i-mozna-sie-zapisywac" => 1) */
	)); 

?>