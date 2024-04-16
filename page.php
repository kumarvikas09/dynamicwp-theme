<?php
//  for all pages

// include header using wp prebuilt function
get_header();
?>

<section class="breadcrumbs">
    <div class="container-fluid">
        <div class="container">
            <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
            <?php echo the_content(); ?>
        </div>
    </div>
</section>



<?php
// include footer using wp prebuilt function
get_footer();
