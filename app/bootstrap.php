<?php
 namespace App;
 session_start();
 
 require_once 'core/config/config.php';
 
 require_once dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
 
 core\Route::start();
 