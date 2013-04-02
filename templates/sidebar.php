<?php if (is_category()) { ?>
  <div class="sidebar-inner box-colored sidebar-info">
    <h3>Content</h3>
    <?php echo category_description( $category_id ); ?>
  </div>
<? } ?>
<div class="sidebar-inner box-colored">
  <?php dynamic_sidebar('sidebar-primary'); ?>
</div>
