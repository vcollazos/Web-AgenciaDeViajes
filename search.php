<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><span><?php echo sprintf( __( '%s Resultados para:  ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></span></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
