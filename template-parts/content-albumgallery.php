




<section class="gallery-album-single">

    <div class="container">
        <?php
    
            $post_id = get_the_ID();

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

    $images = get_field('gallery_album', $post_id);

    if( $images ):
    $images = explode(',', $images);
    $images = array_filter($images);
    if( count($images)): ?>
        <ul id="ul-li">
            <?php foreach( $images as $image ): 
                $alt = get_the_title($image);
                $imageUrlFull = wp_get_attachment_image_url(  $image, 'full' ) ?>
                <li  data-src="<?php echo $imageUrlFull ?>">
                        <img src="<?php echo $imageUrlFull ?>" alt="">
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <?php endif; ?>


    </div>
</section>


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

