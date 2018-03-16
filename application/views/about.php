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
                <h3 class="text-white mt-10">About Us</h3>
              </div>
              <div class="col-sm-8">
                <ol class="breadcrumb white text-right xs-text-center p-0 m-0 mt-10">
                  <li><a href="<?=base_url()?>index.php/Index/index">Home</a></li>
                  <li class="active">About Us</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- Section: Who We Are AND Why Choose Us -->
    <section class="bg-lighter">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h3 class="line-bottom mt-0">Who We Are?</h3>
              <p>
                <?php  foreach ($WhoWeAre as $WhoWeAreKey) { ?>
                  <?=$WhoWeAreKey->Text?>
                <?php } ?>
              </p>
            </div>
            <div class="col-md-6">
              <h3 class="line-bottom mt-0">Why Choose Us?</h3>
              <div id="accordion1" class="panel-group accordion mb-0">
                <?php  foreach ($WhyChooseUs as $WhyChooseUsKey) { ?>
                  <div class="panel">
                    <div class="panel-title"> <a class="active" data-parent="#accordion1" data-toggle="collapse" href="#accordion11" aria-expanded="true"> <span class="open-sub"></span> <?=$WhyChooseUsKey->Title_1?> </a> </div>
                    <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                      <div class="panel-content">
                        <p><?=$WhyChooseUsKey->Text_1?></p>
                      </div>
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12" class="" aria-expanded="true"> <span class="open-sub"></span> <?=$WhyChooseUsKey->Title_2?> </a> </div>
                    <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                      <div class="panel-content">
                        <p><?=$WhyChooseUsKey->Text_2?></p>
                      </div>
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true"> <span class="open-sub"></span> <?=$WhyChooseUsKey->Title_3?> </a> </div>
                    <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                      <div class="panel-content">
                        <p><?=$WhyChooseUsKey->Text_3?></p>
                      </div>
                    </div>
                  </div>
                  <div class="panel">
                    <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="" aria-expanded="true"> <span class="open-sub"></span> <?=$WhyChooseUsKey->Title_4?> </a> </div>
                    <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                      <div class="panel-content">
                        <p><?=$WhyChooseUsKey->Text_4?></p>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-white-9" data-parallax-ratio="0.7">
      <div class="container pt-30 pb-0">
      <?php  foreach ($Achievements as $Achievementskey) { ?>
        <div class="row">
          <div class="col-md-4">
            <img class="img-fullwidth" src="<?=base_url()?>assets/images/about/management.jpg" alt="">
          </div>
          <div class="col-md-8 pt-100">
            <div class="col-xs-12 col-sm-6 col-md-4 mb-md-50">
              <div class="funfact text-center">
                <i class="flaticon-worker font-weight-800 font-32 mt-5"></i>
                <h2 class="animate-number text-theme-colored font-36 font-weight-500 font-trirong mt-10 mb-0" data-value="<?=$Achievementskey->NoOfClients?>" data-animation-duration="2000"><?=$Achievementskey->NoOfClients?></h2>
                <h5 class="text-uppercase font-14 text-gray">Number of Clients</h5>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 mb-md-50">
              <div class="funfact text-center">
                <i class="flaticon-layers font-weight-800 font-32 mt-5"></i>
                <h2 class="animate-number text-theme-colored font-36 font-weight-500 font-trirong mt-10 mb-0" data-value="<?=$Achievementskey->MachineSold?>" data-animation-duration="2000"><?=$Achievementskey->MachineSold?></h2>
                <h5 class="text-uppercase font-14 text-gray">Machines Sold</h5>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 mb-md-50">
              <div class="funfact text-center">
                <i class="flaticon-trophy2 font-weight-800 font-32 mt-5"></i>
                <h2 class="animate-number text-theme-colored font-36 font-weight-500 font-trirong mt-10 mb-0" data-value="<?=$Achievementskey->AwardsWon?>" data-animation-duration="2000"><?=$Achievementskey->AwardsWon?></h2>
                <h5 class="text-uppercase font-14 text-gray">Awards Won</h5>
              </div>
            </div>
          </div>
        </div>
      <?PHP } ?>
      </div>
    </section>
    
    <!-- Divider: partners  -->
    <section class="divider parallax layer-overlay overlay-dark-9" data-bg-img="<?=base_url()?>assets/images/bg/bg6.jpg" data-parallax-ratio="0.7">
      <div class="container pt-20 pb-20">
        <div class="section-title text-center mb-0">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="title text-uppercase line-bottom-double-line-centered text-white"> Our 
                <span class="text-theme-colored"> Partners </span>
              </h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
              <div class="owl-carousel-4col clients-logo transparent text-center">
                <?php foreach ($OurPartners as $OurPartnerskey) { ?>
                  <div class="item">
                    <a href="#">
                      <img src="<?=base_url()?>assets/Uploads/Images/<?=$OurPartnerskey->Image?>" alt="" style="height:80px;">
                    </a>
                  </div>
                <?php } ?>
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

<!-- Footer Scripts And Quote Form -->
  <?php include 'footer_links.php'; ?>

  <script>
    $(document).ready(function() {
      $(".aboutPage").addClass("active");
    });
  </script>

</body>

</html>