<?php
/**
 * Block template file: /app/public/wp-content/plugins/okcwp-acf-blocks/block-templates/testimonial.php
 *
 * Testimonial Block Template.
 *
 * @param array  $block      The block settings and attributes.
 * @param string $content    The block inner HTML (empty).
 * @param bool   $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

namespace OKCWP\Blocks\Testimonial;

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-testimonial';
if ( ! empty( $block['className'] ) ) {
	$classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
	<?php echo '#' . $id; ?>
	{
	/* Add styles that use ACF values here */
	}
</style>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
	<?php the_field( 'name' ); ?>
	<?php the_field( 'description' ); ?>
	<?php the_field( 'date' ); ?>
	<?php $photo = get_field( 'photo' ); ?>
	<?php if ( $photo ) { ?>
		<img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
	<?php } ?>
</div>
