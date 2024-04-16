<?php
//  for single post 

get_header(); ?>

	<div id="primary" class="">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		
		endwhile; // End of the loop.
		?>
	</div><!-- #main -->

<?php
get_footer(); ?>