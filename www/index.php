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
    // ::::::::::::::::::: CATEGORIES :::::::::::::::::::

    case 'blog/categories':
        include "modules/categories/all.php";
        break;

    case 'blog/category-new':
        include "modules/categories/new.php";
        break;
        
    case 'blog/category-edit':
        include "modules/categories/edit.php";
        break;
    case 'blog/category-delete':
        include "modules/categories/delete.php";
        break;


    // ::::::::::::::::::: PAGES :::::::::::::::::::

    case 'about':
        include "modules/about/index.php";
        break;

    case 'about-edit':
        include "modules/about/edit.php";
        break;

    case 'skills-edit':
        include "modules/about/skills-edit.php";
        break;
        
    case 'expirience-edit':
        include "modules/about/expirience-edit.php";
        break;

    case 'contacts':
        include "modules/contacts/index.php";
        break;
         
    case 'contacts-edit':
        include "modules/contacts/edit.php";
        break;
    case 'messages':
        include "modules/contacts/messages.php";
        break;

        case 'contacts-delete':
        include "modules/contacts/delete.php";
        break;


	default:
		include "modules/main/index.php";
		break;

}

?>