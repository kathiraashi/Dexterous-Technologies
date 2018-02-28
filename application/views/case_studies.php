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
                <h3 class="text-white mt-10"> Case Studies </h3>
                </div>
                <div class="col-sm-8">
                <ol class="breadcrumb white text-right xs-text-center p-0 m-0 mt-10">
                    <li><a href="<?=base_url()?>index.php/Index/index"> Home </a></li>
                    <li class="active">  Case Studies </li>
                </ol>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Section: Causes -->
    <section>
      <div class="container pb-30">
        <div class="section-content">
          <div class="row multi-row-clearfix">
            <div class="col-sm-12 col-md-12">
                <div class="blog-posts">
                    <div class="row ">
                        <div class="col-sm-4 p-0 pr-10 mb-30">
                            <article class="post clearfix bg-lighter" style="min-height:130px" data-bg-img="<?=base_url()?>assets/images/blog/3.jpg" >
                                <div class="entry-content no-bg p-10">
                                <div class="entry-meta media mt-0 no-bg no-border">
                                    <div class="media-body pl-15">
                                        <div class="event-content pull-left flip">
                                            <h4 class="entry-title text-white text-uppercase m-0 mt-0"><b>Case Studies title here </b>  </h4>  <small class="text-white"> ( 250 Downloads )</small>
                                        </div>
                                    </div>
                                </div>
                                    <button style="position:absolute; bottom:10px; right:20px;" type="button" class="btn btn-theme-colored btn-flat btn-lg"> <i class="fa fa-download"></i> Download </button>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-4 p-0 pr-10 mb-30">
                            <article class="post clearfix bg-lighter" style="min-height:130px" data-bg-img="<?=base_url()?>assets/images/blog/3.jpg" >
                                <div class="entry-content no-bg p-10">
                                <div class="entry-meta media mt-0 no-bg no-border">
                                    <div class="media-body pl-15">
                                        <div class="event-content pull-left flip">
                                            <h4 class="entry-title text-white text-uppercase m-0 mt-0"><b>Case Studies title here </b>  </h4>  <small class="text-white"> ( 250 Downloads )</small>
                                        </div>
                                    </div>
                                </div>
                                    <button style="position:absolute; bottom:10px; right:20px;" type="button" class="btn btn-theme-colored btn-flat btn-lg"> <i class="fa fa-download"></i> Download </button>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-4 p-0 pr-10 mb-30">
                            <article class="post clearfix bg-lighter" style="min-height:130px" data-bg-img="<?=base_url()?>assets/images/blog/3.jpg" >
                                <div class="entry-content no-bg p-10">
                                <div class="entry-meta media mt-0 no-bg no-border">
                                    <div class="media-body pl-15">
                                        <div class="event-content pull-left flip">
                                            <h4 class="entry-title text-white text-uppercase m-0 mt-0"><b>Case Studies title here </b>  </h4>  <small class="text-white"> ( 250 Downloads )</small>
                                        </div>
                                    </div>
                                </div>
                                    <button style="position:absolute; bottom:10px; right:20px;" type="button" class="btn btn-theme-colored btn-flat btn-lg"> <i class="fa fa-download"></i> Download </button>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-4 p-0 pr-10 mb-30">
                            <article class="post clearfix bg-lighter" style="min-height:130px" data-bg-img="<?=base_url()?>assets/images/blog/3.jpg" >
                                <div class="entry-content no-bg p-10">
                                <div class="entry-meta media mt-0 no-bg no-border">
                                    <div class="media-body pl-15">
                                        <div class="event-content pull-left flip">
                                            <h4 class="entry-title text-white text-uppercase m-0 mt-0"><b>Case Studies title here </b>  </h4>  <small class="text-white"> ( 250 Downloads )</small>
                                        </div>
                                    </div>
                                </div>
                                    <button style="position:absolute; bottom:10px; right:20px;" type="button" class="btn btn-theme-colored btn-flat btn-lg"> <i class="fa fa-download"></i> Download </button>
                                </div>
                            </article>
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
      $(".case_studiesPage").addClass("active");
    });
  </script>

</body>

</html>