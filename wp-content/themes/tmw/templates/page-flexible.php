<?php
/*
Template Name: Flexible Content
*/
?>
<?php get_header(); ?>

<!-- PAGE HERO -->

<?php get_template_part('partials/templates/hero'); ?>

<!-- WYSIWYG CONTENT -->

	<?php 
		$hide = get_field('hide_content');
		if ($hide != true){ ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('partials/global/page-content'); ?>
		<?php endwhile; // end of the loop. ?>
	<?php } ?>



<?php get_footer();?>
