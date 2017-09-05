<?php get_header(); ?>

<!-- #ContBox -->
<div id="ContBox">

	<!-- #LeftBox -->
	<div id="LeftBox">
		<!-- #Panlist -->
		<p id="Panlist">
			<a href="<?php bloginfo( 'url' ); ?>">HOME</a> ≫ <a href="<?php echo get_post_type_archive_link( 'fish' ); ?>">水族館の魚たち</a>≫ <?php the_title(); ?>
		</p><!-- /#Panlist -->
		
		<h2><?php the_title(); ?></h2>
		
		<p class="MB20">
			<?php
			//イメージフィールドの情報を取得
			$imagefield = get_imagefield( 'fish_pic02' );
			
			//イメージidが存在すれば出力
			if ( ! empty( $imagefield['id'] ) ) {
				echo wp_get_attachment_image( $imagefield['id'], 'full' );
			}
			?>
		</p>
		
		<!-- .maintxtbox -->
		<div class="maintxtbox">
			<!-- .txtbox -->
			<div class="txtbox">
				<!-- .dlbox -->
				<div class="dlbox">
					<dl>
						<dt>さかなのタイトル</dt>
						<dd class="title"><?php the_title(); ?></dd>
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
		</div><!-- /.maintxtbox -->
	</div><!-- /#LeftBox -->
	<?php get_sidebar(); ?>
	<p id="Pagetop"><a href="#HeaderBox"><img src="<?php bloginfo( 'template_directory' ); ?>/images/pagetop.jpg" width="166" height="17" /></a></p>
</div><!-- /#ContBox -->

<?php get_footer(); ?>