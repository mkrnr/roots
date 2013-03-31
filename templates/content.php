<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-content">
	  <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>
  </div>
  <footer>
    <p>Posted in: <?php the_category(','); ?></p>
    <?php the_tags('Tagged with: ',', ',''); ?>
  </footer>
</article>
