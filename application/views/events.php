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
              <h3 class="text-white mt-10"> Events </h3>
            </div>
            <div class="col-sm-8">
              <ol class="breadcrumb white text-right xs-text-center p-0 m-0 mt-10">
                <li><a href="<?=base_url()?>index.php/Index/index">Home</a></li>
                <li class="active"> Events </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Causes -->
    <section>
        <div class="container pt-20 pb-0">
          <div class="row">
            <div class="col-md-12">
              <div class="call-to-action bg-theme-colored border-dashed-1px box-shadow-theme-colored-6px sm-text-center p-10">
                <div class="col-md-12">
                  <h3 class="mt-10 mb-0 text-center text-white"> <b> Event Title : </b>  Lorem ipsum dolor sit amet, consectetur adipisicing elit.  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <section>
        <div class="container">
          <div class="row mtli-row-clearfix">
            <div class="col-sm-6 col-md-8 col-lg-8">
              <div class="project mb-30">
                <div class="">
                  <img class="img-fullwidth" style="max-height:400px;" alt="" src="<?=base_url()?>assets/images/products/img_11.jpg">
                </div>
                <div class="project-details mt-30 p-15 pt-15 pb-0">
                  <h4 class="title font-weight-700 text-uppercase mt-0">Event Details </h4>
                </div>
              </div>
              <div class="event-details" style="text-align: justify;">
                <p class="mb-20 mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat qui ducimus illum modi? Libero saepe perspiciatis accusamus soluta perferendis, ad illum, nesciunt, reiciendis iusto et cupiditate. Repudiandae provident, consectetur, sapiente, libero iure necessitatibus corporis nulla voluptate, quisquam aut eum perspiciatis? Fugiat labore aspernatur eius, perspiciatis ut molestiae, delectus rem.</p>
                <div class="">
                  <p class="font-14 text-black-light"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam nequep aliquid suscipit voluptas ab temporibus, animi impedit ipsum, sunt rem sed ut quod quas earum inventore expedita consectetur.</em></p>
                  <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat qui ducimus illum modi? Libero saepe perspic reiciendis iusto et cupiditate. Repudiandae provident, consectetur, sapiente, libero iure necessitatibus corporis nulla sit voluptate, quisquam aut eum perspiciatis? Fugiat labore aspernatur </p>
                </div>
                <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat qui ducimus illum modi? Libero saepe perspiciatis accusamus soluta perferendis, ad illum, nesciunt, reiciendis iusto et cupiditate. Repudiandae provident, consectetur, sapiente, libero iure necessitatibus corporis nulla voluptate, quisquam aut eum perspiciatis? Fugiat labore aspernatur eius, perspiciatis ut molestiae, delectus rem tempora omnis optio odio autem asperiores quae maiores ea eveniet cupiditate aut repellendus? Quo iure explicabo quam reprehenderit ipsam sequi. Perferendis esse iure ullam, illum, quibusdam corporis nobis dolores unde dolorem ipsa quaerat suscipit.
                </p>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="sidebar sidebar-right mt-sm-30">
                <div class="widget">
                  <h5 class="widget-title line-bottom"> Date Time </h5>
                  <ul class="list-divider list-border list check">
                    <li> <b> Start Date : </b> 01/01/2017 - 10.00 AM</li>
                    <li> <b> End Date : </b> 01/01/2017 - 06.00 PM </li>
                  </ul>
                </div>
                <div class="widget">
                  <h5 class="widget-title line-bottom"> Address </h5>
                  <p>121, Anna Steet, <br> Coimbatore, India.</p>
                  <p> <i class="fa fa-phone text-theme-colored mr-5"></i>  +91 98765 43210  </p>
                  <p> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> ContactInfo@mail.com </p>
                </div>
                <div class="widget">
                  <h5 class="widget-title line-bottom">Address Location </h5>
                  <div class="bg-img-center bg-img-cover p-0" data-bg-img="<?=base_url()?>assets/images/bg/bg1.jpg">
                    <!-- Google Map HTML Codes -->
                    <div 
                      data-address="121 King Street, Melbourne Victoria 3000 Australia"
                      data-popupstring-id="#popupstring1"
                      class="map-canvas autoload-map"
                      data-mapstyle="style8"
                      data-height="280"
                      data-latlng="-37.817314,144.955431"
                      data-title="sample title"
                      data-zoom="12"
                      data-marker="<?=base_url()?>assets/images/map-marker.png">
                    </div>
                    <div class="map-popupstring hidden" id="popupstring1">
                      <div class="text-center">
                        <h3>Dexterous Office</h3>
                        <p>121 Anna Street, Coimbatore,India</p>
                      </div>
                    </div>
                    <!-- Google Map Javascript Codes -->
                    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
                    <script src="<?=base_url()?>assets/js/google-map-init.js"></script>
      
                  </div>
                </div>
                <div class="widget pt-20">
                  <h5 class="widget-title line-bottom"> Event Topics </h5>
                  <div class="tags">
                    <a href="#">travel</a>
                    <a href="#">lifestyle</a>
                    <a href="#">feature</a>
                    <a href="#">design</a>
                    <a href="#">journey</a>
                    <a href="#">classic</a>
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
      $(".eventsPage").addClass("active");
    });
  </script>

</body>

</html>