<?php

// Registering our own autoloader, with a closure (unnamed function)
spl_autoload_register(function ($class) {
    // Search for any unknown class (getting there) in the `Pages` folder
    include '../Pages/'.ucfirst($class).'.php';
});

// Getting the class name from the HTTP request URI, trimming leading and trailing `/`
$className = trim($_SERVER['REQUEST_URI'], '/');

// If we are on `/`, user do want the homepage
if ($className === '') {
    $className = 'homepage';
}

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
