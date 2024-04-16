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

   




<?php
$images = get_field('mv_gallery',227);

if( $images ):
   $images = explode(',', $images);
   $images = array_filter($images);
   if( count($images)): ?>
       <ul>
           <?php foreach( $images as $image ): 
               $alt = get_the_title($image);
               $imageUrlFull = wp_get_attachment_image_url(  $image, 'full' ) ?>
               <li>
                   <a href="<?php echo $imageUrlFull ?>" title="<?php echo $alt; ?>">
                       <?php echo wp_get_attachment_image($image, "url", false, ['alt' => $alt]); ?>
                   </a>
               </li>
           <?php endforeach; ?>
       </ul>
   <?php endif; ?>
<?php endif; ?>





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