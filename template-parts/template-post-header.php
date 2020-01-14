<?php
	if ( is_front_page() ) {
		$block_class = 'page-type-home';
	} else {
		$block_class = 'page-type-' . get_post_type();
	}
?>

<section class="post-header-panel <?php echo esc_attr( $block_class ); ?>">
		<div class="post-header-text">
			<?php the_title( '<h1 class="post-title">', '</h1>' );?>

			<div class="post-meta">
				<span class="post-author">
					posted by: <?php the_author_meta( 'display_name'); ?>
				</span> 
				<span class="space-up">&#8212;</span>
				<span class="post-time">
					at: <time datetime="<?php the_time( 'c' ); ?>">
						<?php echo get_the_date( get_option( 'date_format' ) ); ?>
					</time>
				</span>
			</div>
		</div>
</section>
