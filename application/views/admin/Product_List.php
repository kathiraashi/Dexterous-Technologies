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
					Products
				</h1>
				<ol class="breadcrumb">
					<li class="active"> Products </li>
				</ol>
            </section>
            
        
			<!-- Main content -->
			<section class="content">
				<div class="row">


					<div class="col-md-12">
						<div class="box box-primary form_html">
							<div class="box-header row">
								<h3 class="box- col-sm-6" style=" margin: 0px"> Products List</h3>
								<h3 class="box-title col-sm-6">
									<a href="<?=base_url()?>index.php/Admin/Product_Add" class="btn btn-primary pull-right "> add New Product </a>
								</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table id="example1" class="table table-bordered table-striped DataTabel">
									<thead>
										<tr>
                                            <th style="width:10px">S.no</th>
                                            <th> Name </th>
                                            <th> Short Order </th>
                                            <th> Brand Name </th>
											<th> Category Name </th>
											<th> Action </th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($products as $product) { ?>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <?=$product->Name?> 
                                                </td>
                                                <td>
                                                    <?=$product->Short_Order?>
                                                </td>
                                                <td>
                                                    <?=$product->Category_Name?> 
                                                </td>
                                                <td>
                                                    <?=$product->Brand_Name?> 
                                                </td>
                                                <td>
                                                    <a href="<?=base_url()?>index.php/Admin/Product_Update/<?=$product->id?>" class="btn-sm btn-primary" style="padding: 12px 10px 5px 10px;">
                                                        <i class="fa fa-edit" style="font-size: 22px;"></i>
                                                    </a>
                                                    &emsp;
                                                    <a href="<?=base_url()?>index.php/Admin/Delete_Product/<?=$product->id?>" onclick="return confirm(' Are you Sure!!  You want to delete This Product ?');"
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
        $(".ProductsPage").addClass("active");

		$(".msg_close").click(function () {
			$('.msg').hide();
        });
        $('.msg').delay(5000).fadeOut('fast');

	</script>

</body>

</html>
