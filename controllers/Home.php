<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('index/principal');
	}
    
    public function login(){
        $this->load->view('log/login');
    }
    
    public function reg(){
        $this->load->view('log/registration');
    }
    
    public function about(){
        $this->load->view('index/about');
    }
    
    public function info(){
        $this->load->view("index/info");
    }
    
    public function category(){
        $this->load->view("index/categoria");
    }
}