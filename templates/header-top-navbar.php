<header class="banner navbar navbar-static-top" role="banner">
  <div class="container">
  	<div class="header-images">
      <a href="http://localhost/wordpress/"><img src="/wordpress/assets/img/banner.png" alt="Insert image here..."></a>
	    <div class="social-icons">
	      <i class="facebook" title="Facebook"><a  href="http://facebook.com/koerner.martin"><img src="/wordpress/assets/img/facebook-48.png" alt="Insert image here..."></a></i>
	    	<i class="googleplus" title="Google+"><a href="http://plus.google.com/"><img src="/wordpress/assets/img/googleplus-48.png" alt="Insert image here..."></a></i>
	      <i class="twitter" title="Twitter"><a href="http://twitter.com"><img src="/wordpress/assets/img/twitter-48.png" alt="Insert image here..."></a></i>
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
