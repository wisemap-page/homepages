<?php 
$redirect = isset($this->settings_redirect) ? $this->settings_redirect : NULL;
$settings = $this->get_settings($redirect); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8">
    <title>wisemap</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/css/theme.css" />
  </head>
  <body >
    <div class="navbar navbar-fixed-top header">
      <div class="col-md-12">
        <div class="navbar-header">
          <a href="<?php echo $this->route_url(NULL, 'home'); ?>" class="navbar-brand">wisemap</a>
        </div>
      </div> 
    </div>
    <!--main-->
    <div class="container" id="main">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="well"> 
            <form class="form-horizontal" role="form" method="post">
              <h4>Setup</h4>
              <?php
              $settings = $this->get_settings(FALSE);
              if($settings === NULL) {
              ?>
              <p>Congratulations! It appears the webserver is configured correctly to handle requests. We are almost done setting up and just need a few more details about your blog. Thank you for setting up wisemap as your blog engine.</p>
              <p class="error"><?php echo $model['error']; ?></p>
              <div class="form-group" style="padding:14px;">
                <label for="blog_name">Blog Name</label>
                <input class="form-control" placeholder="Blog Name" type="text" name="blog_name" required maxlength="63" value="<?php echo $model['blog_name']; ?>" />
                <label for="display_name">Your Name</label>
                <input class="form-control" placeholder="Your Name" type="text" name="display_name" required maxlength="63" value="<?php echo $model['display_name']; ?>" />
                <label for="email">Email</label>
                <input class="form-control" placeholder="Email" type="email" name="email" required maxlength="250" value="<?php echo $model['email']; ?>" />
                <label for="password">Password</label>
                <input class="form-control" placeholder="Password" type="password" name="password" required />
              </div>
              <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="submit" name="submit">Complete Setup</button></span>
              <?php } else { ?>
              <p>wisemap has already been set up. If you need to administer the site, please visit the login link below. If you need to setup the site again, you will need to delete the records in the <code>setting</code> database table to allow the setup to continue.</p>
              <?php } ?>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <br>
        <div class="clearfix"></div>
        <hr>
          <div class="col-md-12 text-center"><p>
            Powered by <a href="https://github.com/wisemap/wisemap" target="_blank">wisemap</a> 
            | <a href="<?php echo $this->route_url(NULL, 'admin'); ?>">Admin</a>
            <?php if ($session !== NULL ) { ?>| <a href="<?php echo $this->route_url('logoff', 'admin'); ?>">Logoff</a><?php }?>
          </div>
        <hr>
      </div><!--row--> 
    </div><!--/main-->
    <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type='text/javascript' src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
    <!-- JavaScript jQuery code from Bootply.com editor -->
    <script type='text/javascript'>
      $(document).ready(function() {
        /* toggle layout */
        $('#btnToggle').click(function(){
          if ($(this).hasClass('on')) {
            $('#main .col-md-6').addClass('col-md-4').removeClass('col-md-6');
            $(this).removeClass('on');
          }
          else {
            $('#main .col-md-4').addClass('col-md-6').removeClass('col-md-4');
            $(this).addClass('on');
          }
        });
      });
    </script>
  </body>
</html>
