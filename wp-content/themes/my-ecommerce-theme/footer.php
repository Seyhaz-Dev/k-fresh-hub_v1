</main>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<footer class="site-footer">
  <div class="footer-container">

  
    <div class="footer-col">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/K.f.webp" alt="Fresh Logo">
        <p class="footer-text">
        Fresh seafood delivered with quality and care.  <br>
        We work closely with trusted fishermen and suppliers to bring you  <br>
        freshest catch straight from the ocean to your table. <br> 
        Our commitment is to provide safe, sustainable,
      </p>
    </div>


 
    <div class="footer-col">
      <h4><i class="fa-solid fa-link"></i> Quick Links</h4>
      <ul>
        <li><a href="<?php echo home_url(); ?>"><i class="fa-solid fa-house"></i> Home</a></li>
        <li><a href="<?php echo home_url('/about'); ?>"><i class="fa-solid fa-circle-info"></i> About</a></li>
        <li><a href="<?php echo home_url('/contact'); ?>"><i class="fa-solid fa-envelope"></i> Contact Us</a></li>
      </ul>
    </div>

 
    <div class="footer-col">
      <h4><i class="fa-solid fa-user"></i> Account</h4>
      <ul>
        <li><a href="<?php echo wp_login_url(); ?>"><i class="fa-solid fa-right-to-bracket"></i> Login</a></li>
        <li><a href="<?php echo wp_registration_url(); ?>"><i class="fa-solid fa-user-plus"></i> Register</a></li>
      </ul>
    </div>

  
    <div class="footer-col">
      <h4><i class="fa-solid fa-share-nodes"></i> Follow Us</h4>
      <ul class="social-links">
        <li><a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
        <li><a href="#"><i class="fa-brands fa-telegram"></i> Telegram</a></li>
      </ul>
    </div>

  </div>


  <div class="footer-bottom">
    <p>© <?php echo date('Y'); ?> Fresh Seafood. All rights reserved.</p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
