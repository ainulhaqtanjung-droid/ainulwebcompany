<?php 
$page_title = "Products";
include('includes/header.php'); 
?>

    <section class="page-banner">
        <div class="container">
            <h1 class="animate-on-scroll">Our <span>Collections</span></h1>
            <p class="animate-on-scroll">Temukan mode sederhana yang berbicara kepada jiwa Anda</p>
        </div>
        <div class="banner-overlay"></div>
    </section>

    <section class="products-section">
        <div class="container">
            <div class="products-filter animate-on-scroll">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="women">Women</button>
                <button class="filter-btn" data-filter="men">Men</button>
                <button class="filter-btn" data-filter="kids">Kids</button>
                <button class="filter-btn" data-filter="new">New Arrivals</button>
                <button class="filter-btn" data-filter="sale">On Sale</button>
            </div>
            
            <div class="products-grid">
                <!-- Product items will be loaded here -->
                <?php
                // Sample product data - in a real app, this would come from a database
                $products = [
                    [
                        'id' => 1,
                        'name' => 'Embroidered Abaya',
                        'category' => 'women',
                        'price' => 1471773,
                        'old_price' => 1798870,
                        'image' => 'product1.png',
                        'tags' => ['new', 'sale']
                    ],
                    [
                        'id' => 2,
                        'name' => 'Classic Thobe',
                        'category' => 'men',
                        'price' => 981127,
                        'image' => 'product2.png',
                        'tags' => []
                    ],
                    [
                        'id' => 3,
                        'name' => 'Kids Prayer Set',
                        'category' => 'kids',
                        'price' => 654030,
                        'image' => 'product3.png',
                        'tags' => ['new']
                    ],
                    [
                        'id' => 4,
                        'name' => 'Hijab Collection',
                        'category' => 'women',
                        'price' => 408707,
                        'old_price' => 490482,
                        'image' => 'product4.png',
                        'tags' => ['sale']
                    ],
                    [
                        'id' => 5,
                        'name' => 'Casual Kameez',
                        'category' => 'men',
                        'price' => 817579,
                        'image' => 'product5.png',
                        'tags' => []
                    ],
                    [
                        'id' => 6,
                        'name' => 'Girls Dress',
                        'category' => 'kids',
                        'price' => 572256,
                        'image' => 'product6.png',
                        'tags' => ['new']
                    ],
                    [
                        'id' => 7,
                        'name' => 'Evening Abaya',
                        'category' => 'women',
                        'price' => 1635321,
                        'image' => 'product7.png',
                        'tags' => []
                    ],
                    [
                        'id' => 8,
                        'name' => 'Premium Thobe',
                        'category' => 'men',
                        'price' => 1308224,
                        'old_price' => 1798870,
                        'image' => 'product8.png',
                        'tags' => ['sale']
                    ]
                ];
                
                foreach ($products as $product) {
                    $classes = $product['category'];
                    if (!empty($product['tags'])) {
                        $classes .= ' ' . implode(' ', $product['tags']);
                    }
                    
                    echo '<div class="product-item ' . $classes . ' animate-on-scroll">';
                    echo '  <div class="product-image">';
                    echo '    <img src="assets/images/' . $product['image'] . '" alt="' . $product['name'] . '">';
                    echo '    <div class="product-overlay">';
                    echo '      <a href="#" class="quick-view" data-id="' . $product['id'] . '"><i class="fas fa-eye"></i></a>';
                    echo '      <a href="#" class="add-to-cart" data-id="' . $product['id'] . '"><i class="fas fa-shopping-cart"></i></a>';
                    echo '    </div>';
                    
                    if (in_array('new', $product['tags'])) {
                        echo '<span class="product-badge new">New</span>';
                    }
                    
                    if (in_array('sale', $product['tags'])) {
                        echo '<span class="product-badge sale">Sale</span>';
                    }
                    
                    echo '  </div>';
                    echo '  <div class="product-info">';
                    echo '    <h3>' . $product['name'] . '</h3>';
                    
                    if (isset($product['old_price'])) {
                        echo '    <div class="price">';
                        echo '      <span class="current-price">Rp' . number_format($product['price'], ) . '</span>';
                        echo '      <span class="old-price">Rp' . number_format($product['old_price'], ) . '</span>';
                        echo '    </div>';
                    } else {
                        echo '    <div class="price">';
                        echo '      <span class="current-price">Rp' . number_format($product['price'], ) . '</span>';
                        echo '    </div>';
                    }
                    
                    echo '  </div>';
                    echo '</div>';
                }
                ?>
            </div>
            
            <div class="load-more animate-on-scroll">
                <button id="load-more-btn">Load More</button>
            </div>
        </div>
    </section>

    <!-- Quick View Modal -->
    <div class="quick-view-modal">
        <div class="modal-overlay"></div>
        <div class="modal-content">
            <div class="close-modal"><i class="fas fa-times"></i></div>
            <div class="modal-body">
                <!-- Content will be loaded via AJAX -->
            </div>
        </div>
    </div>

<?php include('includes/footer.php'); ?>