<?php
include_once 'app/models/usermodel.php';
include_once 'app/views/authview.php';

class AuthController {

    private $model;
    private $view;

    public function __construct(){
        $this->model = new UserModel();
        $this->view = new AuthView();
    }

    public function showLogin(){
        //muestro el formulario de Login
        return $this->view->showLogin();
    }

    public function logout(){
      //muestro el formulario de Login
      session_start();
      session_destroy();
      header('Location: ' . BASE_URL);}  

    public function login(){

        if (!isset($_POST['email']) || empty($_POST['email'])){
            return $this->view->showLogin('Falta completar el nombre de usuario');
          }

        if (!isset($_POST['password']) || empty($_POST['password'])){
            return $this->view->showLogin('Falta completar la contraseña');
          }  

          $email = $_POST['email'];
          $password = $_POST['password'];
       
          // verificar que el usuario está en la base de datos
          $userFromDB = $this->model->getUserbyEmail($email);
         // var_dump($password, $userFromDB->password);
       //  die();

        if (!(password_verify($password, $userFromDB->password))){
        // Guardo en la sesion el ID del usuario
           session_start();
           $_SESSION['ID_USER'] = $userFromDB->id;
           $_SESSION['EMAIL_USER'] = $userFromDB->email;
           $_SESSION['LAST_ACTIVITY'] = time();
           // redirijo al home
           header('Location: ' . BASE_URL);}
           else{
                return $this->view->showLogin('Credenciales incorrectas');
               }  
    }

  }