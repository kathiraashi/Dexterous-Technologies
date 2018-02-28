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
              <h3 class="text-white mt-10"> Products </h3>
            </div>
            <div class="col-sm-8">
              <ol class="breadcrumb white text-right xs-text-center p-0 m-0 mt-10">
                <li><a href="<?=base_url()?>index.php/Index/index">Home</a></li>
                <li class="active"> Main Category-1 </li>
                <li class="active"> Sub Category-1 </li>
                <li class="active"> Product-1 </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Services Details -->
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30" style="text-align: justify;">
        <div class="row">
            <div class="col-sm-12 col-md-3 pr-40">
              <div class="sidebar sidebar-left mt-sm-30  ml-sm-0">
                <div class="widget">
                    <h4 class="widget-title line-bottom"> Sub Category-1 Products</h4>
                  <div class="services-list">
                    <ul class="list mt-0">
                      <li class="active"><a href="<?=base_url()?>index.php/Index/products"> Product Name-1</a></li>
                      <li class=""><a href="<?=base_url()?>index.php/Index/products"> Product Name-2</a></li>
                      <li class=""><a href="<?=base_url()?>index.php/Index/products"> Product Name-3</a></li>
                      <li class=""><a href="<?=base_url()?>index.php/Index/products"> Product Name-4</a></li>
                    </ul>
                  </div>
                </div>
                <div class="widget">
                  <h4 class="widget-title line-bottom">Download Brochures</h4>
                  <div class="brochured">
                    <ul class="list">
                      <li><a href="#"><i class="fa fa-file-word-o"></i>Download Doc</a></li>
                      <li><a href="images/about/dex_tech.pdf" target="_blank"><i class="fa fa-file-pdf-o"></i>Download Pdf</a></li>
                    </ul>
                  </div>
                </div>
                
              </div>
            </div>
          <div class="col-md-9 blog-pull-right pl-0">
            <div class="single-service">
              <div class="row">
                <div class="col-sm-12 text-right">
                    <button type="button" class="btn btn-theme-colored btn-flat btn-lg mb-15 mr-15" data-toggle="modal" data-target="#getDemo" > Get a Demo</button>
                    <button type="button" class="btn btn-theme-colored btn-flat btn-lg mb-15 mr-15" data-toggle="modal" data-target="#getQuote" > Get a Quote</button>
                    <button type="button" class="btn btn-theme-colored btn-flat btn-lg mb-15 mr-15" > Brochures <i class="fa fa-download"></i> </button>
                </div>
              </div>
              <img src="<?=base_url()?>assets/images/products/img_2.jpg" alt="" style="width:100%; height:400px;">
              <h4 class="line-bottom text-uppercase mt-30 mb-20">Product Details</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore voluptatem officiis quod animi possimus a, iure nam sunt quas aperiam non recusandae reprehenderit, nesciunt cumque pariatur totam repellendus delectus? Maxime quasi earum nobis, dicta, aliquam facere reiciendis, delectus voluptas, ea assumenda blanditiis placeat dignissimos quas iusto repellat cumque.</p>
              <h4 class="line-bottom text-uppercase mt-30 mb-20">More Info</h4>
              <ul id="myTab" class="nav nav-tabs boot-tabs">
                <li class="active"><a href="#small" data-toggle="tab">Features</a></li>
                <li><a href="#medium" data-toggle="tab">Specifications</a></li>
                <li><a href="#large" data-toggle="tab">Technical Details</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="small">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut minus commodi, illo, enim nemo illum repellendus accusantium maiores delectus doloribus alias ea quisquam cum nulla a volupta delectus doloribus alias ea quisquam cum nulla a voluptatum nobis eius, deleniti dicta molestiae atque. Exercitationem odit dolor cumque facilis natus recusandae id, dolorum modi ducimus minus.</p>
                </div>
                <div class="tab-pane fade" id="medium">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut minus commodi, illo, enim nemo illum repellendus accusantium maiores delectus doloribus alias ea quisquam cum nulla a volupta delectus doloribus alias ea quisquam cum nulla a voluptatum nobis eius, deleniti dicta molestiae atque. Exercitationem odit dolor cumque facilis natus recusandae id, dolorum modi ducimus minus.</p>
                </div>
                <div class="tab-pane fade" id="large">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut minus commodi, illo, enim nemo illum repellendus accusantium maiores delectus doloribus alias ea quisquam cum nulla a volupta delectus doloribus alias ea quisquam cum nulla a voluptatum nobis eius, deleniti dicta molestiae atque. Exercitationem odit dolor cumque facilis natus recusandae id, dolorum modi ducimus minus.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->


  <!-- getDemo -->
  <div class="modal fade bs-example-modal-lg" id="getDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"> Get A Demo</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small></label>
                    <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
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
                    <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Product Name" readonly="true">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="form_name">Message</label>
                    <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                  </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-flat btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-theme-colored btn-flat btn-lg">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  <!-- getQuote -->
  <div class="modal fade bs-example-modal-lg" id="getQuote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"> Get a Quotation</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small></label>
                    <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
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
                    <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Product Name" readonly="true">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="form_name">Message</label>
                    <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                  </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-flat btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-theme-colored btn-flat btn-lg">Save changes</button>
        </div>
      </div>
    </div>
  </div>



  
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
    });
  </script>

</body>

</html>