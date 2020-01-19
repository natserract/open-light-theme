
<div class="container container-article-list">
    <ul class="post-article">
        <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : 
                    echo"<li class='post-article-items'>";
                        the_post(); 

                        echo'<a href="' . esc_url( get_permalink() ) . '">';
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            };
                        echo"</a>";

                        echo"<div class='post-article-content'>";
                            the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
                            the_excerpt();
                        echo"</div>";        
                    echo"</li>";
                endwhile;
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __( 'Back', 'textdomain' ),
                    'next_text' => __( 'Onward', 'textdomain' ),
                ) );
            endif;
            ?>
    </ul>
</div>
 

