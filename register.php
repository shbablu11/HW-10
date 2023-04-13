<?php
session_start();
include "./inc/login_header.php"

?>

<form action="./controller/addUser.php" method="POST" class="login100-form validate-form">
<span class="login100-form-title">
Member Register
</span>

<div class="wrap-input100 validate-input">
    <input value="<?= isset($_SESSION['old']['name']) ? $_SESSION['old']['name'] : '' ?>" class="input100" type="text" name="name" placeholder="Your full name">
    <?php
      if(isset($_SESSION['form_error']['name_error'])){
      ?>
     <span><?= $_SESSION['form_error']['name_error']?></span> 

      <?php
      }

      ?>
    <span class="focus-input100"></span>
    <span class="symbol-input100">
        <i class="fa fa-envelope" aria-hidden="true"></i>
    </span>
    
</div>

<div class="wrap-input100 validate-input">
    <input value="<?= isset($_SESSION['old']['phone']) ? $_SESSION['old']['phone'] : '' ?>" class="input100" type="number" name="phone" placeholder="Phone number">
    <?php
      if(isset($_SESSION['form_error']['phone_error'])){ 
      ?>
     <span><?= $_SESSION['form_error']['phone_error']?></span> 

      <?php
      }

      ?>
    <span class="focus-input100"></span>
    <span class="symbol-input100">
        <i class="fa fa-envelope" aria-hidden="true"></i>
    </span>
</div>

<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
    <input value="<?= isset($_SESSION['old']['email']) ? $_SESSION['old']['email'] : '' ?>" class="input100" type="email" name="email" placeholder="Email address">
    <?php
      if(isset($_SESSION['form_error']['email_error'])){ 
      ?>
     <span><?= $_SESSION['form_error']['email_error']?></span> 

      <?php
      }

      ?>
    <span class="focus-input100"></span>
    <span class="symbol-input100">
        <i class="fa fa-envelope" aria-hidden="true"></i>
    </span>
</div>

<div class="wrap-input100 validate-input" data-validate="Password is required">
    <input value="<?= isset($_SESSION['old']['pass']) ? $_SESSION['old']['pass'] : '' ?>" class="input100" type="password" name="pass" placeholder="Strong Password">
    <?php
      if(isset($_SESSION['form_error']['pass_error'])){ 
      ?>
     <span><?= $_SESSION['form_error']['pass_error']?></span> 

      <?php
      }

      ?>
    <span class="focus-input100"></span>
    <span class="symbol-input100">
        <i class="fa fa-lock" aria-hidden="true"></i>
    </span>
</div>
<div class="wrap-input100 validate-input" data-validate="Password is required">
    <input value="<?= isset($_SESSION['old']['con_pass']) ? $_SESSION['old']['con_pass'] : '' ?>" class="input100" type="password" name="con_pass" placeholder="Confirm Password">
    <?php
      if(isset($_SESSION['form_error']['con_pass_error'])){ 
      ?>
     <span><?= $_SESSION['form_error']['con_pass_error']?></span> 

      <?php
      }

      ?>
    <span class="focus-input100"></span>
    <span class="symbol-input100">
        <i class="fa fa-lock" aria-hidden="true"></i>
    </span>
</div>
<div class="container-login100-form-btn">
    <button class="login100-form-btn">
    Sign Up
    </button>

<div class="text-center p-t-25">
<a class="txt2" href="./login.php">
Have an Account? Login here
<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
</a>
</div>
</form>
</div>
</div>
</div>
<?php
session_unset();
include "./inc/login_footer.php"

?>