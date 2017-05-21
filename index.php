<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
	<!-- todo: only for single page -->
	<?php if(has_post_thumbnail()) : ?>
		<div style="background: url(<?=wp_get_attachment_image_src(get_post_thumbnail_id(), "large")[0]; ?>) center 80%" class="featured-image">
			<div class="title">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	<?php else : ?>
		<h1><?php the_title(); ?></h1>
	<?php endif; ?>
	
	<?php the_content(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
