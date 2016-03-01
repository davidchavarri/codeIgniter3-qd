<?php

/*
 __  __   ______   __   __ ______   ______   ______   __   
/\_\_\_\ /\  __ \ /\ \ / //\  __ \ /\  == \ /\  == \ /\ \  
\/_/\_\/_\ \  __ \\ \ \'/ \ \  __ \\ \  __< \ \  __< \ \ \ 
  /\_\/\_\\ \_\ \_\\ \__|  \ \_\ \_\\ \_\ \_\\ \_\ \_\\ \_\
  \/_/\/_/ \/_/\/_/ \/_/    \/_/\/_/ \/_/ /_/ \/_/ /_/ \/_/

desarrollado por: david chávarri
t: @xavarri
f: 2016-03-01

*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_usuarios extends CI_Controller {

	private $key;
	private $perfil;
	private $idu;

    public function __construct(){
        parent::__construct();
        $this->perfil=$this->session->userdata('tipo');
		$this->idu=$this->session->userdata('id');
		$this->key="184f93149e8d0c854fbc0fc556effc76";
		$this->load->model('usuarios_model');
        $this->layout->setLayout('backend');
        $this->load->library('encrypt');
    }

	public function index(){

		if($this->perfil==88){
			$data['var']="";
			$this->layout->view('index',$data);
		}else{
			$this->session->set_flashdata('ControllerMessage',
			'No tiene privilegios para acceder a esta sección');
			redirect(base_url('login'),301);						
		}
	}

	public function login(){

		$this->layout->setLayout('login');

		if($this->perfil==88){
			$this->session->set_flashdata('ControllerMessage','Ya se encuentra logeado');
			redirect(base_url('backend'),301);	
		}else{

			if($this->input->post()){
				
				$usuario=$this->input->post('usuario', TRUE);
				$passprev=$this->input->post('passfrase', TRUE).$this->key;
				$pass=sha1(md5($passprev));

				$login=$this->usuarios_model->login($usuario,$pass);

				if ($login){
					$this->session->set_userdata('ci3');
					$this->session->set_userdata('id',$login->id);
					$this->session->set_userdata('tipo',$login->tipo);
					$this->session->set_userdata('nombre',$login->nombre);

					$this->session->set_flashdata('ControllerMessage', 'Bienvenido'." ".$this->session->userdata('nombre'));
					redirect(base_url('backend'),  301);				

				}else{
					$this->session->set_flashdata('ControllerMessage',
					'No tiene privilegios para acceder a esta sección');
					redirect(base_url('login'),301);						
				}
			}

			$this->layout->view('login');

		}

	}

    public function logout(){
    	$array_items = array('id', 'tipo','nombre');
		$this->session->unset_userdata($array_items);
		$this->session->sess_destroy();
		redirect(base_url('login'),  301);
	}	


}
