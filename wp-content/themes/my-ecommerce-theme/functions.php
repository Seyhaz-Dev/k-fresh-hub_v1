<?php
/* =========================
   THEME SETUP
========================= */
function mytheme_setup() {
    // Enable dynamic title tag
    add_theme_support('title-tag');

    // Enable featured images
    add_theme_support('post-thumbnails');

    // Register primary menu
    register_nav_menus([
        'primary' => __('Primary Menu', 'mytheme'),
    ]);
}
add_action('after_setup_theme', 'mytheme_setup');


/* =========================
   ENQUEUE STYLES & SCRIPTS
========================= */
function mytheme_assets() {

    // Main theme stylesheet
    wp_enqueue_style(
        'mytheme-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        [],
        '6.4.0'
    );

    // Example: enqueue Swiper if needed
    // wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
    // wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'mytheme_assets');


/* =========================
   REGISTER PRODUCT POST TYPE
========================= */
function mytheme_register_products() {
    register_post_type('product', [
        'labels' => [
            'name' => __('Products', 'mytheme'),
            'singular_name' => __('Product', 'mytheme')
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-cart',
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true, // Enable Gutenberg support
    ]);
}
add_action('init', 'mytheme_register_products');


/* =========================
   REGISTER PRODUCT CATEGORY TAXONOMY
========================= */
function mytheme_register_product_category() {
    register_taxonomy('product_category', 'product', [
        'labels' => [
            'name' => __('Product Categories', 'mytheme'),
            'singular_name' => __('Product Category', 'mytheme'),
        ],
        'hierarchical' => true,
        'public' => true,
        'show_in_rest' => true, // Gutenberg support
    ]);
}
add_action('init', 'mytheme_register_product_category');


/* =========================
   PRODUCT META BOX
========================= */
function mytheme_product_meta() {
    add_meta_box(
        'product_details',
        __('Product Details', 'mytheme'),
        'mytheme_product_meta_callback',
        'product',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'mytheme_product_meta');


function mytheme_product_meta_callback($post) {
    // Use nonce for security
    wp_nonce_field('mytheme_save_product_meta', 'mytheme_product_meta_nonce');

    $price = get_post_meta($post->ID, '_price', true);
    $stock = get_post_meta($post->ID, '_stock', true);
    ?>
    <p>
        <label for="price"><?php _e('Price ($)', 'mytheme'); ?></label><br>
        <input type="number" id="price" name="price" value="<?php echo esc_attr($price); ?>" step="0.01" style="width:100px;">
    </p>

    <p>
        <label for="stock"><?php _e('Stock', 'mytheme'); ?></label><br>
        <input type="number" id="stock" name="stock" value="<?php echo esc_attr($stock); ?>" style="width:100px;">
    </p>
    <?php
}


/* =========================
   SAVE PRODUCT META
========================= */
function mytheme_save_product_meta($post_id) {

    // Verify nonce
    if (!isset($_POST['mytheme_product_meta_nonce']) || !wp_verify_nonce($_POST['mytheme_product_meta_nonce'], 'mytheme_save_product_meta')) {
        return;
    }

    // Avoid autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // Save price
    if (isset($_POST['price'])) {
        update_post_meta($post_id, '_price', sanitize_text_field($_POST['price']));
    }

    // Save stock
    if (isset($_POST['stock'])) {
        update_post_meta($post_id, '_stock', sanitize_text_field($_POST['stock']));
    }
}
add_action('save_post', 'mytheme_save_product_meta');
