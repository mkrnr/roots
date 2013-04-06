<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
  <script type="text/javascript" src="<?php get_theme_root(); ?>/assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php get_theme_root(); ?>/assets/js/jquery.socialshareprivacy.js"></script>
  <?php include 'yourls-signature.php'; ?>
  <script type="text/javascript">
  jQuery(document).ready(function($){
    if($('#socialshareprivacy').length > 0){
      $('#socialshareprivacy').socialSharePrivacy({
        services : {
          facebook : {
            'dummy_img' : "<?php get_theme_root(); ?>/assets/css/images/dummy_facebook.png",
            'action' : 'like'
          },
          gplus : {
            'dummy_img' : "<?php get_theme_root(); ?>/assets/css/images/dummy_gplus.png"
          },
          twitter : {
            'dummy_img' : "<?php get_theme_root(); ?>/assets/css/images/dummy_twitter.png",
            'tweet_text' : "<?php echo get_the_title($ID); ?>"
          }
        },
        'css_path' : "<?php get_theme_root(); ?>/assets/css/socialshareprivacy.css",
        'uri' : "<?php echo get_permalink(); ?>",
        'shorturi' : "<?php echo $shortlink; ?>"
      });
    }
  });
  </script>
</head>
