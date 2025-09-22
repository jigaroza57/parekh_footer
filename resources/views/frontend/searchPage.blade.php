@extends('frontend/layout')
@section('content')

<div class="creative-collections-wrapper">
   

   

    <!-- Creative Collections Grid -->
    <div class="creative-collections">
        <div class="p-3">
            <div class="row g-4">
                @foreach($products as $index => $product)
                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                    <a href="{{ route('frontend.product_detail', ['id' => $product->id]) }}" class="creative-card-link">
                        <div class="creative-card">
                            <!-- Image Section -->
                            <div class="image-section">
                                <div class="image-container">
                                    <img src="{{ asset('images/product/' . $product->image) }}"
                                        alt="{{ $product->name }}"
                                        style="height: 355px; object-fit: cover;"
                                        class="product-image"
                                        loading="lazy">
                                </div>
                            </div>

                            <!-- Content Section -->
                            <div class="content-section">
                                <div class="content-wrapper">
                                    <h3 class="product-title">{{ $product->name }}</h3>
                                    <p class="product-description">Exclusive handcrafted piece</p>
                                    <div class="action-area">
                                        <div class="explore-btn">
                                            <span class="btn-text">Explore Now</span>
                                            <div class="btn-arrow">
                                                <i class="bi bi-arrow-right"></i>
                                                <i class="bi bi-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Hover Effects -->
                            <div class="hover-effects">
                                <div class="border-animation">
                                    <div class="border-line top"></div>
                                    <div class="border-line right"></div>
                                    <div class="border-line bottom"></div>
                                    <div class="border-line left"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<style>
    /* Import Creative Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=PlayfairDisplay:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap');

    /* === CREATIVE VARIABLES === */
    :root {
        --primary-burgundy: #3B0000;
        --accent-gold: #FFCC61;
        --burgundy-dark: #2A0000;
        --burgundy-light: #4D0000;
        --gold-dark: #E6B555;
        --gold-light: #FFF5CC;
        --white: #FFFFFF;
        --black: #000000;
        --gray-light: #F8F9FA;
        --gray-medium: #6C757D;
        --gray-dark: #343A40;

        /* Creative Gradients */
        --gradient-primary: linear-gradient(135deg, var(--primary-burgundy) 0%, var(--burgundy-dark) 100%);
        --gradient-accent: linear-gradient(135deg, var(--accent-gold) 0%, var(--gold-dark) 100%);
        --gradient-mixed: linear-gradient(135deg, var(--primary-burgundy) 0%, var(--accent-gold) 100%);
        --gradient-glow: radial-gradient(circle, var(--accent-gold) 0%, transparent 70%);

        /* Creative Shadows */
        --shadow-soft: 0 10px 40px rgba(59, 0, 0, 0.15);
        --shadow-medium: 0 20px 60px rgba(59, 0, 0, 0.25);
        --shadow-strong: 0 30px 80px rgba(59, 0, 0, 0.35);
        --shadow-glow: 0 0 30px rgba(255, 204, 97, 0.4);

        /* Animation Variables */
        --transition-smooth: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        --transition-bounce: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    /* === BASE STYLES === */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: var(--white);
        overflow-x: hidden;
    }

    /* === CREATIVE WRAPPER === */
    .creative-collections-wrapper {
        position: relative;
        min-height: 100vh;
        background: whitesmoke;
    }

    /* === CREATIVE BACKGROUND === */
    .creative-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 1;
    }

    .bg-mesh {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
            linear-gradient(90deg, rgba(59, 0, 0, 0.03) 1px, transparent 1px),
            linear-gradient(rgba(59, 0, 0, 0.03) 1px, transparent 1px);
        background-size: 50px 50px;
        animation: meshMove 20s linear infinite;
    }

    @keyframes meshMove {
        0% {
            transform: translate(0, 0);
        }

        100% {
            transform: translate(50px, 50px);
        }
    }



    /* Gradient Orbs */
    .gradient-orbs {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .orb {
        position: absolute;
        border-radius: 50%;
        filter: blur(40px);
        animation: orbFloat 10s ease-in-out infinite;
    }

    .orb-1 {
        width: 200px;
        height: 200px;
        background: var(--gradient-accent);
        top: 20%;
        left: 10%;
        opacity: 0.1;
        animation-delay: 0s;
    }

    .orb-2 {
        width: 150px;
        height: 150px;
        background: var(--gradient-primary);
        top: 60%;
        right: 15%;
        opacity: 0.08;
        animation-delay: -3s;
    }

    .orb-3 {
        width: 180px;
        height: 180px;
        background: var(--gradient-mixed);
        bottom: 20%;
        left: 30%;
        opacity: 0.1;
        animation-delay: -6s;
    }

    @keyframes orbFloat {

        0%,
        100% {
            transform: translateY(0px) scale(1);
        }

        50% {
            transform: translateY(-50px) scale(1.1);
        }
    }

    /* === CREATIVE HEADER === */
    .creative-header {
        position: relative;
        z-index: 10;
        padding: 6rem 0 4rem;
        text-align: center;
    }

    .header-wrapper {
        max-width: 900px;
        margin: 0 auto;
    }

    /* Creative Line */
    .creative-line {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 3rem;
        opacity: 0;
        animation: slideDown 1s ease 0.3s forwards;
    }

    .line-segment {
        width: 100px;
        height: 2px;
        background: var(--gradient-accent);
        position: relative;
        overflow: hidden;
    }

    .line-segment::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, var(--white), transparent);
        animation: lineShimmer 3s ease-in-out infinite;
    }

    @keyframes lineShimmer {
        0% {
            left: -100%;
        }

        100% {
            left: 100%;
        }
    }

    .line-diamond {
        position: relative;
        width: 20px;
        height: 20px;
        margin: 0 2rem;
        transform: rotate(45deg);
        background: var(--accent-gold);
        box-shadow: 0 0 20px rgba(255, 204, 97, 0.6);
        animation: diamondPulse 2s ease-in-out infinite;
    }

    .diamond-inner {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(-45deg);
        width: 8px;
        height: 8px;
        background: var(--primary-burgundy);
        border-radius: 2px;
    }

    @keyframes diamondPulse {

        0%,
        100% {
            transform: rotate(45deg) scale(1);
            box-shadow: 0 0 20px rgba(255, 204, 97, 0.6);
        }

        50% {
            transform: rotate(45deg) scale(1.3);
            box-shadow: 0 0 30px rgba(255, 204, 97, 0.9);
        }
    }

    /* Creative Title */
    .creative-title {
        font-family: 'Playfair Display', serif;
        font-size: 4rem;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 2rem;
    }

    .title-word {
        display: inline-block;
        margin-right: 0.5rem;
        color: var(--primary-burgundy);
        opacity: 0;
        transform: translateY(50px);
        animation: wordReveal 0.8s ease forwards;
    }

    .word-1 {
        animation-delay: 0.6s;
    }

    .word-2 {
        animation-delay: 0.8s;
    }

    .word-3 {
        animation-delay: 1s;
    }

    .title-accent {
        display: inline-block;
        background: var(--gradient-accent);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        position: relative;
        opacity: 0;
        transform: translateY(50px);
        animation: wordReveal 0.8s ease 1.2s forwards;
    }

    .title-accent::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 100%;
        height: 4px;
        background: var(--gradient-accent);
        border-radius: 2px;
        transform: scaleX(0);
        animation: underlineGrow 0.8s ease 2s forwards;
    }

    @keyframes wordReveal {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes underlineGrow {
        to {
            transform: scaleX(1);
        }
    }

    /* Creative Subtitle */
    .creative-subtitle {
        margin-bottom: 3rem;
        opacity: 0;
        animation: fadeUp 1s ease 1.8s forwards;
    }

    .subtitle-text {
        font-family: 'Inter', sans-serif;
        font-size: 1.3rem;
        color: var(--gray-medium);
        margin-bottom: 1rem;
        font-weight: 400;
    }

    .subtitle-decoration {
        display: flex;
        justify-content: center;
        gap: 0.5rem;
    }

    .deco-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--accent-gold);
        animation: dotPulse 2s ease-in-out infinite;
    }

    .deco-dot:nth-child(2) {
        animation-delay: 0.3s;
    }

    .deco-dot:nth-child(3) {
        animation-delay: 0.6s;
    }

    @keyframes dotPulse {

        0%,
        100% {
            transform: scale(1);
            opacity: 0.7;
        }

        50% {
            transform: scale(1.5);
            opacity: 1;
        }
    }

    /* Creative Stats */
    .creative-stats {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 3rem;
        opacity: 0;
        animation: fadeUp 1s ease 2.2s forwards;
    }

    .stat-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1.5rem 2rem;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(20px);
        border-radius: 20px;
        border: 1px solid rgba(255, 204, 97, 0.3);
        box-shadow: var(--shadow-soft);
        transition: var(--transition-smooth);
    }

    .stat-item:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-glow);
        border-color: var(--accent-gold);
    }

    .stat-icon {
        width: 50px;
        height: 50px;
        background: var(--gradient-accent);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-burgundy);
        font-size: 1.2rem;
        box-shadow: var(--shadow-glow);
    }

    .stat-content {
        text-align: left;
    }

    .stat-number {
        display: block;
        font-family: 'Playfair Display', serif;
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--primary-burgundy);
        line-height: 1;
    }

    .stat-label {
        font-size: 0.9rem;
        color: var(--gray-medium);
        font-weight: 500;
    }

    .stat-divider {
        width: 2px;
        height: 60px;
        background: linear-gradient(to bottom, transparent, var(--accent-gold), transparent);
    }

    /* === CREATIVE COLLECTIONS === */
    .creative-collections {
        position: relative;
        z-index: 10;
        padding: 2rem 0 6rem;
    }

    .creative-card-link {
        text-decoration: none;
        display: block;
    }

    .creative-card {
        position: relative;
        height: 500px;
        background: var(--white);
        border-radius: 25px;
        overflow: hidden;
        box-shadow: var(--shadow-soft);
        transition: var(--transition-smooth);
        cursor: pointer;
        border: 2px solid transparent;
    }



    /* Card Badge */
    .card-badge-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 5;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 1.5rem;
    }

    .card-number {
        width: 45px;
        height: 45px;
        background: var(--primary-burgundy);
        color: var(--white);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 1rem;
        box-shadow: var(--shadow-medium);
        transition: var(--transition-bounce);
    }

    .creative-card:hover .card-number {
        background: var(--accent-gold);
        color: var(--primary-burgundy);
        transform: scale(1.2) rotate(360deg);
    }

    .premium-tag {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        padding: 0.7rem 1.2rem;
        border-radius: 25px;
        font-size: 0.8rem;
        font-weight: 600;
        color: var(--primary-burgundy);
        box-shadow: var(--shadow-soft);
        transition: var(--transition-smooth);
    }

    .premium-tag i {
        color: var(--accent-gold);
        font-size: 0.9rem;
    }

    .creative-card:hover .premium-tag {
        background: var(--accent-gold);
        color: var(--primary-burgundy);
        transform: scale(1.05);
    }

    .creative-card:hover .premium-tag i {
        color: var(--primary-burgundy);
    }

    /* Image Section */
    .image-section {
        position: relative;
        height: 65%;
        overflow: hidden;
    }

    .image-frame {
        position: absolute;
        top: 20px;
        left: 20px;
        right: 20px;
        bottom: 20px;
        z-index: 3;
        pointer-events: none;
    }

    .frame-corner {
        position: absolute;
        width: 30px;
        height: 30px;
        border: 3px solid var(--accent-gold);
        opacity: 0;
        transition: var(--transition-smooth);
    }

    .frame-corner.tl {
        top: 0;
        left: 0;
        border-right: none;
        border-bottom: none;
    }

    .frame-corner.tr {
        top: 0;
        right: 0;
        border-left: none;
        border-bottom: none;
    }

    .frame-corner.bl {
        bottom: 0;
        left: 0;
        border-right: none;
        border-top: none;
    }

    .frame-corner.br {
        bottom: 0;
        right: 0;
        border-left: none;
        border-top: none;
    }

    .creative-card:hover .frame-corner {
        opacity: 1;
        transform: scale(1.2);
    }

    .image-container {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        cursor: zoom-in;
    }

    .image-container::after {
        content: "";
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at center, rgba(255, 204, 97, 0.2), transparent 70%);
        opacity: 0;
        transition: opacity 0.4s ease;
        pointer-events: none;
    }

    /* .image-container:hover::after {
        opacity: 1;
    } */

    .image-container:hover .product-image {
        transform: scale(1.4);
        /* bigger zoom */
        /* filter: brightness(1.05) contrast(1.05); */
        /* make it pop */
    }


    .product-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease, filter 0.4s ease;
        transform-origin: center center;
    }

    .creative-card:hover .product-image {
        transform: none;
        filter: none;
    }

    .creative-card[data-tilt]:hover .product-image {
        transform: scale(1.2) rotate(1deg);
    }



    /* Image Glow Effect */
    .image-glow-effect {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none;
        opacity: 0;
        transition: opacity 0.6s ease;
    }

    .creative-card:hover .image-glow-effect {
        opacity: 1;
    }


    .glow-particles {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: var(--accent-gold);
        border-radius: 50%;
        animation: particleFloat 3s ease-in-out infinite;
    }

    .p1 {
        top: 20%;
        left: 20%;
        animation-delay: 0s;
    }

    .p2 {
        top: 30%;
        right: 25%;
        animation-delay: -1s;
    }

    .p3 {
        bottom: 30%;
        left: 30%;
        animation-delay: -2s;
    }

    .p4 {
        bottom: 25%;
        right: 20%;
        animation-delay: -1.5s;
    }

    @keyframes particleFloat {

        0%,
        100% {
            transform: translateY(0px);
            opacity: 0.5;
        }

        50% {
            transform: translateY(-20px);
            opacity: 1;
        }
    }

    /* Content Section */
    .content-section {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 35%;
        background: var(--white);
        padding: 2rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        transition: var(--transition-smooth);
    }

    .creative-card:hover .content-section {
        transform: translateY(-10px);
        box-shadow: 0 -10px 30px rgba(59, 0, 0, 0.1);
    }

    .content-bg {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
    }

    .bg-pattern {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image:
            linear-gradient(45deg, rgba(255, 204, 97, 0.05) 25%, transparent 25%),
            linear-gradient(-45deg, rgba(255, 204, 97, 0.05) 25%, transparent 25%);
        background-size: 20px 20px;
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .creative-card:hover .bg-pattern {
        opacity: 1;
    }

    .content-wrapper {
        position: relative;
        z-index: 2;
    }

    .product-category {
        font-size: 0.8rem;
        color: var(--accent-gold);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 0.5rem;
        opacity: 0.8;
    }

    .product-title {
        font-family: 'Playfair Display', serif;
        font-size: 1.6rem;
        font-weight: 700;
        color: var(--primary-burgundy);
        margin-bottom: 0.5rem;
        line-height: 1.3;
        transition: var(--transition-smooth);
    }

    .creative-card:hover .product-title {
        transform: none;
    }

    .product-description {
        font-size: 0.9rem;
        color: var(--gray-medium);
        margin-bottom: 1.5rem;
        line-height: 1.4;
    }

    /* Action Area */
    .action-area {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .explore-btn {
        display: flex;
        align-items: center;
        gap: 0.8rem;
        color: var(--primary-burgundy);
        font-weight: 600;
        font-size: 1rem;
        transition: var(--transition-smooth);
        cursor: pointer;
    }

    .btn-text {
        position: relative;
    }

    .btn-text::after {
        content: '';
        position: absolute;
        bottom: -3px;
        left: 0;
        width: 0;
        height: 2px;
        background: var(--accent-gold);
        transition: width 0.3s ease;
    }

    .creative-card:hover .btn-text::after {
        width: 100%;
    }

    .btn-arrow {
        position: relative;
        width: 35px;
        height: 35px;
        background: var(--accent-gold);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: var(--transition-bounce);
        overflow: hidden;
    }

    .btn-arrow i {
        position: absolute;
        font-size: 0.9rem;
        color: var(--primary-burgundy);
        transition: var(--transition-smooth);
    }

    .btn-arrow i:first-child {
        transform: translateX(0);
    }

    .btn-arrow i:last-child {
        transform: translateX(30px);
    }

    .creative-card:hover .explore-btn {
        transform: none;
    }

    .creative-card:hover .btn-arrow {
        transform: none;
    }

    .creative-card:hover .btn-arrow i {
        color: var(--accent-gold);
    }

    .creative-card:hover .btn-arrow i:first-child {
        transform: translateX(-30px);
    }

    .creative-card:hover .btn-arrow i:last-child {
        transform: translateX(0);
    }

    .rating-stars {
        display: flex;
        gap: 0.2rem;
    }

    .rating-stars i {
        color: var(--accent-gold);
        font-size: 0.9rem;
        opacity: 0.8;
        transition: var(--transition-smooth);
    }

    .creative-card:hover .rating-stars i {
        opacity: 1;
        transform: scale(1.1);
    }

    /* Hover Effects */
    .hover-effects {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none;
        opacity: 0;
        transition: opacity 0.6s ease;
    }

    .creative-card:hover .hover-effects {
        opacity: 1;
    }



    .creative-card:hover .ripple-effect {
        width: 500px;
        height: 500px;
    }

    .border-animation {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 25px;
    }

    .border-line {
        position: absolute;
        background: var(--gradient-accent);
        opacity: 0.8;
    }

    .border-line.top {
        top: 0;
        left: 0;
        width: 0;
        height: 2px;
        animation: borderTop 1s ease-in-out;
    }

    .border-line.right {
        top: 0;
        right: 0;
        width: 2px;
        height: 0;
        animation: borderRight 1s ease-in-out 0.25s;
    }

    .border-line.bottom {
        bottom: 0;
        right: 0;
        width: 0;
        height: 2px;
        animation: borderBottom 1s ease-in-out 0.5s;
    }

    .border-line.left {
        bottom: 0;
        left: 0;
        width: 2px;
        height: 0;
        animation: borderLeft 1s ease-in-out 0.75s;
    }

    @keyframes borderTop {
        to {
            width: 100%;
        }
    }

    @keyframes borderRight {
        to {
            height: 100%;
        }
    }

    @keyframes borderBottom {
        to {
            width: 100%;
        }
    }

    @keyframes borderLeft {
        to {
            height: 100%;
        }
    }

    .floating-icons {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .float-icon {
        position: absolute;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-burgundy);
        font-size: 1rem;
        box-shadow: var(--shadow-soft);
        animation: iconFloat 2s ease-in-out infinite;
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .creative-card:hover .float-icon {
        opacity: 1;
    }

    .icon-1 {
        top: 20%;
        right: 20%;
        animation-delay: 0s;
    }

    .icon-2 {
        top: 50%;
        right: 15%;
        animation-delay: -0.7s;
    }

    .icon-3 {
        bottom: 30%;
        right: 25%;
        animation-delay: -1.4s;
    }

    @keyframes iconFloat {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    /* === RESPONSIVE DESIGN === */
    @media (max-width: 1200px) {
        .creative-title {
            font-size: 3.5rem;
        }

        .creative-card {
            height: 480px;
        }

        .creative-stats {
            gap: 2rem;
        }
    }

    @media (max-width: 992px) {
        .creative-title {
            font-size: 3rem;
        }

        .creative-card {
            height: 450px;
        }

        .creative-header {
            padding: 4rem 0 3rem;
        }

        .floating-shapes .shape {
            transform: scale(0.8);
        }
    }

    @media (max-width: 768px) {
        .creative-title {
            font-size: 2.5rem;
        }

        .creative-card {
            height: 420px;
            margin-bottom: 2rem;
        }

        .creative-stats {
            flex-direction: column;
            gap: 1.5rem;
        }

        .stat-divider {
            display: none;
        }

        .creative-header {
            padding: 3rem 0 2rem;
        }

        .content-section {
            padding: 1.5rem;
        }

        .product-title {
            font-size: 1.4rem;
        }

        .floating-shapes .shape {
            transform: scale(0.6);
        }
    }

    @media (max-width: 576px) {
        .creative-title {
            font-size: 2rem;
        }

        .creative-card {
            height: 500px;
        }

        .content-section {
            padding: 1.25rem;
        }

        .product-title {
            font-size: 1.2rem;
        }

        .creative-stats {
            padding: 0 1rem;
        }

        .stat-item {
            padding: 1rem 1.5rem;
        }

        .line-segment {
            width: 60px;
        }

        .subtitle-text {
            font-size: 1.1rem;
        }
    }

    /* === ANIMATIONS === */
    @keyframes slideDown {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* === ACCESSIBILITY === */
    @media (prefers-reduced-motion: reduce) {
        * {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }
    }

    /* === PERFORMANCE OPTIMIZATIONS === */
    .creative-card {
        will-change: transform;
    }

    .product-image {
        will-change: transform;
    }
</style>

<!-- Creative Libraries -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.8.0/dist/vanilla-tilt.min.js"></script>

<script>
    // Initialize Creative Animations
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS with creative settings
        AOS.init({
            duration: 1200,
            easing: 'ease-out-cubic',
            once: true,
            offset: 150,
            delay: 50
        });



        // Creative card interactions
        const cards = document.querySelectorAll('.creative-card');

        cards.forEach((card, index) => {
            // Stagger animation delays
            card.style.animationDelay = `${index * 0.1}s`;




        });

        // Parallax effect for background elements
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const shapes = document.querySelectorAll('.shape');
            const orbs = document.querySelectorAll('.orb');

            shapes.forEach((shape, index) => {
                const speed = 0.2(index * 0.1);
                shape.style.transform = `translateY(${scrolled * speed}px)`;
            });

            orbs.forEach((orb, index) => {
                const speed = 0.1(index * 0.05);
                orb.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });

        // Creative loading animation
        setTimeout(() => {
            document.body.classList.add('creative-loaded');
        }, 500);
    });

    // Performance optimization
    let ticking = false;

    function updateParallax() {
        // Parallax logic here
        ticking = false;
    }

    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
        }
    }

    window.addEventListener('scroll', requestTick);
</script>

<script>
    document.querySelectorAll(".image-container").forEach(container => {
        const img = container.querySelector(".product-image");

        container.addEventListener("mousemove", (e) => {
            const rect = container.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;

            img.style.transformOrigin = `${x}% ${y}%`;
        });

        container.addEventListener("mouseenter", () => {
            img.style.transform = "scale(1.4)";
        });

        container.addEventListener("mouseleave", () => {
            img.style.transform = "scale(1)";
            img.style.transformOrigin = "center center";
        });
    });
</script>
@endsection
<!-- CSS & JS same as creative design -->
@push('script')
@endpush
