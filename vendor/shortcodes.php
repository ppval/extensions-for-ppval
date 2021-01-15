<!--  -->
<?php
/**
 * Shorcodes
 *
 * @package shortcodes
 * @since 0.1
 *
 */

 /**
  * ADDED: Feedback Image
  *
  * @since 0.1
  * @link  https://ppval.org/feedback/
  *
  */

function ppval_feedback_image() {
	if ( is_singular('chapter')) { ?>
		<div id="info" class="info">
			<h2 class="textbox__title">Feedback</h2>
			<a onclick="gtag('event', 'content_click', {'event_category': 'information', 'event_label': 'feedback'});" href="https://ppval.org/feedback/" aria-label="Feedback.">
			<!-- width="96" height="96" -->
			<img class="feedbackimage" target="_blank" rel="noopener noreferrer" class="ppval-feedback-image center-feedback size-full alignleft" src="https://abc.png" alt="ppval feedback." /></a>
		</div>
	<?php }
	}
add_shortcode('feedbackimage','ppval_feedback_image');
?>
<!-- END -->
