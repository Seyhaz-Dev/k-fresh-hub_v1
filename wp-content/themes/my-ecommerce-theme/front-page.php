<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<section class="home-hero"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/ok.jpg');">
    
    <h1>Welcome to Our Website</h1>
    <p>Fresh products and quality service for everyone</p>
    <a href="<?php echo site_url('/about'); ?>" class="btn">
        Shop Now 
    </a>
</section>



<!-- <section class="home-about">
    <h2>About Us</h2>
    <p>
        We are students learning WordPress and PHP.
        This website is built as a custom theme.
    </p>
</section> -->


<!-- <section class="home-features">
    <h2>Why Choose Us?</h2>

    <div class="feature-box">
        <h3>Fast</h3>
        <p>Our website is simple and fast.</p>
    </div>

    <div class="feature-box">
        <h3>Fresh</h3>
        <p>We provide fresh and quality products.</p>
    </div>

    <div class="feature-box">
        <h3>Trusted</h3>
        <p>Built with care and responsibility.</p>
    </div>
</section> -->
<section class="categories">
    <h2>Our Categories</h2>
    <div class="category-grid">
     
        <div class="category-card">
            <a href="#fish" class="icon-circle">
                <i class="fas fa-fish"></i>
            </a>
            <h3>Fish</h3>
            <p>Fresh fish sourced from local waters.</p>
        </div>

     
        <div class="category-card">
            <a href="#shrimp" class="icon-circle">
                <i class="fas fa-shrimp"></i> <!-- Font Awesome doesn’t have shrimp icon, use custom SVG or image -->
            </a>
            <h3>Shrimp</h3>
            <p>Delicious shrimp for your favorite dishes.</p>
        </div>

        
        <div class="category-card">
            <a href="#octopus-deplay" class="icon-circle">
               <i class="fa-brands fa-octopus-deploy"></i> <!-- Crab icon can be custom SVG -->
            </a>
            <h3>octopus</h3>
            <p>Fresh crab ready to cook or grill.</p>
        </div>


        <div class="category-card">
            <a href="#squid" class="icon-circle">
                 <i class="fas fa-shrimp"></i> 
            </a>
            <h3>crayfish</h3>
            <p>High-quality squid for seafood lovers.</p>
        </div>
    </div>
</section>

<section class="featured-products">
  <h2 class="section-title">Featured Seafood</h2>

  <div class="scroller">
    <div class="scroller__track">
      
      <div class="product-card">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/salmon.jpg" alt="Fresh Logo">
     
        <h3>Fresh Fish</h3>
        <p class="price">$8.50 / kg</p>
        <button class="btn-cart">Add to Cart</button>
      </div>

      <div class="product-card">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/srimp.jpg" alt="Fresh Logo">

        <h3>Shrimp</h3>
        <p class="price">$12.00 / kg</p>
        <button class="btn-cart">Add to Cart</button>
      </div>

      <div class="product-card">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/crap.jpg" alt="Fresh Logo">

        <h3>Crab</h3>
        <p class="price">$15.00 / kg</p>
        <button class="btn-cart">Add to Cart</button>
      </div>

      <div class="product-card">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/squid.jpg" alt="Fresh Logo">

        <h3>Squid</h3>
        <p class="price">$9.50 / kg</p>
        <button class="btn-cart">Add to Cart</button>
      </div>

    </div>
  </div>
  
  <div class="show-more-container">
    <a href="<?php echo get_template_directory_uri(); ?>" class="show-more-link">Show More →</a>
  </div>
</section>

 


   




<?php get_footer(); ?>