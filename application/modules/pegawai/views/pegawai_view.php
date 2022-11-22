 
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
                                Pegawai
                            </h2>
                            <br>
                            <a href="javascript:void(0);" id="addmodal" class="btn btn-primary waves-effect">  <i class="material-icons">add_circle</i>  Tambah Data </a>
  
                        </div>
                        <div class="body">
                                
                            <div class="table-responsive">
							   <table class="table table-bordered table-striped table-hover js-basic-example" id="example" >
									<thead>
										<tr> 
											<th style="width:5%;">Nama</th>
                                            <th style="width:5%;">Posisi</th>
                                            <th style="width:5%;">Telp</th>
                                            <th style="width:5%;">Alamat</th>                                           
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

    <!-- id
employee_name
address
phone
email 
status
dob_place
dob
marital_status
join_date

no_npwp
id_bank
bank_account
foto
id_posisi 
gender-->


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
                                                <label for=""> Nama Pegawai </label>
                                                <input type="text" class="form-control" name="employee_name" id="employee_name">
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for=""> Alamat</label>
                                                <input type="text" class="form-control" name="address" id="address">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for=""> Telepon </label>
                                                <input type="text" class="form-control" name="phone" id="phone">
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for=""> Email </label>
                                                <input type="text" class="form-control" name="email" id="email">
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                <div class="row clearfix"> 
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="">  Tempat Lahir </label>
                                                <input type="text" class="form-control" name="dob_place" id="dob_place">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="">  Tanggal Lahir </label>
                                                <input type="text" class="datepicker form-control" name="dob" id="dob">
                                            </div>
                                        </div>
                                    </div>
                                </div>
 
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        
                                                <label for=""> Jenis Kelamin </label>
                                                <br>
                                                <input type="hidden" name="gender" id="gender">

                                                <button type="button" id="priabtn" class="btn btn-default waves-effect "> Pria </button>

                                                <button type="button" id="wanitabtn" class="btn btn-default waves-effect "> Wanita </button>
                                                <br>
                                        
                                        </div> 
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        
                                        <label for=""> Status Pernikahan </label>
                                        <br>
                                        <input type="hidden" name="marital_status" id="marital_status">

                                        <button type="button" id="mariedbtn" class="btn btn-default waves-effect "> Menikah </button>

                                        <button type="button" id="singlebtn" class="btn btn-default waves-effect "> Single </button>

                                        <button type="button" id="divorcebtn" class="btn btn-default waves-effect "> Divorce </button>
                                        <br>
                                
                                </div> 
                                    </div> 
                                </div> 

                                <div class="row clearfix"> 
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for=""> NPWP </label>
                                                <input type="text" class="form-control" name="no_npwp" id="no_npwp">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                                    <div class="form-line">
                                                        <label for="">Posisi</label>
                                                        <input type="text" name="nama_posisi" id="nama_posisi" class="form-control" readonly="readonly" >
                                                        <input type="hidden" name="id_posisi" id="id_posisi" required>
                                                        
                                                    </div>
                                                    <span class="input-group-addon">
                                                        <button type="button" onclick="PilihPosisi();" class="btn btn-primary"> Pilih Posisi ... </button>
                                                    </span>
                                        </div> 
                                    </div>
                                </div> 

                                

                            <div class="row clearfix"> 
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for=""> Rekening </label>
                                                <input type="text" class="form-control" name="bank_account" id="bank_account">
                                            </div>
                                        </div> 
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                                    <div class="form-line">
                                                        <label for="">Bank</label>
                                                        <input type="text" name="nama_bank" id="nama_bank" class="form-control" readonly="readonly" >
                                                        <input type="hidden" name="id_bank" id="id_bank" required>
                                                        
                                                    </div>
                                                    <span class="input-group-addon">
                                                        <button type="button" onclick="PilihBank();" class="btn btn-primary"> Pilih Bank ... </button>
                                                    </span>
                                        </div> 
                                    </div>
                                </div>

                                <div class="row clearfix">
                              
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                Upload Foto 
                                                <input type="file" name="user_image" id="user_image" class="form-control" onchange="PreviewGambar(this);" placeholder="Foto" />  
                                            </div>
                                            <input type="hidden" name="foto" id="foto">
                                        </div>
                                    </div> 
                                </div>
                                    <div align="center">
                                    <br>    
                                    <img onerror="this.onerror=null;this.src='<?php echo base_url('upload/image_prev.jpg'); ?>';" id="image1" src="<?php echo base_url('upload/image_prev.jpg');?>" style="height: 300px;" alt="..." class="img-rounded img-responsive">
                                    <br>
                                    </div>
								   <button type="button" onclick="Simpan_Data();" class="btn btn-success waves-effect"> <i class="material-icons">save</i> Simpan</button>

                                   <button type="button" name="cancel" id="cancel" class="btn btn-danger waves-effect" onclick="javascript:Bersihkan_Form();" data-dismiss="modal"> <i class="material-icons">clear</i> Batal</button>
							 </form>
					   </div>
                     
                    </div>
                </div>
    </div>

     
    <!-- modal cari bank -->
    <div class="modal fade" id="PilihBankModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" > Pilih Bank </h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_bank" >
  
                                    <thead>
                                        <tr> 
                                   
                                            <th style="width:95%;">Nama Bank</th>
                                             
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_bankx">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>

    <!-- modal cari posisi -->
    <div class="modal fade" id="PilihPosisiModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" > Pilih Posisi </h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_posisi" >
  
                                    <thead>
                                        <tr> 
                                   
                                            <th style="width:95%;">Posisi</th>
                                             
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_posisix">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>

   
   <script type="text/javascript"> 
    $("#priabtn").on("click",function(){
        $("#gender").val('P');
        $(this).attr('class','btn btn-primary');
        $("#wanitabtn").attr('class','btn btn-default'); 
    });

    $("#wanitabtn").on("click",function(){
        $("#gender").val('W');
        $(this).attr('class','btn btn-primary');
        $("#priabtn").attr('class','btn btn-default'); 
    });

    $("#singlebtn").on("click",function(){
        $("#marital_status").val('S');
        $(this).attr('class','btn btn-primary');
        $("#mariedbtn").attr('class','btn btn-default'); 
        $("#divorcebtn").attr('class','btn btn-default'); 
    });

    $("#mariedbtn").on("click",function(){
        $("#marital_status").val('M');
        $(this).attr('class','btn btn-primary');
        $("#divorcebtn").attr('class','btn btn-default'); 
        $("#singlebtn").attr('class','btn btn-default'); 
    });

    $("#divorcebtn").on("click",function(){
        $("#marital_status").val('D');
        $(this).attr('class','btn btn-primary');
        $("#mariedbtn").attr('class','btn btn-default'); 
        $("#singlebtn").attr('class','btn btn-default'); 
    });

     
	function PilihBank(){
        $("#PilihBankModal").modal({backdrop: 'static', keyboard: false,show:true});
    }

    function PilihPosisi(){
        $("#PilihPosisiModal").modal({backdrop: 'static', keyboard: false,show:true});
    }
 
    $('#daftar_posisi').DataTable( {
        "ajax": "<?php echo base_url(); ?>pegawai_jbt/fetch_pegawai_jbt" 
    });

    $('#daftar_bank').DataTable( {
        "ajax": "<?php echo base_url(); ?>bank/fetch_bank" 
    });

    
    var daftar_posisi = $('#daftar_posisi').DataTable();
     
        $('#daftar_posisi tbody').on('click', 'tr', function () {
            
            var content = daftar_posisi.row(this).data() 
            $("#nama_posisi").val(content[0]);
            $("#id_posisi").val(content[2]);
            $("#PilihPosisiModal").modal('hide');
        } );

   
    var daftar_bank = $('#daftar_bank').DataTable();
     
     $('#daftar_bank tbody').on('click', 'tr', function () {
         
         var content = daftar_bank.row(this).data() 
         $("#nama_bank").val(content[0]);
         $("#id_bank").val(content[3]);
         $("#PilihBankModal").modal('hide');
     } );

    
  
	 function Ubah_Data(id){
		$("#defaultModalLabel").html("Form Ubah Data");
		$("#defaultModal").modal('show');
 
		$.ajax({
			 url:"<?php echo base_url(); ?>pegawai/get_data_edit/"+id,
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
                 $("#id_marketing").val(result.id_marketing); 
                 $("#nama_posisi").val(result.posisi); 
                 $("#marital_status").val(result.marital_status); 
                 $("#id_posisi").val(result.id_posisi); 
                 $("#status").val(result.status); 
                 $("#id_bank").val(result.id_bank); 
                 $("#foto").val(result.foto); 
                 $("#email").val(result.email); 
                 $("#emergency_contact").val(result.emergency_contact); 
                 $("#kodepos").val(result.kodepos); 
                 $("#no_npwp").val(result.no_npwp); 
           
				 $('#image1').attr('src',"upload/"+result.foto);
                 if(result.gender == 'P'){
                    $("#priabtn").attr('class','btn btn-primary');
                    $("#wanitatbn").attr('class','btn btn-default');
                 }else{
                    $("#wanitatbn").attr('class','btn btn-primary');
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
            url : "<?php echo base_url('pegawai/hapus_data')?>/"+id,
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
                 url:"<?php echo base_url(); ?>pegawai/simpan_data",
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
			"ajax": "<?php echo base_url(); ?>pegawai/fetch_pegawai" 
		});

        $('.datepicker').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD',
            clearButton: true,
            weekStart: 1,
            time: false
            }); 
            
        });
  
		
		 
    </script>