<?php

/**
 *
 *
 * Created by IntelliJ IDEA.
 * User: CORSANES
 * Date: 12/03/2016
 * Time: 6:22 PM
 */
class Init
{
    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$init = new Init(); and constructors"
     */
    public function __construct()
    {
        // checking for minimum PHP version
        if (version_compare(PHP_VERSION, '5.3.7', '<')) {
            exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
        } else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
            // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
            // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
            require_once("libraries/password_compatibility_library.php");
        }
        echo 'Oh.. Hello';
    }
}