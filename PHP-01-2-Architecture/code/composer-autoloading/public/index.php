<?php

// Using Composer auto-generated stack of autoloaders
require '../vendor/autoload.php';

// Getting the class name from the HTTP request URI, trimming leading and trailing `/`
$className = ucfirst(trim($_SERVER['REQUEST_URI'], '/'));

// If we are on `/`, user do want the homepage
if ($className === '') {
    $className = 'Homepage';
}
$className = '\\Pages\\'.$className;

// Searching for the class (will use our custom autoload function)
if (class_exists($className)) {
    // Creating the PageModel object
    $page = new $className();
    // Rendering it
    $page->render();
} else {
    // PageModel not found
    echo 'Unknown page.';
}
