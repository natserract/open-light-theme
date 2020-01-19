
<?php get_header(); ?>

<section class="post-lists">
    <main class="site-main">
        <header class="page-header">
            <h1 class="page-title">
                <?php printf( esc_html__( 'Search Results for: %s', 'air-light' ), '<span>' . get_search_query() . '</span>' ); ?>
            </h1>
        </header>
    
        <?php get_template_part( 'template-parts/template-search', get_post_type() );   ?>
    </main>
</section>

<?php get_footer();
