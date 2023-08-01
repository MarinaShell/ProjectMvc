<?php

namespace App\controllers;

use App\core\Controller;

class Contacts extends Controller
{ 
    function action_index()
    { 
        $this->view->generate('contacts_view.php', 'template_view.php'); 
    } 
}
?>