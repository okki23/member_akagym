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
		$qr = "select a.*,b.posisi_trainer,c.bank_name from m_package_service a 
		left join m_posisi_trainer b on b.id = a.id_posisi
		left join m_bank c on c.id = a.id_bank where a.id = '$id'";
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
		$data_form['join_date'] = date('Y-m-d');
    	$simpan_data = $this->m_package_service->simpan_data($data_form,$this->nama_tabel,$this->primary_key,$id);
		// echo $this->db->last_query();
		// die();
		$simpan_foto = $this->upload_foto();

		
		if($simpan_data && $simpan_foto){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);

	} 

	function upload_foto(){  
		if(isset($_FILES["user_image"])){  
			$extension = explode('.', $_FILES['user_image']['name']);   
			$destination = './upload/' . $_FILES['user_image']['name'];  
			return move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
			 
		}  
	  }  

}
