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
      <!-- Section: home -->
      <section id="home">
        <div class="container-fluid p-0">
          
          <!-- Slider Revolution Start -->
          <div class="rev_slider_wrapper" style="max-height:500px">
            <div class="rev_slider rev_slider_default" data-version="5.0" style="max-height:500px">
              <ul>
              <?php  foreach ( array_values($Sliders) as $key => $value ) { ?>
                <!-- SLIDE 1 -->
                <li data-index="rs-<?php echo $key + 1 ; ?>" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?=base_url()?>assets/Uploads/Images/<?=$value->Image ?>" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="<?=base_url()?>assets/Uploads/Images/<?=$value->Image ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                  <!-- LAYERS -->

                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption tp-resizeme sft text-white text-uppercase font-raleway bg-theme-colored pl-20 pr-20" 
                    id="rs-<?php echo $key + 1 ; ?>-layer-1"

                    data-x="['left']"
                    data-hoffset="['30']"
                    data-y="['middle']"
                    data-voffset="['-125']"
                    data-fontsize="['24']"
                    data-lineheight="['48']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;s:500"
                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-speed="500"
                    data-start="600"
                    data-splitin="none"
                    data-splitout="none" 
                    data-responsive_offset="on" 
                    style="z-index: 5; white-space: nowrap; font-weight:700; border-left: 8px solid #fff;"> <?=$value->Text_One ?>
                  </div>

                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme sft text-uppercase text-white font-raleway font-weight-700 m-0" 
                    id="rs-<?php echo $key + 1 ; ?>-layer-2"

                    data-x="['left']"
                    data-hoffset="['30']"
                    data-y="['middle']"
                    data-voffset="['-50']"
                    data-fontsize="['72']"
                    data-lineheight="['82']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;s:500"
                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-speed="500"
                    data-start="800"
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on" 
                    style="z-index: 5; white-space: nowrap; font-weight:700;"> <span class="text-theme-colored"> <?=$value->Text_Two ?> </span>
                  </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption tp-resizeme sft text-white" 
                    id="rs-<?php echo $key + 1 ; ?>-layer-3"

                    data-x="['left']"
                    data-hoffset="['30']"
                    data-y="['middle']"
                    data-voffset="['20']"
                    data-fontsize="['16','18',24']"
                    data-lineheight="['28']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;s:500"
                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-speed="500"
                    data-start="1200"
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 5; white-space: nowrap; font-weight:400;"> <?=$value->Text_Three ?>
                  </div>

                </li>
              <?php } ?>
              
              </ul>
            </div>
            <!-- end .rev_slider -->
          </div>
          <!-- end .rev_slider_wrapper -->
          <script>
            $(document).ready(function(e) {
              $(".rev_slider_default").revolution({
                sliderType:"standard",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 5000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                  arrows: {
                    style: "gyges",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    tmp: '',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 0,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 0,
                        v_offset: 0
                    }
                  },
                  bullets: {
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 800,
                    style: "hebe",
                    hide_onleave: false,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                  }
                },
                responsiveLevels: [1240, 1024, 778],
                visibilityLevels: [1240, 1024, 778],
                gridwidth: [1170, 1024, 778, 480],
                gridheight: [580, 768, 960, 720],
                lazyType: "none",
                parallax: {
                    origo: "slidercenter",
                    speed: 1000,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                    type: "scroll"
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
              });
            });
          </script>
          <!-- Slider Revolution Ends -->
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
                <a href="<?=base_url()?>index.php/Index/about" class="btn btn-theme-colored btn-flat btn-lg mt-15 mr-15">Read more</a>
                <a href="<?=base_url()?>index.php/Index/contact" class="btn btn-default btn-flat btn-lg mt-15">Contact Us</a>
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

      <!-- Divider: Achievements -->
      <section class="divider parallax layer-overlay overlay-dark-8" data-bg-img="<?=base_url()?>assets/images/bg/bg6.jpg" data-parallax-ratio="0.7">
        <div class="container">
          <?php  foreach ($Achievements as $Achievementskey) { ?>
            <div class="row">
              <div class="col-md-12">
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                  <div class="funfact text-center">
                    <i class="flaticon-worker text-white font-weight-800 font-32 mt-5"></i>
                    <h2 class="animate-number text-theme-colored font-36 font-weight-500 font-trirong mt-10 mb-0" data-value="<?=$Achievementskey->NoOfClients?>" data-animation-duration="2000"> <?=$Achievementskey->NoOfClients?> </h2>
                    <h5 class="text-uppercase font-14 text-gray">Number of Clients</h5>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                  <div class="funfact text-center">
                    <i class="flaticon-layers text-white font-weight-800 font-32 mt-5"></i>
                    <h2 class="animate-number text-theme-colored font-36 font-weight-500 font-trirong mt-10 mb-0" data-value="<?=$Achievementskey->ProjectDone?>" data-animation-duration="2000"><?=$Achievementskey->ProjectDone?></h2>
                    <h5 class="text-uppercase font-14 text-gray">Projects Done</h5>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                  <div class="funfact text-center">
                    <i class="flaticon-trophy2 text-white font-weight-800 font-32 mt-5"></i>
                    <h2 class="animate-number text-theme-colored font-36 font-weight-500 font-trirong mt-10 mb-0" data-value="<?=$Achievementskey->MachineSold?>" data-animation-duration="2000"><?=$Achievementskey->MachineSold?></h2>
                    <h5 class="text-uppercase font-14 text-gray">Machine Sold</h5>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                  <div class="funfact text-center">
                    <i class="flaticon-trophy2 text-white font-weight-800 font-32 mt-5"></i>
                    <h2 class="animate-number text-theme-colored font-36 font-weight-500 font-trirong mt-10 mb-0" data-value="<?=$Achievementskey->AwardsWon?>" data-animation-duration="2000"><?=$Achievementskey->AwardsWon?></h2>
                    <h5 class="text-uppercase font-14 text-gray">Awards Won</h5>
                  </div>
                </div>
              </div>
            </div>
          <?PHP } ?>
        </div>
      </section>

      <!-- Section: products -->
      <section class="layer-overlay overlay-white-4" data-bg-img="<?=base_url()?>assets/images/pattern/p37.png">
        <div class="container pt-10 pb-30">
          <div class="section-title text-center">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h2 class="title text-uppercase line-bottom-double-line-centered"> Our 
                  <span class="text-theme-colored"> Products </span>
                </h2>
                <p class="font-13 mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit vitae
                  <br> eum animi iure necessitatibus repudiandae?</p>
              </div>
            </div>
          </div>
          <div class="row multi-row-clearfix">
            <div class="col-md-12">
              <div class="owl-carousel-3col" data-nav="true">
                <?php foreach ($productsList as $productskey) { ?>
                <div class="item">
                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 mb-sm-30">
                          <img style="height:200px" src="<?=base_url()?>assets/Uploads/Images/<?=$productskey->Image?>" alt="">
                          <h3> <?=$productskey->Name?> </h3>
                          <div class="ReadMore"> <?=$productskey->Detail?> </div>
                          <a href="<?=base_url()?>index.php/Index/products" class="btn btn-sm btn-theme-colored"> Read more </a>
                      </div>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
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
      $(".indexPage").addClass("active");
    });
  </script>

  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
  <script type="text/javascript" src="<?=base_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

  <script>
    $(document).ready(function() {
      var ReadMoreText = '';
      $(".ReadMore").each(function() {
        ReadMoreText = '';
        ReadMoreText = $(this).html();
        ReadMoreTextLength = ReadMoreText.length;
        if(ReadMoreTextLength >= 205) {    
          ReadMoreText = ReadMoreText.substr(0,200) + "...";    
        }
        $(this).html(ReadMoreText);
      });

    });
  </script>

</body>


</html>