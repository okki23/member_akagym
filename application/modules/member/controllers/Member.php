<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Member extends Parent_Controller {
	 
  var $nama_tabel = 'm_member';
  var $daftar_field = array('id','barcode_rfid','title','member_name','gender','dob','phone','no_ktp','address','register_date','id_marketing','status','id_bank','bank_account','jenis_kartu','foto','email','emergency_contact','place_dob','kodepos');
  var $primary_key = 'id'; 

  
  
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_member'); 
		if(!$this->session->userdata('username')){
		   echo "<script language=javascript>
				 alert('Anda tidak berhak mengakses halaman ini!');
				 window.location='" . base_url('login') . "';
				 </script>";
		}
 	} 
 
  	public function index(){
  		$data['judul'] = $this->data['judul']; 
  		$data['konten'] = 'member/member_view';
  		$this->load->view('template_view',$data);		
     
  	} 
 

	public function header_member(){ 
		$now = date('Y-m-d');  
		$last_id = str_pad(mt_rand(1,99999999),7,'0',STR_PAD_LEFT);
		$parse = array('rfid'=>$last_id,'date'=>$now);
		echo json_encode($parse);  
	}
  

  	public function fetch_member(){  
       $getdata = $this->m_member->fetch_member();
       echo json_encode($getdata);   
	}
 
 
	public function get_data_edit(){
		$id = $this->uri->segment(3);
		$qr = "select a.*,b.employee_name as marketing,c.bank_name from m_member a 
		left join m_pegawai b on b.id = a.id_marketing
		left join m_bank c on c.id = a.id_bank where a.id = '$id'";
		$sql = $this->db->query($qr)->row();
		echo json_encode($sql,TRUE);
	}
	 
	public function hapus_data(){
		$id = $this->uri->segment(3);  
	 
   		$sqlhapus = $this->m_member->hapus_data($id);
		
		if($sqlhapus){
			$result = array("response"=>array('message'=>'success'));
		}else{
			$result = array("response"=>array('message'=>'failed'));
		}
		
		echo json_encode($result,TRUE);
	}
	 
	public function simpan_data(){ 
    
		$data_form = $this->m_member->array_from_post($this->daftar_field);

		$id = isset($data_form['id']) ? $data_form['id'] : NULL;  

    	$simpan_data = $this->m_member->simpan_data($data_form,$this->nama_tabel,$this->primary_key,$id);
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
