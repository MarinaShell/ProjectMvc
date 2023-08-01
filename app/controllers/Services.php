<?php

namespace App\controllers;

use App\core\Controller;

class Services extends Controller
{ 
    function action_index()
    { 
        $this->view->generate('services_view.php', 'template_view.php'); 
    } 
}
