<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Magnus
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				$hero_data = get_post_meta($post->ID, 'hero_group', true);
				// nice WP helper function to unserialize if needed
				$hero_data = maybe_unserialize($hero_data);
			?>

			<div class="hero">
				<div class="hero__content">
					<h2><?=$hero_data['hero_headline']?></h2>
					<p><?=$hero_data['hero_description']?></p>
				</div>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
				  $menu_data = get_post_meta($post->ID, 'menu_group', true);
				  $menu_data = maybe_unserialize($menu_data);
				?>
				
				<?php foreach ($menu_data as $data):
					$menu_items = $data['menu_item_group'];
					foreach ($menu_items as $menu_item): 
				?>

					<div class="menu">
						<h3><?=$menu_item['menu_item_name']?></h3>
						<p><?=$menu_item['menu_item_description']?></p>
					</div>

					<?php endforeach; ?>
				<?php endforeach; ?>


				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
