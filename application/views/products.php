<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <?php include 'header_links.php'; ?>
  <style>
  .DangerAlert{
    text-align: center;
    margin-top: 5px;
    padding: 8px;
    margin: 10px 20px 0px 20px;
    background-color: #5f5f6221;
    border-color: #ed323736;
  }
  .SuccessAlert{
    text-align: center;
    margin-top: 5px;
    padding: 8px;
    margin: 10px 20px 0px 20px;
    background-color: #5f5f6221;
    border-color: #10440436;
  }
  </style>
</head>

<body class="">
  <div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
      <div style="width:100%;height:100%; position:absolute; top:42%">
        <div class="preloader-jackhammer">
          <ul class="cssload-flex-container">
            <li>
              <span class="cssload-loading"></span>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Header -->
      <?php include 'header.php'; ?>

    <?php  foreach ($productDetail as $proDetail) { ?>
  
  <!-- Start main-content -->
  <div class="main-content">
      <!-- Section: inner-header -->
      <section class="inner-header bg-black-222">
        <div class="container pt-0 pb-0">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row"> 
              <div class="col-sm-4 xs-text-center">
                <h3 class="text-white mt-10"> Products </h3>
              </div>
              <div class="col-sm-8">
                <ol class="breadcrumb white text-right xs-text-center p-0 m-0 mt-10">
                  <li><a href="<?=base_url()?>index.php/Index/index">Home</a></li>
                  <li class="active"> <?=$proDetail->Brand_Name?> </li>
                  <li class="active"> <?=$proDetail->Category_Name?> </li>
                  <li class="active"> <?=$proDetail->Name?> </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

    <?php
    $Message = $this->session->tempdata('item');
     if($Message != "" && $Message == "Success"){ ?>
      <div class="alert alert-success SuccessAlert" role="alert" style="text-align:center">
      <h5 style="color:green;margin:0px" > Your Quote Request Successfully Send. </h5>
     </div>
     <?php } if ($Message != "" && $Message == "Fail"){ ?>
      <div class="alert alert-danger DangerAlert" role="alert" style="text-align:center">
        <h5 style="color:red;margin:0px" > Your Quote Request Failed To Send! Please try Again. </h5>
     </div>
    <?php } ?>

      <!-- Section: Services Details -->
      <section>
        <div class="container mt-30 mb-30 pt-30 pb-30" style="text-align: justify;">
          <div class="row">
              <div class="col-sm-12 col-md-3 pr-40">
                <div class="sidebar sidebar-left mt-sm-30  ml-sm-0">
                  <div class="widget">
                      <h4 class="widget-title line-bottom"> <?=$proDetail->Category_Name?> Products</h4>
                    <div class="services-list">
                      <ul class="list mt-0">
                        <?php 
                          $ProcategoryId = $proDetail->Category_Id;
                          $relatedProducts =	$this->db->select("*")->from('products')->where(array('Category_Id' => $ProcategoryId ))->order_by("products.Short_Order asc")->get()->result();
                              foreach($relatedProducts as $relatedPro){ ?>
                                <li class="<?php if($relatedPro->id === $proDetail->id ){ echo "active";} ?>"> 
                                  <a href="<?=base_url()?>index.php/Index/products?id=<?=$relatedPro->id?>"> <?=$relatedPro->Name?> </a>  
                                </li>
                        <?php } ?>
                      </ul>
                    </div>
                  </div>
                  
                </div>
              </div>
            <div class="col-md-9 blog-pull-right pl-0">
              <div class="single-service">
                <div class="row">
                  <div class="col-sm-12 text-right">
                      <button type="button" class="btn btn-theme-colored btn-flat btn-lg mb-15 mr-15" data-toggle="modal" data-target="#getQuote" > Get a Quote</button>
                  </div>
                </div>
                <img src="<?=base_url()?>assets/Uploads/Images/<?=$proDetail->Image?>" alt="" style="width:100%; height:400px;">
                <h4 class="line-bottom text-uppercase mt-30 mb-20">Product Details</h4>
                <div> <?=$proDetail->Detail?> </div>
                <h4 class="line-bottom text-uppercase mt-30 mb-20">More Info</h4>
                <ul id="myTab" class="nav nav-tabs boot-tabs">
                  <li class="active"><a href="#medium" data-toggle="tab">Specifications</a></li>
                  <li><a href="#large" data-toggle="tab">Technical Details</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div class="tab-pane fade in active" id="medium">
                    <p> <?=$proDetail->Specifications?> </p>
                  </div>
                  <div class="tab-pane fade" id="large">
                    <p> <?=$proDetail->Technical?> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </div>
  <!-- end main-content -->


  <!-- getQuote -->
  <div class="modal fade bs-example-modal-lg" id="getQuote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <form id="Form" action="<?=base_url()?>index.php/Index/GetQuote" onsubmit="return ValidateForm();" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"> Get a Quotation</h4>
          </div>
          <div class="modal-body">
            <h5 style="text-align:center;color:red;" id="FormAlert"> </h5>
              <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="form_name">Name <small>*</small></label>
                      <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="form_email">Email <small>*</small></label>
                      <input id="form_email" name="form_email" class="form-control" type="email"  placeholder="Enter Email">
                    </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label for="form_phone">Phone</label>
                        <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                      </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="form_name"> Product  <small>*</small></label>
                      <input type="hidden" name="form_id" value="<?=$proDetail->id?>" >
                      <input id="form_subject" value="<?=$proDetail->Name?>" class="form-control required" type="text" placeholder="Product Name" readonly="true">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="form_name">Message</label>
                      <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Enter Message" ></textarea>
                    </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-flat btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-theme-colored btn-flat btn-lg">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>


    <?php } ?>


  
  <!-- Footer -->
    <?php include 'footer.php'; ?>

  <a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
  </a>
</div>
<!-- end wrapper -->


<!-- Footer Scripts --> 
  <?php include 'footer_links.php'; ?>
  
  <script>
    $(document).ready(function() {
      $(".productPage").addClass("active");
      setTimeout(() => {
        $(".alert").hide();
      }, 10000);
      $('#FormAlert').hide();
    });

    function ValidateForm(){
      if($('#Form').find('#form_name').val() == ""){
          $('#FormAlert').show();
					$('#FormAlert').text("Name is Empty ");
					$('#FormAlert').delay(3000).fadeOut('fast');
          return false;
      }else if($('#Form').find('#form_email').val() == "") { 
          $('#FormAlert').show();
					$('#FormAlert').text("Email is Empty ");
					$('#FormAlert').delay(3000).fadeOut('fast');
          return false;
      }else if($('#Form').find('#form_message').val() == "") { 
          $('#FormAlert').show();
					$('#FormAlert').text("Message is Empty ");
					$('#FormAlert').delay(3000).fadeOut('fast');
          return false;
				}else{
					return true; 
				}
    }
  </script>

</body>

</html>