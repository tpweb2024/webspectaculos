<?php
require_once "app/models/user.model.php";
require_once "app/views/user.view.php";
//require_once "app/views/general.view.php";
//define ("URL_USUARIOS", "showUsuarios");

class UsuariosController{
    private $modelUser;
    private $view;
    private $generalView;

    public function __construct() {
        $this->modelUser = new UserModel();
        $this->view  = new UsuariosView();
        $this->generalView = new GeneralView();
    } //__construct


    /******************************************************************************************/
    /***                                    LOGICA                                          ***/
    /******************************************************************************************/
    function addRegister() {
        //verifico si todos los campos están
        if (!isset($_POST['nombreusuario']) || empty($_POST['nombreusuario']))
            return $this->generalView->showError('Falta completar el nombre de usuario');
        if (!isset($_POST['password']) || empty($_POST['password']))
            return $this->generalView->showError('Falta completar la contraseña');
        
        //obtengo los datos de los campos Posteados
        $nombreUsuario = $_POST['nombreusuario'];
        $password = $_POST['password'];
    
        //verifico que ese usuario no esté en la bd
        $user = $this->modelUser->getByNombre($nombreUser);
        if ($user)  //si el registro no existe, devuelve un false, sino devuelve el objeto con el usuario
            return $this->generalView->showError("Ya existe un usuario con ese nombre =$nombreUser");
    
        //inserto los datos en la bd.
        $id = $this->modelUser->insert($nombreUser, password_hash($password, PASSWORD_DEFAULT));
    
        //redirijo al home
        header('Location: ' . BASE_URL . '/' . URL_USUARIOS);
    } //addRegister
    
    
    function editRegister($idUser) {
        //verifico si todos los campos están
        if (!isset($_POST['email']) || empty($_POST['email']))
            return $this->generalView->showError('Falta completar el nombre de usuario');
        if (!isset($_POST['password']) || empty($_POST['password']))
            return $this->generalView->showError('Falta completar la contraseña');
        
        //obtengo los datos de los campos Posteados
        $email = $_POST['email'];
        $password = $_POST['password'];
            
        $email = $this->modelUser->getByNombre($email); 
        if (!$email)  //si el registro no existe, devuelve un false, sino devuelve el objeto con la materia
            return $this->generalView->showError("No existe el usuario con el email=$email");
    
    
        //modifico ese registro en la bd
        $id = $this->modelUsuarios->update($id, $email,  password_hash($password, PASSWORD_DEFAULT));
    
        //redirijo al home
        header('Location: ' . BASE_URL . '/' . URL_USUARIOS);
    } //editRegister
    
    
    function deleteRegister($id) {
        // verifico si existe ese id en la bd
        $user = $this->modelUser->get($id);// obtengo el registro por id
        if (!$user) // si el registro no existe, devuelve un false, sino devuelve el objeto con la materia
            return $this->generalView->showError("No existe el usuario con el usuario=$id");
        
        // borro ese registro en la bd
        $this->modelUsuarios->delete($id);
    
        //redirijo al home
        header('Location: ' . BASE_URL . '/' . URL_USUARIOS);
    } //deleteRegister

    
    /******************************************************************************************/
    /***                                    PANTALLAS                                       ***/
    /******************************************************************************************/
    
    function showUsuarios(){ // Muestro la tabla con las usuarios según el filtro
        //obtengo los campos POST del filtro
        $usuarios = $this->modelUsuarios->getAll();
        return $this->view->showUsuarios($usuarios); 
    } // showUsuarios


    function showAddUsuario(){ // muestro un formulario para ingresar el alta de un usuario
        return $this->view->showFormAddUsuario();    //muestro el formulario de alta
    } // showAddUsuario


    function showEditUsuario($idUsuario){ // muestro un formulario para editar un usuario
        $usuario = $this->modelUsuarios->get($idUsuario); //verifico si existe ese id en la bd
        if (!$usuario)  //si el registro no existe, devuelve un false, sino devuelve el objeto con el registro
            return $this->generalView->showError("No existe el usuario con el idusuario=$idUsuario");
        
        return $this->view->showFormEditUsuario($usuario);  //muestro el formulario de edicion
    } // showEditUsuario


    function showDeleteUsuario($idUsuario){ // muestro un formulario para confirmar el borrado de un género
        $usuario = $this->modelUsuarios->get($idUsuario); 
        if (!$usuario)  // si el registro no existe, devuelve un false, sino devuelve el objeto con el registro
            return $this->generalView->showError("No existe el usuario con el idusuario=$idUsuario");
        
        // verifico el último usuario (sino no se puede borrar)
        $cantUsuarios = $this->modelUsuarios->cantidadUsuarios();
        if ($cantUsuarios==1)
            return $this->generalView->showError("No se puede borrar el usuario porque es el último que queda");
        
        return $this->view->showFormDeleteUsuario($usuario); //muestro el formulario de borrado
    } //showDeleteUsuario


} //class UsuariosController