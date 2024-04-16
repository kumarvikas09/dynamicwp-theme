<?php

/**
 * Add the metabox.
 */

function my_url_add_metabox() {
   add_meta_box(
		'metaUrlBox',           // The HTML id attribute for the metabox section
		'My URL Metabox Title',     // The title of your metabox section
		'my_url_metabox_callback',  // The metabox callback function (below)
		'metaboxtesting'                  // Your custom post type slug
	);
}
add_action( 'add_meta_boxes', 'my_url_add_metabox' );

/**
 * Print the metabox content.
 */

function my_url_metabox_callback( $post ) {

   // Create a nonce field.
	wp_nonce_field( 'my_url_metabox', 'my_url_metabox_nonce' );

	// Retrieve a previously saved value, if available.
	$url = get_post_meta( $post->ID, 'metaUrlBox', true );

   // Create the metabox field mark-up.
   ?>
      <p>
         <label>My URL </label><input style="width: 20em;" type="text" name="my_url" value="<?php echo esc_url( $url ); ?>" size="30" class="regular-text" />
      </p>
   <?php
}

/**
 * Save the metabox.
 */

function my_url_save_metabox( $post_id ) {
   // Check if our nonce is set.
   if ( ! isset( $_POST['my_url_metabox_nonce'] ) ) {
      return;
   }

   $nonce = $_POST['my_url_metabox_nonce'];

   // Verify that the nonce is valid.
   if ( ! wp_verify_nonce( $nonce, 'my_url_metabox' ) ) {
      return;
   }

   // If this is an autosave, our form has not been submitted, so we don't want to do anything.
   if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
      return;
   }

   // Check the user's permissions.
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
      return;
   }

   // Check for and sanitize user input.
   if ( ! isset( $_POST['my_url'] ) ) {
      return;
   }

   $url = esc_url_raw( $_POST['my_url'] );

   // Update the meta fields in the database, or clean up after ourselves.
   if ( empty( $url ) ) {
      delete_post_meta( $post_id, 'metaUrlBox' );
   } else {
      update_post_meta( $post_id, 'metaUrlBox', $url );
   }
}
add_action( 'save_post', 'my_url_save_metabox' );