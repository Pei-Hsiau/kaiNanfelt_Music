<?php get_header(); ?>
<div id="container-1">
<main id="content-2">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
<?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
</main>
<aside id="sidebar-2" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-blog' ); ?>
</aside><!-- #secondary -->
</div>
<footer id="footer">
<img src="https://www.holisticpronerd.com/KaiNanfelt_Music/wp-content/uploads/2020/08/kai_hdRune.png" alt="Kai logo" class="kai-logo">
<div id="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div>
</footer>
<?php wp_footer(); ?>
<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("menu").style.background = "rgba(255, 255, 255, 0.9)";
    document.getElementById("site-title").style.fontSize = "3.5em";
    document.getElementById("site-title").style.float = "left";
    document.getElementById("site-title").style.margin = "20px 0 10px 0";
}else {
    document.getElementById("menu").style.background = "rgba(255, 255, 255, 0.4)";
    document.getElementById("menu").style.padding = "10px";
    document.getElementById("site-title").style.fontSize = "6.8em";
    document.getElementById("site-title").style.float = "none";
  }
}
</script>
</body>
</html>