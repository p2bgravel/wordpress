<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="<?php echo is_singular() && gcms_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?> gcms-header bg-light">
	<nav class="navbar navbar-expand-md navbar-light container">
		<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#gcmsMenuHeader" aria-controls="gcmsMenuHeader" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	
		<div class="collapse navbar-collapse <?php echo $classes; ?>" id="gcmsMenuHeader">
			<?php if ( is_singular() && gcms_can_show_post_thumbnail() ) : ?>
				<?php
					gcms_post_thumbnail();
					the_post();
					$discussion = ! is_page() && gcms_can_show_post_thumbnail() ? gcms_get_discussion_data() : null;

					$classes = 'entry-header';
				if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) {
					$classes = 'entry-header has-discussion';
				}
				?>
				<div class="<?php echo $classes; ?>">
					<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
				</div>
				<?php rewind_posts(); ?>
			<?php endif; ?> 
			<div class="form-inline my-2 my-md-0">
				<?php get_search_form(); ?>
			</div>
		</div>
	</nav>
</header>
<!-- #masthead -->

<main id="page" class="site gcms-body">
	<div id="content" class="site-content">
