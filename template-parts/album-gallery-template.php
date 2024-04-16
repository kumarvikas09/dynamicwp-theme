<?php 

/* Template Name: album-gallery*/ 



get_header();
?>


<section class="breadcrumbs bg-white mb-0">
    <div class="container-fluid">
        <div class="container">
            <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
            <?php echo the_content(); ?>
        </div>
    </div>
</section>



<?php
       
    
    $args = array(
        'post_type' => 'albumgallery',
        'orderby'    => 'menu_order', /*DESC for descending order*/
        'order'    => 'ASC', /*DESC for descending order*/
        'posts_per_page' => 24,
    );

    // the query
    $the_query = new WP_Query( $args ); ?>
    
    <?php if ( $the_query->have_posts() ) : ?>
    

        <section class="album-gallery-wrap">

            <div class="container">

                <div class="row">

    
                    <!-- the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <div class="col-lg-4 col-12 g-5 mb-3">

                             <a href="<?php the_permalink(); ?>">

                                 <div class="album-wrap">

                                    <?php $imgSrc =  get_post_thumbnail_id();

                                        $src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail_size' );

                                        $url = $src[0];

                                        if($url == "") {
                                            $url = "http://dynamicwp/wp-content/uploads/2021/06/gallery-album-placeholder.jpg";
                                        }

                                    ?>

                                    <h3 class="album-title"> <?php echo the_title(); ?> </h3>
                                    <img src="<?php echo $url ?>" alt="">
                                    <div class="overlay"></div>
                                    
                                </div>

                            </a>

                        </div>                    
                            
                            
                    <?php endwhile; ?>



                </div>

            </div>

        </section>
        <!-- end of the loop -->
    
        <!-- pagination here -->
    
        <?php wp_reset_postdata(); ?>
    
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>



<?php get_footer();?>