<?php

require_once('classes/SimpleImage.php');
require_once('classes/PlaceHolder.php');

/**
 * Define a variable or constant that points to the image folder
 */
define('IMAGEPATH', dirname(__FILE__).'/image_placeholders/');

/**
 * Initialize the PlaceHolder object
 */
$placeholder = new PlaceHolder(IMAGEPATH);