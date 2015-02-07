
<? // tutaj kod który pobiera grupy językowe i generuje ich kod


// form-handler.js opisany ręcznie
// pobierz języki z harmonogramu
// pobierz wszystkie numery grup dla danego języka (po kropce)
// dla każdej grupy odnajdź itemy w harmonogramie i wylistuj ich dni oraz godziny
// zr

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
$groups = array();

  // Get all groups by names
  $collection = PodioItem::filter($harmonogram_app_id, array(
	"sort_by" => "title",
	"sort_desc" => false
	)); 

// Iterate through all groups and save them to array
foreach ($collection as $item) {
// assign group name to variable
  $group = $item->title;  

//  put group name is not in array already, put it there
  if(!in_array($group, $groups)){
        $groups[]=$group;
  }  
}

// now print all found groups with their times
// group = group name (ex. Niemiecki B2.1)
foreach($groups as $group) {
  // get first word from group name
  $groupLanguage = strtok($group, " ");
  
  // get group level
  $groupLevel = substr($group, -4, 2);
  
  // last character of group name
  $groupNumber = substr($group, -1);
  // group number as input value will be sent to Podio
  echo "<label class='language".$groupLanguage."Group".$groupLevel."'>";
  echo "<input type='radio' name='group' value='".$groupNumber."'>";
  echo "<strong>".$group ."</strong><br/>";
  
  // get all items with given group name
  $collection = PodioItem::filter($harmonogram_app_id, array(
	"sort_by" => "title",
	"sort_desc" => false,
    "filters" => array(
      "title" => $group)
    )); 
  
  foreach($collection as $item) {
    $group = $item->title;  
    $start_time = $item->fields["hour2"]->start_time;
    $end_time = $item->fields["hour2"]->end_time;

    // add 1 hour to times (because of problems with UTC timezones on Podio)
    $start_time->add(new DateInterval('PT1H'));
    $end_time->add(new DateInterval('PT1H'));
    
    // print weekday and time
    echo "<table>";
    foreach ($item->fields["weekday"]->values as $day) {
    echo "<tr><td>";
      echo $day['text'];
    
    }
    echo "</td><td>";
      echo $start_time->format("H:i")." - ".$end_time->format('H:i');
    echo "</td></tr>";
}
  echo "</table></input>";
  echo "</label>";
}
  // separate items
    ?> </div>
         </div>
          <br/>
<?
?>