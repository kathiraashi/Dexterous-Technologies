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
                <h3 class="text-white mt-10"> Clients </h3>
                </div>
                <div class="col-sm-8">
                <ol class="breadcrumb white text-right xs-text-center p-0 m-0 mt-10">
                    <li><a href="<?=base_url()?>index.php/Index/index">Home</a></li>
                    <li class="active">  Clients </li>
                </ol>
                </div>
            </div>
          </div>
        </div>
    </section>



    <!-- Gallery Grid 4 -->
    <section>
        <div class="container pb-20">
          <div class="section-content">
            <div class="row">
              <div class="col-md-12">
              
                <div id="grid" class="gallery-isotope grid-4 gutter clearfix">

                  <div class="gallery-item photography">
                    <div class="thumb">
                      <img class="img-fullwidth" src="<?=base_url()?>assets/images/clients/kennametal-logo.png" alt="project">
                    </div>
                    
                  </div>

                 
                  <div class="gallery-item photography">
                    <div class="thumb">
                      <img class="img-fullwidth" src="<?=base_url()?>assets/images/clients/kpt-power-tools-logo.gif" alt="project">
                    </div>
                    
                  </div>

                  <div class="gallery-item photography">
                    <div class="thumb">
                      <img class="img-fullwidth" src="<?=base_url()?>assets/images/clients/logo_2.jpg" alt="project">
                    </div>
                   
                  </div>
                  <div class="gallery-item photography">
                    <div class="thumb">
                      <img class="img-fullwidth" src="<?=base_url()?>assets/images/clients/kennametal-logo.png" alt="project">
                    </div>
                   
                  </div>


                  <div class="gallery-item photography">
                    <div class="thumb">
                      <img class="img-fullwidth" src="<?=base_url()?>assets/images/clients/kpt-power-tools-logo.gif" alt="project">
                    </div>
                  
                  </div>

                  <div class="gallery-item photography">
                    <div class="thumb">
                      <img class="img-fullwidth" src="<?=base_url()?>assets/images/clients/logo_2.jpg" alt="project">
                    </div>
                    
                  </div>

                 

      
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
      $(".clientsPage").addClass("active");
    });
  </script>

</body>

</html>