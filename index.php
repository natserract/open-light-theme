
<!-- Header --> 
<?php get_header(); ?>

<main id="main" class="site-main">
       <header class="home-header-panel">
            <div class="home-main-title">
                <h1><?php echo get_bloginfo( 'name' ); ?></h1>
                <h2>Minimal WordPress Theme</span></h2>
                <div class="down-arrow scroll-page">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_down.svg" alt="Scroll down">
				</div>
            </div>
       </header>
       <section class="home-intro">
            <div class="text-chunk">
                <p>Contrairement à une opinion répandue, le Lorem Ipsum n'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique.</p>
                <p>Un professeur du Hampden-Sydney College, en Virginie, s'est intéressé à un des mots latins les plus</p> <p>Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d'entre elles a été altérée par l'addition <strong><strong></strong><a href="#" target="_blank">consider making a donation to the charity.</a></strong></p>
                <p><em>Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire le même extrait sans fin <a href="#">Contact</a> page.</em></p>
            </div>
            <nav class="home-intro-links">
				<p class="home-intro-link">
					<a href="https://github.com/alfinsuryaS/open-light-theme">About the project</a>
				</p>
				<p class="home-intro-link">
					<a href="https://www.linkedin.com/in/alfinsurya/">About Author</a>
				</p>
				<p class="home-intro-link">
					<a href="https://dev.to/alfinsuryas">Readers' stories</a>
				</p>
			</nav>
       </section>
       <section class="home-article-container">
            <h1 class="story-header">Latest Posts</h1>
            <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : 
                    echo"<div class='home-article'>";
                        the_post(); 

                        echo'<a href="' . esc_url( get_permalink() ) . '">';
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            };
                        echo"</a>";

                        the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
                        the_excerpt();
                    echo"</div>";
                endwhile;
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __( 'Back', 'textdomain' ),
                    'next_text' => __( 'Onward', 'textdomain' ),
                ) );
            endif; 
            ?>

       </section>
</main>

<?php get_footer(); ?>