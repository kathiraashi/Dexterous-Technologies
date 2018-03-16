    <header id="header" class="header">
      <div class="header-top bg-black-333 sm-text-center border-top-theme-color-3px p-0">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="widget no-border m-0">
                <ul class="list-inline xs-text-center text-white mt-5">
                  <li class="m-0 pl-10 pr-10">
                    <a href="#" class="text-white"> <i class="fa fa-phone text-theme-colored"></i> 123-456-789</a>
                  </li>
                  <li class="m-0 pl-10 pr-10">
                    <a href="#" class="text-white"> <i class="fa fa-envelope-o text-theme-colored"></i> contact@yourdomain.com</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 pr-0">
              <div class="widget no-border m-0" style="line-height:20px;">
                <ul class="styled-icons icon-dark icon-flat icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                  <li>
                    <a href="#" class="facebook-hover"> <i class="fa fa-facebook text-white"></i> </a>
                  </li>
                  <li>
                    <a href="#" class="twitter-hover"> <i class="fa fa-twitter text-white"></i> </a>
                  </li>
                  <li>
                    <a href="#" class="googleplus-hover"> <i class="fa fa-google-plus text-white"></i> </a>
                  </li>
                  <li>
                    <a href="#" class="instagram-hover"> <i class="fa fa-instagram text-white"></i> </a>
                  </li>
                  <li>
                    <a href="#" class="linkedin-hover"> <i class="fa fa-linkedin text-white"></i> </a>
                  </li>
                  <li>
                    <a href="#" class="skype-hover"> <i class="fa fa-skype text-white"></i> </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- <div class="col-md-2">
              <a class="btn btn-colored btn-flat btn-theme-colored bs-modal-ajax-load pb-10" href="#" data-toggle="modal" data-target="#getQuote" >Get A Quote Now</a>
            </div> -->
          </div>
        </div>
      </div>
      <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
          <div class="container">
            <nav id="menuzord-right" class="menuzord default">
              <a class="menuzord-brand pull-left flip xs-pull-center mt-20" href="<?=base_url()?>index.php/Index/index">
                <img src="<?=base_url()?>assets/images/logo-wide.png" alt="">
              </a>
              <ul class="menuzord-menu">
                <li class="indexPage"> <a href="<?=base_url()?>index.php/Index/index">Home</a> </li>
                <li class="aboutPage"> <a href="<?=base_url()?>index.php/Index/about">About Us</a>  </li>
                <li class="productPage"> <a href="#"> Products </a>
                  <ul class="dropdown">
                    <?php 
                    $pro_brand =	$this->db->select("*")->from('product_brands')->order_by("product_brands.Short_Order asc")->get()->result();
                      foreach($pro_brand as $brand){ ?>
                      <li> <a href="#"><?=$brand->Name?></a>
                        <ul class="dropdown">
                          <?php 
                          $brandId = $brand->id;
                          $pro_category =	$this->db->select("*")->from('product_category')->where(array('Brand_Id' => $brandId ))->order_by("product_category.Short_Order asc")->get()->result();
                            foreach($pro_category as $category){ ?>
                            <li> <a href="#"> <?=$category->Name?> </a>
                              <ul class="dropdown">
                                <?php 
                                $categoryId = $category->id;
                                $products =	$this->db->select("*")->from('products')->where(array('Category_Id' => $categoryId ))->order_by("products.Short_Order asc")->get()->result();
                                  foreach($products as $product){ ?>
                                  <li> <a href="<?=base_url()?>index.php/Index/products?id=<?=$product->id?>"> <?=$product->Name?> </a>  </li>
                                <?php } ?>
                              </ul>
                            </li>
                          <?php } ?>
                        </ul>
                      </li>
                    <?php } ?>

                  </ul>
                </li>
                <li class="servicePage"> <a href="<?=base_url()?>index.php/Index/support"> Support </a> </li>
                <?php
                  $EventStatus =	$this->db->select("Status")->from('events')->limit(1)->get()->result_array();
                  if ($EventStatus[0]['Status'] === 'Active') { ?>
                    <li class="eventsPage"> <a href="<?=base_url()?>index.php/Index/events"> Events </a> </li>
                <?php } ?>
                <li class="case_studiesPage"> <a href="<?=base_url()?>index.php/Index/case_studies"> Case Studies </a> </li>
                <li class="clientsPage"> <a href="<?=base_url()?>index.php/Index/clients"> Clients </a> </li>
                <li class="contactPage"> <a href="<?=base_url()?>index.php/Index/contact"> Contact </a> </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>