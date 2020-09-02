<?php 
/*Template name: Front Page*/ 
get_header(); ?>
<div id="hero">
</div>
<div class="media">
<div id="facebook"></div>
<div id="instagram"></div>
<div id="twitter"></div>
<div id="soundcloud"></div>
<div id="spotify"></div>
<div id="apple"></div>
<div id="youtube"></div>
</div>
<div id="container">
<main id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?> -->
<!-- </header> -->
<div class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>
</article>
<?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
</main>
<aside id="sidebar" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-home' ); ?>
</aside><!-- #secondary -->
<?php get_footer(); ?>