<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-40234061-1', 'mkoerner.de');
    ga('send', 'pageview');

  </script>
  <script language="JavaScript">
    function selectText(textField)
    {
      textField.focus();
      textField.select();
    }
  </script>
<script type="text/javascript" src="<?php echo home_url(); ?>/assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo home_url(); ?>/assets/js/jquery.socialshareprivacy.js"></script>
  <?php include 'yourls-signature.php'; ?>
  <script type="text/javascript">
  jQuery(document).ready(function($){
    if($('#socialshareprivacy').length > 0){
      $('#socialshareprivacy').socialSharePrivacy({
        services : {
          facebook : {
            'dummy_img' : "<?php echo home_url(); ?>/assets/css/images/dummy_facebook.png",
            'action' : 'like'
          },
          gplus : {
            'dummy_img' : "<?php echo home_url(); ?>/assets/css/images/dummy_gplus.png"
          },
          twitter : {
            'dummy_img' : "<?php echo home_url(); ?>/assets/css/images/dummy_twitter.png",
            'tweet_text' : "<?php echo get_the_title($ID); ?>"
          }
        },
        'css_path' : "<?php echo home_url(); ?>/assets/css/socialshareprivacy.css",
        'uri' : "<?php echo get_permalink(); ?>",
        'shorturi' : "<?php echo $shortlink; ?>"
      });
    }
  });
  </script>

  <script type="text/javascript" src="<?php echo home_url(); ?>/assets/js/swipe/swipe.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      ob = new Swipe(document.getElementById('slider'), {
        startSlide: 0,
        speed: 400,
        auto: 3000,
        continuous: true,
        disableScroll: false,
        stopPropagation: false,
        callback: function(index, elem) {},
        transitionEnd: function(index, elem) {}
      });

      $('.next').on('click', ob.next);
      $('.prev').on('click', ob.prev);
    });
  </script>
</head>
