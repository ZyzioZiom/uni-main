<?php include "setcookie.php"; ?>
<? 
// Load the cache process
include("cache_harmonogram.php");
?>


<!DOCTYPE html>
<html lang="pl">
  <head>
  

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harmonogram | Warsztaty językowe AIESEC University</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<?php
// enable error reports on screen
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 'On');  //On or Off

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
  
?>
    
<? include "top-body.php"; ?>
<div id="content">
  <div class="col-md-10 centered heading fontcolor">
      <div class="logo text-center"></div>
      <br/>
    <h3 class="text-center">Warsztaty trwają od 16 marca przez 8 tygodni</h3>
     <h3 class="text-center">Aktualny harmonogram zajęć:</h3>

  </div>
 
    
    
  <div class="row">
  <div class="col-md-12 col-lg-10 col-lg-offset-1 btn-group" role="group">
    <button id="harmonogramChooseLanguageButton" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
      Angielski
      <span class="caret"></span>
    </button>
    <ul id="harmonogramChooseLanguageList" class="dropdown-menu" role="menu">
      <li id="harmonogramEn"><a href="#">Angielski</a></li>
      <li id="harmonogramFr"><a href="#">Francuski</a></li>
      <li id="harmonogramIt"><a href="#">Włoski</a></li>
      <li id="harmonogramEs"><a href="#">Hiszpański</a></li>
      <li id="harmonogramRu"><a href="#">Rosyjski</a></li>
      
    </ul>
  </div>
  </div>
  
  
  <div class="col-md-12 col-lg-10 col-lg-offset-1 centered news-content" style="display:table;"> 
     
<?
// weekdays
$days = array(NULL, "Poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota", "Niedziela");


$collection = PodioItem::filter($harmonogram_app_id, array(
	"sort_by" => "hour2", // sort items by hour ascending
	"sort_desc" => false,
    "limit" => 100,
));
// iterate through weekdays Monday to Saturday
for($weekday=1; $weekday<7; $weekday++) {

?>
 <div class="col-md-2 harmonogram-day">
<?
//  print column header 
  print "<h4 class='text-center' ><strong>".$days[$weekday]."</strong></h4><br/>";

foreach ($collection as $item) {
  
//  get data of all objects
  $group = $item->title;
  $groupNumber = substr($group, -1);
  $group = substr($group, 0, -2);
  $groupLevel = substr($group, -2, 2);
  
  $description = $item->fields["classroom"]->values;
  $start_time = $item->fields["hour2"]->start_time;
  $end_time = $item->fields["hour2"]->end_time;

//  Podio uses UTC time zone, so convert time to local
  $start_time->setTimeZone(new DateTimeZone('Europe/Warsaw'));
  $end_time->setTimeZone(new DateTimeZone('Europe/Warsaw'));

// dig deeper into item arrays
$item = $item->fields["weekday"]->values;


foreach ($item as $item) {

// if category id is corresponding to current iteration of weekday), print group in current day's column
if ($item["id"] == $weekday) {
  
  echo '<div class="row class-item '.$group.'.'.$groupNumber.' group-color-'.$groupLevel.' hidden">
        <div class="col-md-12 centered news-item">';
  // print group name
  if (!empty($group)) {
  echo "<p><strong>".$group." gr. ".$groupNumber."</strong></p>";
  }
  
  // print hours
  if (!empty($start_time) && !empty($end_time)) {
  echo "<p>".$start_time->format("H:i")." - ".$end_time->format('H:i')."</p>";
  }
  
  // print classroom
  if (!empty($description)) {
  echo "<p>".$description."</p>";
  }
  echo '</div></div>';
}
  
}
}
  
    
  
?> </div> <?
} 
  ?>
         </div>
          


     <? include 'footer.php'; ?>   
   
  

    
<? include 'bottom-scripts.php'; ?>
  
<script src="js/harmonogram-language.js"></script>
    
  </body>
</html>
<?php
// Save the cache
include("cache_footer.php");
?>