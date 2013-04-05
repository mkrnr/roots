<header class="banner navbar navbar-static-top" role="banner">
  <div class="container">
      <div class="row-fluid">

        <div class="span6">
<div class="header-images">
<a href=<?php echo site_url(); ?>><img src="<?php get_theme_root(); ?>/assets/img/banner.png" alt="Insert image here..."></a>
        </div>
        </div>

        <div class="social-icons span6">

        <div class="header-images">
      <div class="row-fluid">
                    <i class="email x32 right" title="E-Mail"><a  href="mailto:info@mkoerner.de"><img src="<?php get_theme_root(); ?>/assets/img/email-32.png" alt="icon"></a></i>
                    <i class="pinterest x32 right" title="Pinterest"><a  href="http://mkrnr.de/pinterest"><img src="<?php get_theme_root(); ?>/assets/img/pinterest-32.png" alt="icon"></a></i>
                    <i class="github x32 right" title="GitHub"><a  href="http://mkrnr.de/github"><img src="<?php get_theme_root(); ?>/assets/img/github-32.png" alt="icon"></a></i>
                    <i class="stackoverflow x32 right" title="Stack Overflow"><a  href="http://mkrnr.de/stackoverflow"><img src="<?php get_theme_root(); ?>/assets/img/stackoverflow-32.png" alt="icon"></a></i>
                    <i class="youtube x32 right" title="YouTube"><a  href="http://mkrnr.de/youtube"><img src="<?php get_theme_root(); ?>/assets/img/youtube-32.png" alt="icon"></a></i>
                    <i class="delicious x32 right" title="Delicious"><a  href="http://mkrnr.de/delicious"><img src="<?php get_theme_root(); ?>/assets/img/delicious-32.png" alt="icon"></a></i>
                    <i class="reddit x32 right" title="Reddit"><a  href="http://mkrnr.de/reddit"><img src="<?php get_theme_root(); ?>/assets/img/reddit-32.png" alt="icon"></a></i>
                    <i class="linkedin x32 right" title="LinkedIn"><a  href="http://mkrnr.de/linkedin"><img src="<?php get_theme_root(); ?>/assets/img/linkedin-32.png" alt="icon"></a></i>
</div>
      <div class="row-fluid">
                    <i class="rss x64 right" title="RSS"><a href="<?php get_home_url(); ?>/feed"><img src="<?php get_theme_root(); ?>/assets/img/rss-64.png" alt="icon"></a></i>
	                  <i class="twitter x64 right" title="Twitter"><a href="http://mkrnr.de/twitter"><img src="<?php get_theme_root(); ?>/assets/img/twitter-64.png" alt="icon"></a></i>
	                  <i class="googleplus x64 right" title="Google+"><a href="http://mkrnr.de/googleplus"><img src="<?php get_theme_root(); ?>/assets/img/googleplus-64.png" alt="icon"></a></i>
                    <i class="facebook x64 right" title="Facebook"><a  href="http://mkrnr.de/facebook"><img src="<?php get_theme_root(); ?>/assets/img/facebook-64.png" alt="icon"></a></i>
</div>
        </div>
</div>
      </div>

  </div>
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <nav class="nav-main nav-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
        <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/" class="navbar-search pull-right">
          <input type="text" name="s" id="s" class="search-query" placeholder="Search mkoerner.de">
        </form>
      </nav>
    </div>
  </div>
</header>
