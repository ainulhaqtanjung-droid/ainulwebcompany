<?php 
$page_title = "Gallery";
include('includes/header.php'); 
?>

    <section class="page-banner">
        <div class="container">
            <h1 class="animate-on-scroll">Fashion <span>Gallery</span></h1>
            <p class="animate-on-scroll">Lihatlah koleksi kami menjadi nyata</p>
        </div>
        <div class="banner-overlay"></div>
    </section>

    <section class="gallery-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title animate-on-scroll">Our <span>Collections</span></h2>
                <p class="section-subtitle animate-on-scroll">Jelajahi peragaan busana kami</p>
            </div>
            
            <div class="gallery-filter animate-on-scroll">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="women">Women</button>
                <button class="filter-btn" data-filter="men">Men</button>
                <button class="filter-btn" data-filter="kids">Kids</button>
                <button class="filter-btn" data-filter="events">Events</button>
            </div>
            
            <div class="gallery-grid">
                <div class="gallery-item women animate-on-scroll">
                    <img src="assets/images/gallery1.jpg" alt="Women's Collection">
                    <div class="gallery-overlay">
                        <h3>Spring Collection 2023</h3>
                        <a href="assets/images/gallery1.jpg" class="view-image" data-lightbox="gallery"><i class="fas fa-expand"></i></a>
                    </div>
                </div>
                
                <div class="gallery-item men animate-on-scroll">
                    <img src="assets/images/gallery2.jpg" alt="Men's Collection">
                    <div class="gallery-overlay">
                        <h3>Premium Thobes</h3>
                        <a href="assets/images/gallery2.jpg" class="view-image" data-lightbox="gallery"><i class="fas fa-expand"></i></a>
                    </div>
                </div>
                
                <div class="gallery-item events animate-on-scroll">
                    <img src="assets/images/gallery3.jpg" alt="Fashion Show">
                    <div class="gallery-overlay">
                        <h3>Jakarta Fashion Week</h3>
                        <a href="assets/images/gallery3.jpg" class="view-image" data-lightbox="gallery"><i class="fas fa-expand"></i></a>
                    </div>
                </div>
                
                <div class="gallery-item women animate-on-scroll">
                    <img src="assets/images/gallery4.jpg" alt="Evening Abayas">
                    <div class="gallery-overlay">
                        <h3>Evening Elegance</h3>
                        <a href="assets/images/gallery4.jpg" class="view-image" data-lightbox="gallery"><i class="fas fa-expand"></i></a>
                    </div>
                </div>
                
                <div class="gallery-item kids animate-on-scroll">
                    <img src="assets/images/gallery5.jpg" alt="Kids Collection">
                    <div class="gallery-overlay">
                        <h3>Little Believers</h3>
                        <a href="assets/images/gallery5.jpg" class="view-image" data-lightbox="gallery"><i class="fas fa-expand"></i></a>
                    </div>
                </div>
                
                <div class="gallery-item men animate-on-scroll">
                    <img src="assets/images/gallery6.jpg" alt="Casual Wear">
                    <div class="gallery-overlay">
                        <h3>Casual Fridays</h3>
                        <a href="assets/images/gallery6.jpg" class="view-image" data-lightbox="gallery"><i class="fas fa-expand"></i></a>
                    </div>
                </div>
                
                <div class="gallery-item events animate-on-scroll">
                    <img src="assets/images/gallery7.jpg" alt="Charity Event">
                    <div class="gallery-overlay">
                        <h3>Charity Gala</h3>
                        <a href="assets/images/gallery7.jpg" class="view-image" data-lightbox="gallery"><i class="fas fa-expand"></i></a>
                    </div>
                </div>
                
                <div class="gallery-item women animate-on-scroll">
                    <img src="assets/images/gallery8.jpg" alt="Hijab Collection">
                    <div class="gallery-overlay">
                        <h3>Hijab Styles</h3>
                        <a href="assets/images/gallery8.jpg" class="view-image" data-lightbox="gallery"><i class="fas fa-expand"></i></a>
                    </div>
                </div>
                
                <div class="gallery-item kids animate-on-scroll">
                    <img src="assets/images/gallery9.jpg" alt="Eid Collection">
                    <div class="gallery-overlay">
                        <h3>Eid Special</h3>
                        <a href="assets/images/gallery9.jpg" class="view-image" data-lightbox="gallery"><i class="fas fa-expand"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="gallery-video animate-on-scroll">
                <h3>Behind the Scenes</h3>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/example" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

<?php include('includes/footer.php'); ?>