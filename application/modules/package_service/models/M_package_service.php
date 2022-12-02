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
       
      $getdata = $this->db->query("SELECT a.*,b.group_package,c.cat_service,d.visit_type,e.revenue,f.agreement FROM m_package_service a 
      LEFT JOIN m_group_package b ON b.id = a.id_group
      LEFT JOIN m_cat_service c ON c.id = a.id_cat_service
      LEFT JOIN m_visit_type d ON d.id = a.id_visit_type
      LEFT JOIN m_revenue e ON e.id = a.id_revenue
      LEFT JOIN m_agreement f ON f.id = a.id_agreement")->result();
		   $data = array();  
		   $no = 1;
           foreach($getdata as $row)  
           {  
                $sub_array = array(); 
  
                $sub_array[] = $row->package_name;  
                $sub_array[] = $row->remark; 
                $sub_array[] = $row->group_package; 
                $sub_array[] = $row->cat_service;  
                $sub_array[] = $row->qty;  
                $sub_array[] = $row->price;  
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
