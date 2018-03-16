<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <?php include 'header_links.php'; ?>
</head>
<style>
.MapIframe iframe{
  height:250px !important;
  margin-bottom: -7px;
}
</style>

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
  
      <?php foreach ($events as $key) {?>

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
                  <h3 class="mt-10 mb-0 text-center text-white"> <b> Event Title : </b> <?=$key->Event_Name?>  </h3>
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
                  <img class="img-fullwidth" style="max-height:400px;" alt="" src="<?=base_url()?>assets/Uploads/Images/<?=$key->Image?>">
                </div>
                <div class="project-details p-15 pt-15 pb-0">
                  <h4 class="title font-weight-700 text-uppercase mt-0">Event Details </h4>
                </div>
              </div>
              <div class="event-details" style="text-align: justify;">
                <div class="mb-20 mt-20"> <?=$key->Event_Details?> </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="sidebar sidebar-right mt-sm-30">
                <div class="widget">
                  <h5 class="widget-title line-bottom"> Date Time </h5>
                  <ul class="list-divider list-border list check">
                    <li> <b> Start Date : </b><?=$key->Start_Date?> - <?=$key->Start_Time?> </li>
                    <li> <b> End Date : </b> <?=$key->End_Date?> - <?=$key->End_Time?> </li>
                  </ul>
                </div>
                <div class="widget">
                  <h5 class="widget-title line-bottom"> Address </h5>
                  <p><?=$key->Address?></p>
                  <p> <i class="fa fa-phone text-theme-colored mr-5"></i>  <?=$key->Mobile?>  </p>
                  <p> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <?=$key->Email?> </p>
                </div>
                <div class="widget">
                  <h5 class="widget-title line-bottom">Address Location </h5>
                  <div class="bg-img-center bg-img-cover MapIframe p-0" data-bg-img="<?=base_url()?>assets/images/bg/bg1.jpg">
                    <!-- Google Map HTML Codes -->
                    <?=$key->Location?>
      
                  </div>
                </div>
                <div class="widget pt-20">
                  <h5 class="widget-title line-bottom"> Event Topics </h5>
                  <div class="tags">
                  <?php foreach (explode("///", $key->Topics) as $keyNew) { ?>
                    <a href="#"><?=$keyNew?></a>
                  <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </div>
  <!-- end main-content -->

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
      $(".eventsPage").addClass("active");
    });
  </script>

</body>

</html>