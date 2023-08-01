<?php

namespace App\controllers;

use App\core\Controller;

class Error extends Controller
{ 
    function action_index()
    { 
        $this->view->generate('error.php', 'template_view.php'); 
    } 
}
?>