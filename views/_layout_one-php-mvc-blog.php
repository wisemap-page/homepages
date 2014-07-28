<?php 
    $settings = $this->get_settings(); 
    $session =  $this->get_session();
?>
<!DOCTYPE html>
<html lang="<?php echo $this->request->lang; ?>">
    <head>
        <title><?php echo $this->meta->title; ?></title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="<?php echo $this->meta->description; ?>">
        <meta name="keywords" content="<?php echo $this->meta->keywords; ?>">
        <meta name="author" content="<?php echo $this->meta->author; ?>">
        <link rel="image_src" href="<?php echo $this->meta->image; ?>"/>
        <meta property="og:title" content="<?php echo $this->meta->title; ?>" />
        <meta property="og:image" content="<?php echo $this->meta->image; ?>" />
        <meta name="twitter:title" content="<?php echo $this->meta->title; ?>">
        <meta name="twitter:image" content="<?php echo $this->meta->image; ?>">        
        <link href="http<?php if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') { echo 's'; }; ?>://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet" type="text/css">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/theme.css" />
        <?php $this->render_styles(); ?>
        <?php $this->render_scripts(); ?>
    </head>
    <body>
        <header>
            <nav>
                <a href="<?php echo $this->route_url(NULL, 'home'); ?>"><?php echo @$settings->blog_name; ?></a>
            </nav>
        </header>
        
        <div class="content">
            <?php $this->render_body(); ?>
        </div>
        
        <footer>
            powered by <a href="https://github.com/wisemap/wisemap" target="_blank">wisemap</a> 
            | <a href="<?php echo $this->route_url(NULL, 'admin'); ?>">admin</a>
            <?php if ($session !== NULL ) { ?>| <a href="<?php echo $this->route_url('logoff', 'admin'); ?>">logoff</a><?php }?>
        </footer>
    </body>
</html>
