<?php 
class Usuarios_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	public function login($email, $pass){
		$where=array('email'=>$email,'passfrase'=>$pass);
		$query=$this->db
		->select('u.id as id, u.nombres as nombre, u.apellidos as apellidos, u.idt as tipo')
		->from('usuarios as u')
		->where($where)
		->get();
		return $query->row();
	}

	public function agregar($datos=array()){
		$this->db->insert('usuarios',$datos);
        return true;
	}
	
	public function actualizar($datos=array(),$id){
		$this->db->where('id', $id);
		$this->db->update('usuarios', $datos); 
		return true;       
	}

}
