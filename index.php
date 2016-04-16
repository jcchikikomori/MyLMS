<?php

/**
 * MyLMS
 * Learning Management System Prototype
 *
 * Made especially for those who want to start coding with PHP!
 *
 * Technical Desc:
 * Uses PHP SESSIONS, OOP features,
 * modern password-hashing and salting
 * and gives the basic functions a proper system needs.
 *
 * @author jccultima123, dlanperez
 * @link https://github.com/jccultima123/MyLMS/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// configs (NOTE: Add your other configs on this syntax sample down)
// require_once("config.php");

// classes
require_once("classes/Init.php"); // checking requirements first using this class
require_once("classes/Core.php"); // core components first such as main classes then load dependencies

// load the login class
require_once("classes/Auth.php");

$auth = new Auth();
