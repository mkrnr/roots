<header class="banner navbar navbar-static-top" role="banner">
  <div class="container">
      <div class="row">

        <div class="span8">
<div class="header-images">
<a href=<?php echo site_url(); ?>><img src="<?php get_theme_root(); ?>/assets/img/banner.png" alt="Insert image here..."></a>
        </div>
        </div>

        <div class="span4">

        <div class="header-images right">

                    <i class="facebook x48" title="Facebook"><a  href="http://mkrnr.de/facebook"><img src="<?php get_theme_root(); ?>/assets/img/facebook-48.png" alt="icon"></a></i>
	                  <i class="googleplus x48" title="Google+"><a href="http://mkrnr.de/googleplus"><img src="<?php get_theme_root(); ?>/assets/img/googleplus-48.png" alt="icon"></a></i>
	                  <i class="twitter x48" title="Twitter"><a href="http://mkrnr.de/twitter"><img src="<?php get_theme_root(); ?>/assets/img/twitter-48.png" alt="icon"></a></i>
                    <i class="rss x48" title="RSS"><a href="http://feeds.feedburner.com/mkoerner"><img src="<?php get_theme_root(); ?>/assets/img/rss-48.png" alt="icon"></a></i>
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
