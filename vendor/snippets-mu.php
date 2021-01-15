<?php
/**
 * Multisite snippets
 * @internal
 *
 * @since 0.1
 *
 */


  /**
   * Function for updating company logo on sign in page
   *
   * @since 0.1
   */

   function ppval_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
          background-image: url(<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/pp-home.png'; ?>) !important;
		height:65px;
		width:320px;
    background-size: 160px 160px;
		background-repeat: no-repeat;
        	padding-bottom: 80px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'ppval_login_logo' );
  /** End of functionality*/


  /**
   * Function for updating web url on sign in page
   *
   * @since 0.1
   */

  function ppval_login_logo_url() {
      return home_url();
  }
  add_filter( 'login_headerurl', 'ppval_login_logo_url' );

  function my_login_logo_url_title() {
      return 'Partido Popular de la Provincia de Valencia';
  }
  add_filter( 'login_headertitle', 'ppval_login_logo_url_title' );
  /** End of functionality*/


/**
 * PopUp
 *
 * @since 1.5
 */

// https://github.com/bizbudding/wampum-popups
// if (!wp_is_mobile() && is_singular('chapter')) {
//
// add_action( 'wampum_popups', 'prefix_do_wampum_popup' );
// function prefix_do_wampum_popup() {
//
//  // Bail if not a single post
//    return;
//  }
//
//  $content = '
//  <p style="text-align: center;"><img src="https://i.imgur.com/ww8rmqH.jpg" alt="" width="180" height="110" /></p>
//  <p style="text-align: center;"><strong>To move the content,</strong></p>
//  <p style="text-align: center;"><strong>use the arrow keys in your keyboard.</strong></p>
//  ';
//
//  $args = array(
//    'type'	=> 'timed',
//    'style'=> 'modal',
//    'time'	=> '30000',
//  );
//  wampum_popup( $content, $args );
//
// }
