<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
	    <?php the_post_thumbnail(array(150,150), array('class' => 'alignright')); ?>
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      <div class="box-colored">
        <div class="share-buttons">
          <div class="row-fluid">
            <div class="span12">
              <div id="socialshareprivacy"></div>
            </div>
          </div>
          <div class="row-fluid">
            <div class="span12 box-select">
          <?php include 'yourls-signature.php'; ?>
          You can use this short URL for sharing: <input type="text" value="<?php echo $shortlink; ?>" onClick='selectText(this);'>

        </div>
            </div>
          </div>
      </div>
   	    <div class="entry-categories-tags">
           <p>Posted in: <?php the_category(','); ?>  <?php the_tags('Tagged with: ',', ',''); ?></p>
        </div>
    <?php related_posts(); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
