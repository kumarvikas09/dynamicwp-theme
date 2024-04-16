<?php 

/* Template Name: metabox-testing */ 


get_header(); ?>





<?php $query1 = new WP_Query( array( 'post_type' => 'metaboxtesting', 'posts_per_page' => 3 ) ); ?>
    <?php if ( $query1->have_posts() ) : ?>
        <?php while ( $query1->have_posts() ) : $query1->the_post(); ?>    

                    <h3><a href="<?php echo get_the_permalink(get_the_ID()) ?>"> <?php the_title(); ?> </a></h3>

                    <div class="page-content">
                        <?php the_content( '<div>', '</div>' )?>
                        <?php the_post_thumbnail()?>
                    </div>


                    <a href="<?php echo get_post_permalink() ?>"> Read More </a>

                    <!-- metaUrlBox is the post id comes from where you registered metabox -->
                    
                    <?php $url = get_post_meta( get_the_ID(), 'metaUrlBox', true ); ?>

                     
                    <a href="<?php echo $url ?>"> my Link </a>
                    

                    <h1> <?php echo  get_post_meta( get_the_ID(), 'dynamicwp_customtextId', true ); ?> </h1>



                    <img src=" <?php echo  get_post_meta( get_the_ID(), 'Upload_Image_metaboxupload-your-image', true ); ?> ">
            
            
            <?php endwhile; ?>

            <?php endif; ?>

            <div class="pagination">
                <?php
                    global $query1;
                
                    $total_pages = $query1->max_num_pages;
                
                    if ($total_pages > 1){
                        $current_page = max(1, get_query_var('paged'));
                
                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => '/page/%#%',
                            'current' => $current_page,
                            'total' => $total_pages,
                        ));
                    }
                ?>
            </div>
        <?php 
        $image = get_field('your_custom_image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>






<?php wp_reset_postdata(); ?>

<?php get_footer();?>