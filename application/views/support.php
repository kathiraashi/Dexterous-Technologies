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
  
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header bg-black-222">
      <div class="container pt-0 pb-0">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-sm-4 xs-text-center">
              <h3 class="text-white mt-10"> Services </h3>
            </div>
            <div class="col-sm-8">
              <ol class="breadcrumb white text-right xs-text-center p-0 m-0 mt-10">
                <li><a href="<?=base_url()?>index.php/Index/index">Home</a></li>
                <li class="active"> Services </li>
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
      <h5 style="color:green;margin:0px" > Your Enquery Successfully Send. </h5>
     </div>
     <?php } if ($Message != "" && $Message == "Fail"){ ?>
      <div class="alert alert-danger DangerAlert" role="alert" style="text-align:center">
        <h5 style="color:red;margin:0px" > Your Enquery Failed To Send! Please try Again. </h5>
     </div>
    <?php } ?>

    <!-- Section: Why Choose Us -->
    <section class="bg-silver-light bg-no-repeat bg-img-left-top" data-bg-img="<?=base_url()?>assets/images/photos/2.png" style="text-align: justify;">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-7">
              <h3 class="line-bottom mt-0"> Products Support </h3>
              <?php foreach ($support as $sup) { ?>
                <div class="pr-30">
                  <?=$sup->Text?>
                </div>
                <?php } ?>
            </div>
            <div class="col-md-5">
              <h3 class="line-bottom mt-0 mt-sm-40"> Send an Enquery </h3>
              <form id="Form" action="<?=base_url()?>index.php/Index/SupportEnquery" onsubmit="return ValidateForm();" method="post">
                <div class="form-group">
                  <label for="form_company_name"> Company Name <small>*</small></label>
                  <input id="form_company_name" name="form_company_name" class="form-control" type="text" placeholder="Enter Company Name">
                </div>
                <div class="form-group">
                  <label for="form_contact_name"> Contact Person Name <small>*</small></label>
                  <input id="form_contact_name" name="form_contact_name" class="form-control" type="text" placeholder="Enter Contact Person Name">
                </div>
                <div class="form-group">
                  <label for="form_email"> Email <small>*</small></label>
                  <input id="form_email" name="form_email" class="form-control email" type="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label for="form_phone">Phone</label>
                  <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                </div>
                <div class="form-group">
                  <label for="form_machine_model"> Machine Model <small>*</small></label>
                  <input id="form_machine_model" name="form_machine_model" class="form-control" type="text" placeholder="Enter Machine Model ">
                </div>
                <div class="form-group">
                  <label for="form_problem"> Problem Observed <small>*</small> </label>
                  <textarea id="form_problem" name="form_problem" class="form-control" rows="5" placeholder="Enter Your Observed Problem"></textarea>
                </div>
                <h5 style="color:red;" id="FormAlert"> </h5>  
                <div class="form-group">
                  <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5">Send your message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>



  </div>
  <!-- end main-content -->
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
      $(".servicePage").addClass("active");
      setTimeout(() => {
        $(".alert").hide();
      }, 10000);
      $('#FormAlert').hide();
    });

    function ValidateForm(){
      if($('#Form').find('#form_company_name').val() == ""){
          $('#FormAlert').show();
					$('#FormAlert').text("Company Name is Empty ");
					$('#FormAlert').delay(3000).fadeOut('fast');
          return false;
      }else if($('#Form').find('#form_contact_name').val() == "") { 
          $('#FormAlert').show();
					$('#FormAlert').text("Contact Person Name is Empty ");
					$('#FormAlert').delay(3000).fadeOut('fast');
          return false;
      }else if($('#Form').find('#form_email').val() == "") { 
          $('#FormAlert').show();
					$('#FormAlert').text("Email is Empty ");
					$('#FormAlert').delay(3000).fadeOut('fast');
          return false;
      }else if($('#Form').find('#form_machine_model').val() == "") { 
          $('#FormAlert').show();
					$('#FormAlert').text("Machine Model is Empty ");
					$('#FormAlert').delay(3000).fadeOut('fast');
          return false;
      }else if($('#Form').find('#form_problem').val() == "") { 
          $('#FormAlert').show();
					$('#FormAlert').text("Problem Observed is Empty ");
					$('#FormAlert').delay(3000).fadeOut('fast');
          return false;
      }else{
        return true; 
      }
    }
  </script>

</body>

</html>