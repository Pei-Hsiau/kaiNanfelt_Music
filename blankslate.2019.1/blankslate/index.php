<?php get_header(); ?>
<div id="hero-1">
</div>
<div id="container">
<main id="content-2">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</main>
<div id="sidebar-2" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-blog' ); ?>
</div>
<?php get_footer(); ?>