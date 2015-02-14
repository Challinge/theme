<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage tmpcabira
 * @since Twenty Fourteen 1.0
 */
// Recupère le nom - permalink - de la page courrante
global $post;
$slugpage = get_post( $post )->post_name;
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


		<div id="texte-index-zero">
			<p id="en-blanc"><img src="<?php echo get_template_directory_uri(); ?>/img/fleche-droite-icone-8334-48.png"><?php echo $slugpage; ?></p>
		</div>
		<div id="texte-index-un">
			<p>

				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<?php echo the_content(); ?>
					<?php endwhile; ?>
				<?php endif; ?>

			</p>
		</div>

</article><!-- #post-## -->
