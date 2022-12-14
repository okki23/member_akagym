<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_uom extends Parent_Model { 
  
	 
     var $nama_tabel = 'm_item_unit';
     var $daftar_field = array('id','unit_code','remark');
     var $primary_key = 'id'; 
	  
     public function __construct(){
          parent::__construct();
          $this->load->database();
     }
  
     public function fetch_uom(){
       
		   $getdata = $this->db->get($this->nama_tabel)->result();
		   $data = array();  
		   $no = 1;
               foreach($getdata as $row)  
               {  
                    $sub_array = array(); 
     
                    $sub_array[] = $row->unit_code;   
                    $sub_array[] = get_status($row->remark);    
                    $sub_array[] = '
                    <a href="javascript:void(0)" class="btn btn-warning btn-xs waves-effect" id="edit" onclick="Ubah_Data('.$row->id.');" > <i class="material-icons">create</i> Ubah </a>  &nbsp; 
                    <a href="javascript:void(0)" id="delete" class="btn btn-danger btn-xs waves-effect" onclick="Hapus_Data('.$row->id.');" > <i class="material-icons">delete</i> Hapus </a>  &nbsp;';  
              
                    $data[] = $sub_array;  
                    $no++;
               }  
               
		   return $output = array("data"=>$data);
		    
    }
  
	 
 
}
