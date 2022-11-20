 
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
                                Member
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
                                            <th style="width:5%;">Join Date</th>
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
                                                <label for=""> No RFID </label>
                                                <input type="text" class="form-control" name="barcode_rfid" id="barcode_rfid">
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for=""> Tanggal Daftar</label>
                                                <input type="text" class="form-control" name="register_date" id="register_date">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for=""> Title </label>
                                                <input type="text" class="form-control" name="title" id="title">
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for=""> Nama Member </label>
                                                <input type="text" class="form-control" name="member_name" id="member_name">
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                <div class="row clearfix"> 
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="">  Tempat Lahir </label>
                                                <input type="text" class="form-control" name="place_dob" id="place_dob">
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
                                        <div class="form-line">
                                            <label for="">  No Telp </label>
                                            <input type="text" class="form-control" name="phone" id="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="">  Emergency Kontak </label>
                                            <input type="text" class="form-control" name="emergency_contact" id="emergency_contact">
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
                                            <div class="form-line">
                                                <label for=""> No KTP </label>
                                                <input type="text" class="form-control" name="no_ktp" id="no_ktp">
                                            </div>
                                        </div> 
                                    </div> 
                                </div> 

                                <div class="row clearfix"> 
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for=""> Email </label>
                                                <input type="text" class="form-control" name="email" id="email">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                                    <div class="form-line">
                                                        <label for="">Marketing</label>
                                                        <input type="text" name="nama_marketing" id="nama_marketing" class="form-control" readonly="readonly" >
                                                        <input type="hidden" name="id_marketing" id="id_marketing" required>
                                                        
                                                    </div>
                                                    <span class="input-group-addon">
                                                        <button type="button" onclick="PilihMarketing();" class="btn btn-primary"> Pilih Marketing ... </button>
                                                    </span>
                                        </div> 
                                    </div>
                                </div> 

                                <div class="row clearfix"> 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="">  Alamat  </label>
                                            <input type="text" class="form-control" name="address" id="address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="">  Kode POS </label>
                                            <input type="text" class="form-control" name="kodepos" id="kodepos">
                                        </div>
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
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        
                                                <label for=""> Status </label>
                                                <br>
                                                <input type="hidden" name="status" id="status">

                                                <button type="button" id="aktifbtn" class="btn btn-default waves-effect "> Aktif </button>

                                                <button type="button" id="nonaktifbtn" class="btn btn-default waves-effect "> Non Aktif </button>
                                                <br>
                                        
                                        </div> 
                                    </div>
                                    <div class="col-sm-6">
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

    <!-- modal cari marketing -->
    <div class="modal fade" id="PilihMarketingModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" > Pilih Marketing </h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_marketing" >
  
                                    <thead>
                                        <tr> 
                                   
                                            <th style="width:95%;">Nama Marketing</th>
                                             
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_marketingx">

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

    $("#aktifbtn").on("click",function(){
        $("#status").val('1');
        $(this).attr('class','btn btn-primary');
        $("#nonaktifbtn").attr('class','btn btn-default'); 
    });

    $("#nonaktifbtn").on("click",function(){
        $("#status").val('2');
        $(this).attr('class','btn btn-primary');
        $("#aktifbtn").attr('class','btn btn-default'); 
    });

    

	function PilihBank(){
        $("#PilihBankModal").modal({backdrop: 'static', keyboard: false,show:true});
    }

    function PilihMarketing(){
        $("#PilihMarketingModal").modal({backdrop: 'static', keyboard: false,show:true});
    }

    $('#daftar_bank').DataTable( {
        "ajax": "<?php echo base_url(); ?>bank/fetch_bank" 
    });

    $('#daftar_marketing').DataTable( {
        "ajax": "<?php echo base_url(); ?>pegawai/fetch_pegawai" 
    });


    
    var daftar_bank = $('#daftar_bank').DataTable();
     
        $('#daftar_bank tbody').on('click', 'tr', function () {
            
            var content = daftar_bank.row(this).data() 
            $("#nama_bank").val(content[0]);
            $("#id_bank").val(content[3]);
            $("#PilihBankModal").modal('hide');
        } );

    var daftar_marketing = $('#daftar_marketing').DataTable();
     
        $('#daftar_marketing tbody').on('click', 'tr', function () {
            
            var content = daftar_marketing.row(this).data()
          
            $("#nama_marketing").val(content[0]);
            $("#id_marketing").val(content[4]);
            $("#PilihMarketingModal").modal('hide');
        } );
    
  
	 function Ubah_Data(id){
		$("#defaultModalLabel").html("Form Ubah Data");
		$("#defaultModal").modal('show');
 
		$.ajax({
			 url:"<?php echo base_url(); ?>member/get_data_edit/"+id,
			 type:"GET",
			 dataType:"JSON", 
			 success:function(result){  
				 $("#defaultModal").modal('show'); 
				 $("#id").val(result.id);
                 $("#nama").val(result.nama);
                 $("#barcode_rfid").val(result.barcode_rfid);
                 $("#title").val(result.title);
                 $("#member_name").val(result.member_name);
                 $("#gender").val(result.gender);
                 $("#dob").val(result.dob); 
                 $("#place_dob").val(result.place_dob); 
                 $("#bank_account").val(result.bank_account); 
                 $("#phone").val(result.phone);  
                 $("#nama_marketing").val(result.marketing);  
                 $("#nama_bank").val(result.bank_name);   
                 $("#no_ktp").val(result.no_ktp); 
                 $("#address").val(result.address);  
                 $("#register_date").val(result.register_date); 
                 $("#id_marketing").val(result.id_marketing); 
                 $("#status").val(result.status); 
                 $("#id_bank").val(result.id_bank); 
                 $("#foto").val(result.foto); 
                 $("#email").val(result.email); 
                 $("#emergency_contact").val(result.emergency_contact); 
                 $("#kodepos").val(result.kodepos); 
           
				 $('#image1').attr('src',"upload/"+result.foto);
                 if(result.gender == 'P'){
                    $("#priabtn").attr('class','btn btn-primary');
                    $("#wanitatbn").attr('class','btn btn-default');
                 }else{
                    $("#wanitatbn").attr('class','btn btn-primary');
                    $("#priabtn").attr('class','btn btn-default');
                 }

                 if(result.status == 1){
                    $("#aktifbtn").attr('class','btn btn-primary');
                    $("#nonaktifbtn").attr('class','btn btn-default');
                 }else{
                    $("#nonaktifbtn").attr('class','btn btn-default');
                    $("#aktifbtn").attr('class','btn btn-primary');
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
            url : "<?php echo base_url('member/hapus_data')?>/"+id,
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
                 url:"<?php echo base_url(); ?>member/simpan_data",
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
			"ajax": "<?php echo base_url(); ?>member/fetch_member" 
		});

        $('.datepicker').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD',
            clearButton: true,
            weekStart: 1,
            time: false
            }); 
            
        });
  
		
		 
    </script>