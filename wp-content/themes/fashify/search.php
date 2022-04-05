<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Fashify
 */

get_header();
$layout = get_theme_mod( 'site_layout', 'right-sidebar' );
?>

<div class="container <?php echo esc_attr( $layout ); ?>">
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php

		$archive_layout = get_theme_mod( 'fashify_archive_layout', 'default' );
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="entry-title"><?php printf( esc_html__( 'Search Results for: %s', 'fashify' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				switch ( $archive_layout ) {
	 				   case 'grid':
	 					   get_template_part( 'template-parts/content', 'grid' );
	 					   break;

	 				   case 'list':
	 					   get_template_part( 'template-parts/content', 'list' );
	 					   break;

	 				   default:
	 					   get_template_part( 'template-parts/content', 'grid-large' );
	 					   break;
	 			}

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;


		echo '<div class="post-pagination">';
		the_posts_pagination(array(
			'prev_next' => true,
			'prev_text' => '',
			'next_text' => '',
			'before_page_number' => '<span class="screen-reader-text">' . esc_html__('Page', 'fashify') . ' </span>',
		));
		echo '</div>';

		?>

		</main><!-- #main -->
	</section><!-- #primary -->
	<?php get_sidebar(); ?>
</div>

<?php
get_footer();
