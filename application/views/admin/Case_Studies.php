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
                    Case Studies
                </h1>
                <ol class="breadcrumb">
                    <li class="active">Case Studies </li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-primary form_html">
                            <div class="box-header row">
                                <h3 class="box- col-sm-6" style=" margin: 0px">Case Studies List</h3>
                                <h3 class="box-title col-sm-6">
                                    <a href="#" data-toggle="modal" data-target="#myModal" onclick="case_add()" class="btn btn-primary pull-right ">add New</a>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width:10px">S.no</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>File</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($case_studies as $case) { ?>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <?=$case->name?>
                                            </td>
                                            <td>
                                                <a href="<?=base_url()?>assets/Uploads/Images/<?=$case->image?>" target="blanck">
                                                    <?=$case->image?>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?=base_url()?>assets/Uploads/Files/<?=$case->pdf?>" target="blanck">
                                                    <?=$case->pdf?>
                                                </a>
                                            </td>
                                            <td style="vertical-align: middle;">
                                                <a href="#" data-toggle="modal" data-target="#myModal"  onclick="case_update(<?=$case->id?>)" class="btn-sm btn-primary" style="padding: 12px 5px 5px 8px;">
                                                    <i class="fa fa-edit" style="font-size: 22px;"></i>
                                                </a>
                                                &nbsp;
                                                <a href="<?=base_url()?>index.php/Admin/Delete_Case_Studies/<?=$case->id?>" onclick="return confirm(' you want to delete?');"
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
                                <h4 class="modal-title title_cat"> Add New Case Studies</h4>
                            </div>
                            <div class="modal-body">
                                <p class="FormFieldDangerAlert">  </p>
                                <div class="form-group">
                                    <label style="font-size: 15px;">Name </label>
                                    <input class="form-control" id="name" name="name" placeholder="Enter Name">
                                </div>
    
                                <div class="form-group">
                                    <label style="font-size: 15px;" class="up_file">PDF File :</label>
                                    <small id="up_file">
                                        <a href="" target="blanck"></a>
                                    </small>
                                    <input type="hidden" name="old_pdf" id="old_pdf" value="">
                                    <input type="file" class="form-control" id="pdf" accept=".pdf" name="pdf" placeholder="Select File">
                                </div>
    
                                <div class="form-group" style="padding-bottom: 10px;">
                                    <label style="font-size: 15px;" class="up_image">Image file :</label>
                                    <small id="up_image">
                                        <a href="" target="blanck"></a>
                                    </small>
                                    <input type="hidden" name="old_img" id="old_img" value="">
                                    <input type="file" accept="image/*" name="image" class="form-control" id="img_file" value="">
                                    <img src="" id="img_on" style="max-width: 100%; max-height: 200px;margin-top: 20px;">
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

	<script src="<?=base_url()?>/assets/tinymce/js/tinymce/tinymce.min.js"></script>

	<script>
        $(document).ready(function() {
            var t = $('#example1').DataTable( {
                "columnDefs": [ {
                    "searchable": false,
                    "orderable": false,
                    "targets": 0
                } ],
                "order": [[ 1, 'asc' ]]
            } );
        
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        });
	</script>


	<script>
        $(".ResourcesPage").addClass("active");
        $(".CaseStudiesPage").addClass("active");

		$(".msg_close").click(function () {
			$('.msg').hide();
        });
		$('.msg').delay(5000).fadeOut('fast');

        $("#pdf").change(function(){
            $("#up_file a").text("");
        });

            $("#img_file").change(function(){
            readURL(this);
            $("#img_on").show();
            $("#up_image a").text("");
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
		    function ValidateForm_1(){
                if($('#form_1').find('#name').val() == ""){
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Name is Empty ");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
                    return false;
                }else if($('#form_1').find('input[type=file]').val() == "" && $('#form_1').find('#old_img').val() =="" ) { 
                    $('.FormFieldDangerAlert').show();
					$('.FormFieldDangerAlert').text("Select Image And Pdf ");
					$('.FormFieldDangerAlert').delay(3000).fadeOut('fast');
                    return false;
				}else{
					return true; 
				}
            }
            

             function case_add(){
                var formURL= "<?=base_url()?>index.php/Admin/Add_CaseStudies";
                $( "#form_1").attr('action',formURL);
                $(".value").text('Submit');
                $(".title_cat").text('Add New');
                $("#name").val("");
                $("#img_on").attr("src","" );
                $("#old_img").val("");
                $("#old_pdf").val("");
                $("#up_file a").text("");
                $("#up_image a").text("");

            }
            function case_update(id){
                var img_url = "<?=base_url()?>assets/Uploads/Images/"
                var file_url = "<?=base_url()?>assets/Uploads/Files/"
                var formurl= "<?=base_url()?>index.php/Admin/Update_Case_Studies/";
                formURL = formurl+id;
                $( "#form_1").attr('action',formURL);
                $(".title_cat").text('Update Case Studies');
                $(".value").text('Update');
                    $.ajax({
                    url: "<?=base_url()?>index.php/Admin/Case_Studies_Get",
                    type:"POST",
                    data: {id:id},
                    success: function(html){
                        var result = $.parseJSON(html);
                        $("#name").val(result['data'][0]['name']);
                        $("#old_img").val(result['data'][0]['image']);
                        $("#old_pdf").val(result['data'][0]['pdf']);
                        var img_name = result['data'][0]['image'];
                        var img_on = img_url+img_name;  
                            $("#img_on").attr("src", img_on );
                            $("#up_image a").text(img_name);
                            $("#up_image a").attr("href",img_on);
                        var file_name = result['data'][0]['pdf'];
                        var file_in = file_url+file_name;
                            $("#up_file a").attr("href",file_in);
                            $("#up_file a").text(file_name);

                    }
                    });
            }

	</script>

</body>

</html>
