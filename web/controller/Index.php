<?php

namespace web\controller;

use core\View;
use Gregwar\Captcha\CaptchaBuilder;
class Index
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function show()
    {
       return $this->view->make('index')->with('wls','haole');
    }

    public function login()
    {
        return $this->view->make('login');
    }
    public function code(){
        header('Content-type: image/jpeg');
        $builder = new CaptchaBuilder;
        $builder->build();
        $_SESSION['phrase'] = $builder->getPhrase();
        $builder->output();
    }
}