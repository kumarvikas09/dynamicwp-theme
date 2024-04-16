    <!-- for default single post -->
<!-- set default if not single post for other custom post type -->
<section class="single-post">
    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                <article>
                    <div class="blog-post">                        
                        <div class="single-post-thumbnail">
                            <img src="<?php the_post_thumbnail_url('custom-size2');?>" class="img-fluid" alt="">
                        </div>
                        <div class="post-content">
                            <h2 class="post-title"><?php the_title(); ?></h2>
                            <div class="post-meta">
                                <span> by <strong><?php the_author();?></strong> <?php the_date();?> | <?php the_time();?></span>
                            </div>
                            <div class="post-description">
                                <?php the_content();?>
                            </div>
                        </div>
                    </div>
                </article>
                <div id="comments" class="comments-area">
                    <?php comments_template(); ?>
                </div>
            </div>
            <div class="col-xl-3 mb-xl-0 mb-4">
				<?php get_sidebar();?>
			</div>
        </div>
    </div>
</section>


