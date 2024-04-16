


<!-- wp_list_categories() -->

<?php
    if (is_author() ){
        echo "is_author";
    }elseif(is_category()){
        echo "is_category";
    }elseif(is_tag()){
        echo "is_tag";
    }elseif(is_day()){
        echo "is_day";
    }elseif(is_month()){
        echo "is_month";
    }elseif(is_year()){
        echo is_year();        
    }
    
?>


<section class="archive blog container-fluid">
	<div class="container">
    <h2 class="">Search results for =  <?php echo get_search_query();?> </h2>
		<div class="row">
			<div class="col-xl-9 mb-5 mb-xl-0">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>    
								<!-- Post Content here  -->

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
												<div class="post-tags">
													<!-- fetch tags of current post -->
													<!-- /*---- get post tags ----*/ -->
													<?php  
														$posttags = get_the_tags();
														if ($posttags) {
															foreach($posttags as $tag) {
																echo '<a href="' .  get_tag_link( $tag->term_id ) . '">' . esc_html( $tag->name ) . '</a>';
															}
														}
													?>
												
													
												</div>
															

													<span> by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><strong><?php the_author();?></strong></a> <?php the_date();?> | <?php the_time();?></span>


													<span class="category"> by 
														<!-- fetch categories of current post -->
														<!-- /*---- get post categories ----*/ -->
													<?php 
														$postcat = get_the_category();
														if ($postcat) {
															foreach($postcat as $cat) {
																echo '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">' . esc_html( $cat->name ) . '</a>';
															}
														}
													?>
													
													</span>
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
					<?php endwhile;  else : { ?>
                        <p>No Search result found for =  <?php echo get_search_query();?> </p>
                   <?php } // end if/else have_posts ?>
				<?php endif; ?>
			</div>
			<div class="col-xl-3 mb-xl-0 mb-4">
				<?php get_sidebar();?>
			</div>
		</div>  
		<div class="row">
			<div class="col-12">
				<div class="pagination">
					<?php the_posts_pagination(array(
						'mid-size' => 3,
						'prev_text' => __('« previous'),
						'next_text' => __('next »'),
					)); ?>
				</div>
			</div>
		</div>
	</div>
</section>

