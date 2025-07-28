document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeMenu = document.querySelector('.close-menu');
    
    mobileMenuBtn.addEventListener('click', function() {
        mobileMenu.classList.add('active');
    });
    
    closeMenu.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
    });
    
    // Close mobile menu when clicking on a link
    const mobileLinks = document.querySelectorAll('.mobile-menu a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.remove('active');
        });
    });
    
    // Back to Top Button
    const backToTop = document.querySelector('.back-to-top');
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTop.classList.add('active');
        } else {
            backToTop.classList.remove('active');
        }
    });
    
    backToTop.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // Quran Ayah Display
    const ayahContainer = document.querySelector('.ayah-container');
    
    setTimeout(() => {
        ayahContainer.classList.add('show');
    }, 2000);
    
    // Product Filter
    const filterBtns = document.querySelectorAll('.filter-btn');
    const productItems = document.querySelectorAll('.product-item');
    const galleryFilterBtns = document.querySelectorAll('.gallery-filter .filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterBtns.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            productItems.forEach(item => {
                if (filter === 'all' || item.classList.contains(filter)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
    
    galleryFilterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            galleryFilterBtns.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            galleryItems.forEach(item => {
                if (filter === 'all' || item.classList.contains(filter)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
    
    // Quick View Modal
    const quickViewBtns = document.querySelectorAll('.quick-view');
    const quickViewModal = document.querySelector('.quick-view-modal');
    const modalOverlay = document.querySelector('.modal-overlay');
    const closeModal = document.querySelector('.close-modal');
    
    quickViewBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const productId = this.getAttribute('data-id');
            
           
            const mockProduct = {
                id: productId,
                name: 'Embroidered Abaya',
                price: 89.99,
                oldPrice: 109.99,
                description: 'This beautiful abaya features intricate embroidery with gold thread, made from premium quality fabric that ensures comfort and durability. Perfect for special occasions or everyday wear while maintaining modesty.',
                category: 'Women',
                availability: 'In Stock',
                sku: 'ABY-2023-001',
                image: 'product1.jpg'
            };
            
            // Populate the modal with product data
            const modalBody = document.querySelector('.modal-body');
            modalBody.innerHTML = `
                <div class="modal-product-image">
                    <img src="assets/images/${mockProduct.image}" alt="${mockProduct.name}">
                </div>
                <div class="modal-product-info">
                    <h2>${mockProduct.name}</h2>
                    <div class="price">
                        <span class="current-price">$${mockProduct.price.toFixed(2)}</span>
                        ${mockProduct.oldPrice ? `<span class="old-price">$${mockProduct.oldPrice.toFixed(2)}</span>` : ''}
                    </div>
                    <div class="description">
                        <p>${mockProduct.description}</p>
                    </div>
                    <div class="product-meta">
                        <span><strong>Category:</strong> ${mockProduct.category}</span>
                        <span><strong>Availability:</strong> ${mockProduct.availability}</span>
                        <span><strong>SKU:</strong> ${mockProduct.sku}</span>
                    </div>
                    <div class="quantity-selector">
                        <button class="minus-btn">-</button>
                        <input type="number" value="1" min="1">
                        <button class="plus-btn">+</button>
                    </div>
                    <div class="modal-actions">
                        <a href="#" class="btn btn-primary add-to-cart">Add to Cart</a>
                        <a href="products.php" class="btn btn-outline">View Details</a>
                    </div>
                </div>
            `;
            
            // Show the modal
            quickViewModal.classList.add('active');
            
            // Quantity selector functionality
            const minusBtn = modalBody.querySelector('.minus-btn');
            const plusBtn = modalBody.querySelector('.plus-btn');
            const quantityInput = modalBody.querySelector('input[type="number"]');
            
            minusBtn.addEventListener('click', function(e) {
                e.preventDefault();
                let value = parseInt(quantityInput.value);
                if (value > 1) {
                    quantityInput.value = value - 1;
                }
            });
            
            plusBtn.addEventListener('click', function(e) {
                e.preventDefault();
                let value = parseInt(quantityInput.value);
                quantityInput.value = value + 1;
            });
        });
    });
    
    // Close modal when clicking overlay or close button
    modalOverlay.addEventListener('click', function() {
        quickViewModal.classList.remove('active');
    });
    
    closeModal.addEventListener('click', function() {
        quickViewModal.classList.remove('active');
    });
    
    // FAQ Accordion
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    
    accordionHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const item = this.parentElement;
            item.classList.toggle('active');
            
            // Close other open items
            accordionHeaders.forEach(otherHeader => {
                if (otherHeader !== this) {
                    otherHeader.parentElement.classList.remove('active');
                }
            });
        });
    });
    
    // Contact Form Submission
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const formMessage = document.getElementById('form-message');
            
            // In a real application, you would send the form data to the server via AJAX
            // For this example, we'll simulate a successful submission
            setTimeout(() => {
                formMessage.textContent = 'Thank you for your message! We will get back to you soon.';
                formMessage.classList.add('success');
                contactForm.reset();
                
                // Hide the message after 5 seconds
                setTimeout(() => {
                    formMessage.classList.remove('success');
                    formMessage.textContent = '';
                }, 5000);
            }, 1000);
        });
    }
    
    // Newsletter Form Submission
    const newsletterForms = document.querySelectorAll('.newsletter-form');
    newsletterForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = this.querySelector('input[type="email"]');
            
            // In a real application, you would send the email to your newsletter service
            // For this example, we'll just show a thank you message
            alert('Thank you for subscribing to our newsletter!');
            emailInput.value = '';
        });
    });
    
    // Header Scroll Effect
    const header = document.querySelector('.main-header');
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
    
    // Initialize scroll animations
    initScrollAnimations();
});

// Function to handle scroll animations
function initScrollAnimations() {
    const animateElements = document.querySelectorAll('.animate-on-scroll');
    
    function checkScroll() {
        animateElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementTop < windowHeight - 100) {
                // Determine animation type based on element's position
                if (element.classList.contains('hero-title') || 
                    element.classList.contains('hero-subtitle') || 
                    element.classList.contains('btn')) {
                    element.classList.add('fade-in-up');
                } else if (element.classList.contains('about-preview-image') || 
                           element.classList.contains('featured-item')) {
                    element.classList.add('fade-in-left');
                } else if (element.classList.contains('about-preview-text') || 
                           element.classList.contains('testimonials-slider')) {
                    element.classList.add('fade-in-right');
                } else if (element.classList.contains('section-title') || 
                           element.classList.contains('section-subtitle')) {
                    element.classList.add('fade-in-down');
                } else {
                    element.classList.add('fade-in');
                }
            }
        });
    }
    
    // Check on initial load
    checkScroll();
    
    // Check on scroll
    window.addEventListener('scroll', checkScroll);
}