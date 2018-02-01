<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Avant
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
     <?php
     if ( has_post_thumbnail() ) { ?>
        <figure class="featured-image index-image">
            <?php avant_post_thumbnail('avant-index-img'); ?>
        </figure>
    <?php } ?>
    
    <div class="post__content">
        
	<header class="entry-header">
            <?php avant_the_category_list(); ?>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php avant_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
                 the_excerpt();
		?>
	</div><!-- .entry-content -->

        <div class="continue-reading">
            <a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
                Continue Reading
            </a>
        </div><!-- .continue-reading -->
        
    </div><!-- .post-content -->
</article><!-- #post-<?php the_ID(); ?> -->
