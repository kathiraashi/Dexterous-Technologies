<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <?php include 'header_links.php'; ?>
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
                <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                <!-- Contact Form -->
                <form id="contact_form" name="contact_form" class="form-transparent"  method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="form_name">Name <small>*</small></label>
                        <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="form_email">Email <small>*</small></label>
                        <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="form_name">Subject <small>*</small></label>
                        <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="form_phone">Phone</label>
                        <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="form_name">Message</label>
                    <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                  </div>
                  <div class="form-group">
                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                    <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                  </div>
                </form>
                <!-- Contact Form Validation-->
                <script type="text/javascript">
                  // $("#contact_form").validate({
                  //   submitHandler: function(form) {
                  //     var form_btn = $(form).find('button[type="submit"]');
                  //     var form_result_div = '#form-result';
                  //     $(form_result_div).remove();
                  //     form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  //     var form_btn_old_msg = form_btn.html();
                  //     form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  //     $(form).ajaxSubmit({
                  //       dataType:  'json',
                  //       success: function(data) {
                  //         if( data.status == 'true' ) {
                  //           $(form).find('.form-control').val('');
                  //         }
                  //         form_btn.prop('disabled', false).html(form_btn_old_msg);
                  //         $(form_result_div).html(data.message).fadeIn('slow');
                  //         setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                  //       }
                  //     });
                  //   }
                  // });
                </script>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 bg-img-center bg-img-cover p-0" data-bg-img="<?=base_url()?>assets/images/bg/bg1.jpg">

              <!-- Google Map HTML Codes -->
              <div 
                data-address="25c, Bharathiyar Road, Ganapathy, Coimbatore, Tamil Nadu 641006"
                data-popupstring-id="#popupstring1"
                class="map-canvas autoload-map"
                data-mapstyle="style8"
                data-height="685"
                data-latlng="11.044509, 76.976109"
                data-title="sample title"
                data-zoom="12"
                data-marker="<?=base_url()?>assets/images/map-marker.png">
              </div>
              <div class="map-popupstring hidden" id="popupstring1">
                <div class="text-center">
                  <h3>Medinova Office</h3>
                  <p>121 Anna Street, Coimbatore, India</p>
                </div>
              </div>
              <!-- Google Map Javascript Codes -->
              <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
              <script src="<?=base_url()?>assets/js/google-map-init.js"></script>

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
    });
  </script>

</body>

</html>