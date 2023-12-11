<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>PetShop! | </title>

  <!-- Bootstrap -->
  <link href=<?php echo base_url ('gentella/vendors/bootstrap/dist/css/bootstrap.min.css');?> rel="stylesheet">
  <!-- Font Awesome -->
  <link href=<?php echo base_url ('gentella/vendors/font-awesome/css/font-awesome.min.css');?> rel="stylesheet">
  <!-- NProgress -->
  <link href=<?php echo base_url ('gentella/vendors/nprogress/nprogress.css');?> rel="stylesheet">
  <!-- Animate.css -->
  <link href=<?php echo base_url ('gentella/vendors/animate.css/animate.min.css');?> rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href=<?php echo base_url ('gentella/build/css/custom.min.css');?> rel="stylesheet">
</head>

<body class="login">
  <div>
    <form action="<?php echo base_url('auth');?>" method="post">
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <h1>Login Form</h1>

            <!-- Display error message if login fails -->
            <!-- Display error message if login fails -->
            <?php if($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $this->session->flashdata('error'); ?>
            </div>
            <?php } ?>

            <div>
              <input type="text" name="nama" class="form-control" placeholder="Username" required />
            </div>
            <div>
              <input type="password" name="password" class="form-control" placeholder="Password" required />
            </div>
            <div>
              <button type="submit" class="btn btn-default submit">Log in</button>

            </div>

            <div class="clearfix"></div>

            <div class="separator">

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> !</h1>
                <p>©2016 All Rights Reserved. Privacy and Terms</p>
              </div>
            </div>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <!-- Registration form content remains unchanged -->
          </section>
        </div>
      </div>
    </form>
  </div>
</body>

</html>