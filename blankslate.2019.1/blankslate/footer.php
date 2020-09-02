</div>
<footer id="footer">
<img src="https://www.holisticpronerd.com/KaiNanfelt_Music/wp-content/uploads/2020/08/kai_hdRune.png" alt="Kai logo" class="kai-logo">
<div id="copyright">
© 2020 KAI NANFELT - CODE BLAZERS
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