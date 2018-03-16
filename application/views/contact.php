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
                <h3 class="text-white mt-10"> Contact </h3>
                </div>
                <div class="col-sm-8">
                <ol class="breadcrumb white text-right xs-text-center p-0 m-0 mt-10">
                    <li><a href="<?=base_url()?>index.php/Index/index">Home</a></li>
                    <li class="active">  Contact </li>
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
      <h5 style="color:green;margin:0px" > Your Message Successfully Send. </h5>
     </div>
     <?php } if ($Message != "" && $Message == "Fail"){ ?>
      <div class="alert alert-danger DangerAlert" role="alert" style="text-align:center">
        <h5 style="color:red;margin:0px" > Your Message Failed To Send! Please try Again. </h5>
     </div>
    <?php } ?>
    
    <!-- Section: Have Any Question -->
    <section class="divider">
      <div class="container pt-60 pb-60">
        <div class="section-title mb-60">
          <div class="row">
            <div class="col-md-12">
              <div class="esc-heading small-border text-center">
                <h3>Have any Questions?</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                <h4>Call Us</h4>
                <h6 class="text-gray">Phone: +0422 695 2601</h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                <h4>Address</h4>
                <h6 class="text-gray">121 Anna Street, Coimbatore, India</h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                <h4>Email</h4>
                <h6 class="text-gray">you@yourdomain.com</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section Contact -->
    <section id="contact" class="divider bg-lighter">
      <div class="container-fluid pt-0 pb-0">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="contact-wrapper">
                <h3 class="line-bottom mt-0 mb-20">Interested in discussing?</h3>

                <!-- Contact Form -->
                <form id="Form" action="<?=base_url()?>index.php/Index/ContactInterest"  onsubmit="return ValidateForm();" method="post">
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
                        <input id="form_email" name="form_email" class="form-control email" type="email" placeholder="Enter Email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="form_subject">Subject <small>*</small></label>
                        <input id="form_subject" name="form_subject" class="form-control" type="text" placeholder="Enter Subject">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="form_phone">Phone</label>
                        <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="form_message">Message <small>*</small> </label>
                    <textarea id="form_message" name="form_message" class="form-control" rows="5" placeholder="Enter Message"></textarea>
                  </div>
                  <h5 style="color:red;" id="FormAlert"> </h5>  
                  <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5">Send your message</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 bg-img-center bg-img-cover p-0 mt-30" data-bg-img="<?=base_url()?>assets/images/bg/bg1.jpg">

              <!-- Google Map HTML Codes -->


              <div style="margin: 2px; margin-bottom: -5px;">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.9254120787996!2d76.97392061476756!3d11.04421905721359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba858896c5d6491%3A0x7f593947f0db87ba!2sAASHI+TECHNOLOGIES!5e0!3m2!1sen!2sin!4v1521194163599" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>

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
      $(".contactPage").addClass("active");
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
        }else if($('#Form').find('#form_subject').val() == "") { 
          $('#FormAlert').show();
					$('#FormAlert').text("Subject is Empty ");
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