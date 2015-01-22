<meta charset="utf-8">
</head>
<body>
</body>
</html>
<?php
// enable error reports on screen
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
//echo PHP_VERSION . "<br>";

require_once "config.php";

$date = date("Y-m-d H:i");
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$phone = $_POST["phone"];
$languages = $_POST["language"];
$email = $_POST["email"];
$attended = $_POST["attended"];
//$landingpage_version = $_POST["landingpage_version"];

// set proper amount to pay
// if language is set to individual classes (category values)
$languagesInd = array(5,11,17,23,29,35,36);
if (in_array(intval($languages), $languagesInd)) {
  $amount = 350;
}
else { // set amount for group classes
  $amount = 199;
}

// tutaj podmienić na cookies
$utm_source = $_POST["utm_source"];
$utm_medium = $_POST["utm_medium"];
$utm_campaign = $_POST["utm_campaign"];
$gclid = $_POST["gclid"];

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
  new PodioCategoryItemField(array("external_id" => "languages")),
  new PodioCategoryItemField(array("external_id" => "paid")),
   new PodioCategoryItemField(array("external_id" => "attended", "values" => intval($attended))),
  // url parameters
  //new PodioTextItemField(array("external_id" => "landingpageversion", "values" => $landingpage_version)),
  new PodioTextItemField(array("external_id" => "utmsource", "values" => $utm_source)),
  new PodioTextItemField(array("external_id" => "utmmedium", "values" => $utm_medium)),
  new PodioTextItemField(array("external_id" => "utmcampaign", "values" => $utm_campaign)),
  new PodioTextItemField(array("external_id" => "gclid", "values" => $gclid)),
  
  
));

$item = new PodioItem(array(
  'app' => new PodioApp($app_id), // Attach to app with app_id
  'fields' => $fields
));

// add chosen language to category
$item->fields["languages"]->add_value(intval($languages));
// set paid to NO
$item->fields["paid"]->add_value(2);

/*
// if !empty doesnt work, if array is empty chrome console prints error
if (!empty($languages)) {
  // go through created array of selected languages
  foreach ($languages as $language) {
  // add checked language value as category id in Podio
   $item->fields["languages"]->add_value(intval($language)); // intval, because $language number is stored in array as string

  // here the code to sent event to analytics
  }
}
else {
}
*/
// Save the new item
$item->save();


// welcome mail sender 
//require "mailer.php";
?>