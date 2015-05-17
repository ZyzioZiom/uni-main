<?php
// enable error reports on screen
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);  //On or Off
//echo PHP_VERSION . "<br>";

require_once "config.php";

$date = date("Y-m-d H:i");
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$phone = $_POST["phone"];
$group = $_POST["group"];
$languages = $_POST["language-level"];
$email = $_POST["email"];
$attended = $_POST["attended"];
//$landingpage_version = $_POST["landingpage_version"];

// set proper amount to pay

// set discount for person who attended before
$amountWhenAttended = 0.9;

function applyDiscount(&$amount, $attended, $amountWhenAttended) { // "&" is to modify variable value out of function
  if($attended == 1) {
    $amount *= $amountWhenAttended;
  }
}
// if language is set to individual classes (category values)
$languagesInd = array(5,11,17,23,29,35,36);
if(in_array(intval($languages), $languagesInd)) {
  $amount = 359;
  applyDiscount($amount, $attended, $amountWhenAttended);
}
else { // set amount for group classes
  $amount = 199;
  applyDiscount($amount, $attended, $amountWhenAttended);
}

//// get URL parameters data from cookies
$utm_source = $_COOKIE["utm_source"];
$utm_medium = $_COOKIE["utm_medium"];
$utm_campaign = $_COOKIE["utm_campaign"];
$utm_term = $_COOKIE["utm_term"];
$utm_content = $_COOKIE["utm_content"];
$gclid = $_COOKIE["gclid"];
$original_referer = $_COOKIE["original_referer"];
$current_referer = $_COOKIE["current_referer"];

// include Podio API
require_once 'podio-php-4.0.2/PodioAPI.php';

// authenticate client to Podio
Podio::setup($client_id, $client_secret);

// authenticate client to app
try {
  Podio::authenticate_with_app($app_id, $app_token);
  // Authentication was a success, now you can start making API calls.
}
catch (PodioError $e) {
  // Something went wrong. Examine $e->body['error_description'] for a description of the error.
	echo $e . "<br><br><br>";
  }


// CREATING NEW PODIO ITEM

// Create a field collection with some fields.
// Be sure to use the external_ids of your specific fields
$fields = new PodioItemFieldCollection(array(
  new PodioTextItemField(array("external_id" => "title", "values" => $name)),
  new PodioTextItemField(array("external_id" => "lastname", "values" => $lastname)),
  new PodioTextItemField(array("external_id" => "phone", "values" => $phone)),
  new PodioTextItemField(array("external_id" => "email", "values" => $email)),
  new PodioTextItemField(array("external_id" => "amount", "values" => $amount)),
  // new category field without any value
  new PodioCategoryItemField(array("external_id" => "group")),
  new PodioCategoryItemField(array("external_id" => "languages")),
  new PodioCategoryItemField(array("external_id" => "paid")),
  new PodioCategoryItemField(array("external_id" => "payment-message")),
  new PodioCategoryItemField(array("external_id" => "attended", "values" => intval($attended))),
  // url parameters
  //new PodioTextItemField(array("external_id" => "landingpageversion", "values" => $landingpage_version)),
  new PodioTextItemField(array("external_id" => "utmsource", "values" => $utm_source)),
  new PodioTextItemField(array("external_id" => "utmmedium", "values" => $utm_medium)),
  new PodioTextItemField(array("external_id" => "utmcampaign", "values" => $utm_campaign)),
  new PodioTextItemField(array("external_id" => "utmterm", "values" => $utm_term)),
  new PodioTextItemField(array("external_id" => "utmcontent", "values" => $utm_content)),
  new PodioTextItemField(array("external_id" => "gclid", "values" => $gclid)),
  new PodioTextItemField(array("external_id" => "originalreferer", "values" => $original_referer)),
  new PodioTextItemField(array("external_id" => "lastreferer", "values" => $current_referer))
  
));

$item = new PodioItem(array(
  'app' => new PodioApp($app_id), // Attach to app with app_id
  'fields' => $fields
));

// add chosen group to category
$item->fields["group"]->add_value(intval($group));

// add chosen language to category
$item->fields["languages"]->add_value(intval($languages));
// set paid to NO
$item->fields["paid"]->add_value(2);
// set received payment message to YES (it's done by mailer)
$item->fields["payment-message"]->add_value(1);

// Save the new item
$item->save();


// welcome mail sender 
include "mailer.php";


?>
