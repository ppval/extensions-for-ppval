<?php
/**
 * Edit-post page options.
 *
 * This file is responsible for generating metaboxes or any other option in public posts.
 *
 * @package extensions-for-ppval
 * @since 0.1 (when the file was introduced)
 */



/**
* Disabling edit permalinks to non administrators
*
* @since 0.1
*
*/

/*
https://wordpress.stackexchange.com/questions/329457/set-post-title-to-read-only-and-disable-permalink-slug-editor-in-gutenberg
https://wordpress.stackexchange.com/questions/211300/remove-permalink-from-admin-edit-post
https://wordpress.stackexchange.com/questions/110427/remove-post-title-input-from-edit-page
https://wordpress.stackexchange.com/questions/91037/disable-permalink-on-custom-post-type

*/


add_action('admin_init', 'wpse_110427_hide_title');
function hide_permalink() {
  return '';
}
$user_id = $user_data->ID;
function wpse_110427_hide_title() {
if (! current_user_can( 'manage_options' ) ) //&& ! $user_id === 338
add_filter( 'get_sample_permalink_html', 'hide_permalink' );

}
