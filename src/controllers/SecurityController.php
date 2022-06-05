<?php
require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController
{
    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function login(){
        session_start();

        if($this->isPost()) {

            $login = strval($_POST['login']);
            $password = md5($_POST['password']);

            if(!$login || !$password){
                return $this->render('login', ['messages' => ['Please fill all of the inputs']]);
            }

            $user = $this->userRepository->getUser($login);

            if (!$user) {
                return $this->render('login', ['messages' => ['User with this login does not exist!']]);
            }

            if ($user->getPassword() !== $password) {
                return $this->render('login', ['messages' => ['Wrong password!']]);
            }
            $_SESSION['login'] = $user->getLogin();
            $_SESSION['email'] = $user->getEmail();
            $_SESSION['userId'] = $user->getId();
            $_SESSION['roleId'] = $user->getRoleId();
            $_SESSION['logged_in'] = true;

            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/welcomePage");
        }elseif($_SESSION['logged_in']){
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/welcomePage");
        }else{
            return $this->render('login');
        }

    }

    public function logout(){
        session_start();

        if($this->isPost()){
            session_unset();
            unset($_SESSION['login']);
            unset($_SESSION['email']);
            unset($_SESSION['userId']);
            unset($_SESSION['logged_in']);
            session_destroy();

            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/login");
        }elseif(!$_SESSION['logged_in']){
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/login");
        }else{
            return $this->render('logout');
        }

    }

    public function register()
    {
        if (!$this->isPost()) {
            return $this->render('register');
        }

        $email = $_POST['email'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['repeat-password'];

        if (!$email || !$login || !$password || !$confirmedPassword){
            return $this->render('register', ['messages' => ['Please fill all of the inputs']]);
        }

        if(strlen($email)>100 || strlen($login) > 100 || strlen($password)>255){
            return $this->render('register', ['messages' => ['Please provide a valid data']]);
        }

        if(!preg_match('/\S+@\S+\.\S+/', $email)){
            return $this->render('register', ['messages' => ['Wrong email format']]);
        }


        $login_validation = $this->userRepository->getUser($login);
        if ($login_validation){
            return $this->render('register', ['messages' => ['User already exists']]);
        }

        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Please provide proper password']]);
        }

        if($password !== "admin") {
            $user = new User($email, $login, md5($password), 2);
        }else{
            $user = new User($email, $login, md5($password), 1);
        }

        $this->userRepository->addUser($user);

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/login");
    }
}