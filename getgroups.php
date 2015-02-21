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
$groups = array();
// create array for language groups which are disabled
$groups2 = array();


  // Get all groups by names
  $collection = PodioItem::filter($harmonogram_app_id, array(
	"sort_by" => "title",
	"sort_desc" => false,
    "filters" => array( 
      // jebnąłem się przy modyfikowaniu nazwy i takie mi zrobiło <smuteczek>
      // show only groups where there is still available space
      "czy-w-grupie-sa-wolne-miejsca-i-mozna-sie-zapisywac" => 1) 
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
  echo '<div class="row"><div class="col-md-12">';

  echo "<label style='width: 100%;' class='groupLabel language".$groupLanguage."Group".$groupLevel." hidden'>  ";
  
  // groupspace = 1: group is active to choose, groupspace = 2: group is disabled (full)
//  if ($groupSpace == 1) {

  echo "<input id='language".$groupLanguage."Group".$groupLevel.".".$groupNumber."' type='radio' name='group' value='".$groupNumber."'>";
    
  echo "<span style='margin-left: 10px;'><strong>Grupa ".$groupNumber." - <span style='color: green;'>wolne miejsca</span></strong></span><br/>";
    
//  } else { // if group is not active, make input disabled
//
//  echo "<input id='language".$groupLanguage."Group".$groupLevel.".".$groupNumber."' type='radio' name='group' value='".$groupNumber."' disabled>";  
//        
//  echo "<span style='margin-left: 10px;'><strong>Grupa ".$groupNumber." - <span style='color: red;'>brak miejsc</span></strong></span><br/>";
//  }
  

  // get all items with given group name
  $collection = PodioItem::filter($harmonogram_app_id, array(
	"sort_by" => "weekday",
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
    
    foreach ($item->fields["weekday"]->values as $day) {
    echo '<div class="row">';
    echo '<div class="col-md-4">';
      echo $day['text'];
    echo '</div>';
    
    echo '<div class="col-md-8">';
      echo $start_time->format("H:i")." - ".$end_time->format('H:i');
    echo '</div>';
    echo '</div>';
    }
}
  
  echo "</label>";
  echo "</div></div>";
}



// --------------------------------- DISABLED GROUPS --------------------------------------
 // Get all groups by names
  $collection2 = PodioItem::filter($harmonogram_app_id, array(
	"sort_by" => "title",
	"sort_desc" => false,
    "filters" => array( 
      // jebnąłem się przy modyfikowaniu nazwy i takie mi zrobiło <smuteczek>
      // show only groups where there is still available space
      "czy-w-grupie-sa-wolne-miejsca-i-mozna-sie-zapisywac" => 2) 
	)); 

// Iterate through all groups and save them to array
foreach ($collection2 as $item) {
// assign group name to variable
  $group = $item->title;  
  
//  put group name is not in array already, put it there
  if(!in_array($group, $groups2)){
        $groups2[]=$group;
  }  
}

// now print all found groups with their times
// group = group name (ex. Niemiecki B2.1)
foreach($groups2 as $group) {
    
  
  // get first word from group name
  $groupLanguage = strtok($group, " ");
  
  // get group level
  $groupLevel = substr($group, -4, 2);
  
  // last character of group name
  $groupNumber = substr($group, -1);
  // group number as input value will be sent to Podio
  echo '<div class="row"><div class="col-md-12">';

  echo "<label style='width: 100%;' class='groupLabel language".$groupLanguage."Group".$groupLevel." hidden'>  ";
  
  
  echo "<input id='language".$groupLanguage."Group".$groupLevel.".".$groupNumber."' type='radio' name='group' value='".$groupNumber."' disabled required>";
   
  
  echo "<span style='margin-left: 10px;'><strong>Grupa ".$groupNumber." - <span style='color: red;'>brak miejsc</span></strong></span><br/>";
    
  

  // get all items with given group name
  $collection2 = PodioItem::filter($harmonogram_app_id, array(
	"sort_by" => "weekday",
	"sort_desc" => false,
    "filters" => array(
      "title" => $group)
    )); 
  
  foreach($collection2 as $item) {
    $group = $item->title;  
    $start_time = $item->fields["hour2"]->start_time;
    $end_time = $item->fields["hour2"]->end_time;

    // add 1 hour to times (because of problems with UTC timezones on Podio)
    $start_time->add(new DateInterval('PT1H'));
    $end_time->add(new DateInterval('PT1H'));
    
    // print weekday and time
    
    foreach ($item->fields["weekday"]->values as $day) {
    echo '<div class="row">';
    echo '<div class="col-md-4">';
      echo $day['text'];
    echo '</div>';
    
    echo '<div class="col-md-8">';
      echo $start_time->format("H:i")." - ".$end_time->format('H:i');
    echo '</div>';
    echo '</div>';
    }
}
  
  echo "</label>";
  echo "</div></div>";
}

?>