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
					Brands
				</h1>
				<ol class="breadcrumb">
					<li class="active"> Brands </li>
				</ol>
            </section>
            
        
			<!-- Main content -->
			<section class="content">
				<div class="row">


					<div class="col-md-12">
						<div class="box box-primary form_html">
							<div class="box-header row">
								<h3 class="box- col-sm-6" style=" margin: 0px"> Brands List</h3>
								<h3 class="box-title col-sm-6">
									<a href="#" onclick="Add_Brand()" data-toggle="modal" data-target="#myModal" class="btn btn-primary pull-right "> add New Brand </a>
								</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table id="example1" class="table table-bordered table-striped DataTabel">
									<thead>
										<tr>
											<th style="width:10px">S.no</th>
											<th> Brand Name </th>
											<th> Short Order </th>
											<th> Action </th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($product_brands as $brands) { ?>
                                            <tr>
                                                <td></td>
                                                <td>
                                                     <?=$brands->Name?>
                                                </td>
                                                <td>
                                                    <?=$brands->Short_Order?>
                                                </td>
                                                <td>
                                                    <a href="#" onclick="Brand_Update(<?=$brands->id?>)" data-toggle="modal" data-target="#myModal" class="btn-sm btn-primary"
                                                    style="padding: 12px 10px 5px 10px;">
                                                        <i class="fa fa-edit" style="font-size: 22px;"></i>
                                                    </a>
                                                    &emsp;
                                                    <a href="<?=base_url()?>index.php/Admin/Delete_Brand/<?=$brands->id?>" onclick="return confirm(' Are you Sure!!  You want to delete This Brand ?');"
                                                    class="btn-sm btn-primary" style="padding: 12px 10px 5px 10px;">
                                                        <i class="fa fa-trash-o" style="font-size: 22px;"></i>
                                                    </a>
                                                </td>
                                            </tr>
										<?php  } ?>
									</tbody>
								</table>
							</div>
						</div>
						<!-- /. box -->





					</div>
					<!-- /.col -md 12 -->
				</div>
				<!-- /.row -->
			</section>
			<!-- /.content -->

			<!-- Model Popup Start -->

			<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
				<form id="form_1" action="#" onsubmit="return ValidateForm_1();" method="post"
				enctype="multipart/form-data">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title title_cat"> Add New Brand </h4>
							</div>
							<div class="modal-body">
                                <p class="FormFieldDangerAlert">  </p>
								<div class="form-group">
									<label style="font-size: 15px;">Brand Name </label>
									<input type="text" class="form-control" id="Name" name="Name" placeholder="Enter Brand Name">
								</div>
								<div class="form-group">
									<label style="font-size: 15px;"> Short Order </label>
                                    <input type="number" class="form-control" id="ShortOrder" name="ShortOrder" placeholder="Enter The Short Order ">
                                    <input type="hidden" id="OldShortOrder"  >
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary value">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>

		</div>
		<!-- content-wrapper close-->


		<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>

	</div>
	<!-- ./wrapper -->

	<?php include 'footer_links.php'; ?>


	<script>
		$(document).ready(function () {
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

	</script>


	<script>
        
        $(".ProductPage").addClass("active");
        $(".BrandsPage").addClass("active");
        

		$(".msg_close").click(function () {
			$('.msg').hide();
        });
        $('.msg').delay(5000).fadeOut('fast');


        $('.FormFieldDangerAlert').hide();

		function ValidateForm_1() {

			if ($('#form_1').find('#Name').val() == "") {
				$('.FormFieldDangerAlert').show();
				$('.FormFieldDangerAlert').text("Enter Brand Name");
				$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
				return false;
            } else if($('#form_1').find('#ShortOrder').val() == "") {
                $('.FormFieldDangerAlert').show();
				$('.FormFieldDangerAlert').text("Enter Short Order Number");
				$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
                return false;
            } else{
                var status = 1;
                var value = $('#form_1').find('#ShortOrder').val();
                var Oldvalue = $('#form_1').find('#OldShortOrder').val();
                function gotoNext() {
                    $.ajax({
                        url: "<?=base_url()?>index.php/Admin/Get_Brand_List",
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
                        $('.FormFieldDangerAlert').delay(3000).fadeOut('fast');   
                        return false;
                    }
                } 
            return gotoNext();
            } 
            
		}

	</script>


	<script>

		function Add_Brand() {
			var formurl = "<?=base_url()?>index.php/Admin/Add_Brand";
			$("#form_1").attr('action', formurl);
			$(".value").text('Submit');
			$(".title_cat").text('Add New Brand');
            $("#Name").val("");
            $("#ShortOrder").val("");
            $("#OldShortOrder").val("");
		}

		function Brand_Update(id) {
			var formurl = "<?=base_url()?>index.php/Admin/Brand_Update/";
			formURL = formurl + id;
			$("#form_1").attr('action', formURL);
			$(".title_cat").text('Update Brand Details');
			$(".value").text('Update');
			$.ajax({
				url: "<?=base_url()?>index.php/Admin/Brand_Info_Get",
				type: "POST",
				data: {id: id },
				success: function (html) {
                    var result = $.parseJSON(html);
                    var data = result['data'][0];
                    $("#Name").val(data['Name']);
                    $("#ShortOrder").val(data['Short_Order']);
                    $("#OldShortOrder").val(data['Short_Order']);
				}
			});
		}


	</script>


</body>

</html>
