<?php include "setcookie.php"; ?>
<? 
// Load the cache process
include("cache.php");
?>

<!DOCTYPE html>
<html lang="pl">
  <head>
  

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aktualności | Warsztaty językowe AIESEC University</title>

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
<? include "top-body.php"; ?>
<div id="content">
  <div class="row">
  <div class="col-md-10 centered heading fontcolor">
     <div class="logo text-center"></div>
      <br/>
      
      
      <h3 class="text-center">Tutaj znajdziesz wszystkie aktualne informacje dotyczące naszych warsztatów.</h3>

  </div>
  </div>
    
    
  <div class="row">
  <div class="col-md-8 centered news-content">
    
      <?php
// enable error reports on screen
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 'On');  //On or Off

require_once "config.php";
// include Podio API
require_once 'podio-php-4.0.2/PodioAPI.php';

// authenticate client to Podio
Podio::setup($news_client_id, $news_client_secret);

// authenticate client to app
try {
  Podio::authenticate_with_app($news_app_id, $news_app_token);
  // Authentication was a success, now you can start making API calls.
}
catch (PodioError $e) {
  // Something went wrong. Examine $e->body['error_description'] for a description of the error.
	echo $e . "<br><br><br>";
  }
  

// Get sticky items first (sticky=1) and other items after (sticky=2)
for ($sticky=1; $sticky < 3; $sticky++) {
  // Get items from app with news_app_id
  $collection = PodioItem::filter($news_app_id, array(
	"sort_by" => "last_edit_on", // sort items by last edited (newest first)
	"sort_desc" => true,
	"filters" => array(
		"published" => 1, // show only with position 1 ("TAK") in published (Opublikować?)
		"sticky" => $sticky)

	)); 

// Iterate through all published items in app
foreach ($collection as $item) {
  print '<div class="row">
          <div class="col-md-10 centered news-item">';
  
  // print title
  print "<h1>".$item->title."</h1>";
  // print date of creation
  print "<p>".$item->created_on->format('d-m-Y')."</p>";

  // assign images to variable $image (images are values of items in the field "zdjecie")
  $image = $item->fields["zdjecie"]->values;
    if (!empty($image)) { // if item contains images (is not empty)
      // print each image
	  foreach ($image as $img) {
	  	// This is get_raw function for displaying images while not logged in to Podio as user
        	  	
		// assign image id to variable
		$img_id = PodioFile::get($img->file_id);
        
        // if image with current id doesn't exist, save it on server in folder /img/news/
        if (!file_exists('img/news/'.$img->file_id.'.jpg')) {
        // Download and save the file. This might take a while...          
          file_put_contents('img/news/'.$img->file_id.'.jpg', $img_id->get_raw());
        }

		
		
		
		
		// display image
		print "<div class='text-center'><img src='img/news/".$img->file_id.".jpg' class='news-image'></div><br/>";
	  }
    }

  // put item field of external_id="opis" into $opis variable
  $opis = $item->fields["opis"];
	
  // print the value of $opis variable
  if (!empty($opis)) {
  print "<p>".$opis->values."</p>";
  }

/*
$files = PodioItem::filter($news_app_id, array(
	"filters" => array(
		"item_id" => $item->item_id,
		)), 
	array('fields' => 'items.fields(files)'));

foreach ($files as $file) {
	print $file->name;
	print $item->item_id;
}
/*
// get app files
// SHOWS FILE FOR ALL APP AND ALL ITEMS
$files = PodioFile::get_for_app($news_app_id);

if (!empty($files)) {
	print "<p>Do pobrania:</p>";
}

foreach ($files as $file) {
// This is get_raw function for displaying files while not logged in to Podio as user
	  	// Download the file. This might take a while...
		$file_content = $file->get_raw();

		// assign image id to variable
		$file_id = PodioFile::get($file->file_id);
		
		// if file with current id and name doesn't exist, save it on server in folder files/
		// filename in format >>file_id-file_name<<, ex. 123456-info.txt
		if (!file_exists('files/'.$file->file_id.'-'.$file->name.'')) {
			file_put_contents('files/'.$file->file_id.'-'.$file->name.'', $file_id->get_raw());
		}

		print "<p><a href='files/".$file->file_id."-".$file->name."' target='_blank'>".$file->name." </a></p>";
}
*/
  // seperate items
  print "</div></div>";
}
}
?>

    </div>
    </div>
  
   <? include 'footer.php'; ?>   
  
    </div>
<? include 'bottom-scripts.php'; ?>
    

  </body>
</html>
<?php
// Save the cache
include("cache_footer.php");
?>