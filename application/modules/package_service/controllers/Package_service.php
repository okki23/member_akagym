<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Package_service extends Parent_Controller {
	 
	var $nama_tabel = 'm_package_service';
	var $daftar_field = array('id','package_name','remark','id_group','id_cat_service','id_visit_type','qty','price','expire_package_day','durasi_pt','id_revenue','id_agreement');
	var $primary_key = 'id'; 
	
  
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_package_service'); 
		if(!$this->session->userdata('username')){
		   echo "<script language=javascript>
				 alert('Anda tidak berhak mengakses halaman ini!');
				 window.location='" . base_url('login') . "';
				 </script>";
		}
 	} 
 
  	public function index(){
  		$data['judul'] = $this->data['judul']; 
  		$data['konten'] = 'package_service/package_service_view';
  		$this->load->view('template_view',$data);		
     
  	} 
 
  	public function fetch_package_service(){  
       $getdata = $this->m_package_service->fetch_package_service();
       echo json_encode($getdata);   
	}
 
 
	public function get_data_edit(){
		$id = $this->uri->segment(3);
		$qr = "SELECT a.*,b.group_package,c.cat_service,d.visit_type,e.revenue,f.agreement FROM m_package_service a 
		LEFT JOIN m_group_package b ON b.id = a.id_group
		LEFT JOIN m_cat_service c ON c.id = a.id_cat_service
		LEFT JOIN m_visit_type d ON d.id = a.id_visit_type
		LEFT JOIN m_revenue e ON e.id = a.id_revenue
		LEFT JOIN m_agreement f ON f.id = a.id_agreement where a.id = '$id'";
		$sql = $this->db->query($qr)->row();
		echo json_encode($sql,TRUE);
	}
	 
	public function hapus_data(){
		$id = $this->uri->segment(3);  
	 
   		$sqlhapus = $this->m_package_service->hapus_data($id);
		
		if($sqlhapus){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);
	}
	 
	public function simpan_data(){ 
    
		$data_form = $this->m_package_service->array_from_post($this->daftar_field);

		$id = isset($data_form['id']) ? $data_form['id'] : NULL;   
    	$simpan_data = $this->m_package_service->simpan_data($data_form,$this->nama_tabel,$this->primary_key,$id);
  
		
		if($simpan_data){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);

	} 

 

}
