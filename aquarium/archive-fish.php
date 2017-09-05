<?php get_header(); ?>

<!-- #ContBox -->
<div id="ContBox">

	<!-- #LeftBox -->
	<div id="LeftBox">
		<!-- #Panlist -->
		<p id="Panlist">
			<a href="<?php bloginfo( 'url' ); ?>">HOME</a> ≫ 水族館の魚たち
		</p><!-- /#Panlist -->
		
		<h2>水族館の魚たち</h2>
		<?php while ( have_posts() ) : the_post(); ?>
		
			<!-- .mainbox -->
			<div class="mainbox">
				<!-- .picbox -->
				<p class="picbox">
					<a href="<?php the_permalink(); ?>">
						<?php
						//イメージフィールドの情報を取得
						$imagefield = get_imagefield( 'fish_pic01' );
						
						//イメージidが存在すれば出力
						if ( ! empty( $imagefield['id'] ) ) {
							echo wp_get_attachment_image( $imagefield['id'], 'full' );
						}
						?>
					</a>
				</p><!-- /.picbox -->
				
				<!-- .txtbox -->
				<div class="txtbox">
					<!-- .dlbox -->
					<div class="dlbox">
						<dl>
							<dt>さかなのタイトル</dt>
							<dd class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
						</dl>
						<dl>
							<dt>生息地</dt>
							<dd><?php echo esc_html( get_post_meta( get_the_ID(), 'habitat', true ) ); ?></dd>
						</dl>
						<dl>
							<dt>体長</dt>
							<dd><?php echo esc_html( get_post_meta( get_the_ID(), 'length', true ) ); ?></dd>
						</dl>
						<dl>
							<dt>生息環境</dt>
							<dd><?php echo esc_html( get_post_meta( get_the_ID(), 'native_habitat', true ) ); ?></dd>
						</dl>
						<dl class="none">
							<dt>特徴</dt>
							<dd><?php echo nl2br( esc_html( get_post_meta( get_the_ID(), 'fish_type', true ) ) ); ?></dd>
						</dl>
					</div><!-- /.dlbox -->
				</div><!-- /.txtbox -->
			</div><!-- /.mainbox -->
		<?php endwhile; ?>
	</div><!-- /#LeftBox -->
	
	<?php get_sidebar(); ?>
	<p id="Pagetop"><a href="#HeaderBox"><img src="<?php bloginfo( 'template_directory' ); ?>/images/pagetop.jpg" width="166" height="17" /></a></p>
</div><!-- /#ContBox -->

<?php get_footer(); ?>