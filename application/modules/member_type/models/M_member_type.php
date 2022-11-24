<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_member_type extends Parent_Model { 
  
     var $nama_tabel = 'm_member_type';
     var $daftar_field = array('id','jenis_anggota','group_name','status');
     var $primary_key = 'id'; 
	  
     public function __construct(){
          parent::__construct();
          $this->load->database();
     }
  
     public function fetch_member_type(){
       
		   $getdata = $this->db->get($this->nama_tabel)->result();
		   $data = array();  
		   $no = 1;
               foreach($getdata as $row)  
               {  
                    $sub_array = array(); 
     
                    $sub_array[] = $row->jenis_anggota;
                    $sub_array[] = $row->group_name;  
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
