<section class="content">
<div class="container-fluid">
            
                    <div class="card card-about-me">
                        <div class="header">
                            <h2>Dashboard</h2>
                        </div>
                        <div class="body">

                        <div class="jumbotron">
                            <h1 class="display-4">Selamat Datang  <?php echo $this->session->userdata('username') . " !"; ?> </h1>
                          
                        </div> 

                        <br>
                        <hr>
                        <h5> Reminder Member</h5>
                        <table class="table table-bordered table-striped table-hover js-basic-example" id="example" >
									<thead>
										<tr> 
											<th style="width:5%;">Nama Member</th>  
                                            <th style="width:5%;">Paket Aktif</th>     
                                            <th style="width:10%;">Sisa Pertemuan</th>
										</tr>
									</thead> 
						</table> 
                     
                        </div>
                    </div>


        </div>
</section>

 
<script src="http://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets/'); ?>grouped-categories.js"></script>

<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/'); ?>html2canvas.js"></script>
 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url('assets/orgchart/'); ?>org_new.css">
<link rel="stylesheet" href="<?php echo base_url('assets/css/'); ?>css_chart.css">
<script type="text/javascript" src="<?php echo base_url('assets/orgchart/'); ?>org.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/orgchart/'); ?>orgExtras.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/orgchart/'); ?>scripts.js"></script>
 
 
<script>
        $('#example').DataTable();
</script>