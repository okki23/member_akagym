<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_package_service extends Parent_Model { 
  
	var $nama_tabel = 'm_package_service';
	var $daftar_field = array('id','package_name','remark','id_group','id_cat_service','id_visit_type','qty','price','expire_package_day','durasi_pt','id_revenue','id_agreement');
	var $primary_key = 'id'; 
	  
  public function __construct(){
        parent::__construct();
        $this->load->database();
  }
  
  public function fetch_package_service(){
       
      $getdata = $this->db->query("
      select a.*,b.group_package from m_package_service a 
      left join m_group_package b on b.id = a.id_group")->result();
		   $data = array();  
		   $no = 1;
           foreach($getdata as $row)  
           {  
                $sub_array = array(); 
 
                
                $sub_array[] = $row->employee_name;  
                $sub_array[] = $row->posisi_trainer; 
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
