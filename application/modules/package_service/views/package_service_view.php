 
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                 
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Package Service
                            </h2>
                            <br>
                            <a href="javascript:void(0);" id="addmodal" class="btn btn-primary waves-effect">  <i class="material-icons">add_circle</i>  Tambah Data </a>
  
                        </div>
                        <div class="body">
                                
                            <div class="table-responsive">
							   <table class="table table-bordered table-striped table-hover js-basic-example" id="example" >
									<thead>
										<tr> 
											<th style="width:5%;">Package Name</th>
                                            <th style="width:5%;">Remark</th>
                                            <th style="width:5%;">Group</th>
                                            <th style="width:5%;">Category</th>     
                                            <th style="width:5%;">Qty</th>     
                                            <th style="width:5%;">Price</th>                                           
                                            <th style="width:10%;">Opsi</th> 
										</tr>
									</thead> 
								</table> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </section>
 

	<!-- form tambah dan ubah data -->
	<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                        <form method="post" id="user_form" enctype="multipart/form-data">    
                            <input type="hidden" name="id" id="id"> 
                            
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for=""> Package Name </label>
                                                <input type="text" class="form-control" name="package_name" id="package_name">
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for=""> Remark</label>
                                                <input type="text" class="form-control" name="remark" id="remark">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                                    <div class="form-line">
                                                        <label for="">Group Package</label>
                                                        <input type="text" name="nama_group" id="nama_group" class="form-control" readonly="readonly" >
                                                        <input type="text" name="id_group" id="id_group" required>
                                                        
                                                    </div>
                                                    <span class="input-group-addon">
                                                        <button type="button" onclick="PilihGroupPackage();" class="btn btn-primary"> Pilih Group Package ... </button>
                                                    </span>
                                        </div> 
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                                    <div class="form-line">
                                                        <label for="">Category Service</label>
                                                        <input type="text" name="nama_cat_service" id="nama_cat_service" class="form-control" readonly="readonly" >
                                                        <input type="text" name="id_cat_service" id="id_cat_service" required>
                                                        
                                                    </div>
                                                    <span class="input-group-addon">
                                                        <button type="button" onclick="PilihCatService();" class="btn btn-primary"> Pilih Category Service ... </button>
                                                    </span>
                                        </div> 
                                    </div>
                                </div>  

                                <div class="row clearfix"> 
                                <div class="col-sm-6">
                                        <div class="input-group">
                                                    <div class="form-line">
                                                        <label for="">Visit Type</label>
                                                        <input type="text" name="nama_visit_type" id="nama_visit_type" class="form-control" readonly="readonly" >
                                                        <input type="text" name="id_visit_type" id="id_visit_type" required>
                                                        
                                                    </div>
                                                    <span class="input-group-addon">
                                                        <button type="button" onclick="PilihVisitType();" class="btn btn-primary"> Pilih Visit Type ... </button>
                                                    </span>
                                        </div> 
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="">  Qty </label>
                                                <input type="text" class="form-control" name="qty" id="qty">
                                            </div>
                                        </div>
                                    </div>
                                </div>
 
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="">  Price </label>
                                                <input type="text" class="form-control" name="price" id="price">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="">  Expire Package Day </label>
                                                <input type="text" class="form-control" name="expire_package_day" id="expire_package_day">
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <div class="row clearfix"> 
                                <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="">  Durasi PT </label>
                                                <input type="text" class="form-control" name="durasi_pt" id="durasi_pt">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                                    <div class="form-line">
                                                        <label for="">Revenue</label>
                                                        <input type="text" name="nama_revenue" id="nama_revenue" class="form-control" readonly="readonly" >
                                                        <input type="text" name="id_revenue" id="id_revenue" required>
                                                        
                                                    </div>
                                                    <span class="input-group-addon">
                                                        <button type="button" onclick="PilihRevenue();" class="btn btn-primary"> Pilih Revenue ... </button>
                                                    </span>
                                        </div> 
                                    </div>
                                </div> 

                                

                            <div class="row clearfix">  
                            <div class="col-sm-6">
                                        <div class="input-group">
                                                    <div class="form-line">
                                                        <label for="">Agreement</label>
                                                        <input type="text" name="nama_agreement" id="nama_agreement" class="form-control" readonly="readonly" >
                                                        <input type="text" name="id_agreement" id="id_agreement" required>
                                                        
                                                    </div>
                                                    <span class="input-group-addon">
                                                        <button type="button" onclick="PilihAgreement();" class="btn btn-primary"> Pilih Agreement ... </button>
                                                    </span>
                                        </div> 
                                    </div>
                                    
                                    <div class="col-sm-6">
                                     
                                    </div>
                                </div>

                                <div class="row clearfix">
                               
								   <button type="button" onclick="Simpan_Data();" class="btn btn-success waves-effect"> <i class="material-icons">save</i> Simpan</button>

                                   <button type="button" name="cancel" id="cancel" class="btn btn-danger waves-effect" onclick="javascript:Bersihkan_Form();" data-dismiss="modal"> <i class="material-icons">clear</i> Batal</button>
							 </form>
					   </div>
                     
                    </div>
                </div>
    </div>

     
    <!-- modal cari group package -->
    <div class="modal fade" id="PilihGroupPackageModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" > Pilih Group Package </h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_group_package" >
  
                                    <thead>
                                        <tr> 
                                   
                                            <th style="width:95%;">Group Package</th>
                                             
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_group_packagex">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>

    <!-- modal cat service -->
    <div class="modal fade" id="PilihCatServiceModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" > Pilih Category Service </h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_catservice" >
  
                                    <thead>
                                        <tr> 
                                   
                                            <th style="width:95%;">Category Service</th>
                                             
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_catservicex">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>

    <!-- modal visit type  -->
    <div class="modal fade" id="PilihVisitTypeModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" > Pilih Visit Type </h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_visit_type" >
  
                                    <thead>
                                        <tr> 
                                   
                                            <th style="width:95%;"> Visit Type</th>
                                             
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_visit_typex">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>

    
    <!-- modal revenue  -->
    <div class="modal fade" id="PilihRevenueModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" > Pilih Revenue </h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_revenue" >
  
                                    <thead>
                                        <tr> 
                                   
                                            <th style="width:95%;"> Revenue</th>
                                             
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_revenuex">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>

    <!-- modal agreement  -->
    <div class="modal fade" id="PilihAgreementModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" > Pilih Agreement </h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_agreement" >
  
                                    <thead>
                                        <tr> 
                                   
                                            <th style="width:95%;"> Agreement </th>
                                             
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_agreementx">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>

   
   <script type="text/javascript"> 
    

    // PilihGroupPackageModal
    // PilihCatServiceModal
    // PilihVisitTypeModal
    // PilihRevenueModal
    // PilihAggreementModal
     
	function PilihGroupPackage(){
        $("#PilihGroupPackageModal").modal({backdrop: 'static', keyboard: false,show:true});
    }

    function PilihCatService(){
        $("#PilihCatServiceModal").modal({backdrop: 'static', keyboard: false,show:true});
    }

    function PilihVisitType(){
        $("#PilihVisitTypeModal").modal({backdrop: 'static', keyboard: false,show:true});
    }

    function PilihRevenue(){
        $("#PilihRevenueModal").modal({backdrop: 'static', keyboard: false,show:true});
    }

    function PilihAgreement(){
        $("#PilihAgreementModal").modal({backdrop: 'static', keyboard: false,show:true});
    }
 
    $('#daftar_group_package').DataTable( {
        "ajax": "<?php echo base_url(); ?>group_package/fetch_group_package" 
    });

    $('#daftar_catservice').DataTable( {
        "ajax": "<?php echo base_url(); ?>cat_service/fetch_cat_service" 
    });

    $('#daftar_visit_type').DataTable( {
        "ajax": "<?php echo base_url(); ?>visit_type/fetch_visit_type" 
    });

    $('#daftar_revenue').DataTable( {
        "ajax": "<?php echo base_url(); ?>revenue/fetch_revenue" 
    });

    $('#daftar_agreement').DataTable( {
        "ajax": "<?php echo base_url(); ?>agreement/fetch_agreement" 
    });

    
    var daftar_group_package = $('#daftar_group_package').DataTable();
     
        $('#daftar_group_package tbody').on('click', 'tr', function () {
            
            var content = daftar_group_package.row(this).data() 
            $("#nama_group").val(content[0]);
            $("#id_group").val(content[2]);
            $("#PilihGroupPackageModal").modal('hide');
        } );

   
    var daftar_catservice = $('#daftar_catservice').DataTable();
     
     $('#daftar_catservice tbody').on('click', 'tr', function () {
         
         var content = daftar_catservice.row(this).data() 
         $("#nama_cat_service").val(content[0]);
         $("#id_cat_service").val(content[2]);
         $("#PilihCatServiceModal").modal('hide');
     } );

     var daftar_visit_type = $('#daftar_visit_type').DataTable();
     
     $('#daftar_visit_type tbody').on('click', 'tr', function () {
         
         var content = daftar_visit_type.row(this).data() 
         $("#nama_visit_type").val(content[0]);
         $("#id_visit_type").val(content[2]);
         $("#PilihVisitTypeModal").modal('hide');
     } );

     var daftar_revenue = $('#daftar_revenue').DataTable();
     
     $('#daftar_revenue tbody').on('click', 'tr', function () {
         
         var content = daftar_revenue.row(this).data() 
         $("#nama_revenue").val(content[0]);
         $("#id_revenue").val(content[2]);
         $("#PilihRevenueModal").modal('hide');
     } );


     var daftar_agreement = $('#daftar_agreement').DataTable();
     
     $('#daftar_agreement tbody').on('click', 'tr', function () {
         
         var content = daftar_agreement.row(this).data() 
         $("#nama_agreement").val(content[0]);
         $("#id_agreement").val(content[2]);
         $("#PilihAgreementModal").modal('hide');
     } );

    
  
	 function Ubah_Data(id){
		$("#defaultModalLabel").html("Form Ubah Data");
		$("#defaultModal").modal('show');
 
		$.ajax({
			 url:"<?php echo base_url(); ?>package_service/get_data_edit/"+id,
			 type:"GET",
			 dataType:"JSON", 
			 success:function(result){  
				 $("#defaultModal").modal('show'); 
				 $("#id").val(result.id);
                 $("#nama").val(result.nama);
                 $("#barcode_rfid").val(result.barcode_rfid);
                 $("#title").val(result.title);
                 $("#employee_name").val(result.employee_name);
                 $("#gender").val(result.gender);
                 $("#dob").val(result.dob); 
                 $("#dob_place").val(result.dob_place); 
                 $("#bank_account").val(result.bank_account); 
                 $("#phone").val(result.phone);  
                 $("#nama_marketing").val(result.marketing);  
                 $("#nama_bank").val(result.bank_name);   
                 $("#no_ktp").val(result.no_ktp); 
                 $("#address").val(result.address);  
                 $("#register_date").val(result.register_date);  
                 $("#status").val(result.status); 
                 $("#id_bank").val(result.id_bank); 
                 $("#no_npwp").val(result.no_npwp); 
                 $("#foto").val(result.foto); 
                 $("#email").val(result.email); 
                 $("#emergency_contact").val(result.emergency_contact); 
                 $("#kodepos").val(result.kodepos); 
        

                $("#id_posisi").val(result.id_posisi); 
                 $("#nama_posisi").val(result.posisi_trainer); 
                 $("#marital_status").val(result.marital_status); 

				 $('#image1').attr('src',"upload/"+result.foto);
                 if(result.gender == 'P'){
                    $("#priabtn").attr('class','btn btn-primary');
                    $("#wanitatbn").attr('class','btn btn-default');
                 }else{
                    $("#wanitabtn").attr('class','btn btn-primary');
                    $("#priabtn").attr('class','btn btn-default');
                 }

                 if(result.marital_status == 'S'){ 
                    $("#singlebtn").attr('class','btn btn-primary'); 
                    $("#mariedbtn").attr('class','btn btn-default'); 
                    $("#divorcebtn").attr('class','btn btn-default'); 
                 }else if(result.marital_status == 'D'){ 
                    $("#singlebtn").attr('class','btn btn-default'); 
                    $("#mariedbtn").attr('class','btn btn-default'); 
                    $("#divorcebtn").attr('class','btn btn-primary'); 
                 }else if(result.marital_status == 'M'){ 
                    $("#singlebtn").attr('class','btn btn-default'); 
                    $("#mariedbtn").attr('class','btn btn-primary'); 
                    $("#divorcebtn").attr('class','btn btn-default'); 
                 } 
			 }
		 });
	 }
 
	 function Bersihkan_Form(){
        $(':input').val(''); 
         
     }

	 function Hapus_Data(id){
		if(confirm('Anda yakin ingin menghapus data ini?'))
        {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo base_url('package_service/hapus_data')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
			   
               $('#example').DataTable().ajax.reload(); 
			   
			    $.notify("Data berhasil dihapus!", {
					animate: {
						enter: 'animated fadeInRight',
						exit: 'animated fadeOutRight'
					}  
				 },{
					type: 'success'
					});
				 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
   
    }
	}
    
      
  
	function Simpan_Data(){ 
		 var formData = new FormData($('#user_form')[0]); 
  
                 $.ajax({
                 url:"<?php echo base_url(); ?>package_service/simpan_data",
                 type:"POST",
                 data:formData,
                 contentType:false,  
                 processData:false,   
                 success:function(result){ 
                    
                     $("#defaultModal").modal('hide');
                     $('#example').DataTable().ajax.reload(); 
                     $('#user_form')[0].reset();
                     Bersihkan_Form();
                     
                     $.notify("Data berhasil disimpan!", {
                        animate: {
                            enter: 'animated fadeInRight',
                            exit: 'animated fadeOutRight'
                     } 
                     },{
                        type: 'warning'
                    });
                 }
                }); 
 
 
         

	}

    function PreviewGambar(input) {
        if (input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#image1').attr('src', e.target.result);
                $("#foto").val($('#user_image').val().replace(/C:\\fakepath\\/i, ''));
            };
            reader.readAsDataURL(input.files[0]);
            
        }
     }
      
	 
       $(document).ready(function() {
		   
		$("#addmodal").on("click",function(){
			$("#defaultModal").modal({backdrop: 'static', keyboard: false,show:true});
            $("#method").val('Add');
            $("#defaultModalLabel").html("Form Tambah Data");
		});

        var dateObj = new Date();
        var month = dateObj.getUTCMonth() + 1; //months from 1-12
        var day = dateObj.getUTCDate();
        var year = dateObj.getUTCFullYear();
 
		  
		$('#example').DataTable({ 
			"ajax": "<?php echo base_url(); ?>package_service/fetch_package_service" 
		});

        $('.datepicker').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD',
            clearButton: true,
            weekStart: 1,
            time: false
            }); 
            
        });
  
		
		 
    </script>