<?php
	function dynamicwp_gallery_function($mv_atts){
        $mv_default = array(
            'id' => '305',
        );
        $mv_page_id = shortcode_atts($mv_default, $mv_atts);
        
?>  

<style>
    #ul-li>li {
        display: inline-block;
        float: left;
        margin: 5px;
        max-width: 250px;
    }    

    #ul-li>li img {
        max-width: 100%;
    }

</style>

   


  <ul id="ul-li" class="d-flex flex-wrap justify-content-center pl-0 float-left m-0">                
  <?php
  //Get the images ids from the post_metadata $post->ID
  $mv_images = acf_photo_gallery('dynamicwp_gallery', $mv_page_id['id']);
  //Check if return array has anything in it
  if( count($mv_images) ):
      //Cool, we got some data so now let's loop over it
      foreach($mv_images as $mv_image):
          $id = $mv_image['id']; // The attachment id of the media
          $title = $mv_image['title']; //The title
          $full_image_url= $mv_image['full_image_url']; //Full size image url
          $thumbnail_image_url= $mv_image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
          $thumbnail_image_url = acf_photo_gallery_resize_image($full_image_url, 300, 250); //Resized size to 262px width by 160px height image url
      ?>

      <li class="list-unstyled" data-src="<?php echo $full_image_url; ?>">
          <img src="<?php echo $thumbnail_image_url; ?>" alt="<?php echo $title; ?>" />
      </li>


  <?php endforeach; endif; ?>

</ul>




    <script>
        
        jQuery(document).ready(function() {
                jQuery('#ul-li').lightGallery({
                    mode: 'lg-fade',
                    cssEasing: 'cubic-bezier(0.25, 0, 0.25, 1)',
                    thumbnail: true,
                    animateThumb: false,
                    showThumbByDefault: false,
                    thumbnail: true
                });
            });


    </script>


	<?php

	  }
    
      add_shortcode( 'dynamicwpgallery' , 'dynamicwp_gallery_function' );
  ?>