<?php 

require "config.php";
require "db.php";

// echo HOST;
// echo ROOT;

// echo "index.php";
// echo "<br><br>";


/* ..........................................

РОУТЕР

............................................. */

// request URL = http://project/blog/post?id=15
$uri =  $_SERVER["REQUEST_URI"];
$uri = rtrim($uri, "/"); 
$uri = filter_var($uri, FILTER_SANITIZE_URL);
$uri = substr($uri, 1);
$uri = explode('?', $uri);

// echo $uri[0];
// echo "<br><br>";

switch ( $uri[0]) {
	case '':
		include "modules/main/index.php";
		break;

	case 'about':
		include "modules/about/index.php";
		break;

	case 'contacts':
		include "modules/contacts/index.php";
		break;

	case 'blog':
		include "modules/blog/index.php";
		break;

	default:
		include "modules/main/index.php";
		break;

}

?>