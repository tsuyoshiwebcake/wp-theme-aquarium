<?php get_header(); ?>

<!-- #ContBox -->
<div id="ContBox">

	<!-- #mainimg -->
	<p id="mainimg">
		<img src="<?php bloginfo( 'template_directory' ); ?>/images/main_bg_01.jpg" width="1000" height="350" />
	</p><!-- /#mainimg -->
	
	<!-- #LeftBox -->
	<div id="LeftBox">

		<?php $loop = new WP_Query( array( 'post_type' => 'info', 'posts_per_page' => 5 ) ); ?>
		<?php if ( $loop->have_posts() ) : ?>
			<p class="MB10"><img src="<?php bloginfo( 'template_directory' ); ?>/images/index_h_01.jpg" alt="インフォメーション" /></p>
		
			<!-- #info -->
			<ul id="info">
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile;?>
			</ul><!-- /#info -->
			
			<!-- .details -->
			<p class="details">
				<a href="<?php echo get_post_type_archive_link( 'info' ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/info_details.jpg" width="188" height="14" alt="インフォメーション情報一覧" /></a>
			</p><!-- /.details -->
		<?php endif; wp_reset_postdata(); ?>
		
		<?php $loop = new WP_Query( array( 'post_type' => 'event', 'posts_per_page' => 5 ) ); ?>
		<?php  if ( $loop->have_posts() ) : ?>
			<p class="MB10"><img src="<?php bloginfo( 'template_directory' ); ?>/images/index_h_02.jpg"  alt="イベント情報" /></p>
		
			<!-- #event -->
			<ul id="event">
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'event_date', true ) ); ?> <?php the_title(); ?></a></li>
				<?php endwhile;?>
			</ul><!-- /#event -->
			
			<!-- .details -->
			<p class="details">
				<a href="<?php echo get_post_type_archive_link( 'info' ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/event_details.jpg" width="145" height="14" alt="イベント情報一覧" /></a>
			</p><!-- /.details -->
		<?php endif; wp_reset_postdata(); ?>
		
		<p class="MB50"><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/twitter_bn_01.jpg" width="710" height="110" /></a></p>
		<p><a href="#HeaderBox"><img src="<?php bloginfo( 'template_directory' ); ?>/images/pagetop.jpg" width="166" height="17" /></a></p>
	</div><!-- /#LeftBox -->
	
	<?php get_sidebar(); ?>
</div><!-- /#ContBox -->

<?php get_footer(); ?>