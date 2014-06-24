<?php
/**
 * Use your favorite autoload routine here.
 */
function classAutoLoader($class) {
  $filename = str_replace('\\', '/', $class) . '.php';  
  @require_once 'classes/'.$filename;  
}
spl_autoload_register('classAutoLoader');

/**
 * Define a variable or constant that points to the image folder
 */
define('IMAGEPATH', dirname(__FILE__).'/image_placeholders/');

/**
 * Initialize the PlaceHolder object
 */
$placeholder = new PlaceHolder(IMAGEPATH);