<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.ico">
  <title>Admin Nihas Technologies</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/fullcalendar/fullcalendar.print.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/iCheck/flat/blue.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <style type="text/css">

  .add_pro a{
    background-color:#3C8DBC !important;
    color: #ffffff !important; 
    width: 80% !important;
    margin-left: 10% !important;
    height: 30px !important;
    margin-top: 5px !important;
    margin-bottom: 5px !important;
    line-height: 10px !important;
    border-radius: 5px !important;
  }
.modal {
    display: none; /* Hidden by default */
    position: absolute; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}


</style>


</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('admin/menus.php')  ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

 <?php if (isset($msg)){ ?>
        <div class="alert <?php echo $type; ?> alert-dismissible msg" style="position: absolute;z-index: 100;right: 5px;top: 55px">
                <button type="button" class="close msg_close"  style="position: absolute;right: 0px">&times;</button>
                <h4><i class="icon fa <?php echo $icon; ?>"></i><?php echo $msg; ?></h4>
                
        </div>
<?php } ?>


      <div class="alert alert-warning alert-dismissible erorr" style="position: absolute;z-index: 100;right: 5px;top: 55px">
                <button type="button" class="close erorr_close"  style="position: absolute;right: 0px">&times;</button>
                <h4 class="erorr_text"></h4>
                
        </div>




    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Products
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Products</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">



        <div class="col-md-3">
          <!-- <a href="#" id="myBtn" class="btn btn-primary btn-block margin-bottom">Add Product Category</a> -->

          <div class="box box-solid">
           <div class="box-header with-border">
              <h3 class="box-title">

              <?php echo $product_type_name;?>

              </h3>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">

                <li class="add_pro"> <a class="btn btn-primary" onclick="add_product(<?php echo $product_type_id;?>)"> Add New Product </a></li>

                <?php  foreach($products as $product){ ?>
                  <li><a href="#" onclick="popup_det(<?=$product->id ?>)"><i class="fa fa-circle-o"></i> <?=$product->name ?> </a></li>
                  <?php } ?>

              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->






        <div class="col-md-9">
          <div class="box box-primary">
          <form id="form_1" action="<?=base_url()?>index.php/Admin/product_submit/<?php echo $product_type_id;?>" onsubmit="return validateMyForm_1();"  method="post" enctype="multipart/form-data">
            <div class="box-header with-border">
              <h3 class="box-title pro_name"> Add Product</h3> 
               <a class="btn btn-primary pull-right del_pro" href=""  onclick="return confirm(' you want to delete?');" > Delete This Product </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <input class="form-control" id="product_name" name="product_name" placeholder="Product Name">
              </div>
              <div class="form-group editor_html">
              <textarea name="product_text" class="form-control area" id="product_text" style="width:100%;height:250px;" placeholder="Enter Product Detailes"></textarea>
              </div>

               <div class="form-group" style="padding-bottom: 30px;">
                <div class="btn btn-default btn-file" style="position: absolute;">
                  <i class="fa fa-paperclip img_ty"> &nbsp; Add Image</i> 
                  <input type="file" name="image" id="img_file">
                </div> 
                <img src="" id="img_on" style="max-width: 100%; max-height: 300px;margin-top: 40px;">
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary value"> Submit </button>
              </div>
            </div>
            <!-- /.box-footer -->
            </form>
          </div>
          <!-- /. box -->


          <!-- Model Popup Start -->
              <div id="myModal" class="modal">
                <div class="modal-content">
                 <span class="close modal_close">&times;</span>
                    <form id="form_2" role="form" method="post" action="<?=base_url()?>index.php/Admin/product_cat_submit" onsubmit="return validateMyForm_2();">
                     <h3 style="margin-left: 10px">Add Product Category</h3><hr style="margin: 0px">
                        <div   style="margin: 20px;"> 
                          <div class="box-body">
                            <div class="row">
                               <div class="form-group col-md-12">
                                  <label>Product Category</label>
                                   <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Product Category Name" >
                              </div>
                           </div>
                         </div>
                      </div>
                      <div class="box-footer">
                        <div class="pull-right">
                          <button type="submit" class="btn btn-primary value"> Submit </button>
                        </div>
                      </div>
                   </form>
                  </div>
               </div><!-- Model Popup End -->
         </div>  <!-- /.col -md 9 -->
      </div> <!-- /.row -->
    </section><!-- /.content -->
  </div> <!-- content-wrapper close-->


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?=base_url()?>assets/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url()?>assets/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="<?=base_url()?>assets/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>assets/admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/admin/dist/js/demo.js"></script>
<!-- iCheck -->
<script src="<?=base_url()?>assets/admin/plugins/iCheck/icheck.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url()?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Page Script -->



<script>
var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("modal_close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>

$(".erorr_close").click(function(){
    $('.erorr').hide();
});

$(".msg_close").click(function(){
    $('.msg').hide();
    window.location.href='<?=base_url()?>index.php/Admin/products/<?php echo $product_type_id;?>';
});


$("#img_file").change(function(){
    readURL(this);
    $("#img_on").show();
});

  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#img_on').attr('src', e.target.result);
          }
        reader.readAsDataURL(input.files[0]);
       }
    }



</script>



 <script>
 $(".add_pro").hide();
 $("#img_on").hide();
 $(".del_pro").hide();
 var edit = $(".editor_html").html();

    function popup_det(id){
    var formurl= "<?=base_url()?>index.php/Admin/product_update/";
    var delete_url= "<?=base_url()?>index.php/Admin/delete_product/";
    var img_url = "<?=base_url()?>assets/admin/images/"
       formURL = formurl+id;
       delete_URL = delete_url+id;
       $( "#form_1").attr('action',formURL);
       $( ".del_pro").attr('href',delete_URL);
       $( ".del_pro").show();
       $(".add_pro").show();
       $("#img_on").show();
       $(".value").text('Update');
       $("#product_text ").val("");
       $(".editor_html").html("");

     $.ajax({
          url: "<?=base_url()?>index.php/Admin/product_view",
          type:"POST",
          data: {id:id},
          success: function(html){
             var result = $.parseJSON(html);
            $("#product_name").val(result['data'][0]['name']);
            $(".pro_name").text(result['data'][0]['name']+" Detailes");
            $(".img_ty").text('Update Image');
            var img_name = result['data'][0]['image'];
            var img_on = img_url+img_name;
            $("#img_on").attr("src", img_on );
            $(".editor_html").html(edit);

             $("#product_text").val(result['data'][0]['description']);
           
            tinyMCE.init( {
                   selector: ".area",
              theme: "modern",
              plugins: [
                "advlist autolink lists image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
              ],
              toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent ",
              toolbar2: "print preview media | forecolor backcolor emoticons",
            });



          }  
   })
  }




    function add_product(id){
      var formurl= "<?=base_url()?>index.php/Admin/product_submit/";
       formURL = formurl+id;
       $( "#form_1").attr('action',formURL);
        $("#product_name").val('');
        $(".pro_name").text('Add Product');
        $("#product_text").html('');
         $("#product_img").val('');
         $(".add_pro").hide();
         $("#img_on").hide();
         $(".del_pro").hide();
         $( ".del_pro").attr('href',"");
         $(".value").text('Submit');
         $(".img_ty").text('Add Image');

         $(".editor_html").html("");
         $(".editor_html").html(edit);

          tinyMCE.init( {
                   selector: ".area",
              theme: "modern",
              plugins: [
                "advlist autolink lists image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
              ],
              toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent ",
              toolbar2: "print preview media | forecolor backcolor emoticons",
            });

  }

 </script>

 <script>
 $('.erorr').hide();

    function validateMyForm_1(){
     
       if($('#form_1').find('#product_name').val() == ""){
              $('.erorr').show();
              $('.erorr_text').text("Enter Product Name");
              return false;
       // }else if($('#form_1').find('#product_text').val() == "") { 
       //        $('.erorr').show();
       //        $('.erorr_text').text("Enter Product Detailes");
       //        return false;
       }else if($('#form_1').find('input[type=file]').val() == "") { 
              if ($('#form_1').attr('action')=='<?=base_url()?>index.php/Admin/product_submit/<?php echo $product_type_id;?>') {
                  $('.erorr').show();
                  $('.erorr_text').text("Add Product Image");
                  $('.erorr').delay(3000).fadeOut('fast');
                  return false;
                }
      }else{
            $('.erorr').hide();
            return true;
      }
    }

    function validateMyForm_2(){
     
       if($('#form_2').find('#category_name').val() == ""){
              $('.erorr').show();
              $('.erorr_text').text("Enter Product Category Name");
              return false;
      }else{
            $('.erorr').hide();
            return true;
      }
    }


</script>

<script src="<?=base_url()?>/assets/tinymce/js/tinymce/tinymce.min.js"></script>

<script type="text/javascript">
         tinyMCE.init( {
                   selector: ".area",
              theme: "modern",
              plugins: [
                "advlist autolink lists image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
              ],
              toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent ",
              toolbar2: "print preview media | forecolor backcolor emoticons",
            });
</script>

</body>
</html>
