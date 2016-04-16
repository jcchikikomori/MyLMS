<?php

/**
 * Initialize the whole program!
 */
class Init
{
    public function __construct()
    {
        // Reinitialize root directory
        define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);

        // checking for minimum PHP version
        if (version_compare(PHP_VERSION, '5.3.7', '<')) {
            exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
        } else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
            // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
            // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
            require_once(ROOT . "libraries/password_compatibility_library.php");
        } else {
            // The Composer auto-loader (official way to load Composer contents) to load external stuff automatically
            $lib = ROOT.'vendor/autoload.php';
            $config = ROOT.'config.php';
            if (file_exists($lib)) {
                require ROOT.'vendor/autoload.php';
                if (!file_exists($config)) {
                    exit("File " . $config . " might be corrupted or missing.<br />Create a copy with config.php.example. ");
                } else {
                    require ROOT.'config.php';
                }
            } else {
                exit("The COMPOSER file " . $lib . " might be corrupted or missing.");
            }
        }

        /**
         * Error reporting and User Configs
         * ER: Useful to show every little problem during development, but only show hard errors in production
         */
        if (defined('ENVIRONMENT')) {
            switch (ENVIRONMENT) {
                case 'development':
                    ini_set('display_errors', 1);
                    error_reporting(E_ALL);
                    break;
                case 'web':
                    error_reporting(0);
                    ini_set('display_errors', 0);
                    break;
                case 'release':
                    error_reporting(0);
                    ini_set('display_errors', 0);
                    break;
                case 'maintenance':
                    error_reporting(0);
                    ini_set('display_errors', 0);
                    require_once '_fb/maintenance.html';
                    exit();
                    break;
                default:
                    error_reporting(0);
                    ini_set('display_errors', 0);
            }
        } else {
            exit("The application environment is not set correctly.");
        }

        /**
         * FIXED DIRECTORIES
         */
        //define('LIBS_PATH', APP . 'libs' . DIRECTORY_SEPARATOR);
        //define('CONTROLLERS_PATH', APP . 'controller' . DIRECTORY_SEPARATOR);
        //define('MODELS_PATH', APP . 'model' . DIRECTORY_SEPARATOR);
        //define('VIEWS_PATH', APP . 'view' . DIRECTORY_SEPARATOR);
        //define('TEMPLATE', VIEWS_PATH . '_templates' . DIRECTORY_SEPARATOR);
        //define('HEADER', VIEWS_PATH . $header . DIRECTORY_SEPARATOR);
        //define('FOOTER', VIEWS_PATH . $footer . DIRECTORY_SEPARATOR);
        //define('TEMPLATES', VIEWS_PATH . $templates . DIRECTORY_SEPARATOR);
    }
}