<div class="container">

    <div class="row">

        <div class="col-md-1"></div>

        <div class="col-md-5 col-sm-6">
            <div class="text-center mb-3">
                <a href="https://api.whatsapp.com/send?phone=9824882345" target="_blank" style="text-decoration: none;">

                    <div style="border: 2px solid #581E1E; height: 80px; border-radius: 7px; align-content: center;">
                        <div class="row align-items-center">
                            <div class="col-md-8 col-8">
                                <p class=" mb-0" id="fonco"
                                    style="color: #581E1E; font-size: 22px; font-family: 'Lustria', serif;">
                                    <b>Connect On WhatsApp</b>
                                </p>
                            </div>
                            <div class="col-md-4 col-4">
                                <img src="{{ asset('images/whatsapp@2x.png')}}" class="img-fluid  op" style="width: 40px;"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-5 col-sm-6">
            <div class="text-center mb-3">
                <a href="mailto:phjewellers@gmail.com" style="text-decoration: none;">
                    <div style="border: 2px solid #581E1E; height: 80px; border-radius: 7px; align-content: center;"">
                    <div class=" row align-items-center">
                        <div class="col-md-8 col-8">
                            <p class=" mb-0" id="fonco"
                                style="color: #581E1E; font-size: 22px; font-family: 'Lustria', serif;">
                                <b>Connect With Email</b>
                            </p>
                        </div>
                        <div class="col-md-4 col-4">
                            <img src="{{ asset('images/email@2x.png')}}" class="img-fluid  op" style="width: 40px;"
                                alt="">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-1"></div>

</div>

</div>


<br>
<br>
<style>
    /* --- Infinite Slider --- */
    .slider-container {
        overflow: hidden;
        width: 100%;
        padding: 20px;
        /* background: #fff; */
        /* box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); */
    }

    .slider {
        display: flex;
        gap: 15px;
        animation: scroll 25s linear infinite;
        /* desktop speed */
    }

    .slider img {
        width: 220px;
        border-radius: 12px;
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .slider img:hover {
        transform: scale(1.05);
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    /* --- Mobile Faster Speed --- */
    @media (max-width: 768px) {
        .slider {
            animation: scroll 5s linear infinite;
            /* faster loop */
        }
    }

    /* --- Lightbox --- */
    .lightbox {
        display: none;
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        justify-content: center;
        align-items: center;
        animation: fadeIn 0.5s ease;
    }

    .lightbox.active {
        display: flex;
    }

    .lightbox img {
        max-width: 90%;
        max-height: 80%;
        border-radius: 15px;
        box-shadow: 0 0 30px rgba(255, 255, 255, 0.3);
        animation: zoomIn 0.4s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes zoomIn {
        from {
            transform: scale(0.8);
            opacity: 0;
        }

        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    .close,
    .prev,
    .next {
        position: absolute;
        color: white;
        font-size: 2.5rem;
        cursor: pointer;
        padding: 10px;
        user-select: none;
        z-index: 10000;
    }

    .close {
        top: 20px;
        right: 30px;
        font-size: 3rem;
    }

    .prev {
        left: 30px;
        top: 50%;
        transform: translateY(-50%);
    }

    .next {
        right: 30px;
        top: 50%;
        transform: translateY(-50%);
    }

    .close:hover,
    .prev:hover,
    .next:hover {
        color: #ff4081;
    }
</style>

<!-- Slider -->
<div class="slider-container">
    <div class="slider" id="slider">
        <!-- Original images -->
        <img src="/images/product/01 736x736 (1).jpg" onclick="openLightbox(0)">
        <img src="/images/product/01 736x736 butti.jpg" onclick="openLightbox(1)">
        <img src="/images/product/01 736x736.jpg" onclick="openLightbox(2)">
        <img src="/images/product/01 1024x700 butti.jpg" onclick="openLightbox(3)">
        <img src="/images/product/01 butti.jpg" onclick="openLightbox(4)">
        <img src="/images/product/01 ring sec.jpg" onclick="openLightbox(5)">
        <img src="/images/product/02 butti.jpg" onclick="openLightbox(6)">
        <img src="/images/product/02 ring sec.jpg" onclick="openLightbox(7)">

        <!-- Duplicate for infinite loop -->
        <img src="/images/product/01 736x736 (1).jpg" onclick="openLightbox(0)">
        <img src="/images/product/01 736x736 butti.jpg" onclick="openLightbox(1)">
        <img src="/images/product/01 736x736.jpg" onclick="openLightbox(2)">
        <img src="/images/product/01 1024x700 butti.jpg" onclick="openLightbox(3)">
        <img src="/images/product/01 butti.jpg" onclick="openLightbox(4)">
        <img src="/images/product/01 ring sec.jpg" onclick="openLightbox(5)">
        <img src="/images/product/02 butti.jpg" onclick="openLightbox(6)">
        <img src="/images/product/02 ring sec.jpg" onclick="openLightbox(7)">
    </div>
</div>

<!-- Lightbox -->
<div id="lightbox" class="lightbox">
    <span class="close" onclick="closeLightbox()">&times;</span>
    <span class="prev" onclick="changeSlide(-1)">&#10094;</span>
    <img id="lightbox-img" src="">
    <span class="next" onclick="changeSlide(1)">&#10095;</span>
</div>

<script>
    const images = [
        "/images/product/01 736x736 (1).jpg",
        "/images/product/01 736x736 butti.jpg",
        "/images/product/01 736x736.jpg",
        "/images/product/01 1024x700 butti.jpg",
        "/images/product/01 butti.jpg",
        "/images/product/01 ring sec.jpg",
        "/images/product/02 butti.jpg",
        "/images/product/02 ring sec.jpg"
    ];

    let currentIndex = 0;

    function openLightbox(index) {
        currentIndex = index;
        document.getElementById('lightbox').classList.add('active');
        document.getElementById('lightbox-img').src = images[currentIndex];
    }

    function closeLightbox() {
        document.getElementById('lightbox').classList.remove('active');
    }

    function changeSlide(step) {
        currentIndex = (currentIndex + step + images.length) % images.length;
        document.getElementById('lightbox-img').src = images[currentIndex];
    }

    document.addEventListener("keydown", function(e) {
        if (e.key === "Escape") closeLightbox();
        if (e.key === "ArrowRight") changeSlide(1);
        if (e.key === "ArrowLeft") changeSlide(-1);
    });
</script>


<footer 

    <br>
    <br>
    <br>

    <div class="row p-4">
        <div class="col-md-3 ">
            <center>
                <div class="logo-bg-footer">
                    <img src="{{asset('images/'.$home_setting->logo) }}" class="img-fluid logo-img-footer" alt="Footer Image">
                </div>
                <br><br>
                <p class="container" style="color: white; text-align: justify;">
                    Welcome to the exquisite world of Parekh Pravinchandra Hiralal & Co., where timeless elegance meets unparalleled craftsmanship.
                </p>
                <!-- <h4 class="mt-3" >Find Us On Social Media</h4> -->
                <br>
                <div class="text-center mt-1">
                    <a href="{{ $detail->fb_link }}" class="mx-2" style="padding-right:5px;color:#fcf4a3;"><i class="fab fa-facebook-f" style="font-size: 26px;"></i></a>
                    <a href="{{ $detail->insta_link }} " class="mx-2" style="padding-right:5px;color:#fcf4a3;"><i class="fab fa-instagram" style="font-size: 26px;"></i></a>
                    <a href="{{ $detail->whatsapp_link }}" class="mx-2" style="padding-right:5px;color:#fcf4a3;"><i class="fab fa-whatsapp" style="font-size: 26px;"></i></a>


                </div>
            </center>
        </div>

        <div class="col-md-1"></div>

        <div class="col-md-2 mt-3 " style="text-align: justify;">

            <!-- <center> -->
            <h2 style="color: #FFE494; font-family: 'Aladin', system-ui; letter-spacing: 3px;">Useful Links</h2>
            <!-- </center> -->
            <br>

            <ul class="menu-list">
                <li><a class="fw-semibold text-white" href="{{ route('frontend.about_us') }}">Our Story</a></li>
                <br>
                <li><a class="fw-semibold text-white" href="{{ route('frontend.product') }}">Collections</a></li>
                <br>

                <li><a class="fw-semibold text-white" href="{{ route('frontend.update') }}">Latest News</a></li>
                <br>

                <li><a class="fw-semibold text-white" href="{{ route('frontend.blog') }}">Journal</a></li>
                <br>

                <li><a class="fw-semibold text-white" href="{{ route('frontend.getTouch') }}">Social Sparkle</a></li>
                <br>

                <li><a class="fw-semibold text-white" href="{{ route('frontend.contact_us') }}">Get In Touch</a></li>
            </ul>



        </div>

        <div class="col-md-3 mt-3">

            <!-- <center> -->
            <h2 style="color: #FFE494; font-family: 'Aladin', system-ui; letter-spacing: 3px;">Contact Us</h2>
            <!-- </center> -->
            <br>
            <div class="mt-3">
                <i class="fa-solid fa-location-dot" style="font-size: 26px; color: #FFE494;"></i>&nbsp;
                <span style="font-size: 19px; color: white;"> Trade Centre building, Kalanala, <br> Bhavnagar, Gujarat 364001
                </span>
            </div>
            <br>
            <div class="mt-2">
                <i class="fa-solid fa-location-dot" style="font-size: 26px; color: #FFE494;"></i>&nbsp;
                <span style="font-size: 19px; color: white;"> Nanavati bazaar, M.G. Road, <br> Bhavnagar, Gujarat 364001
                </span>
            </div>
            <br>
            <div class="mt-2">
                <i class="fa-solid fa-phone" style="font-size: 26px; color: #FFE494;"></i>&nbsp;
                <span style="font-size: 19px; color: white;"> 0278 222 4117</span>
            </div>
            <!-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.2718434231238!2d72.14242437478904!3d21.769737561918085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5a7e4a25d6c5%3A0xff188f0e3723e667!2sParekh%20Pravinchandra%20Hiralal%20%26%20Co.!5e0!3m2!1sen!2sin!4v1714481474430!5m2!1sen!2sin"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        </div>

        <div class="col-lg-3">
            <h2 style="color: #FFE494; font-family: 'Aladin', system-ui; letter-spacing: 3px;">Map</h2>
            <br>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.2718434231238!2d72.14242437478904!3d21.769737561918085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5a7e4a25d6c5%3A0xff188f0e3723e667!2sParekh%20Pravinchandra%20Hiralal%20%26%20Co.!5e0!3m2!1sen!2sin!4v1714481474430!5m2!1sen!2sin"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- </div> -->

    <style>
        .logo-bg-footer {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 60px;
            clip-path: polygon(0 0, 85% 0, 100% 100%, 0 100%);
            background: transparent;
            /* 🔑 no black background */
        }

        .logo-img-footer {
            height: 120px;
            /* adjust as needed */
            width: auto;
            max-width: 100%;
            transition: transform 0.3s ease;
        }

        .logo-img-footer:hover {
            transform: scale(1.05);
        }
    </style>

    <!-- </center> -->
    <br>
    <br>
    <br>

    <hr style="border: 1px solid  #FFE494;">

    <center>
        <p style="margin-bottom: -10px;  color: white;">Copyright © {{ \Carbon\Carbon::now()->year }} Parekh Pravinchandra Hiralal & Co.
            Designed by <a style="color:white;" href="https://www.apexsoftwarehouse.com">Apex Software House</a></p>
    </center>

    <br>
    <br>
</footer>


<style>
    .menu-list {
        list-style-type: disc;
        padding-left: 20px;
    }

    .menu-list li::marker {
        color: #FFE494;
        /* Change this to your desired bullet color */
    }

    .menu-list>li>a {
        text-decoration: none !important;
    }
</style>


<!-- WhatsApp Button -->
<a href="https://api.whatsapp.com/send?phone=9824882345" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp" aria-hidden="true"></i>
</a>

<style>
    /* WhatsApp Float Button */
    .whatsapp-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #25d366;
        color: white;
        padding: 15px 18px;
        border-radius: 50%;
        font-size: 24px;
        z-index: 999;
        transition: background 0.3s ease;
    }

    .whatsapp-float:hover {
        background-color: #128C7E;
    }
</style>