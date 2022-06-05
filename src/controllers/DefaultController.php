<?php
require_once 'AppController.php';

class DefaultController extends AppController{
    public function index(){
        $this->render('frontpage');
    }

    public function welcomePage(){
        $this->render('welcomePage');
    }
    public function login(){
        return $this->render('login');
    }
    public function notes()
    {
        $this->render('notes');
    }

}