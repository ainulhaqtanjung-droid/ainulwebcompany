<?php 
$page_title = "Home";
include('includes/header.php'); 
?>

    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title animate-on-scroll">Mode Sederhana <span>Konsep ulang</span></h1>
                <p class="hero-subtitle animate-on-scroll">Temukan koleksi pakaian Islami kami yang indah yang memadukan tradisi dengan gaya kontemporer.</p>
                <a href="products.php" class="btn btn-primary animate-on-scroll">Shop Now</a>
            </div>
        </div>
        
        <!-- Animated Islamic Pattern -->
        <div class="islamic-pattern pattern-1"></div>
        <div class="islamic-pattern pattern-2"></div>
    </section>

    <section class="featured-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title animate-on-scroll">Our <span>Collections</span></h2>
                <p class="section-subtitle animate-on-scroll">Dibuat dengan tangan dengan penuh pengabdian dan perhatian terhadap detail</p>
            </div>
            
            <div class="featured-grid">
                <div class="featured-item animate-on-scroll">
                    <div class="featured-image">
                        <img src="assets/images/women-collection.png" alt="Women's Collection">
                        <div class="featured-overlay">
                            <h3>Women's Collection</h3>
                            <a href="products.php?category=women" class="btn btn-outline">View Collection</a>
                        </div>
                    </div>
                </div>
                
                <div class="featured-item animate-on-scroll">
                    <div class="featured-image">
                        <img src="assets/images/men-collection.png" alt="Men's Collection">
                        <div class="featured-overlay">
                            <h3>Men's Collection</h3>
                            <a href="products.php?category=men" class="btn btn-outline">View Collection</a>
                        </div>
                    </div>
                </div>
                
                <div class="featured-item animate-on-scroll">
                    <div class="featured-image">
                        <img src="assets/images/kids-collection.png" alt="Kids' Collection">
                        <div class="featured-overlay">
                            <h3>Kids' Collection</h3>
                            <a href="products.php?category=kids" class="btn btn-outline">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-preview-section">
        <div class="container">
            <div class="about-preview-content">
                <div class="about-preview-text animate-on-scroll">
                    <h2>Our <span>Story</span></h2>
                    <p>Didirikan pada tahun 2010, Ai Fashions berawal dari butik kecil dengan visi menciptakan pakaian sopan yang tetap bergaya. Kini, kami menjadi merek terkemuka dalam fesyen Islami, yang dikenal dengan kain berkualitas dan desainnya yang unik.</p>
                    <a href="about.php" class="btn btn-primary">Learn More</a>
                </div>
                <div class="about-preview-image animate-on-scroll">
                    <img src="assets/images/about-preview.png" alt="About Ai Fashions">
                    <div class="image-frame"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title animate-on-scroll">What Our <span>Customers Say</span></h2>
            </div>
            
            <div class="testimonials-slider animate-on-scroll">
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <i class="fas fa-quote-left"></i>
                        <p>Kualitas kain dan perhatian terhadap detail sangat luar biasa. Saya selalu menerima pujian ketika mengenakan Ai Fashions.</p>
                        <div class="testimonial-author">
                            <h4>ade</h4>
                            <span>Loyal Customer</span>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <i class="fas fa-quote-left"></i>
                        <p>Saya suka bagaimana Ai Fashions menggabungkan kesopanan dengan tren modern. Abaya mereka adalah pilihan utama saya untuk acara santai maupun formal.</p>
                        <div class="testimonial-author">
                            <h4>putri</h4>
                            <span>Fashion Blogger</span>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <i class="fas fa-quote-left"></i>
                        <p>Sebagai seorang mualaf, menemukan pakaian yang modis namun sopan adalah tantangan hingga saya menemukan Ai Fashions. Sekarang lemari pakaian saya penuh dengan koleksi mereka!</p>
                        <div class="testimonial-author">
                            <h4>ika</h4>
                            <span>Pelanggan Baru</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('includes/footer.php'); ?>