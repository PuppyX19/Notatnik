<?php
require_once 'AppController.php';
require_once __DIR__.'/../repository/UserRepository.php';

class AdminController extends AppController
{
    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function admin(){
        session_start();
        if(!$this->isPost()){
            return $this->render('admin');
        }
        $login = $_POST['login'];
        if (!$login){
            return $this->render('admin', ['messages' => ['Please provide a login']]);
        }

        if(strlen($login)>100){
            return $this->render('admin', ['messages' => ['Please provide a valid login']]);
        }
        $user_validation = $this->userRepository->getUser($login);
        if (!$user_validation){
            return $this->render('admin', ['messages' => ['This user does not exist']]);
        }

        $removal = $this->userRepository->deleteUser($login);
        $this->render('admin', ['messages' => ['User was successfully deleted']]);
    }
}