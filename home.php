<!-- for blog  -->
<!-- include header using wp prebuilt function -->
<?php get_header();?>

<!-- Display page title for blog page only -->
<section class="breadcrumbs">
	<div class="container-fluid">
		<div class="container">
			<div class="breadcrumb"><?php get_breadcrumb(); ?> &nbsp;&nbsp;»&nbsp;&nbsp; <?php wp_title('');?></div>
		</div>
	</div>
</section>




<section class="blog container-fluid">
	<div class="container">
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
												<span> Tags
													<!-- fetch tags of current post -->
													<!-- /*---- get post tags ----*/ -->
													<?php  
													
														$posttags = get_the_tags();
														if ($posttags) {
															foreach($posttags as $tag) {
																echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">' . esc_html( $tag->name ) . '</a>';
															}
														}
													?>
												</span>
													
												</div>
															

													<span>
													
														by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><strong><?php the_author();?></strong></a> 
														
														<a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'));  ?>" class="entry-date"><?php the_time('F j, Y') ?></a> | <?php  the_time();?>
														<!-- <?php //the_date();?> | <?php //the_time();?> -->

														
													
													</span>


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



<!-- include footer using wp prebuilt function -->
<?php get_footer();?>