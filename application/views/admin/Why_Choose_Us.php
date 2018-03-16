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
                    Why Choose Us
				</h1>
				<ol class="breadcrumb">
					<li class="active"> Why Choose Us </li>
				</ol>
            </section>
            
        <?php  foreach ($WhyChooseUs as $key) { ?>
			<!-- Main content -->
			<section class="content">
				<div class="row">

					<div class="col-md-12">
						<div class="box box-primary form_html">
							<!-- /.box-header -->
							<div class="box-body">
								<form id="form_1" action="<?=base_url()?>index.php/Admin/Why_Choose_Us_Update/<?=$key->id?>" onsubmit="return validateMyForm_1();"
								method="post" enctype="multipart/form-data">
								<p class="FormFieldDangerAlert">  </p>
									<div class="row" >
										<div class="col-sm-6">
                                            <div class="form-group editor_html">
												<label> Title 1 </label>
											    <input type="text" class="form-control" id="Title_1" value="<?=$key->Title_1?>" name="Title_1" placeholder="Why Choose Us Title One ">
											</div>
											<div class="form-group editor_html">
												<label> Title 1 Details </label>
												<textarea name="Text_1" class="form-control area" id="Text_1" style="width:100%;height:150px;" placeholder="Title 1 Details"><?=$key->Text_1?></textarea>
											</div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group editor_html">
												<label> Title 2 </label>
											    <input type="text" class="form-control" id="Title_2" value="<?=$key->Title_2?>" name="Title_2" placeholder="Why Choose Us Title Two ">
											</div>
											<div class="form-group editor_html">
												<label> Title 2 Details </label>
												<textarea name="Text_2" class="form-control area" id="Text_2" style="width:100%;height:150px;" placeholder="Title 2 Details"><?=$key->Text_2?></textarea>
											</div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group editor_html">
												<label> Title 3 </label>
											    <input type="text" class="form-control" id="Title_3" value="<?=$key->Title_3?>" name="Title_3" placeholder="Why Choose Us Title Three ">
											</div>
											<div class="form-group editor_html">
												<label> Title 3 Details </label>
												<textarea name="Text_3" class="form-control area" id="Text_3" style="width:100%;height:150px;" placeholder="Title 3 Details"><?=$key->Text_3?></textarea>
											</div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group editor_html">
												<label> Title 4 </label>
											    <input type="text" class="form-control" id="Title_4" value="<?=$key->Title_4?>" name="Title_4" placeholder="Why Choose Us Title Four ">
											</div>
											<div class="form-group editor_html">
												<label> Title 4 Details </label>
												<textarea name="Text_4" class="form-control area" id="Text_4" style="width:100%;height:150px;" placeholder="Title 4 Details"><?=$key->Text_4?></textarea>
											</div>
										</div>
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
        <?php } ?>


		</div>
		<!-- content-wrapper close-->


		<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>

	</div>
	<!-- ./wrapper -->

	<?php include 'footer_links.php'; ?>

	<script src="<?=base_url()?>/assets/tinymce/js/tinymce/tinymce.min.js"></script>

	<script>
		tinyMCE.init( {
			selector: ".area",
			theme: "modern",
			statusbar: false,
			plugins: [
			"advlist autolink lists image charmap print preview hr anchor pagebreak",
			"searchreplace wordcount visualblocks visualchars code fullscreen",
			"insertdatetime nonbreaking save table contextmenu directionality",
			"emoticons template paste textcolor colorpicker textpattern"
			],
			toolbar1: "alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | forecolor backcolor ",
		});
	</script>


	<script>
        $(".AboutPage").addClass("active");
        $(".WhyChooseUsPage").addClass("active");

		$(".msg_close").click(function () {
			$('.msg').hide();
        });
		$('.msg').delay(5000).fadeOut('fast');

	</script>


	<script>
		    function validateMyForm_1(){
				if($('#form_1').find('#Title_1').val() == ""){
					$('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Why Chose Us Title One is Empty");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if((tinymce.EditorManager.get('Text_1').getContent()) == ''){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Title One Details is Empty ");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if($('#form_1').find('#Title_2').val() == ""){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Why Chose Us Title Two is Empty ");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if((tinymce.EditorManager.get('Text_2').getContent()) == ''){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Title Two Details is Empty ");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if($('#form_1').find('#Title_3').val() == ""){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Why Chose Us Title Three is Empty ");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if((tinymce.EditorManager.get('Text_3').getContent()) == ''){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Title Three Details is Empty ");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if($('#form_1').find('#Title_4').val() == ""){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Why Chose Us Title Four is Empty");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if((tinymce.EditorManager.get('Text_4').getContent()) == ''){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Title Four Details is Empty ");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
				}else{
					return true; 
				}
			}
	</script>

</body>

</html>
