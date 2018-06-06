<?php 

require "config.php";
require "db.php";
require "libs/functions.php";
session_start();
// $currentUser = $_SESSION['logged_user'];
// echo HOST;http://part-4/work-edit.html
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


// ::::::::::::::::::: USERS :::::::::::::::::::

    case 'login':
        include "modules/login/login.php";
        break;

    case 'logout':
        include "modules/login/logout.php";
        break;

    case 'lost-password':
        include "modules/login/lost-password.php";
        break;

    case 'set-new-password':
        include "modules/login/set-new-password.php";
        break;
        
    case 'registration':
        include "modules/login/registration.php";
        break;

    case 'profile':
        include "modules/profile/index.php";
        break;

    case 'profile-edit':
        include "modules/profile/edit.php";
        break;

    // ::::::::::::::::::: BLOG :::::::::::::::::::

    case 'blog':
        include "modules/blog/index.php";
        break;

    case 'blog/post':
        include "modules/blog/post.php";
        break;

    case 'blog/post-new':
        include "modules/blog/post-new.php";
        break;

    // ::::::::::::::::::: PAGES :::::::::::::::::::

    case 'about':
        include "modules/about/index.php";
        break;

    case 'contacts':
        include "modules/contacts/index.php";
        break;

    


	default:
		include "modules/main/index.php";
		break;

}

?>