<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_index extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->layout->setLayout('frontend');
    }

	public function index()
	{
		$data['var']="";
		$this->layout->view('index',$data);
	}
}
