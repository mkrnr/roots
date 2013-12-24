<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-7">
        <div class="header-images">
          <a href=<?php echo site_url(); ?>><img class="img-responsive" src="<?php echo home_url(); ?>/assets/img/banner.png" alt="Insert image here..."></a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-5">
        <div class="header-images right">
          <i class="facebook x48 img-rounded" title="Facebook"><a  href="http://mkrnr.de/facebook"><img src="<?php echo home_url(); ?>/assets/img/facebook-48.png" alt="icon"></a></i>
	        <i class="twitter x48 img-rounded" title="Twitter"><a href="http://mkrnr.de/twitter"><img src="<?php echo home_url(); ?>/assets/img/twitter-48.png" alt="icon"></a></i>
	        <i class="googleplus x48 img-rounded" title="Google+"><a href="http://mkrnr.de/googleplus"><img src="<?php echo home_url(); ?>/assets/img/googleplus-48.png" alt="icon"></a></i>
          <i class="rss x48 img-rounded" title="RSS"><a href="http://feeds.feedburner.com/mkoerner"><img src="<?php echo home_url(); ?>/assets/img/rss-48.png" alt="icon"></a></i>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
            <input type="text" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" class="navbar-search form-control" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
            <label class="hide"><?php _e('Search for:', 'roots'); ?></label>
        </div>
        <button type="submit" class="btn btn-default"><?php _e('Go!', 'roots'); ?></button>
      </form>


<!--      <form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>/" class="navbar-search-form right">
        <table border="0">
        <tr>
        <td>
          <input type="search" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" class="navbar-search search-field form-control" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
          <label class="hide"><?php _e('Search for:', 'roots'); ?></label>
</td>
<td>
          <button type="submit" class="btn btn-default"><?php _e('Go!', 'roots'); ?></button>
</td>

</tr>
</table>
      </form>-->

    </nav>
  </div>
</header>
          <!--<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>-->
