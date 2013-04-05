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
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      <?php
        // yourls request for a short url

        // auth parameters
        // yourls-signature.php needs to set those parameters:
        // $timestamp = time();
        // $signature = md5( $timestamp . 'your_signature_code (see Tools section in yourls)' );
        // $api_url = 'http://<your yourls-domain>/yourls-api.php';
        include 'yourls-signature.php';

        // query parameters
        $format = 'simple';				// output format: 'json', 'xml' or 'simple'

        // request string
        $request = $api_url."?timestamp=".$timestamp."&signature=".$signature."&action=shorturl&url=".get_permalink()."&format=".$format;

        // query
        $shortlink= file_get_contents($request);
      ?>
      <div class="box-colored">
        <div class="share-buttons">
          <div class="fb-like" data-href=<?php echo $shortlink; ?> data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-font="arial"></div>
          <div class="g-plusone" data-href=<?php echo $shortlink; ?> data-size="medium"></div>
          <a href="https://twitter.com/share" class="twitter-share-button" data-url=<?php echo $shortlink; ?> data-text= '<?php echo get_the_title($ID); ?> <?php echo $shortlink; ?>' data-via="mkoerner_de">Tweet</a>
          <script type="IN/Share" data-url=<?php echo $shortlink; ?> data-counter="right"></script>
          <p>Please use this short URL for sharing: <?php echo $shortlink; ?>
        </div>
      </div>
   	    <div class="entry-categories-tags">
           <p>Posted in: <?php the_category(','); ?>  <?php the_tags('Tagged with: ',', ',''); ?></p>
        </div>
  </footer>
</article>
