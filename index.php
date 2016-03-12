<?php

/**
 * MyLMS
 * Learning Management System Prototype
 * Made with pure PHP
 *
 * Uses PHP SESSIONS, OOP features, modern password-hashing and salting and gives the basic functions a proper system needs.
 *
 * @author jccultima123, dlanperez
 * @link https://github.com/jccultima123/MyLMS/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// checking requirements first using this class
require_once("classes/Init.php");
// include the configs / constants for the database connection
require_once("config/db.php");

// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn()) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
    include("views/logged_in.php");
} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    include("views/not_logged_in.php");
}
