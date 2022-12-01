<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_member extends Parent_Model { 
  
     var $nama_tabel = 'm_member';
     var $daftar_field = array('id','barcode_rfid','title','member_name','gender','dob','phone','no_ktp','address','register_date','id_marketing','status','id_bank','bank_account','jenis_kartu','foto','email','emergency_contact','place_dob','kodepos');
     var $primary_key = 'id'; 
	  
  public function __construct(){
        parent::__construct();
        $this->load->database();
  }
  
  public function get_no(){ 
 
     $db = $this->db->query('select substr(max(barcode_rfid),1,3) as result from m_member')->result_array();

     return $db;
}

  public function fetch_member(){
       
		   $getdata = $this->db->get($this->nama_tabel)->result();
		   $data = array();  
		   $no = 1;
           foreach($getdata as $row)  
           {  
                $sub_array = array(); 
 
                
                $sub_array[] = $row->member_name;  
                $sub_array[] = $row->register_date; 
                $sub_array[] = $row->phone; 
                $sub_array[] = $row->address;  
                $sub_array[] = '
                <a href="javascript:void(0)" class="btn btn-warning btn-xs waves-effect" id="edit" onclick="Ubah_Data('.$row->id.');" > <i class="material-icons">create</i> Ubah </a>  &nbsp; 
                <a href="javascript:void(0)" id="delete" class="btn btn-danger btn-xs waves-effect" onclick="Hapus_Data('.$row->id.');" > <i class="material-icons">delete</i> Hapus </a>  &nbsp;
                <a href="javascript:void(0)" id="delete" class="btn btn-success btn-xs waves-effect" onclick="Cetak_Kartu('.$row->id.');" > <i class="material-icons">credit_card</i> Cetak Kartu </a>  &nbsp;';  
                $sub_array[] = $row->id; 
                $data[] = $sub_array;  
                $no++;
           }  
          
		   return $output = array("data"=>$data);
		    
    }
  
	 
 
}
