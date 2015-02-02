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

$cookie_gclid = "gclid";
$cookie_gclid_value = $gclid;

$cookies = array($cookie_utm_source, $cookie_utm_medium, $cookie_utm_campaign, $cookie_gclid);
$cookies_values = array($cookie_utm_source_value, $cookie_utm_medium_value, $cookie_utm_campaign_value, $cookie_gclid_value);

for ($i=0; $i<4; $i++) {
// if cookie not set
if(!isset($_COOKIE[$cookies[$i]])) {
 setcookie($cookies[$i], $cookies_values[$i], time() + (86400 * 30 * 2), "/"); // 60 days
}
}

?>