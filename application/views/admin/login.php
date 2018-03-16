<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('admin/header_links.php')  ?>
</head>
<style> 
.btn-primary{
  background-color: #5f5f62;
  border-color: #ed3237;
  border-width: 2px !important;
}
.btn-primary:hover{
  background-color: #555555;
  border-color: #ed3237;
  border-width: 2px;
}
</style>
<body class="hold-transition login-page">

      <div class="alert alert-warning alert-dismissible erorr" style="position: fixed;z-index: 100;right: 5px;top: 55px">
              <button type="button" class="close erorr_close"  style="position: absolute;right: 0px">&times;</button>
              <h4 class="erorr_text"></h4> 
      </div>

<div class="login-box" style="position: fixed;right: 0px;left: 0px;width: 400px;">
  <div class="login-logo">
    <img src="<?=base_url()?>assets/images/logo.png" style="max-width: 300px;">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form onsubmit="return validateMyForm_1();" id="form_1" action="<?=base_url()?>index.php/Login" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" >
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>



  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<?php $this->load->view('admin/footer_links.php')  ?>
<script>

$(".erorr_close").click(function(){
      $('.erorr').hide();
  });

  
 $('.erorr').hide();

    function validateMyForm_1(){

       if($('#form_1').find('#username').val() == ""){
              $('.erorr').show();
              $('.erorr_text').text("Enter User Name");
              return false;
       }else if($('#form_1').find('#password').val() == "") { 
              $('.erorr').show();
              $('.erorr_text').text("Enter Password");
              return false;               
      }else{
            $('.erorr').hide();
            return true;
      }
    }
</script>

</body>
</html>
