<?php
/**
 * Multisite header code goes here
 * You can add code to the <head> section of your website like this:
 * @internal
 *
 * @since 0.1
 *
 */

 add_action( 'wp_head', function () {?>


 <?php
 /*
  * ADDED: Google Analytics code
  *
  *	@since 0.1
  * rel="preconnect"  crossorigin

 */
  ?>
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script defer="defer" async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXXXX-X" ></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-XXXXXXXXX-X');
</script>
<!-- End Google Analytics -->

<?php
/*
 * ADDED: Google Tag Manage code
 *
 *	@since 0.1
*/



/*
 * MODIFICATION Google adsense
 *
 *	@since 0.1
*/

// if (!wp_is_mobile() && !is_user_logged_in() && is_singular('chapter')): ?>
<!-- Google adsense -->
  <!-- <script  defer="defer" data-ad-client="ca-pub-XXXXXXXXXX" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
<!-- End Google adsenser -->

<?php
// endif;




 /*
  *      ADDED: Google Ad Manager code
  *
  *			@SINCE v
 */



 /*
  * MODIFICATION Cookie Consent (At header.php and foote.php)
  *
  * @since 0.1
  * @link https://www.osano.com/cookieconsent/download/
  * https://empresiona.com/blog/como-crear-aviso-cookies-wordpress-sin-plugin/
  * https://newblogr.com/how-do-i-add-cookie-notifications-to-wordpress/
 */
 ?>
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
 <!-- End Cookie Consent -->


  <?php
 /*
  * MODIFICATION Google funding choices
  *
  * @since 0.1
  * @link https://fundingchoices.google.com/p/6487723abb5fbc6c/

 */
 ?>

<?php } );
