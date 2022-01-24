<script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
  <script>



    TweenMax.from(".cursor__follow", 2, {
      delay: 1,
      opacity: 0,
    });

    follower = document.querySelector(".cursor__follow");

    posX = 0;
    posY = 0;
    mouseX = 0;
    mouseY = 0;

    TweenMax.to({}, 0.016, {
      repeat: -1,
      onRepeat: function () {
        posX += (mouseX - posX) / 9;
        posY += (mouseY - posY) / 9;

        TweenMax.set(follower, {
          css: {
            left: posX - 40,
            top: posY - 40,
          },
        });
      },
    });

    document.addEventListener("mousemove", function (e) {
      mouseX = e.pageX;
      mouseY = e.pageY;
    });
  </script>
</body>

</html>