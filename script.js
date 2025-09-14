// Initialize AOS (Animate On Scroll)
AOS.init({
    duration: 1200,
    once: true,
    offset: 100,
    easing: 'ease-out-cubic'
});

// Counter Animation for Statistics
function animateCounters() {
    const counters = document.querySelectorAll('.stat-number[data-count]');
    
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.getAttribute('data-count'));
                const duration = 2500;
                const startTime = performance.now();
                
                const updateCounter = (currentTime) => {
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    
                    // Easing function for smooth animation
                    const easeOutCubic = 1 - Math.pow(1 - progress, 3);
                    const current = Math.floor(target * easeOutCubic);
                    
                    counter.textContent = current.toLocaleString();
                    
                    if (progress < 1) {
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target.toLocaleString();
                    }
                };
                
                requestAnimationFrame(updateCounter);
                observer.unobserve(counter);
            }
        });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
}

// Dynamic Sparkle Generation
function createDynamicSparkles() {
    const sparklesContainer = document.querySelector('.sparkles');
    const maxSparkles = 8;
    
    function createSparkle() {
        if (sparklesContainer.children.length >= maxSparkles) return;
        
        const sparkle = document.createElement('div');
        sparkle.className = 'sparkle dynamic-sparkle';
        
        // Random positioning
        sparkle.style.top = Math.random() * 100 + '%';
        sparkle.style.left = Math.random() * 100 + '%';
        sparkle.style.animationDelay = Math.random() * 2 + 's';
        sparkle.style.animationDuration = (Math.random() * 3 + 2) + 's';
        
        // Random size variation
        const size = Math.random() * 3 + 3;
        sparkle.style.width = size + 'px';
        sparkle.style.height = size + 'px';
        
        sparklesContainer.appendChild(sparkle);
        
        // Remove sparkle after animation
        setTimeout(() => {
            if (sparkle.parentNode) {
                sparkle.remove();
            }
        }, 4000);
    }
    
    // Create sparkles periodically
    setInterval(createSparkle, 1500);
    
    // Create initial sparkles
    for (let i = 0; i < 3; i++) {
        setTimeout(createSparkle, i * 500);
    }
}

// Enhanced Hover Effects for Statistics
function enhanceStatHovers() {
    const statItems = document.querySelectorAll('.stat-item');
    
    statItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            // Add glowing effect
            item.style.background = 'linear-gradient(135deg, rgba(255, 255, 255, 1) 0%, rgba(212, 175, 55, 0.15) 100%)';
            item.style.borderColor = 'rgba(212, 175, 55, 0.4)';
            
            // Animate the icon
            const icon = item.querySelector('.stat-icon');
            if (icon) {
                icon.style.transform = 'scale(1.2) translateY(-5px)';
                icon.style.transition = 'all 0.3s ease';
            }
            
            // Animate the number
            const number = item.querySelector('.stat-number');
            if (number) {
                number.style.transform = 'scale(1.05)';
                number.style.transition = 'all 0.3s ease';
            }
        });

        item.addEventListener('mouseleave', () => {
            // Reset styles
            item.style.background = 'linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(212, 175, 55, 0.05) 50%, rgba(255, 255, 255, 0.9) 100%)';
            item.style.borderColor = 'rgba(212, 175, 55, 0.15)';
            
            // Reset icon
            const icon = item.querySelector('.stat-icon');
            if (icon) {
                icon.style.transform = '';
            }
            
            // Reset number
            const number = item.querySelector('.stat-number');
            if (number) {
                number.style.transform = '';
            }
        });
    });
}

// Parallax Effect for Background Elements
function initParallax() {
    const hexagonPattern = document.querySelector('.hexagon-pattern');
    const particles = document.querySelectorAll('.particle');
    const geometricDecorations = document.querySelectorAll('.geometric-decoration');
    
    let ticking = false;
    
    function updateParallax() {
        const scrolled = window.pageYOffset;
        const rate = scrolled * -0.5;
        const rateParticles = scrolled * -0.3;
        const rateGeo = scrolled * -0.2;
        
        if (hexagonPattern) {
            hexagonPattern.style.transform = `translateY(${rate}px)`;
        }
        
        particles.forEach((particle, index) => {
            const speed = (index + 1) * 0.1;
            particle.style.transform = `translateY(${rateParticles * speed}px)`;
        });
        
        geometricDecorations.forEach((decoration, index) => {
            const speed = (index + 1) * 0.15;
            decoration.style.transform = `translateY(${rateGeo * speed}px)`;
        });
        
        ticking = false;
    }
    
    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
        }
    }
    
    window.addEventListener('scroll', requestTick);
}

// Image Lazy Loading with Fade Effect
function initLazyLoading() {
    const images = document.querySelectorAll('img');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.style.opacity = '0';
                img.style.transition = 'opacity 0.6s ease';
                
                img.onload = () => {
                    img.style.opacity = '1';
                };
                
                // If image is already cached
                if (img.complete) {
                    img.style.opacity = '1';
                }
                
                observer.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// Smooth scroll for any internal links
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Feature Items Stagger Animation
function initFeatureStagger() {
    const featureItems = document.querySelectorAll('.feature-item');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const items = Array.from(featureItems);
                items.forEach((item, index) => {
                    setTimeout(() => {
                        item.style.transform = 'translateY(0)';
                        item.style.opacity = '1';
                    }, index * 200);
                });
                observer.disconnect();
            }
        });
    }, { threshold: 0.3 });
    
    // Initially hide items
    featureItems.forEach(item => {
        item.style.transform = 'translateY(30px)';
        item.style.opacity = '0';
        item.style.transition = 'all 0.6s ease';
    });
    
    if (featureItems.length > 0) {
        observer.observe(featureItems[0]);
    }
}

// Luxury Emblem Interactive Effect
function initEmblemInteraction() {
    const emblem = document.querySelector('.luxury-emblem');
    const emblemInner = document.querySelector('.emblem-inner');
    
    if (emblem && emblemInner) {
        emblem.addEventListener('mouseenter', () => {
            emblemInner.style.animationPlayState = 'paused';
            emblem.style.transform = 'translateY(-8px) scale(1.1)';
        });
        
        emblem.addEventListener('mouseleave', () => {
            emblemInner.style.animationPlayState = 'running';
            emblem.style.transform = '';
        });
    }
}

// Geometric Decorations Interactive Hover
function initGeometricInteractions() {
    const geometricElements = document.querySelectorAll('.geometric-decoration');
    
    geometricElements.forEach(element => {
        element.addEventListener('mouseenter', () => {
            element.style.transform += ' scale(1.2)';
            element.style.opacity = '0.8';
            element.style.transition = 'all 0.3s ease';
        });
        
        element.addEventListener('mouseleave', () => {
            element.style.transform = element.style.transform.replace(' scale(1.2)', '');
            element.style.opacity = '0.6';
        });
    });
}

// Performance optimization: Debounce resize events
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Handle responsive adjustments
function handleResize() {
    const width = window.innerWidth;
    const particles = document.querySelectorAll('.particle');
    
    // Reduce particles on mobile for better performance
    if (width < 768) {
        particles.forEach((particle, index) => {
            if (index > 3) {
                particle.style.display = 'none';
            }
        });
    } else {
        particles.forEach(particle => {
            particle.style.display = 'block';
        });
    }
}

// Initialize all functions when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all features
    animateCounters();
    createDynamicSparkles();
    enhanceStatHovers();
    initParallax();
    initLazyLoading();
    initSmoothScroll();
    initFeatureStagger();
    initEmblemInteraction();
    initGeometricInteractions();
    
    // Handle resize events
    const debouncedResize = debounce(handleResize, 250);
    window.addEventListener('resize', debouncedResize);
    handleResize(); // Initial call
});

// Preload critical images
function preloadImages() {
    const imageUrls = [
        'https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
        'https://images.unsplash.com/photo-1611652022419-a9419f74343d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
        'https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
        'https://images.unsplash.com/photo-1573408301185-9146fe634ad0?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
    ];
    
    imageUrls.forEach(url => {
        const img = new Image();
        img.src = url;
    });
}

// Start preloading images
preloadImages();

// Add loading state management
window.addEventListener('load', function() {
    document.body.classList.add('loaded');
    
    // Trigger any final animations after page load
    setTimeout(() => {
        const sparkles = document.querySelectorAll('.sparkle');
        sparkles.forEach(sparkle => {
            sparkle.style.animationDelay = Math.random() * 2 + 's';
        });
    }, 500);
});