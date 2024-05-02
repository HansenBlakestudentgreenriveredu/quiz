<?php
    // Blake Hansen
    // 5/2/2024
    // Quiz

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

// Instantiate the F3 Base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function () {
    //echo '<h1>Hello Fat-Free</h1>';

    // Render a view page
    $view = new Template();
    echo $view->render('index.html');
});

// survey
$f3->route('GET /surveyLink', function () {

    // Render a survey page
    $view = new Template();
    echo $view->render('survey.html');
});

$f3->route('GET /summary', function () {

    // Render a summary page
    $view = new Template();
    echo $view->render('summary.html');
});

// Run fat-free
$f3->run();