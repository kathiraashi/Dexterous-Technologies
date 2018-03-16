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
                    Events
				</h1>
				<ol class="breadcrumb">
					<li class="active"> Events </li>
				</ol>
            </section>
            
        <?php foreach ($events as $key) {?>
			<!-- Main content -->
			<section class="content">
				<div class="row">

					<div class="col-md-12">
						<div class="box box-primary form_html">
							<!-- /.box-header -->
							<div class="box-body">
								<form id="form_1" action="<?=base_url()?>index.php/Admin/Events_Update/<?=$key->id?>" onsubmit="return validateMyForm_1();"
                                method="post" enctype="multipart/form-data">
                                <div class="row" >
                                    <div class="col-sm-12">
                                        <div class="form-group" style="float: right;">
                                            <label>
                                                <input type="checkbox" id="CheckBox" class="minimal" <?php if($key->Status === 'Active'){ echo 'checked';} ?> name="Status" value="<?=$key->Status?>" >
                                                &nbsp; Event Status ( <span id="EventStatus"> <?=$key->Status?> </span> )
                                            </label>
                                        </div>
                                    </div>
                                </div>
								<p class="FormFieldDangerAlert">  </p>
									<div class="row" >
										<div class="col-sm-4">
                                            <div class="form-group">
												<label> Title </label>
											    <input type="text" class="form-control" id="Title" value="<?=$key->Event_Name?>" name="Title" placeholder="Event Title ">
											</div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label> Start Date </label>
                                                <div class="input-group date"> 
                                                    <input type="text" class="form-control pull-right datepicker" value="<?=$key->Start_Date?>" name="Start_Date" id="Start_Date" placeholder=" Event Start Date">
                                                    <div class="input-group-addon" style="padding:7px">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
											</div>
                                        </div>
                                        <div class="col-sm-2 bootstrap-timepicker ">
                                            <div class="form-group">
                                                <label> Start Time </label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control timepicker" value="<?=$key->Start_Time?>" name="Start_Time" id="Start_Time" placeholder=" Event Start Time">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-clock-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label> End Date </label>
                                                <div class="input-group date"> 
                                                    <input type="text" class="form-control pull-right datepicker" value="<?=$key->End_Date?>" name="End_Date" id="End_Date" placeholder=" Event End Date">
                                                    <div class="input-group-addon" style="padding:7px">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 bootstrap-timepicker">
                                            <div class="form-group">
                                                <label> End Time </label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control timepicker" value="<?=$key->End_Time?>" name="End_Time" id="End_Time" placeholder=" Event End Time">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-clock-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label> Address </label>
                                            <textarea class="form-control" name="Address" id="Address" style="width:100%; height:110px" placeholder="Address"><?php echo strip_tags($key->Address);?></textarea>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label> Contact Mobile </label>
                                                        <input type="text" class="form-control" id="Mobile" value="<?=$key->Mobile?>" name="Mobile" placeholder=" Contact Mobile ">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label> Contact Email </label>
                                                        <input type="email" class="form-control" id="Email" value="<?=$key->Email?>" name="Email" placeholder=" Contact Email ">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label> Location </label>
                                                        <input type="text" class="form-control" id="Location" value='<?=$key->Location?>' name="Location" placeholder=" Location ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" >
                                        <div class="col-sm-7">
											<div class="form-group editor_html">
												<label> Event Details </label>
												<textarea name="Details" class="form-control area" id="Details" style="width:100%;height:180px;" placeholder="Event Details"><?=$key->Event_Details?></textarea>
											</div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group" style="padding-bottom: 30px;padding-top: 25px; height: 280px;">
                                                <div class="btn btn-default btn-file" style="position: absolute;">
                                                    <i class="fa fa-paperclip img_ty"> &nbsp; Event Image</i>
                                                    <input type="hidden" id="OldImage" name="OldImage" value="<?=$key->Image?>">
                                                    <input type="file" id="EventImage" name="image" accept=".jpg, .png, .jpeg, .gif, .svg, .JPG, .PNG, .JPEG, .GIF, .SVG" id="img_file">
                                                </div>
                                                <img src="<?=base_url()?>assets/Uploads/Images/<?=$key->Image?>" id="img_on" style="width: 100%; max-height: 255px;">
                                            </div>
										</div>
                                    </div>
                                    
                                    <div class="row"  style="margin-top:10px;margin-bottom:15px">
                                        <div class="col-sm-6">
                                            <a class="btn-sm btn-primary" id="Remove_Topic" style="cursor:pointer;margin-right:20px;"> Remove Last Topic </a>
                                            <a class="btn-sm btn-primary" id="Add_Topic" style="cursor: pointer;"> Add Topic</a>
                                        </div>
                                    </div>
                                    <div class="TopicsList row">
                                        <?php foreach (explode("///", $key->Topics) as $keyNew) { ?>
                                            <div class="form-group col-sm-4">
                                                <input type="text" class="form-control Event_Topics" value="<?=$keyNew?>" name="Event_Topic[]" placeholder="Event Topics">
                                            </div>
                                        <?php } ?>
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
        $('.datepicker').datepicker({
            autoclose: true,
            format: 'dd/mm/yyyy'
        });
        $(".timepicker").timepicker({
            showInputs: false,
            minuteStep: 1
        });

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
        });

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
        $(".EventsPage").addClass("active");
        $(".EventPage").addClass("active");

		$(".msg_close").click(function () {
			$('.msg').hide();
        });
		$('.msg').delay(5000).fadeOut('fast');

        $("#EventImage").change(function(){
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
        if ($('.TopicsList .col-sm-4').length == 0 ) {
                $("#Remove_Topic").hide();
        }
            row_inc ='<div class="form-group col-sm-4"><input type="text" class="form-control" name="Event_Topic[]" placeholder="Event Topics"></div>';
            i=0;
            $("#Add_Topic").click(function(){
            $("#Remove_Topic").show();
            i++; 
            if (i <= 15) {
                $('.TopicsList').append(row_inc);
                }
            });
        
            $("#Remove_Topic").click(function(){
            if ($('.TopicsList .col-sm-4').length == 1) {
                $("#Remove_Topic").hide();
            }
             $(".TopicsList .col-sm-4" ).last().remove();
            });


            $('input[type="checkbox"]').on('ifChanged', function (e) {
                if(this.checked) {
                    $(this).val('Active');
                    $('#EventStatus').text('Active');
                }else {
                    $(this).val('Inactive');
                    $('#EventStatus').text('Inactive')
                }
            });



    </script>


	<script>
		    function validateMyForm_1(){
				if($('#form_1').find('#Title').val() == ""){
					$('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Event Title is Empty");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if($('#form_1').find('#Start_Date').val() == ""){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Event Start Date is Empty ");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if($('#form_1').find('#Start_Time').val() == ""){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Event Start Time is Empty ");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if($('#form_1').find('#End_Date').val() == ""){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Event End Date is Empty");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if($('#form_1').find('#End_Time').val() == ""){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Event End Time is Empty");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if($('#form_1').find('#Address').val() == ""){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Event Address is Empty");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false
                }else if($('#form_1').find('#Mobile').val() == ""){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Contact Mobile is Empty");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if($('#form_1').find('#Email').val() == ""){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Contact Email is Empty");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if($('#form_1').find('#Location').val() == ""){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Event Location is Empty");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false
                }else if($('#form_1').find('#Location').val().indexOf('<iframe') == -1 ){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Enter Valid Event Location in Iframe Format");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if((tinymce.EditorManager.get('Details').getContent()) == ''){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Event Details is Empty ");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
                }else if($('#form_1').find('#EventImage').val() == "" && $('#form_1').find('#OldImage').val() == "" ){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Event Image is Empty");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
				}else{
                    var i = 1;
                    $("#form_1 .Event_Topics").each(function() {
                        if($(this).val() == "" ) { i=0; } 
                    });
                    if(i== 0){
                        $('.FormFieldDangerAlert').show();
                        $('.FormFieldDangerAlert').text("Event Tpoic Field is Empty");
                        $('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
                        return false; 
                    }else{
					    return true; 
                    }
                }
			}
	</script>

</body>

</html>
