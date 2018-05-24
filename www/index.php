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


    /* --- USERS --- */
    case 'login':
        include "modules/login/login.php";
        break;

    case 'logout':
        include "modules/login/logout.php";
        break;

    case 'registration':
        include "modules/login/registration.php";
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
		
    case 'blog/post':
        include "modules/blog/post.php";
        break;

	default:
		include "modules/main/index.php";
		break;

}

?>