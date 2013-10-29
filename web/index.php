<?php

/**
 * show errors
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);


/**
 * set include path
 */
define('WEB_PATH', dirname(__FILE__));
set_include_path(get_include_path() . PATH_SEPARATOR .
                 WEB_PATH . PATH_SEPARATOR .
                 WEB_PATH . DIRECTORY_SEPARATOR . '..' .
                    DIRECTORY_SEPARATOR .'vendor');

/**
 * Bootsrap - Autoloader namespace register
 */
require('../app/Bootsrap.php');
Bootsrap::register();


/**
 * not use class
 */
$not_use = new Symfony\Component\HttpFoundation\Response();
$not_use->setContent("Hello World ");
echo $not_use->getContent();


/**
 * import Response class
 */
use Symfony\Component\HttpFoundation\Response;


/**
 *  new Response object
 *
 **/
$response = new Response();
$response->setContent("Hello World 2 ");
echo $response->getContent();


/**
 *  extend class
 *
 **/
class NewResponse extends Response {
    public function __construct($content){
        $this->setContent($content);
    }
}
$new_response = new NewResponse("Hello World 3");
echo $new_response->getContent();


/*
Recommended Autolader library
SplClassLoader Implementation - https://gist.github.com/jwage/221634
*/