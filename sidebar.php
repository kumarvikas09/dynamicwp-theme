 <!-- include header using wp prebuilt function -->
<?php get_header(); ?>



 <!-- this is sidebar -->
 <div class="right-sidebar">

 <h3>Latest Post</h3>

 <!-- code for getting latest post with thumbnails  -->
    <ul>
        <?php $recent_posts = wp_get_recent_posts();
        $i = 0; 
        foreach( $recent_posts as $recent ){
        if($recent['post_status']=="publish" && $i < 5){
            $i++;
            if ( has_post_thumbnail($recent["ID"])) {
                echo '<li>
                <a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .
                "<div class='latest-post-thumbnail'>" .  get_the_post_thumbnail($recent["ID"], 'thumbnail') ."</div>". 
                "<div class='latest-post-meta'><h5 class='latest-post-title'>" . $recent["post_title"].' </h5>'.
                "<span class='latest-post-time'>" . $recent["post_date"].' </span> </div>
                </a></li> ';
                }else{
                    echo '<li>
                    <a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .
                    
                    "<div class='latest-post-meta'><h5 class='latest-post-title'>" . $recent["post_title"].' </h5>'.
                    "<span class='latest-post-time'>" . $recent["post_date"].' </span> </div>
                    </a></li> ';
                }
            }
        }
        ?>
    </ul>
</div>