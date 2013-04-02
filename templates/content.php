<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-content">
	  <?php the_post_thumbnail(array(150,150), array('class' => 'alignright')); ?>
    <?php the_content(); ?>
  </div>
  <footer>
    <div class="entry-categories-tags">
      <p>Posted in: <?php the_category(','); ?>  <?php the_tags('Tagged with: ',', ',''); ?></p>
    </div>
  </footer>
</article>
