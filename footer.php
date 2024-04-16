<?php 
// for footer 
?>


<!-- init footer file using wp prebuilt function -->
<?php wp_footer();?>

<footer>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <?php dynamic_sidebar( 'footer_first' ); ?>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <?php dynamic_sidebar( 'footer_second' ); ?>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <?php dynamic_sidebar( 'footer_third' ); ?>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <?php dynamic_sidebar( 'footer_fourth' ); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-bar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php dynamic_sidebar( 'footer_copyright' ); ?>
                </div>
            </div>
        </div>
    </div>
</footer>