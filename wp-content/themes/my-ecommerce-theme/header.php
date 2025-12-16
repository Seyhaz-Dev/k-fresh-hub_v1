<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body <?php body_class(); ?>>

<header class="site-header">
  <div class="header-inner">

  
   <div class="logo">
  <a href="<?php echo home_url('/'); ?>">
   <img 
  src="<?php echo get_template_directory_uri(); ?>/assets/images/K.f.webp" alt="Fresh Logo">

  </a>
</div>


        
        <div class="search-box">
        <form role="search" method="get" action="<?php echo home_url('/'); ?>">
            <span class="search-icon">
            <i class="fa-solid fa-magnifying-glass"></i>
            </span>
            <input type="search" name="s" placeholder="Search seafood">
        </form>
        </div>

    <!-- Hamburger -->
    <div class="menu-toggle" id="menuToggle">☰</div>
     <!-- Navbar -->
  <nav class="main-nav" id="mainNav">
    <ul class="menu">
      <li><a href="<?php echo home_url(); ?>">Home</a></li>
      <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
      <li><a href="<?php echo home_url('/contact'); ?>">Contact Us</a></li>
      <li class="auth">
        <a href="<?php echo wp_login_url(); ?>">Login</a> /
        <a href="<?php echo wp_registration_url(); ?>">Register</a>
      </li>
    </ul>
  </nav>
  </div>



 
</header>
 <script>
document.addEventListener('DOMContentLoaded', function () {
  const toggle = document.getElementById('menuToggle');
  const nav = document.getElementById('mainNav');

  toggle.addEventListener('click', function () {
    nav.classList.toggle('active');
  });
});
</script>

</body>
</html>
