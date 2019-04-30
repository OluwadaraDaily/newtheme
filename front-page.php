
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/blog/">

    <title>
      <?php bloginfo('name'); ?> | 
      <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?> /css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head(); ?>

    <style type="text/css">
    	.showcase h1{
    		background: url(<?php echo get_theme_mod( 'showcase_image', get_bloginfo('template_url') . '/image/showcase.jpg' ); ?>) no-repeat center center;
    	}
    </style>
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <div class="collapse navbar-collapse">
            <?php
                wp_nav_menu( array(
                  'menu'              => 'primary',   
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'primary-menu',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
            ?>
        </div>
        </nav>
      </div>
    </div>

    <section class="showcase">
      <div class="container">
        <h1> 
        	<?php get_theme_mod( 'showcase_heading', 'Custom Bootstrap Wordpress Theme' ); ?> 
        </h1>
        
        <p> 
        	<?php get_theme_mod( 'showcase_text', 'Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.' ); ?> 
    	</p>

        <a href="<?php get_theme_mod( 'btn_url', 'http://oluwadaradaily.com' ); ?>" class="btn 	btn-primary btn-lg"> 
        	<?php get_theme_mod( 'btn_text', 'Read More' ); ?> 
    	</a>
      </div>
    </section>

    <section class="boxes">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
				<?php if(is_active_sidebar( 'box1' )) : ?>
					<?php dynamic_sidebar('box1'); ?>
				<?php endif; ?>
          </div>

          <div class="col-md-4">
            	<?php if(is_active_sidebar( 'box2' )) : ?>
					<?php dynamic_sidebar('box2'); ?>
				<?php endif; ?>

          <div class="col-md-4">
            	<?php if(is_active_sidebar( 'box3' )) : ?>
					<?php dynamic_sidebar('box3'); ?>
				<?php endif; ?>
          </div>          
        </div>        
      </div>      
    </section>
<footer class="blog-footer">
      <p>&copy; <?php echo date('Y'); ?> - <?php bloginfo( 'name' ); ?></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
    <?php wp_footer(); ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?> /js/bootstrap.js"></script>
  </body>
</html>