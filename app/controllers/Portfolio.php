<?php

namespace App\controllers;

use App\core\Controller;
use App\core\Model;
use App\core\View;
use App\models\Portfolio_model;

class Portfolio extends Controller
{ 
    function __construct()
    {
        $this->model = new Portfolio_model();
        $this->view = new View();
    }

    function action_index()
    { 
        $data = $this->model->get_data();
        $this->view->generate('portfolio_view.php', 'template_view.php', $data); 
    } 
}
?>