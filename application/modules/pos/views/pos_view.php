 
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
                                POS  
                            </h2>
                            <br>
                            

 

                        <table class="table table-bordered">
                            <tr>
                                <td style="width: 20%;"> Nomor Transaksi</td>
                                <td style="width: 2%;"> : </td>
                                <td style="width: 78%;"> DE13213</td>
                            </tr>
                            <tr>
                                <td style="width: 20%;"> Member</td>
                                <td style="width: 2%;"> : </td>
                                <td style="width: 78%;"> <p id="nama_membernya" style="font-weight:bold; font-size:18px;"></p>
                                    <!-- <input type="text" name="nama_member" id="nama_member"> -->
                                    <input type="hidden" name="id_member" id="id_member">
                                     
                                    <a href="javascript:void(0);"  onclick="PilihMember();" class="btn btn-block btn-primary waves-effect">  <i class="material-icons">add_circle</i>  Cari Member </a>
                                </td>
                            </tr>
                            <tr>
                                <td> Marketing</td>
                                <td> : </td>
                                <td> 
                                    
                                    <select name="id_marketing" id="id_marketing" class="form-control">
                                        <option value="">--Pilih Marketing--</option>
                                        <?php 
                                            foreach($get_marketing as $key=>$val){
                                                echo' <option value="'.$val->id.'">'.$val->employee_name.'</option>';
                                            }
                                        ?>
                                    </select>    
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <button type="button" class="btn btn-block btn-primary waves-effect" name="servicebtn" id="servicebtn" onclick="PilihService();"> <i class="material-icons">add_circle</i> Pilih Service</button>
                                </td>
                            </tr>
                            
                        </table>

                        </div>
                        <div class="body">
                         
                        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover" id="cart">
                <thead >
                    <tr >
                        <th class="text-center">Product</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-left">Price (Rp)</th>
                        <th class="text-center">Total</th>
                        <th>??</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Product name</a></h4>
                                <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="3">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$4.87</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                    </tr>
                    <tr>
                        <td class="col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Product name</a></h4>
                                <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                <span>Status: </span><span class="text-warning"><strong>Leaves warehouse in 2 - 3 weeks</strong></span>
                            </div>
                        </div></td>
                        <td class="col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="2">
                        </td>
                        <td class="col-md-1 text-center"><strong>$4.99</strong></td>
                        <td class="col-md-1 text-center"><strong>$9.98</strong></td>
                        <td class="col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                    </tr> -->
                </tbody>
            </table>
            <table>
                    
                   
                    <tr>
                        <td> ?? </td>
                        <td> ?? </td>
                        <td> ?? </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3>  <strong class="total">  </strong>  </h3></td>
                    </tr>
                    <tr>
                        <td> ?? </td>
                        <td> ?? </td>
                        <td> ?? </td>
                        <td>
                        </td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>


                             
                        </div>
                    </div>
                </div>
            </div>
         


        </div>
    </section>

    
    <!-- modal member  -->
    <div class="modal fade" id="PilihMemberModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" > Pilih Member </h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_member" >
  
                                    <thead>
                                        <tr> 
                                   
                                            <th style="width:95%;"> Member </th>
                                             
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_memberx">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>


    
    <!-- modal service  -->
    <div class="modal fade" id="PilihServiceModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" > Pilih Service </h4>
                        </div>
                        <div class="modal-body">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">X Tutup</button>

                                <br>
                                <hr>

                                 <table width="100%" class="table table-bordered table-striped table-hover " id="daftar_service" >
  
                                    <thead>
                                        <tr> 
                                   
                                            <th style="width:50%;"> Service </th>
                                            <th style="width:50%;"> Remark </th>
                                            <th style="width:50%;"> Group Package </th>
                                            <th style="width:50%;"> Kategori </th>
                                            <th style="width:50%;"> Qty </th>
                                            <th style="width:50%;"> Price </th>
                                           
                                        </tr>
                                    </thead> 
                                    <tbody id="daftar_servicex">

                                </tbody>
                                </table> 
                       </div>
                     
                    </div>
                </div>
    </div>
  
    <script type="text/javascript">  
      
    function PilihMember(){
        $("#PilihMemberModal").modal({backdrop: 'static', keyboard: false,show:true});
    }

    function PilihService(){
        $("#PilihServiceModal").modal({backdrop: 'static', keyboard: false,show:true});
    }
 
    $('#daftar_member').DataTable( {
        "ajax": "<?php echo base_url(); ?>member/fetch_member" 
    });

    $('#daftar_service').DataTable( {
        "ajax": "<?php echo base_url(); ?>package_service/fetch_package_service" 
    });

    
    var daftar_member = $('#daftar_member').DataTable();
     
        $('#daftar_member tbody').on('click', 'tr', function () {
            
            var content = daftar_member.row(this).data() 
          
            $("#id_member").val(content[5]);
            $("#nama_membernya").html(content[0])
            $("#PilihMemberModal").modal('hide');
        } );

    var daftar_service = $('#daftar_service').DataTable();
     
     $('#daftar_service tbody').on('click', 'tr', function () {
         
        var content = daftar_service.row(this).data()    
        $("#cart > tbody").append('<tr align="center"> <td> <p style="font-weight:bold; font-size:16px;"> '+content[0]+'</p> </td>  <td> <input type="hidden" id="hiprice" value="'+content[5]+'">  <input type="text" style="width:20%;" class="form-control qty" onkeyup="Calc()"> </td> <td> <strong class="price"> '+content[5]+' </strong>  </td> </p> <td> <strong class="subtotal"> </strong>  </td> <td> <button type="button"  class="btn btn-danger removecart"> <i class="material-icons">cancel</i>   Hapus </button> </td>  </tr>');
        $("#PilihServiceModal").modal('hide');

   
     });

        $("#cart").on('click','.removecart',function(){
            $(this).parent().parent().remove();
        });

        // $(".qty").on('keyup',function(){
        //     console.log($(this).val());
        // });

        // $('.qty').change(function () {
        //     alert("Changed!");
        // });
        
        // $('.qty').keyup(function(){
        //     console.log($(this).val());
        // });

        function Calc(){
             

            var selector = $(this).closest("tr"); //get closest tr
            // var price = parseInt(selector.find('.price').text()); //get price
            var price = parseFloat($('#hiprice').val());
            var qty = parseFloat($('.qty').val());
            var subtotal =  qty*price;

            console.log(qty*price);
            $("#rez").val(subtotal);
            selector.find('.subtotal').html(subtotal); //add total in same row
            var result = 0;
            //loop through total column
            $("tr .subtotal").each(function() {
                //check if the text is not ""
                result += ($(this).text().trim() != "") ? parseInt($(this).text()) : 0
            })
            //add result inside subtotal
            $(".total").text(result)

        }
       
        
        
    </script>