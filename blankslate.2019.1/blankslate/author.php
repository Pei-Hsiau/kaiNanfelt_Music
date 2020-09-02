<?php get_header(); ?>
<div id="container-1">
<main id="content-2">
<header class="header">
<?php the_post(); ?>
<h1 class="entry-title author"><?php the_author_link(); ?></h1>
<div class="archive-meta"><?php if ( '' != get_the_author_meta( 'user_description' ) ) { echo esc_html( get_the_author_meta( 'user_description' ) ); } ?></div>
<?php rewind_posts(); ?>
</header>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</main>
<aside id="sidebar-2" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-blog' ); ?>
</aside><!-- #secondary -->
<?php get_footer(); ?>