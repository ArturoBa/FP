<?php 
    //Aqui hago el session_start() para activar la supervariable $_SESSION
    session_start();

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
     
     RECUERDA: SI EL USUARIO ESTA LOGEADO PONER EN EL CONSTRUCTOR LA REDIRECCION A LA VISTA PRINCIPAL-LOGGED
	 */
	public function index()
	{
		$this->load->view('index/principal-logged');
	}
    
    public function logout(){
        unset($_SESSION["user"]);
        redirect("home/login");
    }
    
    //Esta funcion llama a la vista que administra la cuenta
    public function account(){
        $this->load->view("index/account-logged");
    }
    
    public function about(){
        $this->load->view('index/about');
    }
}