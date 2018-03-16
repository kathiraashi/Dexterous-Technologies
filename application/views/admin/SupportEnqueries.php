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
					Support Enqueries
				</h1>
				<ol class="breadcrumb">
					<li class="active"> Support Enqueries </li>
				</ol>
            </section>
            
        
			<!-- Main content -->
			<section class="content">
				<div class="row">


					<div class="col-md-12">
						<div class="box box-primary form_html">
							<div class="box-header row">
								<h3 class="box- col-sm-6" style=" margin: 0px"> Support Enqueries List</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table id="example1" class="table table-bordered table-striped DataTabel">
									<thead>
										<tr>
											<th style="width:20px">S.no</th>
											<th > Company  </th>
                                            <th > Contact </th>
                                            <th > Machine Model </th>
                                            <th > Mail Status </th>
                                            <th > Date </th>
                                            <th > Problem </th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($supportEnqueries as $enqueries) { ?>
                                            <tr>
                                                <td></td>
                                                <td style="font-family:inherit">
                                                    <small style="color:#cc0e0a"> Name : </small> <?=$enqueries->Company_Name?> 
                                                    <br> 
                                                    <small style="color:#cc0e0a"> Contact Person : </small> <?=$enqueries->Contact_Name?> 
                                                </td>
                                                <td>
                                                    <small style="color:#cc0e0a"> Email : </small> <?=$enqueries->Email?> 
                                                    <br> 
                                                    <small style="color:#cc0e0a"> Phone : </small> <?=$enqueries->Phone?> 
                                                </td>
                                                <td>
                                                    <?=$enqueries->Machine_Model?>
                                                </td>
                                                <td>
                                                    <?=$enqueries->Mail_Send_Status?>
                                                </td>
                                                <td>
                                                    <?=$enqueries->Created_Date?>
                                                </td>
                                                <td>
                                                    <a href="#" onclick="Problem_View(<?=$enqueries->id?>)" data-toggle="modal" data-target="#myModal" class="btn-sm btn-primary"
                                                    style="padding: 12px 10px 5px 10px;">
                                                        <i class="fa fa-eye" style="font-size: 22px;"></i>
                                                    </a>
                                                </td>
                                            </tr>
										<?php  } ?>
									</tbody>
								</table>
							</div>
						</div>
						<!-- /. box -->

                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title title_cat"> Problem </h4>
                                    </div>
                                    <div class="modal-body">
                                        <p id="ProblemView">  </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>



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
        
        $(".RequestsPage").addClass("active");
        $(".SupportEnqueriesPage").addClass("active");


        function Problem_View(id) {
			$("#ProblemView").text("");
			$.ajax({
				url: "<?=base_url()?>index.php/Admin/SupportEnqueryGet",
				type: "POST",
				data: {id: id },
				success: function (html) {
                    var result = $.parseJSON(html);
                    var data = result["data"][0];
                    $("#ProblemView").text(data["Problem"]);
				}
			});
		}

	</script>



</body>

</html>
