<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $judul; ?></title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
 
    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
     
    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />
    
    <!-- JQuery DataTable Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/sweetalert.css" rel="stylesheet">
   <!--  <link href="<?php echo base_url(); ?>assets/css/orgchart.css" rel="stylesheet"> -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" rel="stylesheet" />
    
  
     
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>assets/css/themes/all-themes.css" rel="stylesheet" />
	
	<link href="<?php echo base_url(); ?>assets/css/card_custom.css" rel="stylesheet" />
    
    <!-- Jquery Core Js -->
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
   <!--  <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jput.min.js"></script> -->

   
    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

     
    <script src="<?php echo base_url(); ?>assets/js/sweetalert.js"></script>
    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>

    <script src="<?php echo base_url(); ?>js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>js/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>js/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>js/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url(); ?>js/filterDropDown.js"></script> 
    <script src="<?php echo base_url(); ?>assets/js/dataTables.rowsGroup.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script> 
 
    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.numeric.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
   
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script> 
 
    <script src="<?php echo base_url(); ?>assets/plugins/autosize/autosize.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pages/ui/notifications.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/momentjs/moment.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>   
    <script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
  
 
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/jquery.validate.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pages/forms/form-wizard.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <script type="text/javascript">
     //$("#wrapper").toggleClass("toggled");
    </script>
     
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Mohon Tunggu...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
     
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo base_url('dashboard'); ?>"> <?php echo $judul; ?> </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                     
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true">    <i class="material-icons">person</i>   </a></li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                
             
                <ul class="list">

                    <li>
                        <a href="<?php echo base_url('dashboard'); ?>">
                            <i class="material-icons">home</i>
                            <span>Home  </span>
                        </a>
                    </li> 
  
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle" >
                            <i class="material-icons">dns</i>
                            <span>Master</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url('member'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Member</span>
                                </a>
                            </li> 

                            <li>
                                <a href="<?php echo base_url('pegawai'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Pegawai</span>
                                </a>
                            </li>  
                            <li>
                                <a href="<?php echo base_url('pegawai_jbt'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Jabatan Pegawai</span>
                                </a>
                            </li>  

                            <li>
                                <a href="<?php echo base_url('instruktur'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Instruktur</span>
                                </a>
                            </li> 

                            <li>
                                <a href="<?php echo base_url('trainer_jbt'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Instruktur Type</span>
                                </a>
                            </li> 


                            <li>
                                <a href="<?php echo base_url('bank'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Bank</span>
                                </a>
                            </li> 
                            <li>
                                <a href="<?php echo base_url('agreement'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Agreement</span>
                                </a>
                            </li>  
                            <li>
                                <a href="<?php echo base_url('visit_type'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Visit Type</span>
                                </a>
                            </li>  
                            <li>
                                <a href="<?php echo base_url('cat_service'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Category Service</span>
                                </a>
                            </li>  
                            <li>
                                <a href="<?php echo base_url('revenue'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Revenue</span>
                                </a>
                            </li>  
                            <li>
                                <a href="<?php echo base_url('payment_type'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Payment Type</span>
                                </a>
                            </li> 
                            <li>
                                <a href="<?php echo base_url('group_package'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Group Package</span>
                                </a>
                            </li>  
                            <li>
                                <a href="<?php echo base_url('package_service'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Package Service</span>
                                </a>
                            </li> 
                            <li>
                                <a href="<?php echo base_url('member_type'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Member Type</span>
                                </a>
                            </li> 
                            <!-- <li>
                                <a href="<?php echo base_url('category_name'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Category Name</span>
                                </a>
                            </li>  -->
                            <li>
                                <a href="<?php echo base_url('uom'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>UOM (Unit of Measurement)</span>
                                </a> 
                            </li> 
                            <li>
                                <a href="<?php echo base_url('user'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>User</span>
                                </a>
                            </li> 
                        </ul>
                 
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">dns</i>
                            <span>Transaksi</span>
                        </a>
                        <ul class="ml-menu"> 
                            <li>
                                <a href="<?php echo base_url('pos'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Point Of Sale</span>
                                </a>
                            </li>  
                            <li>
                                <a href="<?php echo base_url('work_order'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Closing Transaksi</span>
                                </a>
                            </li>  
                            <li>
                                <a href="<?php echo base_url('attendance'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Attendance Member</span>
                                </a>
                            </li>  
                        </ul>
                    </li> 

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">dns</i>
                            <span>Report</span>
                        </a>
                        <ul class="ml-menu"> 
                            <li>
                                <a href="<?php echo base_url('work_order'); ?>">
                                <i class="material-icons">dns</i>
                                    <span>Cetak Closing Transaksi</span>
                                </a>
                            </li>  
                        </ul>
                    </li> 
                </ul>
 
            
            
            
				<!--list menu-->
			    
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; <a href="javascript:void(0);"> AKAGYM
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
      
            <div class="tab-content">
             
                    <div class="demo-settings">
                        <p> Selamat Datang  <?php echo $this->session->userdata('username') . " !"; ?> </p>
                   
                        <ul class="demo-choose-skin">
                       
                            <a href="<?php echo base_url('login/logout'); ?>">
                                <li>
                                
                                    <i class="material-icons">power_settings_new</i>
                                    <span align="center">Keluar</span>
                                
                                </li>
                            </a>
                       
                        </ul>
                    </div>
                
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
        <!-- #END# Right Sidebar -->
    </section>

	<?php 
	echo $this->load->view($konten);
	?>
  
  

 
</body>

</html>