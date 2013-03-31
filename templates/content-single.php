<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
   	  <div class="entry-categories-tags">
        <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>



        <?php
        // yourls request for a short url

        // auth parameters
        $timestamp = time();
        $signature = md5( $timestamp . '50160e660d' );

        // query parameters
        $format = 'simple';				// output format: 'json', 'xml' or 'simple'
        $api_url = 'http://localhost/yourls/yourls-api.php';

        // request string
        $request = $api_url."?timestamp=".$timestamp."&signature=".$signature."&action=shorturl&url=".$_SERVER['REQUEST_URI']."&format=".$format;

        // query
        $result= file_get_contents($request);
        echo $result;
        ?>



      <p>Posted in: <?php the_category(','); ?></p>
      <?php the_tags('Tagged with: ',', ',''); ?>
      </div>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
