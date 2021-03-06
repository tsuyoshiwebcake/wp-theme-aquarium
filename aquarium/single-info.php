<?php get_header(); ?>

<!-- #ContBox -->
<div id="ContBox">

	<!-- #LeftBox -->
	<div id="LeftBox">
		<!-- #Panlist -->
		<p id="Panlist">
			<a href="<?php bloginfo( 'url' ); ?>">HOME</a> ≫ <a href="<?php echo get_post_type_archive_link( 'info' ); ?>">インフォメーション</a> ≫ <?php the_title(); ?>
		</p><!-- /#Panlist -->
		
		<?php while ( have_posts() ) : the_post(); ?>
		
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
			<!-- .entry -->
			<div class="entry">
				<?php the_content(); ?>
				<p class="info_date">更新日:<?php the_time( 'Y/m/d' ); ?></p>
			</div><!-- /.entry -->
		<?php endwhile; ?>
	</div>
	<!-- /#LeftBox -->
	
	<?php get_sidebar(); ?>
	<p id="Pagetop"><a href="#HeaderBox"><img src="<?php bloginfo( 'template_directory' ); ?>/images/pagetop.jpg" width="166" height="17" /></a></p>
</div><!-- /#ContBox -->

<?php get_footer(); ?>