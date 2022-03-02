<?php
/*
    Template Name: Blog
*/

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="clear">

			<h1><span><?php the_title(); ?></span></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1 ?>
			<?php $args = array(
					'post_type' => 'post',
					'posts_per_page' => 1,
					'orderby' => 'date',
					'order' => 'DESC',
					'paged' => $paged
			); ?>

			<?php $consejos = new WP_Query($args); ?>
			<?php $i = 0; ?>
			<?php while($consejos->have_posts() ): $consejos->the_post(); ?>

			<?php if($i==0)  { ?>
			
			<article class="entrada destacada clear">
				<div class="foto">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('principalBlog'); ?>
					</a>
				</div>

				<div class="grid1-3">
                    <span class="date">Escrito el: <?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
                    <span class="author"><?php _e( 'Publicado por:', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
                    <p><?php _e( 'Categoría: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
					
				</div>
				<div class="grid2-3">
					<h2> 
						<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
					</h2>
					<?php html5wp_excerpt('html5wp_custom_post') ?>
				</div>
			</article>

			<?php } else { ?>

			<!-- FIN ENTRADA DESTACADA -->



			<article class="entrada clear">
				<div class="grid1-3">
					<div class="foto">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('mediano'); ?>
						</a>
					</div>
				</div>
				<div class="grid2-3">
					<h2>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<?php html5wp_excerpt('html5wp_custom_post') ?>
				</div>
			</article>

			<?php } ?>

			<!-- FIN ENTRADAS -->

			<?php $i++; endwhile; ?>

			<ul class="paginacion clear">
				<li><?php previous_posts_link('&laquo; Anterior', $consejos->max_num_pages); ?></li>
				<li><?php next_posts_link('Siguiente &raquo; ', $consejos->max_num_pages); ?></li>
			</ul>

			<?php wp_reset_postdata(); ?>


		<?php edit_post_link(); ?>

	
		<?php endwhile; ?>

					
		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
