<?php
// get utm parameters from URL and write to cookies
if (isset($_GET['utm_source'])) {
    $utm_source = $_GET['utm_source'];
} else {
    $utm_source = " ";
}

if (isset($_GET['utm_medium'])) {
    $utm_medium = $_GET['utm_medium'];
} else {
    $utm_medium = " ";
}
if (isset($_GET['utm_campaign'])) {
    $utm_campaign = $_GET['utm_campaign'];
} else {
    $utm_campaign = " ";
}
if (isset($_GET['utm_term'])) {
    $utm_term = $_GET['utm_term'];
} else {
    $utm_term = " ";
}
if (isset($_GET['utm_content'])) {
    $utm_content = $_GET['utm_content'];
} else {
    $utm_content = " ";
}
if (isset($_GET['gclid'])) {
    $gclid = $_GET['gclid'];
} else {
    $gclid = " ";
}
// write original referer cookie only if there is no any
if (!isset($_COOKIE['original_referer'])) {
  $original_referer = $_SERVER['HTTP_REFERER'];
} else {
  $original_referer = $_COOKIE['original_referer'];
}
// write session referer into cookie
if (!isset($_COOKIE['current_referer'])) {
//  if not set, get current referer and set a cookie
  $current_referer = $_SERVER['HTTP_REFERER'];
  setcookie('current_referer', $current_referer, 0, "/"); // expires on session end
} else {
  $current_referer = $_COOKIE['current_referer'];
}


// assign utm parameters to cookie variables
$cookie_utm_source = "utm_source";
$cookie_utm_source_value = $utm_source;

$cookie_utm_medium = "utm_medium";
$cookie_utm_medium_value = $utm_medium;

$cookie_utm_campaign = "utm_campaign";
$cookie_utm_campaign_value = $utm_campaign;

$cookie_utm_term = "utm_term";
$cookie_utm_term_value = $utm_term;

$cookie_utm_content = "utm_content";
$cookie_utm_content_value = $utm_content;

$cookie_gclid = "gclid";
$cookie_gclid_value = $gclid;

$cookie_original_referer = "original_referer";
$cookie_original_referer_value = $original_referer;


$cookies = array($cookie_utm_source, $cookie_utm_medium, $cookie_utm_campaign, $cookie_utm_term, $cookie_utm_content, $cookie_gclid, $cookie_original_referer);
$cookies_values = array($cookie_utm_source_value, $cookie_utm_medium_value, $cookie_utm_campaign_value, $cookie_utm_term_value, $cookie_utm_content_value, $cookie_gclid_value, $cookie_original_referer_value);

$cookiesCount = count($cookies);

for ($i=0; $i<$cookiesCount; $i++) {
// if cookie not set
if(!isset($_COOKIE[$cookies[$i]])) {
 setcookie($cookies[$i], $cookies_values[$i], time() + (86400 * 30 * 2), "/"); // 60 days
}
}



?>