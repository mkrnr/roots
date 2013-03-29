<footer class="content-info" role="contentinfo">
  <div class="footer">
    <div class="container">
      <?php dynamic_sidebar('sidebar-footer'); ?>
      &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
      <div class="theme-info">
        Powered by <a href="http://wordpress.org/">WordPress</a>.
        Theme based on <a href="http://www.rootstheme.com/">Roots</a>.
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
