<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_pegawai extends Parent_Model { 
  
	var $nama_tabel = 'm_pegawai';
	var $daftar_field = array('id','employee_name','address','phone','email','job_title','status','dob_place','dob','marital_status','join_date','npwp_status','no_npwp','id_bank','bank_account','foto','id_posisi','gender');
	var $primary_key = 'id';
	  
  public function __construct(){
        parent::__construct();
        $this->load->database();
  }
  
  public function fetch_pegawai(){
       
		   $getdata = $this->db->query("
               select a.*,b.posisi from m_pegawai a 
               left join m_posisi b on b.id = a.id_posisi")->result();
		   $data = array();  
		   $no = 1;
           foreach($getdata as $row)  
           {  
                $sub_array = array(); 
 
                
                $sub_array[] = $row->employee_name;  
                $sub_array[] = $row->posisi; 
                $sub_array[] = $row->phone; 
                $sub_array[] = $row->address;  
                $sub_array[] = '
                <a href="javascript:void(0)" class="btn btn-warning btn-xs waves-effect" id="edit" onclick="Ubah_Data('.$row->id.');" > <i class="material-icons">create</i> Ubah </a>  &nbsp; 
                <a href="javascript:void(0)" id="delete" class="btn btn-danger btn-xs waves-effect" onclick="Hapus_Data('.$row->id.');" > <i class="material-icons">delete</i> Hapus </a>  &nbsp;';  
                $sub_array[] = $row->id; 
                $data[] = $sub_array;  
                $no++;
           }  
          
		   return $output = array("data"=>$data);
		    
    }
  
	 
 
}
