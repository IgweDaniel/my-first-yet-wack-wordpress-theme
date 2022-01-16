<?php get_header(); 

while ( have_posts() ) :
	the_post();

  get_template_part("template-parts/content","fullPost");


 
endwhile; 
?>
  
  <script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
  <script>

    const scroll = new LocomotiveScroll({
      el: document.querySelector("#js-scroll"),
      smooth: true,
      smoothMobile: true,
      inertia: 0.75,
    });
  </script>
</body>

</html>