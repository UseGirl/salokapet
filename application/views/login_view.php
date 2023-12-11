<!-- application/views/login_view.php -->
<!DOCTYPE html>
<html lang="en">
  <!-- ... (your existing HTML code) ... -->
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <form action="<?php echo site_url('logincontroller/process_login');?>" method="post">
        <div class="login_wrapper">
          <div class="animate form login_form">
            <section class="login_content">
              <h1>WOW</h1>
            </section>
          </div>
          <!-- ... (your existing registration form HTML code) ... -->
        </div>
      </form>
    </div>
  </body>
</html>
