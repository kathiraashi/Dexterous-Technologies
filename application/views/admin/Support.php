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
					Support
				</h1>
				<ol class="breadcrumb">
					<li class="active"> Support </li>
				</ol>
            </section>
            
        <?php  foreach ($support as $key) { ?>
			<!-- Main content -->
			<section class="content">
				<div class="row">

					<div class="col-md-12">
						<div class="box box-primary form_html">
							<!-- /.box-header -->
							<div class="box-body">
								<form id="form_1" action="<?=base_url()?>index.php/Admin/Support_Update/<?=$key->id?>" onsubmit="return validateMyForm_1();"
								method="post" enctype="multipart/form-data">
								<p class="FormFieldDangerAlert">  </p>
									<div class="row" >
										<div class="col-sm-12">
											<div class="form-group editor_html">
												<label> Support </label>
												<textarea name="Support" class="form-control area" id="Support" style="width:100%;height:350px;" placeholder="Enter Text"><?=$key->Text?></textarea>
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
        $(".ResourcesPage").addClass("active");
        $(".SupportPage").addClass("active");

		$(".msg_close").click(function () {
			$('.msg').hide();
        });
		$('.msg').delay(5000).fadeOut('fast');

	</script>


	<script>
		    function validateMyForm_1(){
				if((tinymce.EditorManager.get('Support').getContent()) == ''){
					$('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Who We Are Text Box is Empty ");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
				}else{
					return true; 
				}
			}
	</script>

</body>

</html>
