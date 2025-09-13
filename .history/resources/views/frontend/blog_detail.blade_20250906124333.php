<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Detail - Professional Design</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #622c2c;
            --secondary-color: #8B4A4A;
            --accent-color: #D4AF37;
            --text-primary: #2c3e50;
            --text-secondary: #7f8c8d;
            --text-light: #bdc3c7;
            --bg-light: #f8f9fa;
            --bg-white: #ffffff;
            --shadow-light: 0 2px 10px rgba(0,0,0,0.1);
            --shadow-medium: 0 8px 30px rgba(0,0,0,0.12);
            --shadow-heavy: 0 20px 60px rgba(0,0,0,0.15);
            --gradient-primary: linear-gradient(135deg, #622c2c 0%, #8B4A4A 100%);
            --gradient-overlay: linear-gradient(135deg, rgba(98, 44, 44, 0.9) 0%, rgba(139, 74, 74, 0.8) 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-primary);
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }

        /* Hero Section */
        .hero-section {
            background: var(--gradient-primary);
            padding: 80px 0 120px;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="rgba(255,255,255,0.1)" points="0,1000 1000,0 1000,1000"/></svg>');
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto 2rem;
            font-weight: 300;
        }

        .decorative-line {
            width: 80px;
            height: 3px;
            background: var(--accent-color);
            margin: 0 auto;
            border-radius: 2px;
        }

        /* Main Content */
        .main-content {
            margin-top: -60px;
            position: relative;
            z-index: 3;
        }

        .content-card {
            background: var(--bg-white);
            border-radius: 20px;
            box-shadow: var(--shadow-heavy);
            overflow: hidden;
            margin-bottom: 2rem;
            border: 1px solid rgba(98, 44, 44, 0.1);
        }

        .blog-image-container {
            position: relative;
            height: 500px;
            overflow: hidden;
        }

        .blog-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .blog-image:hover {
            transform: scale(1.05);
        }

        .image-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            height: 150px;
            display: flex;
            align-items: end;
            padding: 2rem;
        }

        .image-caption {
            color: white;
            font-size: 0.9rem;
            opacity: 0.9;
        }

        /* Article Content */
        .article-content {
            padding: 3rem;
        }

        .article-meta {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 2px solid var(--bg-light);
            flex-wrap: wrap;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .meta-item i {
            color: var(--primary-color);
        }

        .article-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-primary);
            text-align: justify;
            margin-bottom: 2rem;
        }

        .article-text p {
            margin-bottom: 1.5rem;
        }

        .article-text::first-letter {
            font-size: 4rem;
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            color: var(--primary-color);
            float: left;
            line-height: 1;
            margin: 0 0.5rem 0 0;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            flex-wrap: wrap;
        }

        .btn-custom {
            padding: 12px 30px;
            border: none;
            border-radius: 50px;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .btn-primary-custom {
            background: var(--gradient-primary);
            color: white;
            box-shadow: 0 4px 15px rgba(98, 44, 44, 0.3);
        }

        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(98, 44, 44, 0.4);
            color: white;
        }

        .btn-outline-custom {
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }

        .btn-outline-custom:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }

        /* Sidebar */
        .sidebar-card {
            background: var(--bg-white);
            border-radius: 15px;
            box-shadow: var(--shadow-medium);
            padding: 2rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(98, 44, 44, 0.1);
        }

        .sidebar-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .sidebar-content {
            color: var(--text-secondary);
            line-height: 1.6;
        }

        .tags-container {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .tag {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .tag:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(98, 44, 44, 0.3);
            color: white;
        }

        /* Social Share */
        .social-share {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .social-btn {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .social-btn.facebook { background: #3b5998; }
        .social-btn.twitter { background: #1da1f2; }
        .social-btn.linkedin { background: #0077b5; }
        .social-btn.whatsapp { background: #25d366; }

        .social-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            color: white;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .article-content {
                padding: 2rem 1.5rem;
            }
            
            .blog-image-container {
                height: 300px;
            }
            
            .article-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            
            .action-buttons {
                flex-direction: column;
            }
        }

        @media (max-width: 576px) {
            .hero-section {
                padding: 60px 0 80px;
            }
            
            .main-content {
                margin-top: -40px;
            }
            
            .social-share {
                justify-content: center;
            }
        }

        /* Animation Classes */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s ease forwards;
        }

        .fade-in-delay {
            animation-delay: 0.2s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content fade-in">
                <h1 class="hero-title">The Future of Digital Innovation</h1>
                <p class="hero-subtitle">Exploring cutting-edge technologies and their transformative impact on modern business</p>
                <div class="decorative-line"></div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="content-card fade-in">
                        <!-- Blog Image -->
                        <div class="blog-image-container">
                            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                                 alt="Blog Image" class="blog-image">
                            <div class="image-overlay">
                                <p class="image-caption">
                                    <i class="fas fa-camera me-2"></i>
                                    Professional photography showcasing modern technology
                                </p>
                            </div>
                        </div>

                        <!-- Article Content -->
                        <div class="article-content">
                            <!-- Article Meta -->
                            <div class="article-meta">
                                <div class="meta-item">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>September 6, 2025</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-user"></i>
                                    <span>John Doe</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-clock"></i>
                                    <span>8 min read</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-eye"></i>
                                    <span>1,247 views</span>
                                </div>
                            </div>

                            <!-- Article Text -->
                            <div class="article-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>

                            <!-- Action Buttons -->
                            <div class="action-buttons">
                                <a href="#" class="btn-custom btn-primary-custom">
                                    <i class="fas fa-heart"></i>
                                    Like Article
                                </a>
                                <a href="#" class="btn-custom btn-outline-custom">
                                    <i class="fas fa-bookmark"></i>
                                    Save for Later
                                </a>
                                <a href="#" class="btn-custom btn-outline-custom">
                                    <i class="fas fa-arrow-left"></i>
                                    Back to Blog
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Share Article -->
                    <div class="sidebar-card fade-in fade-in-delay">
                        <h3 class="sidebar-title">
                            <i class="fas fa-share-alt"></i>
                            Share Article
                        </h3>
                        <div class="sidebar-content">
                            <p>Share this article with your network:</p>
                            <div class="social-share mt-3">
                                <a href="#" class="social-btn facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-btn twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-btn linkedin">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="social-btn whatsapp">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Article Tags -->
                    <div class="sidebar-card fade-in fade-in-delay">
                        <h3 class="sidebar-title">
                            <i class="fas fa-tags"></i>
                            Article Tags
                        </h3>
                        <div class="sidebar-content">
                            <div class="tags-container">
                                <a href="#" class="tag">Technology</a>
                                <a href="#" class="tag">Innovation</a>
                                <a href="#" class="tag">Digital</a>
                                <a href="#" class="tag">Business</a>
                                <a href="#" class="tag">Future</a>
                                <a href="#" class="tag">Trends</a>
                            </div>
                        </div>
                    </div>

                    <!-- Author Info -->
                    <div class="sidebar-card fade-in fade-in-delay">
                        <h3 class="sidebar-title">
                            <i class="fas fa-user-circle"></i>
                            About Author
                        </h3>
                        <div class="sidebar-content">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" 
                                     alt="Author" class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover;">
                                <div>
                                    <h5 class="mb-1" style="color: var(--primary-color);">John Doe</h5>
                                    <small class="text-muted">Senior Tech Writer</small>
                                </div>
                            </div>
                            <p class="mb-0">Passionate about technology and innovation, John has been writing about digital trends for over 8 years.</p>
                        </div>
                    </div>

                    <!-- Quick Stats -->
                    <div class="sidebar-card fade-in fade-in-delay">
                        <h3 class="sidebar-title">
                            <i class="fas fa-chart-line"></i>
                            Quick Stats
                        </h3>
                        <div class="sidebar-content">
                            <div class="row text-center">
                                <div class="col-4">
                                    <h4 class="text-primary mb-1">1.2K</h4>
                                    <small>Views</small>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-primary mb-1">89</h4>
                                    <small>Likes</small>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-primary mb-1">23</h4>
                                    <small>Shares</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add smooth animations
        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.fade-in');
            elements.forEach((el, index) => {
                setTimeout(() => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });

        // Dynamic color scheme based on time
        const hour = new Date().getHours();
        if (hour >= 18 || hour <= 6) {
            document.documentElement.style.setProperty('--primary-color', '#2c3e50');
            document.documentElement.style.setProperty('--secondary-color', '#34495e');
        }
    </script>
</body>
</html>