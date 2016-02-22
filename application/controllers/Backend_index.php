<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_index extends CI_Controller {

	private $perfil;
	private $idu;

    public function __construct(){
        parent::__construct();
        $this->perfil=$this->session->userdata('tipo');
		$this->idu=$this->session->userdata('id');
        $this->layout->setLayout('backend');
    }

	public function index(){

		if($this->perfil==88){

			$data['var']="";
			$this->layout->view('index',$data);

		}else{
			#$this->session->set_flashdata('ControllerMessage','No tiene privilegios para acceder a esta sección.');
			redirect(base_url('backend-login'),301);
		}
	}
}
