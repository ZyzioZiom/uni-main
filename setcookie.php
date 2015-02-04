<?php
// get utm parameters from URL
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

$cookies = array($cookie_utm_source, $cookie_utm_medium, $cookie_utm_campaign, $cookie_utm_term, $cookie_utm_content, $cookie_gclid);
$cookies_values = array($cookie_utm_source_value, $cookie_utm_medium_value, $cookie_utm_campaign_value, $cookie_utm_term_value, $cookie_utm_content_value, $cookie_gclid_value);

$cookiesCount = count($cookies);

for ($i=0; $i<$cookiesCount; $i++) {
// if cookie not set
if(!isset($_COOKIE[$cookies[$i]])) {
 setcookie($cookies[$i], $cookies_values[$i], time() + (86400 * 30 * 2), "/"); // 60 days
}
}

?>