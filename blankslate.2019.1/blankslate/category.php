<?php get_header(); ?>
<div id="container-1">
<main id="content-2">
<header class="header">
<h1 class="entry-title"><?php single_term_title(); ?></h1>
<div class="archive-meta"><?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</main>
<aside id="sidebar-2" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-blog' ); ?>
</aside><!-- #secondary -->
<?php get_footer(); ?>