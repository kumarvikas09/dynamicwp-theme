<!-- Archive file for display archive's page -->
<!-- archive will be TAGS categories AUTHOR DATE YEAR DAY  -->


<!-- types of archives shown below -->
<!-- if (is_author() ){
        echo "is_author";
    }elseif(is_category()){
        echo "is_category";
    }elseif(is_tags()){
        echo "is_tags";
    }elseif(is_day()){
        echo "is_day";
    }elseif(is_month()){
        echo "is_month";
    }elseif(is_year()){
        echo is_year();        
    } -->

<!-- if we click on any archive type then it will search first archive-name (category-name.php) in case not available
then found archive-ID (category-ID.php) if in case also not available
then land to our Archive .php 
if archive file not available then land to index.php -->

    
    
<?php if (is_archive()):?>
<?php get_header();?>


<div id="primary" class="">
    <?php
        get_template_part( 'template-parts/archive', get_post_type() );
       
    ?>
</div>


<!-- include footer using wp prebuilt function -->
<?php get_footer();?>

<?php endif;?>