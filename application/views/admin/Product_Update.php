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
					Product Details Update
				</h1>
				<ol class="breadcrumb">
                    <li><a href="<?=base_url()?>index.php/Admin/Product_List"> Products </a></li>
					<li class="active"> Product Details Update </li>
				</ol>
            </section>
            
        <?php foreach ($products as $product) { ?>
			<!-- Main content -->
			<section class="content">
				<div class="row">

					<div class="col-md-12">
						<div class="box box-primary form_html">
							<!-- /.box-header -->
							<div class="box-body">
								<form id="form_1" action="<?=base_url()?>index.php/Admin/Update_Product/<?=$product->id?>" onsubmit="return validateMyForm_1();"
								method="post" enctype="multipart/form-data">
								<p class="FormFieldDangerAlert">  </p>
									<div class="row"> 
										<div class="col-sm-6">
											<div class="form-group">
												<label> Product Name </label>
												<input type="text" class="form-control" id="Name" value="<?=$product->Name?>" name="Name" placeholder="Product Name">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label> Short Order </label>
                                                <input type="number" class="form-control" id="ShortOrder" value="<?=$product->Short_Order?>" name="ShortOrder" placeholder="Short Order">
                                                <input type="hidden" id="OldShortOrder" value="<?=$product->Short_Order?>" >
											</div>
										</div>
									</div>
									<div class="row"> 
										<div class="col-sm-6">
											<div class="form-group">
												<label> Select Brand </label>
												<select class="form-control select2" id="SelectBrand" name="SelectBrand" style="width: 100%;">
													<option value="" disabled selected="selected"> -- Select Brand -- </option>
													<?php foreach ($product_brands as $brands) { ?>
														<option value="<?=$brands->id?>"> <?=$brands->Name?> </option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label> Select Category </label>
												<select class="form-control select2" id="SelectCategory" name="SelectCategory" style="width: 100%;">
													<option value="" disabled selected="selected"> -- Select Category -- </option>
                                                    <?php foreach ($product_categories as $category) { ?>
														<option value="<?=$category->id?>"> <?=$category->Name?> </option>
													<?php } ?>
												</select>
											</div>
										</div>
									</div>
									<div class="row" >
										<div class="col-sm-6">
											<div class="form-group editor_html">
												<label> Product Details </label>
												<textarea name="Details" class="form-control area" id="Details" style="width:100%;height:150px;" placeholder="Product Detailes"><?=$product->Detail?></textarea>
											</div>
											<div class="form-group editor_html">
												<label> Product Specifications </label>
												<textarea name="Specifications" class="form-control area" id="Specifications" style="width:100%;height:150px;" placeholder="Product Specifications"><?=$product->Specifications?></textarea>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group" style="padding-bottom: 30px;padding-top: 25px; height: 250px;">
												<div class="btn btn-default btn-file" style="position: absolute;">
													<i class="fa fa-paperclip img_ty"> &nbsp; Add Product Image</i>
                                                    <input type="file" id="ProductImage" name="image" accept=".jpg, .png, .jpeg, .gif, .svg, .JPG, .PNG, .JPEG, .GIF, .SVG" id="img_file">
                                                    <input type="hidden" Id="OldImage" name="OldImage" value="<?=$product->Image?>">
												</div>
												<img src="<?=base_url()?>assets/Uploads/Images/<?=$product->Image?>" id="img_on" style="width: 100%; max-height: 225px;">
											</div>	
											<div class="form-group editor_html">
												<label> Product Technical Details </label>
												<textarea name="Technical" class="form-control area" id="Technical" style="width:100%;height:150px;" placeholder="Product Technical Details"><?=$product->Technical?></textarea>
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
		$(document).ready(function () {
			$('.select2').select2();

			var t = $('.DataTabel').DataTable({
				"columnDefs": [{
					"searchable": false,
					"orderable": false,
					"targets": 0
				}],
				"order": [
					[1, 'asc']
				]
			});

			t.on('order.dt search.dt', function () {
				t.column(0, {
					search: 'applied',
					order: 'applied'
				}).nodes().each(function (cell, i) {
					cell.innerHTML = i + 1;
				});
			}).draw();
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

    <script type="text/javascript">
        $(document).ready(function () {
            var Brand_Id = "<?php echo get_object_vars($products[0])['Brand_Id']; ?>";
            var Category_Id = "<?php echo get_object_vars($products[0])['Category_Id']; ?>";
            $('#SelectBrand').val(Brand_Id).trigger("change");
            $('#SelectCategory').val(Category_Id).trigger("change");
        });
    </script>

	<script>
        $(".ProductPage").addClass("active");
        $(".ProductsPage").addClass("active");

		$(".msg_close").click(function () {
			$('.msg').hide();
        });
		$('.msg').delay(5000).fadeOut('fast');

		$("#ProductImage").change(function(){
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
		// $('#SelectCategory').prop('disabled', true);
		$('#SelectBrand').on('change', function() {
			var id = this.value;
			$('#SelectCategory').find('[value != "" ]').remove();
			$.ajax({
				url: "<?=base_url()?>index.php/Admin/Filter_Category_List",
				type: "POST",
				async: false,
				data: { id: id},
				success: function (html) {
					var result = $.parseJSON(html);
					var data = result['data'];
					$.each(data, function(i) {
						$('#SelectCategory').append($('<option>', { 
							value: data[i].id,
							text : data[i].Name 
						}));
						$('#SelectCategory').prop('disabled', false);
					});
				}
			});
		});
	</script>

	<script>
		    function validateMyForm_1(){
				if($('#form_1').find('#Name').val() == ""){
					$('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Enter Product Name");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
				} else if($('#form_1').find('#ShortOrder').val() == "") {
					$('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Enter Short Order Number");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
				} else if($('#form_1').find('#SelectBrand').val() == null) {
					$('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Select The Brand");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
				} else if($('#form_1').find('#SelectCategory').val() == null) {
					$('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Select The Category");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
				} else if((tinymce.EditorManager.get('Details').getContent()) == '') {
					$('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Enter The Product Details");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
				}else if($('#form_1').find('#ProductImage').val() == "" && $('#form_1').find('#OldImage').val() == "") {
					$('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Upload The Product Image");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
					return false;
				}else{
					var status = 1;
					var value = $('#form_1').find('#ShortOrder').val();
                    var Oldvalue = $('#form_1').find('#OldShortOrder').val();
					function gotoNext() {
						$.ajax({
							url: "<?=base_url()?>index.php/Admin/Get_Product_List",
							type: "POST",
							async: false,
							data: { },
							success: function (html) {
								var result = $.parseJSON(html);
								var data = result['data'];
								$.each(data, function(i) {
									if (data[i].Short_Order == value ) {
										status = 0;  
									}
								});
							}
						});
						if(status == 1 || Oldvalue == value ){ 
							return true; 
						}else{
							$('.FormFieldDangerAlert').show();
							$('.FormFieldDangerAlert').text("Short Order Number Already Added");
							$('.FormFieldDangerAlert').delay(5000).fadeOut('fast');   
							return false;
						}
					} 
				return gotoNext();
				}
			}
	</script>

</body>

</html>
