</div>

        <footer class="global-footer">
			<div class="footer-item-text">
				<span class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                </span>

				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>" class="imprint">
					<?php printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?>
				</a>
			</div>
		</footer>

    <?php wp_footer(); ?>
</body>
</html>