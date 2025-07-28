// More advanced scroll animations
document.addEventListener('DOMContentLoaded', function() {
    // Parallax effect for hero section
    const heroSection = document.querySelector('.hero-section');
    
    if (heroSection) {
        window.addEventListener('scroll', function() {
            const scrollPosition = window.pageYOffset;
            heroSection.style.backgroundPositionY = scrollPosition * 0.5 + 'px';
        });
    }
    
    // Animated counter for experience badge
    const experienceBadge = document.querySelector('.experience-badge span');
    
    if (experienceBadge) {
        const targetNumber = parseInt(experienceBadge.textContent);
        let currentNumber = 0;
        const duration = 2000; // Animation duration in ms
        const increment = targetNumber / (duration / 16); // 60fps
        
        const animateCounter = () => {
            currentNumber += increment;
            if (currentNumber < targetNumber) {
                experienceBadge.textContent = Math.floor(currentNumber);
                requestAnimationFrame(animateCounter);
            } else {
                experienceBadge.textContent = targetNumber + '+';
            }
        };
        
        // Start animation when element is in view
        const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                animateCounter();
                observer.unobserve(experienceBadge);
            }
        });
        
        observer.observe(experienceBadge);
    }
    
    // Rotating Quran ayahs
    const ayahText = document.querySelector('.ayah-text');
    const ayahs = [
        {
            text: "O children of Adam, We have bestowed upon you clothing to conceal your private parts and as adornment.",
            source: "Surah Al-A'raf, 7:26"
        },
        {
            text: "And Allah has made for you garments that protect you from the heat and coats that protect you from your [own] violence.",
            source: "Surah An-Nahl, 16:81"
        },
        {
            text: "Indeed, Allah loves those who repent and those who purify themselves.",
            source: "Surah Al-Baqarah, 2:222"
        }
    ];
    
    if (ayahText) {
        let currentAyah = 0;
        
        function rotateAyah() {
            ayahText.style.animation = 'fadeIn 1s ease';
            setTimeout(() => {
                ayahText.textContent = ayahs[currentAyah].text;
                ayahText.setAttribute('data-source', ayahs[currentAyah].source);
                currentAyah = (currentAyah + 1) % ayahs.length;
            }, 500);
            
            setTimeout(() => {
                ayahText.style.animation = '';
            }, 1500);
        }
        
        // Rotate ayah every 10 seconds
        setInterval(rotateAyah, 10000);
        
        // Initial fade-in
        setTimeout(() => {
            ayahText.style.animation = 'fadeIn 1s ease';
        }, 2000);
    }
    
    // Islamic pattern hover effect
    const islamicPatterns = document.querySelectorAll('.islamic-pattern');
    
    islamicPatterns.forEach(pattern => {
        pattern.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1) rotate(5deg)';
            this.style.opacity = '0.3';
        });
        
        pattern.addEventListener('mouseleave', function() {
            this.style.transform = '';
            this.style.opacity = '0.1';
        });
    });
    
    // Neon text hover effect
    const neonTextElements = document.querySelectorAll('.hero-title span, .section-title span, .page-banner h1 span');
    
    neonTextElements.forEach(element => {
        element.addEventListener('mouseenter', function() {
            this.classList.add('neon-text');
        });
        
        element.addEventListener('mouseleave', function() {
            this.classList.remove('neon-text');
        });
    });
    
    // Product hover effect with Islamic pattern
    const productItems = document.querySelectorAll('.product-item');
    
    productItems.forEach(item => {
        const pattern = document.createElement('div');
        pattern.className = 'islamic-pattern product-pattern';
        pattern.style.backgroundImage = 'url(assets/images/pattern3.png)';
        pattern.style.width = '100%';
        pattern.style.height = '100%';
        pattern.style.position = 'absolute';
        pattern.style.top = '0';
        pattern.style.left = '0';
        pattern.style.opacity = '0';
        pattern.style.transition = 'opacity 0.3s ease';
        item.querySelector('.product-image').appendChild(pattern);
        
        item.addEventListener('mouseenter', function() {
            pattern.style.opacity = '0.2';
        });
        
        item.addEventListener('mouseleave', function() {
            pattern.style.opacity = '0';
        });
    });
    
    // Animated border gradient
    const animatedBorders = document.querySelectorAll('.featured-item, .team-member, .testimonial-item');
    
    animatedBorders.forEach(item => {
        item.style.position = 'relative';
        item.style.overflow = 'hidden';
        
        const borderOverlay = document.createElement('div');
        borderOverlay.style.position = 'absolute';
        borderOverlay.style.top = '0';
        borderOverlay.style.left = '0';
        borderOverlay.style.width = '100%';
        borderOverlay.style.height = '3px';
        borderOverlay.style.background = 'linear-gradient(90deg, var(--primary-color), var(--secondary-color), var(--primary-color))';
        borderOverlay.style.backgroundSize = '200% 100%';
        borderOverlay.style.animation = 'borderGradient 3s linear infinite';
        item.appendChild(borderOverlay);
        
        // Add keyframes dynamically
        const style = document.createElement('style');
        style.textContent = `
            @keyframes borderGradient {
                0% { background-position: 0% 50%; }
                100% { background-position: 200% 50%; }
            }
        `;
        document.head.appendChild(style);
    });
    
    // Quran page turn animation
    const quranPage = document.querySelector('.quran-page');
    
    if (quranPage) {
        setInterval(() => {
            quranPage.classList.toggle('turn');
        }, 5000);
    }
});