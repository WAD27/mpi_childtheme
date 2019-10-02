<?php
get_header(); ?>

<section class="container contenido-pagina">
	<div class="row">
		<div class="col-12">

			<?php while (have_posts()): the_post(); ?>

				<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<?php the_content(); ?>

					<?php
					// wp_link_pages(array(
					// 	'before'      => '<nav class="post-pagination">',
					// 	'after'       => '</nav>',
					// 	'link_before' => '<span>',
					// 	'link_after'  => '</span>',
					// ));
					?>
				</article>

			<?php endwhile; ?>

		</div>
	</section>
	<?php get_footer(); ?>
