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
                    Achievements
				</h1>
				<ol class="breadcrumb">
					<li class="active"> Achievements </li>
				</ol>
            </section>
            
        <?php  foreach ($Achievements as $key) { ?>
			<!-- Main content -->
			<section class="content">
				<div class="row">

					<div class="col-md-12">
						<div class="box box-primary form_html">
							<!-- /.box-header -->
							<div class="box-body">
								<form id="form_1" action="<?=base_url()?>index.php/Admin/Achievements_Update/<?=$key->id?>" onsubmit="return validateMyForm_1();"
								method="post" enctype="multipart/form-data">
								<p class="FormFieldDangerAlert">  </p>
									<div class="row" >
										<div class="col-sm-3">
                                            <div class="form-group editor_html">
												<label> Number of Clients </label>
											    <input type="number" min="0" class="form-control" id="NoOfClients" value="<?=$key->NoOfClients?>" name="NoOfClients" placeholder="Number of Clients">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group editor_html">
												<label> Projects Done </label>
											    <input type="number" min="0" class="form-control" id="ProjectDone" value="<?=$key->ProjectDone?>" name="ProjectDone" placeholder="Projects Done">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group editor_html">
												<label> Machine Sold </label>
											    <input type="number" min="0" class="form-control" id="MachineSold" value="<?=$key->MachineSold?>" name="MachineSold" placeholder="Machine Sold">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group editor_html">
												<label> Awards Won </label>
											    <input type="number" min="0" class="form-control" id="AwardsWon" value="<?=$key->AwardsWon?>" name="AwardsWon" placeholder="Awards Won">
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
        $(".AchievementsPage").addClass("active");

		$(".msg_close").click(function () {
			$('.msg').hide();
        });
		$('.msg').delay(5000).fadeOut('fast');

	</script>


	<script>
		    function validateMyForm_1(){
				if($('#form_1').find('#NoOfClients').val() == ""){
					$('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Number Of Clients is Empty");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if($('#form_1').find('#ProjectDone').val() == ""){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Number Of Project Done is Empty ");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if($('#form_1').find('#MachineSold').val() == ""){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Number Of Machine Sold is Empty ");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if($('#form_1').find('#AwardsWon').val() == ""){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Number Of Awards Won is Empty");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
				}else{
					return true; 
				}
			}
	</script>

</body>

</html>
