  <header class="main-header">

    <a href="<?=base_url()?>index.php/Admin" class="logo">
      <img  src="<?=base_url()?>assets/images/logo-wide-white.png" alt="" style="max-height:40px;">
    </a>

    <nav class="navbar navbar-static-top">
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu">
            <a href="<?=base_url()?>index.php/Admin/logout">
              <span class="hidden-xs">Sign Out</span>
            </a>
          </li>
        </ul>
      </div>

    </nav>
  </header>

    <?php if (isset($msg)){ ?>
        <div class="alert <?php echo $type; ?> alert-dismissible msg" style="position: absolute;z-index: 1084;right: 5px;top: 55px">
            <button type="button" class="close msg_close" style="position: absolute;right: 5px; font-size:30px">&times;</button>
            <h4><i class="icon fa <?php echo $icon; ?>"></i><?php echo $msg; ?></h4>  
        </div>
    <?php } ?>








  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">


        <li class="treeview ProductPage">
          <a href="#">
            <i class="fa fa-tags"></i> <span>PRODUCTS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="BrandsPage" ><a href="<?=base_url()?>index.php/Admin/Product_Brand"><i class="fa fa-circle-o " style="color: lightgreen"></i> <span> BRANDS </span></a></li>
            <li class="CategoryPage" ><a href="<?=base_url()?>index.php/Admin/Product_Category"><i class="fa fa-circle-o " style="color: lightgreen"></i> <span> CATEGORIES </span></a></li>
            <li class="ProductsPage"><a href="<?=base_url()?>index.php/Admin/Product_List"><i class="fa fa-circle-o " style="color: lightgreen"></i> <span> PRODUCTS </span></a></li>
          </ul>
        </li>

        <li class="treeview AboutPage">
          <a href="#">
            <i class="fa fa-pie-chart"></i><span> ABOUT US </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="WhoWeArePage"><a href="<?=base_url()?>index.php/Admin/Who_We_Are"><i class="fa fa-circle-o" style="color: green"></i> <span>WHO WE ARE</span></a></li>
            <li class="WhyChooseUsPage"><a href="<?=base_url()?>index.php/Admin/Why_Choose_Us"><i class="fa fa-circle-o" style="color: green"></i> <span>WHY CHOOSE US</span></a></li>
            <li class="AchievementsPage"><a href="<?=base_url()?>index.php/Admin/Achievements"><i class="fa fa-circle-o" style="color: green"></i> <span>ACHIEVEMENTS</span></a></li>
            <li class="OurPartnersPage"><a href="<?=base_url()?>index.php/Admin/Our_Partners"><i class="fa fa-circle-o" style="color: green"></i> <span>OUR PARTNERS</span></a></li>
          </ul>
        </li>

        <li class="treeview EventsPage">
          <a href="#">
            <i class="fa fa-calendar"></i><span> EVENTS </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="EventPage"><a href="<?=base_url()?>index.php/Admin/Events"><i class="fa fa-circle-o" style="color: orange"></i> <span> Events </span></a></li>
          </ul>
        </li>

        <li class="treeview ResourcesPage">
          <a href="#">
            <i class="fa fa-book"></i><span> RESOURCES </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="SupportPage"><a href="<?=base_url()?>index.php/Admin/Support"><i class="fa fa-circle-o text-red"></i> <span> SUPPORT </span></a></li>
            <li class="CaseStudiesPage"><a href="<?=base_url()?>index.php/Admin/Case_Studies"><i class="fa fa-circle-o text-red"></i> <span> CASE STUDIES </span></a></li>
            <li class="ClientsPage"><a href="<?=base_url()?>index.php/Admin/Clients"><i class="fa fa-circle-o text-red"></i> <span> CLIENTS </span></a></li>
          </ul>
        </li>


        <li class="treeview RequestsPage">
          <a href="#">
            <i class="fa fa-th"></i><span> REQUESTS </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="SupportEnqueriesPage"><a href="<?=base_url()?>index.php/Admin/SupportEnqueries"><i class="fa fa-circle-o text-aqua"></i> <span> SUPPORT ENQUERIES </span></a></li>
            <li class="QuoteRequestsPage"><a href="<?=base_url()?>index.php/Admin/QuoteRequests"><i class="fa fa-circle-o text-aqua"></i> <span> QUOTATION REQUESTS </span></a></li>
            <li class="ContactInterestsPage"><a href="<?=base_url()?>index.php/Admin/ContactInterests"><i class="fa fa-circle-o text-aqua"></i> <span> CONTACT INTREST REQUESTS </span></a></li>
          </ul>
        </li>

        <li class="treeview OthersPage">
          <a href="#">
            <i class="fa fa-laptop"></i><span> OTHERS </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="SliderPage"><a href="<?=base_url()?>index.php/Admin/Slider"><i class="fa fa-circle-o text-aqua"></i> <span> SLIDERS </span></a></li>
          </ul>
        </li>


      </ul>
    </section>
  </aside>