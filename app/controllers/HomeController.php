<?php

namespace app\controllers;
use app\core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $dados['view'] = "produto/v_home";
        $this->load('template', $dados);
    }
}