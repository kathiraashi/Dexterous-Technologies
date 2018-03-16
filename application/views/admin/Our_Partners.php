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
                    Our Partners
				</h1>
				<ol class="breadcrumb">
					<li class="active"> Our Partners </li>
				</ol>
            </section>
            
			<!-- Main content -->
			<section class="content">
				<div class="row">

					<div class="col-md-12">
						<div class="box box-primary form_html">
							<!-- /.box-header -->
							<div class="box-body">
								<form id="form_1" action="<?=base_url()?>index.php/Admin/Our_Partners_Update" onsubmit="return validateMyForm_1();"
								method="post" enctype="multipart/form-data">
								<p class="FormFieldDangerAlert">  </p>
                                    <div class="row"  style="margin:15px;">
                                        <div class="col-sm-6">
                                            <a class="btn-sm btn-primary" id="remove_logo" style="cursor: pointer;"> Remove Last one </a>
                                        </div>
                            
                                        <div class="col-sm-6 pull-right">
                                            <a class="btn-sm btn-primary  pull-right" id="add_logo" style="cursor: pointer;" > Add More </a>
                                        </div>
                                    </div>
                                        
                            
                                    <div class="Partners_logo row">
                                        <?php foreach ($OurPartners as $logo) { ?>
                            
                                          <div class="col-sm-3">
                                           <div class="form-group">
                                             <div class="btn btn-default btn-file" style="position: absolute;max-width:100%">
                                               <i class="fa fa-paperclip img_ty"></i> 
                                               <input type="hidden" name="logo_img_empty[]" id="empty-img<?=$logo->id?>" value="<?=$logo->Image?>">
                                               <input type="file" class="logo_img" name="logo_img[]" id="img<?=$logo->id?>" accept="image/*">
                                             </div> 
                                             <img src="<?=base_url()?>assets/Uploads/Images/<?=$logo->Image?>" id="preview-img<?=$logo->id?>" style="width: 100%; max-height: 100px;" />
                                           </div>
                                          </div>     
                            
                                        <?php } ?>
                                    </div>
									<!-- /.box-body -->
									<div class="box-footer">
										<div class="pull-right">
											<button type="submit" class="btn btn-primary value"> Update </button>
										</div>
									</div>
									<!-- /.box-footer -->
								</form>

							</div>
						</div>
						<!-- /. box -->
					</div>
					<!-- /.col -md 12 -->
				</div>
				<!-- /.row -->
			</section>
            <!-- /.content -->


		</div>
		<!-- content-wrapper close-->


		<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>

	</div>
	<!-- ./wrapper -->

	<?php include 'footer_links.php'; ?>

	<script src="<?=base_url()?>/assets/tinymce/js/tinymce/tinymce.min.js"></script>


	<script>
        $(".AboutPage").addClass("active");
        $(".OurPartnersPage").addClass("active");

		$(".msg_close").click(function () {
			$('.msg').hide();
        });
		$('.msg').delay(5000).fadeOut('fast');


        $(document).ready(function () {
            $(".Partners_logo input[type='file']").change(function(){
                readURL(this);
            });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        emptyId = '#empty-'+$(input).attr('id');
                        imgId = '#preview-'+$(input).attr('id');
                        $(emptyId).val('');
                        $(imgId).attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
        });


	</script>


    <script type="text/javascript">

        logo = '<div class="col-sm-3">\
                    <div class="form-group">\
                    <div class="btn btn-default btn-file" style="position: absolute;max-width:100%">\
                        <i class="fa fa-paperclip img_ty"></i>\
                        <input type="text" name="logo_img_empty[]" value="" style="display: none;">\
                        <input type="file" accept="image/*" class="logo_img_new" name="logo_img[]" id="newimg">\
                    </div>\
                    <img src="" id="preview-newimg" style="width: 100%; height: 100px;" />\
                    </div>\
                </div>';
        i=1;
        $("#add_logo").click(function(){
        i=i+1;
            logo1 = logo.replace('id="newimg"','id="newimg'+i+'"');
            log_new = logo1.replace('id="preview-newimg"','id="preview-newimg'+i+'"');
            $('.Partners_logo').append(log_new);



        $(".Partners_logo input[type='file']").change(function(){
            readURL(this);
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    imgId = '#preview-'+$(input).attr('id');
                    $(imgId).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }



        });


        $("#remove_logo").click(function(){
        if ( $('.Partners_logo .col-sm-3').length > 4 ) {
            $(".Partners_logo .col-sm-3" ).last().remove();
            }
        });
    
    </script>

	<script>
		    function validateMyForm_1(){
					return true; 
			}
	</script>

</body>

</html>
