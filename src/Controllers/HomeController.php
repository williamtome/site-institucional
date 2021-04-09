<?php


namespace Site\Controllers;


use Site\View\View;

class HomeController
{
    public function index()
    {
        $view = new View('site/index.phtml');
        return $view->render();
    }
}