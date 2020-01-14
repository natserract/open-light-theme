<?php
	the_post();
	get_header();
	get_template_part( 'template-parts/template-post-header', get_post_type() ); 
 ?>

<section id="content" class="content-area">
	<main role="main" id="main" class="site-main">
    <div class="container container-article">
      <?php get_template_part( 'template-parts/template-post', get_post_type() ); ?>

		<div class="nav-shortcuts-post">
			<div class="nav-shortcut">
				<?php previous_post_link(); ?>
			</div>
			<div class="nav-shortcut">
				<?php next_post_link(); ?>
			</div>
		</div>

    </div>
	</main>
</section>

<?php get_footer();
