<?php 
$page_title = "Contact";
include('includes/header.php'); 
?>

    <section class="page-banner">
        <div class="container">
            <h1 class="animate-on-scroll">Get In <span>Touch</span></h1>
            <p class="animate-on-scroll">Kami ingin mendengar kabar dari Anda</p>
        </div>
        <div class="banner-overlay"></div>
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info animate-on-scroll">
                    <h2>Contact <span>Information</span></h2>
                    <p>Jika Anda memiliki pertanyaan tentang produk kami atau memerlukan bantuan dengan pesanan Anda, hubungi kami melalui saluran di bawah ini.</p>
                    
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info-content">
                            <h3>Address</h3>
                            <p>Medan, Indonesia</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <div class="info-content">
                            <h3>Phone</h3>
                            <p>+62 123 4567 890</p>
                            <p>Layanan Pelanggan: Senin-Jumat, 09.00-17.00</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div class="info-content">
                            <h3>Email</h3>
                            <p>info@noorfashions.com</p>
                            <p>orders@noorfashions.com</p>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <h3>Follow Us</h3>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="contact-form animate-on-scroll">
                    <h2>Send Us a <span>Message</span></h2>
                    <form id="contactForm" action="process-contact.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" name="subject" placeholder="Subject">
                        </div>
                        
                        <div class="form-group">
                            <textarea name="message" placeholder="Your Message" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                    
                    <div id="form-message"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section animate-on-scroll">
        <div class="container">
            <h2>Our <span>Location</span></h2>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31111.329326192157!2d98.65371607628488!3d3.5875981794912817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131cc1c3eb2fd%3A0x23d431c8a6908262!2sMedan%2C%20Kota%20Medan%2C%20Sumatera%20Utara!5e1!3m2!1sid!2sid!4v1753499671518!5m2!1sid!2sid" width="1200" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <section class="faq-section animate-on-scroll">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Frequently Asked <span>Questions</span></h2>
                <p class="section-subtitle">Find answers to common questions about our products and services</p>
            </div>
            
            <div class="faq-accordion">
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h3>What payment methods do you accept?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="accordion-content">
                        <p>We accept all major credit cards (Visa, MasterCard, American Express), PayPal, bank transfers, and cash on delivery (for local orders in Jakarta). All transactions are secure and encrypted.</p>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h3>How long does shipping take?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="accordion-content">
                        <p>For domestic orders within Indonesia, delivery typically takes 3-5 business days. International shipping times vary by destination but generally take 7-14 business days. Express shipping options are available at checkout.</p>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h3>What is your return policy?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="accordion-content">
                        <p>We offer a 14-day return policy for unworn, unwashed items with original tags attached. Sale items are final sale unless defective. Please contact our customer service to initiate a return and receive a return authorization number.</p>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h3>Do you offer custom sizing?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Yes, we offer custom sizing for most of our garments at an additional cost. Please allow 2-3 weeks for production of custom-sized items. Contact our customer service for more information and to provide your measurements.</p>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h3>Are your fabrics ethically sourced?</h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Absolutely. We're committed to ethical fashion. All our fabrics are sourced from suppliers who adhere to fair labor practices and sustainable production methods. Many of our fabrics are organic or recycled.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('includes/footer.php'); ?>