<?php if (is_category()) { ?>
  <div class="sidebar-inner box-colored sidebar-info img-rounded">
    <h3>Content</h3>
    <?php echo category_description( $category_id ); ?>
  </div>
<?php } ?>
<div class="sidebar-inner box-colored img-rounded">
  <?php dynamic_sidebar('sidebar-primary'); ?>
</div>
