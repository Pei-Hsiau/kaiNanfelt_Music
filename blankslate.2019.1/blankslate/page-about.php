<?php get_header(); ?>
<div id="container-1">
<div id="content-1">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<!-- <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?> -->
</header>
<div class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</article>
<?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
</div>

<div id="sidebar-1" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-inner' ); ?>
</div><!-- #secondary -->
</div>
<div id ="music"></div>
<h2><span id="word">MUSIC</span></h2>
<div class="play-music">
<div class="row-music">
<img src="https://www.holisticpronerd.com/KaiNanfelt_Music/wp-content/uploads/2020/08/kai_plays-1.jpg" alt="equilibrium"
class="picture">
</div>
<div class="row-music">
<div id="icon-1"></div>
  <div class="play-button">
  <button type="submit" value="play" class="play"><a href="https://open.spotify.com/">Play</a></button>
</div>
</div>
<div class="row-music">
<div id="icon-2"></div>
<div class="play-button">
  <button type="submit" value="play" class="play"><a href="https://www.apple.com/apple-music/">Play</a></button>
</div>
</div>
<div class="row-music">
<div id="icon-3"></div>
<div class="play-button">
  <button type="submit" value="download" class="play"><a href="https://www.apple.com/apple-music/">Download</a></button>
</div>
</div>
<div class="row-music">
<div id="icon-4"></div>
<div class="play-button">
  <button type="submit" value="play" class="play"><a href="https://www.deezer.com/us/">Play</a></button>
</div>
</div>
<div class="row-music">
<div id="icon-5"></div>
<div class="play-button">
  <button type="submit" value="play" class="play"><a href="https://music.amazon.com/home">Play</a></button>
</div>
</div>
<div class="row-music">
<div id="icon-6"></div>
<div class="play-button">
  <button type="submit" value="play" class="play"><a href="https://www.youtube.com/">Play</a></button>
</div>
</div>
<div class="row-music">
<div id="icon-7"></div>
<div class="play-button">
  <button type="submit" value="play" class="play"><a href="https://www.pandora.com/">Play</a></button>
</div>
</div>
</div>
<div id="contact">
<h2><span id="word">CONTACT</span></h2>
    <form action="/action_page.php">
  <div class="row-1">
    <div class="col-25">
      <label for="fname">FULL NAME</label>
    </div>
    <div class="col-35">
      <input type="text" id="fname" name="fullname" placeholder="Your name..">
    </div>
  </div>
  <div class="row-1">
    <div class="col-25">
      <label for="EAdress">EMAIL ADDRESS</label>
    </div>
    <div class="col-35">
      <input type="text" id="lname" name="Emailadress" placeholder="Your Email Adress..">
    </div>
  </div>
  <div class="row-2">
    <div class="col-25-1">
      <label for="subject">MESSAGE</label>
    </div>
    <div class="col-35-1">
      <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <label class="container">SUBSCRIBE TO UPDATES
  <input type="checkbox" checked="checked">
  <span class="checkmark"></span>
</label>
  <div class="row-3">
    <button type="submit" value="Submit" class="submit">SUBMIT</button>
  </div>
  </form>
</div>



<?php get_footer(); ?>