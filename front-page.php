<?php
    get_header();
    get_template_part( 'template-parts/content', get_post_type() );
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <h2>Main</h2>
</main>
</div>

<?php
    get_sidebar();
    get_footer();
?>