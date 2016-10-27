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

	<?php
		$page_bg = get_post_meta($post->ID, 'page_background_image', true);
		$page_bg = maybe_unserialize($page_bg);
		$page_bg = wp_get_attachment_url($page_bg);
		
		$hero_headline = get_post_meta($post->ID, 'hero_headline', true);
		$hero_headline = maybe_unserialize($hero_headline);

		$hero_description = get_post_meta($post->ID, 'hero_description', true);
		$hero_description = maybe_unserialize($hero_description);

		$hero_cta = get_post_meta($post->ID, 'hero_cta', true);
		$hero_cta = maybe_unserialize($hero_cta);

		$hero_image = get_post_meta($post->ID, 'hero_image', true);
		$hero_image = maybe_unserialize($hero_image);
		$hero_image = wp_get_attachment_url($hero_image);

	 	function filterMenuAddons($value) {
	 		return $value['menu_item_type'][0] == 'addon';
	 	}
	?>

	<div class="hero" style="background-image:url(<?=$hero_image ?>);">
		<div class="hero__wrapper content-area">
			<div class="hero__content">
				<?php if (strlen($hero_headline) > 0) { ?>
					<h2><?=$hero_headline?></h2>
				<? } ?>

					<?php if (strlen($hero_description) > 0) { ?>
					<div class="hero__description">
						<?php echo wpautop(get_post_meta($post->ID, 'hero_description', true)); ?>
					</div>
					<? } ?>

				<?php if (strlen($hero_cta) > 0) { ?>
					<button class="cta"><?=$hero_cta?></button>
				<? } ?>
			</div>
		</div>
	</div>

	<div id="primary" style="background-image: url(<?=$page_bg ?>);">
		<main id="main" class="site-main content-area" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
				  $menu_data = get_post_meta($post->ID, 'menu_section', true);
				  $menu_data = maybe_unserialize($menu_data);

					foreach ($menu_data as $menu):
				?>

				<?php
					$menu_classname = '';
					$serving_sizes = [];
					if (isset($menu['menu_title'])) {
						$menu_classname = str_replace(' ', '-', $menu['menu_title']);
						$menu_classname = str_replace('-&', '', $menu_classname);
						$menu_classname = strtolower($menu_classname);
						$serving_sizes = $menu['menu_serving_sizes'];
					}
				?>

				<?php if(isset($menu['menu_title'])) { ?>
				<section class="section <?=$menu_classname?> ">
					<div class="">

					<?php 
						$menu_layout = $menu['menu_layout'][0];
						if ($menu_layout == 'list') {?>

					 <div class="menu list <?=$menu['menu_width'] ?> <?=$menu['menu_alignment'] ?>" style="margin-top:<?=$menu['menu_coordinate_y'] ?>px; margin-left:<?=$menu['menu_coordinate_x'];?>px;">
					 	<header class="menu__header">
					 		<h3 class="menu__category" style="color:<?=$menu['menu_title_color'] ?>; font-family:<?=$menu['menu_title_font'] ?>"><?=$menu['menu_title'];?></h3>
					 	</header>

					 	<?php if(isset($menu['menu_item'])) { ?>
					 	<div class="menu__items">
						 	<?php foreach ($menu['menu_item'] as $menu_item): ?>
						 	<?php if ($menu_item['menu_item_type'][0] != 'addon') { ?>
						 	<div class="menu__item">
		            <h4 class="menu__item-name" style="font-family:<?=$menu_item['menu_item_font']; ?>">
		              <?=$menu_item['menu_item_name']?>
		            </h4>
		            <p class="menu__item-prices">
		            	<span class="menu__item-price"><?=$menu_item['menu_item_price1'] ?></span>
		            	<?php if (strlen($menu_item['menu_item_price2']) > 0) { ?>
		              <span class="menu__item-price"><?=$menu_item['menu_item_price2'] ?></span>
		              <?php } ?>
		            </p>
		            <p class="menu__item-description"><?=$menu_item['menu_item_description']?></p>
						 	</div>
						 	<?php } ?>
						 	<?php endforeach; ?>
						 </div>
						 <?php } ?>

						 <?php 
						 	$addons = array_filter($menu['menu_item'], 'filterMenuAddons');
						 	if (sizeof($addons > 0)) {
						 ?>
						 <div class="menu__addons">
								<header class="menu__header">
									<h3 class="menu__category">Add Ons</h3>
								</header>
							 <div class="menu__items">
							 	<?php foreach ($addons as $addon): ?>
							 	<div class="menu__item">
			            <h4 class="menu__item-name" style="font-family:<?=$addon['menu_item_font']; ?>">
			              <?=$addon['menu_item_name']?>
			            </h4>
			            <p class="menu__item-prices">
			            	<span class="menu__item-price"><?=$addon['menu_item_price1'] ?></span>
			            	<?php if (strlen($addon['menu_item_price2']) > 0) { ?>
			              <span class="menu__item-price"><?=$addon['menu_item_price2'] ?></span>
			              <?php } ?>
			            </p>
			            <p class="menu__item-description"><?=$addon['menu_item_description']?></p>
							 	</div>
							 	<?php endforeach; ?>
							 </div>
							</div>
						 <?php } ?>

					 </div>

					 <?php }?>

					 <?php if ($menu_layout == 'grid') { ?>
					 <div class="menu grid <?=$menu['menu_width'] ?> <?=$menu['menu_alignment'] ?>" style="margin-top:<?=$menu['menu_coordinate_y'] ?>px; margin-left:<?=$menu['menu_coordinate_x'];?>px;">
					 	<table>
					 		<thead class="menu__header">
					 			<tr>
					 				<th>
					 					<h3 class="menu__category" style="color:<?=$menu['menu_title_color'] ?>; font-family:<?=$menu['menu_title_font'] ?>"><?=$menu['menu_title'];?></h3>
					 				</th>
					 				<?php $first_item = $menu['menu_item'][0]; ?>
              		<?php if (sizeof($serving_sizes) > 0) { ?>
              			<?php foreach ($serving_sizes as $serving_size):?>
		              		<th class=""><?=$serving_size ?></th>
		              	<?php endforeach; ?>
		              <?php } ?>

		              <?php if (sizeof($serving_sizes) == 0) { ?>
		              <?php $colspan = strlen($first_item['menu_item_price2']) > 0 ? 3 : 2;
		              ?>
		              	<th class="" colspan="<?=$colspan ?>"></th>
		              <?php } ?>
					 			</tr>
					 		</thead>
					 		<?php if(isset($menu['menu_item'])) { ?>
					 		<tbody>
							 	<?php foreach ($menu['menu_item'] as $menu_item): ?>
							 	<?php 
							 		$grouping_class = ($menu_item['menu_item_grouping'] == 1) ? 'group' : '';
							 	?>
							 	<tr class="menu__item top <?=$grouping_class ?>">
							 		<td>
							 			<h4 class="menu__item-name" style="font-family:<?=$menu_item['menu_item_font']; ?>"><?=$menu_item['menu_item_name']?></h4>
							 			<div class="menu__item-description">
							 				<?=$menu_item['menu_item_description']?>
							 			</div>
							 		</td>
							 		<td><div class="menu__item-price"><?=$menu_item['menu_item_price1'] ?></div></td>
							 		<?php if (strlen($menu_item['menu_item_price2']) > 0) { ?>
							 		<td><div class="menu__item-price"><?=$menu_item['menu_item_price2'] ?></div></td>
							 		<?php } ?>
							 	</tr>
							 	<?php
							 		$first = $menu_item['menu_subitem'][0];
							 		if(strlen($first['menu_subitem_name']) > 0) {
							 	?>
							 	<tr class="menu__item btm">
						 			<?php if(isset($menu_item['menu_subitem'])) { ?>
						 			<td>
							 			<div class="menu__item-subitems">
							 				<?php foreach ($menu_item['menu_subitem'] as $sub_item): ?>
							 					<p class="menu__item-subitem"><?=$sub_item['menu_subitem_name']?></p>
							 				<?php endforeach; ?>
							 			</div>
						 			</td>
						 			<?php if (strlen($sub_item['menu_subitem_price1']) > 0) { ?>
							 		<td><div class="menu__item-price"><?=$sub_item['menu_subitem_price1'] ?></div></td>
							 		<?php } ?>

							 		<?php if (strlen($sub_item['menu_subitem_price2']) > 0) { ?>
							 		<td><div class="menu__item-price"><?=$sub_item['menu_subitem_price2'] ?></div></td>
							 		<?php } ?>
						 			<?php } ?>
							 	</tr>
							 	<?php } ?>
							 	<?php endforeach; ?>
					 		</tbody>
					 		<?php } ?>
					 	</table>

					 </div>
					 <?php } ?>


					</div>
				</section>
				<?php } ?>
				
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
