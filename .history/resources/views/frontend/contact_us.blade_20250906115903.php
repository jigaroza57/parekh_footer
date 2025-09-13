@extends('frontend/layout')
@section('content')

<style>
/* Custom Styles for Contact Page */
.contact-hero {
    background: linear-gradient(135deg, #5B2323 0%, #622c2c 100%);
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}

.contact-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="1" fill="%23FDBE51" opacity="0.1"/><circle cx="80" cy="40" r="1.5" fill="%23FDBE51" opacity="0.08"/><circle cx="40" cy="80" r="1" fill="%23FDBE51" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>') repeat;
    opacity: 0.3;
}

.hero-content {
    position: relative;
    z-index: 2;
}

.hero-title {
    font-family: 'Lustria', serif;
    color: #FDBE51;
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    animation: slideInDown 1s ease-out;
}

.hero-subtitle {
    color: #fff;
    font-size: 1.3rem;
    opacity: 0.9;
    animation: slideInUp 1s ease-out 0.3s both;
}

.contact-cards {
    margin-top: -60px;
    position: relative;
    z-index: 3;
}

.contact-card {
    background: #fff;
    border-radius: 20px;
    padding: 40px 30px;
    text-align: center;
    box-shadow: 0 15px 35px rgba(91, 35, 35, 0.1);
    border: none;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    margin-bottom: 30px;
}

.contact-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, #FDBE51, #5B2323);
    transition: left 0.6s ease;
}

.contact-card:hover::before {
    left: 0;
}

.contact-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 25px 50px rgba(91, 35, 35, 0.15);
}

.contact-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #5B2323, #622c2c);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    transition: all 0.4s ease;
    position: relative;
}

.contact-card:hover .contact-icon {
    background: linear-gradient(135deg, #FDBE51, #FDD574);
    transform: rotate(360deg) scale(1.1);
}

.contact-icon i {
    font-size: 36px;
    color: #FDBE51;
    transition: color 0.4s ease;
}

.contact-card:hover .contact-icon i {
    color: #5B2323;
}

.contact-info {
    color: #5B2323;
    font-weight: 600;
    font-size: 1.1rem;
    margin: 0;
    transition: color 0.3s ease;
}

.contact-card:hover .contact-info {
    color: #622c2c;
}

.contact-link {
    color: inherit !important;
    text-decoration: none !important;
}

.form-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

.section-title {
    font-family: 'Lustria', serif;
    color: #5B2323;
    font-size: 2.8rem;
    font-weight: 700;
    text-align: center;
    margin-bottom: 20px;
    position: relative;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #FDBE51, #5B2323);
    border-radius: 2px;
}

.form-container {
    background: #fff;
    padding: 50px;
    border-radius: 25px;
    box-shadow: 0 20px 40px rgba(91, 35, 35, 0.1);
    position: relative;
    overflow: hidden;
}

.form-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 6px;
    background: linear-gradient(90deg, #5B2323, #FDBE51, #5B2323);
}

.custom-form-control {
    background: transparent;
    border: 2px solid #e9ecef;
    border-radius: 15px;
    padding: 18px 20px;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    color: #5B2323;
}

.custom-form-control:focus {
    border-color: #FDBE51;
    box-shadow: 0 0 0 0.2rem rgba(253, 190, 81, 0.25);
    background: rgba(253, 190, 81, 0.05);
}

.custom-form-control::placeholder {
    color: #adb5bd;
}

.form-floating > label {
    color: #6c757d;
    font-weight: 500;
}

.form-floating > .custom-form-control:focus ~ label,
.form-floating > .custom-form-control:not(:placeholder-shown) ~ label {
    color: #5B2323;
    font-weight: 600;
}

.submit-btn {
    background: linear-gradient(135deg, #5B2323, #622c2c);
    border: none;
    color: #FDBE51;
    padding: 18px 50px;
    border-radius: 50px;
    font-size: 1.2rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(91, 35, 35, 0.3);
}

.submit-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #FDBE51, #FDD574);
    transition: left 0.6s ease;
    z-index: 0;
}

.submit-btn:hover::before {
    left: 0;
}

.submit-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(91, 35, 35, 0.4);
    color: #5B2323;
}

.submit-btn span {
    position: relative;
    z-index: 1;
}

.map-container {
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(91, 35, 35, 0.1);
}

.map-container iframe {
    border-radius: 25px;
    filter: grayscale(20%) contrast(1.1);
    transition: filter 0.3s ease;
}

.map-container:hover iframe {
    filter: grayscale(0%) contrast(1.2);
}

/* Animations */
@keyframes slideInDown {
    from {
        transform: translate3d(0, -100%, 0);
        visibility: visible;
    }
    to {
        transform: translate3d(0, 0, 0);
    }
}

@keyframes slideInUp {
    from {
        transform: translate3d(0, 100%, 0);
        visibility: visible;
    }
    to {
        transform: translate3d(0, 0, 0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.fade-in-up {
    animation: fadeInUp 0.8s ease-out forwards;
}

/* Success/Error Messages */
#msg {
    padding: 15px 20px;
    border-radius: 12px;
    margin: 20px 0;
    font-weight: 500;
    display: none;
}

.success-msg {
    background: linear-gradient(135deg, #d4edda, #c3e6cb);
    color: #155724;
    border-left: 4px solid #28a745;
}

.error-msg {
    background: linear-gradient(135deg, #f8d7da, #f1b0b7);
    color: #721c24;
    border-left: 4px solid #dc3545;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-subtitle {
        font-size: 1.1rem;
    }
    
    .contact-cards {
        margin-top: -40px;
    }
    
    .form-container {
        padding: 30px 20px;
    }
    
    .section-title {
        font-size: 2.2rem;
    }
}

@media (max-width: 576px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .contact-card {
        padding: 30px 20px;
    }
    
    .form-container {
        padding: 25px 15px;
    }
}
</style>

<!-- Hero Section -->
<section class="contact-hero">
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="hero-title">Connect With Us</h1>
            <p class="hero-subtitle">We'd love to hear from you. Get in touch with our expert team.</p>
        </div>
    </div>
</section>

<!-- Contact Cards Section -->
<div class="container contact-cards">
    <div class="row g-4">
        <div class="col-md-4 fade-in-up" style="animation-delay: 0.1s;">
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fa fa-phone"></i>
                </div>
                <a href="tel:{{ $detail->phone }}" class="contact-link">
                    <p class="contact-info">{{ $detail->phone }}</p>
                    <small class="text-muted">Call us directly</small>
                </a>
            </div>
        </div>
        
        <div class="col-md-4 fade-in-up" style="animation-delay: 0.2s;">
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fa fa-envelope"></i>
                </div>
                <a href="mailto:phjewellers@gmail.com" class="contact-link">
                    <p class="contact-info">phjewellers@gmail.com</p>
                    <small class="text-muted">Send us an email</small>
                </a>
            </div>
        </div>
        
        <div class="col-md-4 fade-in-up" style="animation-delay: 0.3s;">
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fa fa-map-marker-alt"></i>
                </div>
                <a href="https://maps.app.goo.gl/U3oP7EYiTYjG2j9h7" target="_blank" class="contact-link">
                    <p class="contact-info">{{ $detail->address }}</p>
                    <small class="text-muted">Visit our store</small>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Form Section -->
<section class="form-section">
    <div class="container">
        <h2 class="section-title fade-in-up">Send Your Message</h2>
        <p class="text-center text-muted mb-5 fade-in-up" style="animation-delay: 0.2s;">
            Have a question or want to work together? We're here to help!
        </p>
        
        <div class="row">
            <div class="col-lg-6 mb-4 fade-in-up" style="animation-delay: 0.3s;">
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.2718434231147!2d72.14242437478904!3d21.769737561918085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5a7e4a25d6c5%3A0xff188f0e3723e667!2sParekh%20Pravinchandra%20Hiralal%20%26%20Co.!5e0!3m2!1sen!2sin!4v1714654746665!5m2!1sen!2sin"
                        width="100%" 
                        height="500" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            
            <div class="col-lg-6 fade-in-up" style="animation-delay: 0.4s;">
                <div class="form-container">
                    <form id="frmContact">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control custom-form-control" id="floatingName" name="name" placeholder="Your Name" required>
                            <label for="floatingName">Your Name</label>
                        </div>
                        
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control custom-form-control" id="floatingEmail" name="email" placeholder="Your Email" required>
                            <label for="floatingEmail">Your Email</label>
                        </div>
                        
                        <div class="form-floating mb-4">
                            <textarea class="form-control custom-form-control" placeholder="Your Message" name="message" id="floatingMessage" style="min-height: 120px;" required></textarea>
                            <label for="floatingMessage">Your Message</label>
                        </div>
                        
                        <div id="msg"></div>
                        
                        <div class="text-center">
                            <button class="submit-btn" type="submit">
                                <span>Send Message</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('script')
<script>
$(document).ready(function() {
    // Animate elements on scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
            }
        });
    });

    document.querySelectorAll('.fade-in-up').forEach(el => {
        observer.observe(el);
    });

    // Form submission
    $('#frmContact').submit(function(e) {
        e.preventDefault();
        $('#msg').hide().html('');
        
        const submitBtn = $('.submit-btn');
        const originalText = submitBtn.find('span').text();
        
        // Loading state
        submitBtn.find('span').text('Sending...');
        submitBtn.prop('disabled', true);
        
        let url = "{{route('contact_form_process')}}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            url: url,
            data: $('#frmContact').serialize(),
            type: 'post',
            dataType: "json",
            success: function(response) {
                if (response.status === 'error') {
                    let errorMessage = '';
                    $.each(response.msg, function(key, value) {
                        errorMessage += value[0] + '<br>';
                    });
                    $('#msg').html(errorMessage).addClass('error-msg').removeClass('success-msg').fadeIn();
                } else {
                    $('#frmContact')[0].reset();
                    $('#msg').html(response.msg).addClass('success-msg').removeClass('error-msg').fadeIn();
                    
                    // Success animation
                    setTimeout(() => {
                        $('#msg').fadeOut();
                    }, 5000);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error: ' + status + error);
                $('#msg').html('An error occurred. Please try again.').addClass('error-msg').removeClass('success-msg').fadeIn();
            },
            complete: function() {
                // Reset button state
                submitBtn.find('span').text(originalText);
                submitBtn.prop('disabled', false);
            }
        });
    });
    
    // Add smooth scrolling
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 100
            }, 1000);
        }
    });
});
</script>
@endpush