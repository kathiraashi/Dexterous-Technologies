<!DOCTYPE html>
<html>

<head>
	<?php include 'header_links.php'; ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<?php include 'menus.php'; ?>


		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">



			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Sliders
				</h1>
				<ol class="breadcrumb">
					<li class="active"> Sliders </li>
				</ol>
            </section>

            <!-- Main content -->
            <section class="content">
            <div class="row">

                <div class="col-md-3">
                <a href="#" id="myBtn" class="btn btn-primary btn-block margin-bottom Add_Slider" onclick="Add_Slider()"> Add  New Slider </a>

                <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        List Of Sliders
                    </h3>
                    </div>
                    <div class="box-body no-padding">
                    <ul class="nav nav-pills nav-stacked">
                        <?php  foreach( array_values($sliders) as $key => $value){ ?>
                            <li><a href="#" onclick="Edit_Slider(<?=$value->id ?>)"><i class="fa fa-circle-o"></i> Slider <?php echo $key + 1 ; ?> </a></li>
                        <?php } ?> 
                    </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /. box -->
                </div>
        <!-- /.col -->






        <div class="col-md-9">
          <div class="box box-primary form_html">
          <form id="form_1" action="<?=base_url()?>index.php/Admin/SliderSubmit" onsubmit="return ValidateForm_1();"  method="post" enctype="multipart/form-data">
            <div class="box-header with-border">
              <h3 class="box-title TitleHeader"> Add New Slider </h3>
               <a class="btn btn-primary pull-right DeleteButton" href=""  onclick="return confirm('Are You Sure. you want to delete?');" > Delete This Slider </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="form-group">
                <label> Slider Text One <small> ( Max Limit 60 ) </small></label>
                <input class="form-control" id="Text_One" name="Text_One" maxlength="60" placeholder="Enter Text One" >
              </div>

              <div class="form-group">
                <label> Slider Text Two <small> ( Max Limit 25 ) </small> </label>
                <input class="form-control" id="Text_Two" name="Text_Two" maxlength="25" placeholder="Enter Text Two" >
              </div>

             <div class="row">
               <div class="form-group col-sm-12">
                <label>Slider Text Three <small> ( Max Limit 200 ) </small> </label>
                      <textarea id="Text_Three" name="Text_Three" class="form-control" placeholder="Enter Text Three " style="height: 170px"></textarea>
                </div> 
            </div>


            <div class="form-group" style="padding-bottom: 30px;">
                 <div class="btn btn-default btn-file" style="position: absolute;">
                   <i class="fa fa-paperclip img_ty"> &nbsp; Slider Image </i> 
                   <input type="file" name="slider_img" id="slider_img" value="">
                   <input type="hidden" name="old_Image" id="old_Image" value="">
                 </div> 
                 <img src="" id="img_on" style="max-width: 100%; max-height: 300px;margin-top: 40px;">
            </div>


            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class=""> 
                    <p class="FormFieldDangerAlert" style="background-color:white"> </p>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary value"> Submit </button>
                </div>
            </div>
            <!-- /.box-footer -->
            </form>
          </div>
          <!-- /. box -->


         </div>  <!-- /.col -md 9 -->
      </div> <!-- /.row -->
    </section><!-- /.content -->
  </div> <!-- content-wrapper close-->


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


<?php include 'footer_links.php'; ?>



<script>

    $(".OthersPage").addClass("active");
    $(".SliderPage").addClass("active");
        
	$(".msg_close").click(function () {
		$(".msg").hide();
    });

    $(".msg").delay(5000).fadeOut('fast');

    $(".FormFieldDangerAlert").hide();

    $("#slider_img").change(function(){
        readURL(this);
        $("#img_on").show();
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#old_Image").val('');
                $("#img_on").attr("src", e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>

<script>
    $(".DeleteButton").hide();
    $(".Add_Slider").hide();

    function Edit_Slider(id){
        var delete_url= "<?=base_url()?>index.php/Admin/SliderDelete/";
        var formurl= "<?=base_url()?>index.php/Admin/SliderUpdate/";
        var img_url = "<?=base_url()?>assets/Uploads/Images/"
        formURL = formurl+id;
        delete_URL = delete_url+id;
        $( "#form_1").attr('action',formURL);
        $(".Add_Slider").show();
        $( ".DeleteButton").attr('href',delete_URL);
        $( ".DeleteButton").show();
        $("#img_on").show();
        $(".value").text('Update');

        $.ajax({
            url: "<?=base_url()?>index.php/Admin/SliderGet",
            type:"POST",
            data: {id:id},
            success: function(html){
                var result = $.parseJSON(html);
                $(".TitleHeader").text('Slider Update');
                $("#Text_One").val(result['data'][0]['Text_One']);
                $("#Text_Two").val(result['data'][0]['Text_Two']);
                $("#Text_Three").text(result['data'][0]['Text_Three']);
                $("#old_Image").val(result['data'][0]['Image']);
                var img_name = result['data'][0]['Image'];
                var img_on = img_url + img_name;
                $("#img_on").attr("src", img_on );
            }  
        });
    }

    function Add_Slider(){
        var formurl= "<?=base_url()?>index.php/Admin/SliderSubmit";
        $( "#form_1").attr('action',formurl);
        $(".DeleteButton").hide();
        $(".Add_Slider").hide();
        $(".value").text('Submit');
        $(".TitleHeader").text(' Add New Slider ');
        $("#Text_One").val('');
        $("#Text_Two").val('');
        $("#Text_Three").text('');
        $("#old_Image").val('');
        $("#img_on").attr("src", '' );
    }

    $("#slider_img").change(function(){
        readURL(this);
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#old_Image").val('');
                $("#img_on").attr("src", e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script>
    function ValidateForm_1() {

        if ($('#form_1').find('#slider_img').val() === "" && $('#form_1').find('#old_Image').val() === "") {
            $('.FormFieldDangerAlert').show();
            $('.FormFieldDangerAlert').text("Slider Image is Required.");
            $('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
            return false;
        } else{
            return true; 
        }

    }
</script>

</body>
</html>
