<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Payment_type extends Parent_Controller {
	 
  var $nama_tabel = 'm_payment_type';
  var $daftar_field = array('id','payment_type');
  var $primary_key = 'id'; 
 

 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_payment_type'); 
		if(!$this->session->userdata('username')){
		   echo "<script language=javascript>
				 alert('Anda tidak berhak mengakses halaman ini!');
				 window.location='" . base_url('login') . "';
				 </script>";
		}
 	} 
 
  	public function index(){
  		$data['judul'] = $this->data['judul']; 
  		$data['konten'] = 'payment_type/payment_type_view';
  		$this->load->view('template_view',$data);		
     
  	} 
 
  	public function fetch_payment_type(){  
       $getdata = $this->m_payment_type->fetch_payment_type();
       echo json_encode($getdata);   
	}
 
 
	public function get_data_edit(){
		$id = $this->uri->segment(3);
		$sql = $this->db->where('id',$id)->get($this->nama_tabel)->row(); 
		echo json_encode($sql,TRUE);
	}
	 
	public function hapus_data(){
		$id = $this->uri->segment(3);  
	 
   		$sqlhapus = $this->m_payment_type->hapus_data($id);
		
		if($sqlhapus){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);
	}
	 
	public function simpan_data(){ 
    
		$data_form = $this->m_payment_type->array_from_post($this->daftar_field);

		$id = isset($data_form['id']) ? $data_form['id'] : NULL;  

    	$simpan_data = $this->m_payment_type->simpan_data($data_form,$this->nama_tabel,$this->primary_key,$id);
 
		if($simpan_data){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);

	} 

}
