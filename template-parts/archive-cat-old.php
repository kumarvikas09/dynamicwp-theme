<?php if (is_archive() ):?>
<!-- wp_list_categories() -->



<section class="blog category-sec container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mb-5 mb-xl-0">
            <?php
                global $wp_query;
                $categories = get_the_category();
                $current_cat_id = $categories[0]->cat_ID;
                $wp_query = new WP_Query( array( 'cat' => $current_cat_id, 'posts_per_page' => 5, 'paged'=> get_query_var( 'paged' )) ); 
                if ( $wp_query->have_posts() ) : 
                while ( $wp_query->have_posts() ) : $wp_query->the_post();?>
                 <article>
                    <div class="blog-post">
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="post-thumbnail mb-3 mb-lg-0">
                                        <img src="<?php the_post_thumbnail_url('custom-size2');?>" class="img-fluid" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8">
                                <div class="post-content">
                                    <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                    <div class="post-meta">
                                        <span> by <strong><?php the_author();?></strong> <?php the_date();?> | <?php the_time();?></span>
                                            <span class="category"> by 
                                            <?php $categories = get_the_category();
                                                if ( ! empty( $categories ) ) {
                                                    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                                                }
                                            ?></span>
                                        </div>
                                    <div class="post-description">
                                        <?php the_excerpt();?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
			<div class="col-xl-3 mb-xl-0 mb-4">
				<?php get_sidebar();?>
			</div>
		</div>  
		<div class="row">
			<div class="col-12">
                <div class="pagination">
                    <?php                    
                        // wp_query is the var with global scope
                        $total_pages = $wp_query->max_num_pages;                    
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
                    <?php wp_reset_postdata(); ?>
                </div>
			</div>
		</div>
	</div>
</section>

<?php 
    endif;
?>
