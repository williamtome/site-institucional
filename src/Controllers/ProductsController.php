<?php

namespace Site\Controllers;

class ProductsController
{
    public function index($id)
    {
        return "<h1>Página de produtos.</h1>" . $id;
    }
}