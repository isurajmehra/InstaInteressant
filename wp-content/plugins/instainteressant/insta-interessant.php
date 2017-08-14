<?php
/*
Plugin Name: Insta-Interessant
Plugin URI:  https://ph91.de
Description: Basic WordPress Plugin Header Comment
Version:     v0.1
Author:      Philipp Schreitmueller

*/
require 'Config.php';
require 'vendor/cosenary/instagram/src/Instagram.php';

use MetzWeb\Instagram\Instagram;



$instagram = new Instagram(array(
	'apiKey' => \de\ph91\InstaInteressant\Config::$apiKey,
	'apiSecret' => \de\ph91\InstaInteressant\Config::$apiSecret,
	'apiCallback' => 'YOUR_APP_CALLBACK' // must point to success.php
));
// create login URL
$loginUrl = $instagram->getLoginUrl();

echo "<a href='$loginUrl' target='_blank'>Instagram-Login</a>";

