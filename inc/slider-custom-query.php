<?php
$a = '1';

	function map_shortcode($slider_id) {				
		ob_start();
        $a = shortcode_atts(array(
            'id' => '',
            'slides' => '',
        ), $slider_id);
            
?>  

    <div class="owl-carousel">

        <!-- dynamicwp_slider_field is the custom field name -->

        <?php if( have_rows('dynamicwp_slider_field', $a['id']) ): ?>
        
            <?php while( have_rows('dynamicwp_slider_field', $a['id']) ): the_row();?>

                <div class="card-wrap">
                    <div class="card">
                        <div class="imgbox">


                            <!-- get image from subfield -->

                            <?php $image = get_sub_field('image_field');?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            
                        </div>

                        <div class="contentbox">


                            <!-- get title Name from subfield -->

                            <h2 class="title"> <?php the_sub_field('heading_field'); ?></h2>

                            <!-- get Description from subfield -->
                            
                            <p class="brandName"><?php the_sub_field('description_field'); ?></p>
                        </div>
                    </div>
                </div>
            

                
            <?php endwhile; ?>

        <?php endif; ?>
    </div>

<?php print_r($a['slides']); ?>
<script>
    jQuery(document).ready(function () {


        jQuery('.owl-carousel').owlCarousel({
            loop: true,
            responsiveClass: true,
            nav: true,
            margin: 0,
            autoplayTimeout: 4000,
            navText: ['&#8592;', '&#8594;'],
            responsive: {
                0: {
                    center: false,
                    items: 1,
                },
                768: {
                    center: true,
                    items: 2,
                },
                1000: {
                    center: true,
                    items: 3,
                },
                1400: {
                    center: true,
                    items: 4,
                },
                1600: {
                    center: true,
                    items: <?php print_r($a['slides']); ?>,
                }
            }
        });

      
    
    });
</script>
	<?php
		return ob_get_clean();
	}
	add_shortcode("slider", "map_shortcode");
?>

