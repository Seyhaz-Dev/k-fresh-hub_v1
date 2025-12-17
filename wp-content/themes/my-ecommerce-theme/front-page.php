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
  <h2 class="section-title">Featured Products</h2>

  <div class="scroller">
    <div class="scroller__track">

      <div class="product-card">
        <a href="<?php echo site_url('/product/seasonal-fish'); ?>" class="product-img-link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/salmon.jpg" alt="Seasonal Fish">
        </a>
        <h3>Fresh Fish</h3>
        <p class="price">$8.50 / kg</p>
        <button class="btn-cart">Add to Cart</button>
      </div>

      <div class="product-card">
        <a href="<?php echo site_url('/product/oyster'); ?>" class="product-img-link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/srimp.jpg" alt="Oyster">
        </a>
        <h3>Shrimp</h3>
        <p class="price">$12.00 / kg</p>
        <button class="btn-cart">Add to Cart</button>
      </div>

      <div class="product-card">
        <a href="<?php echo site_url('/product/salmon'); ?>" class="product-img-link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/crap.jpg" alt="Salmon">
        </a>
        <h3>Crab</h3>
        <p class="price">$15.00 / kg</p>
        <button class="btn-cart">Add to Cart</button>
      </div>

      <div class="product-card">
        <a href="<?php echo site_url('/product/squid'); ?>" class="product-img-link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/squid.jpg" alt="Squid">
        </a>
        <h3>Squid</h3>
        <p class="price">$9.50 / kg</p>
        <button class="btn-cart">Add to Cart</button>
      </div>

    </div>
  </div>

  <div class="show-more-container">
    <a href="<?php echo site_url('/shop'); ?>" class="show-more-link">Show More →</a>
  </div>
</section>

<section class="featured-products">
  <h2 class="section-title">Seasonal Products</h2>

  <div class="scroller">
    <div class="scroller__track">

      <div class="product-card">
        <a href="<?php echo site_url('/product/seasonal-fish'); ?>" class="product-img-link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.webp" alt="Seasonal Fish">
        </a>
        <h3>Shrimp WatPhnom</h3>
        <p class="price">$8.50 / kg</p>
        <button class="btn-cart">Add to Cart</button>
      </div>

      <div class="product-card">
        <a href="<?php echo site_url('/product/oyster'); ?>" class="product-img-link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oy.jpg" alt="Oyster">
        </a>
        <h3>Oyster Kpc</h3>
        <p class="price">$12.00 / kg</p>
        <button class="btn-cart">Add to Cart</button>
      </div>

      <div class="product-card">
        <a href="<?php echo site_url('/product/salmon'); ?>" class="product-img-link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sa.jpeg" alt="Salmon">
        </a>
        <h3>Salmon</h3>
        <p class="price">$15.00 / kg</p>
        <button class="btn-cart">Add to Cart</button>
      </div>

      <div class="product-card">
        <a href="<?php echo site_url('/product/squid'); ?>" class="product-img-link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cra.jpg" alt="Crap">
        </a>
        <h3>Crab</h3>
        <p class="price">$9.50 / kg</p>
        <button class="btn-cart">Add to Cart</button>
      </div>

    </div>
  </div>

  <div class="show-more-container">
    <a href="<?php echo site_url('/shop'); ?>" class="show-more-link">Show More →</a>
  </div>
</section>

<section class="about-seafood" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/food.jpeg');">
  <div class="about-overlay">
    <h2>About Us</h2>
    <p>
      Suspendisse ac rhoncus nisl, eu<br>
      tempor urna.
    </p>
    <a href="<?php echo site_url('/about'); ?>" class="btn-primary">Learn More</a>
  </div>
</section>
<section>
    <div class="mobile-container">
        
        <div class="promo-banner">
            Today special 10% off all salmon!
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <i class="fa-solid fa-arrows-rotate"></i>
                <span>Sustainable</span>
            </div>
            <div class="feature-card">
                <i class="fa-solid fa-temperature-arrow-down"></i>
                <span>Cold-Chain</span>
            </div>
            <div class="feature-card">
                <i class="fa-solid fa-shield-halved"></i>
                <span>Cold-Chain</span> </div>
        </div>


        <h1 class="section-text">Why Choice US</h1>

        <div class="testimonial-card">
            <div class="big-shield">
                <i class="fa-solid fa-shield-halved"></i>
            </div>
            <div class="review-content">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <div class="review-text">
                    "Amazing quality, always fresh. My family loves it."
                </div>
            </div>
        </div>

        <div class="newsletter-card">
            <h3>Stay in the loop</h3>
            <span class="subtext">Latest affordable listings, once a week</span>
            
            <form>
                <input type="email" placeholder="Enter your email">
                <button type="button" class="subscribe-btn">Subscribe</button>
            </form>

            <div class="social-row">
                <a href="#" class="social-pill">Facebook</a>
                <a href="#" class="social-pill">Telegram</a>
                <a href="#" class="social-pill">YouTube</a>
            </div>
        </div>

    </div>
</section>


 


   




<?php get_footer(); ?>