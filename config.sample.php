<?php

error_reporting(E_ALL ^ E_NOTICE);

// Twitter's API URL - you can also use https://api.twitter.com/1/ if you want a secure connection to Twitter
define('API_URL','http://api.twitter.com/1/');

// Image Proxy URL
// Use http://src.sencha.io/ for regular connections
// Use https://tinysrc.appspot.com/ for SSL connections
// NOTICE: Not used in this nh version!
//define('IMAGE_PROXY_URL', 'https://tinysrc.appspot.com/');

// Cookie encryption key. Max 52 characters
define('ENCRYPTION_KEY', 'Example Key - Change Me!');

// Cookie prefix, point it to the path of dabr if you are not using entire domain
define('COOKIE_PREFIX', '/');

// OAuth consumer and secret keys. Available from http://twitter.com/oauth_clients
define('OAUTH_CONSUMER_KEY', '');
define('OAUTH_CONSUMER_SECRET', '');

// Embedly Key 
// Embed image previews in tweets
// Sign up at https://app.embed.ly/
define('EMBEDLY_KEY', '');

// API key for InMobi adverts - sign up at http://inmobi.com/
define('INMOBI_API_KEY', '');

// Optional: Allows you to turn shortened URLs into long URLs http://www.longurlplease.com/docs
// Uncomment to enable.
// define('LONGURL_KEY', 'true');

// Optional: Enable to view page processing and API time
define('DEBUG_MODE', 'OFF');

// Base URL, should point to your website, including a trailing slash
// Can be set manually but the following code tries to work it out automatically.
$base_url = 'http://'.$_SERVER['HTTP_HOST'];
if ($directory = trim(dirname($_SERVER['SCRIPT_NAME']), '/\,')) {
	$base_url .= '/'.$directory;
}
define('BASE_URL', $base_url.'/');
// WARNING: To ensure that enforced SSL is working,
// you'd better edit and uncomment the following line:
//define('BASE_URL', 'https://example.com/path/to/dabr/');


// MySQL storage of OAuth login details for users
define('MYSQL_USERS', 'OFF');
// mysql_connect('localhost', 'username', 'password');
// mysql_select_db('dabr');

/* The following table is needed to store user login details if you enable MYSQL_USERS:

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(64) NOT NULL,
  `oauth_key` varchar(128) NOT NULL,
  `oauth_secret` varchar(128) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`username`)
)

*/

// Google Analytics Mobile tracking code
// You need to download ga.php from the Google Analytics website for this to work
$GA_ACCOUNT = "";
$GA_PIXEL = "ga.php";

?>
