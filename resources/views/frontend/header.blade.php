<!-- Header -->

<nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-sm main-navbar">


    <!-- Desktop Logo -->
    <div class="logo-bg d-none d-lg-block">
        <a class="navbar-brand d-flex" href="{{ route('index') }}" title="PP Jewelers">
            <img src="{{ asset('images/' . $home_setting->logo) }}" alt="Logo" class="img-fluid logo-img">
        </a>
    </div>

    <div class=" px-lg-5 ">


        <!-- Mobile Header: Logo + Toggler -->
        <div class="d-flex w-100 align-items-center justify-content-between d-lg-none">
            <div class="logo-bg">
                <a class="navbar-brand d-flex" href="{{ route('index') }}" title="PP Jewelers">
                    <img src="{{ asset('images/' . $home_setting->logo) }}" alt="Logo" class="img-fluid logo-img" style="height: 50px;">
                </a>
            </div>
            <button class="navbar-toggler border-0" style="text-align: right; margin-left: 75px;" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><span></span></span>
            </button>
        </div>

        <!-- Desktop Navbar Links -->
        <div class="collapse navbar-collapse justify-content-end d-none d-lg-flex" id="navbarNav">

            <ul class="navbar-nav align-items-lg-center gap-lg-3 text-center">

                <li class="nav-item">
                    <a class="nav-link text-uppercase fw-semibold text-gold" href="{{ route('index') }}">Home</a>
                </li>


                <li class="nav-item"><a class="nav-link text-uppercase fw-semibold text-gold" href="{{ route('frontend.about_us') }}">Our Story</a></li>
                <li class="nav-item"><a class="nav-link text-uppercase fw-semibold text-gold" href="{{ route('frontend.product') }}">Collections</a></li>
                <li class="nav-item"><a class="nav-link text-uppercase fw-semibold text-gold" href="{{ route('frontend.update') }}">Latest News</a></li>
                <li class="nav-item"><a class="nav-link text-uppercase fw-semibold text-gold" href="{{ route('frontend.blog') }}">Journal</a></li>
                <li class="nav-item"><a class="nav-link text-uppercase fw-semibold text-gold" href="{{ route('frontend.getTouch') }}">Social Sparkle</a></li>
                <li class="nav-item"><a class="nav-link text-uppercase fw-semibold text-gold" href="{{ route('frontend.contact_us') }}">Get In Touch</a></li>

                <!-- Search Icon -->
                <li class="nav-item position-relative">
                    <a class="nav-link" href="#" onclick="toggleSearchPopup(event)">
                        <i class="fas fa-search fa-lg text-gold"></i>
                    </a>

                    <!-- Search Popup -->
                    <!-- Search Popup -->
                    <div id="searchPopup"
                        class="position-absolute p-3 mt-2 shadow rounded bg-light"
                        style="display: none; top: 40px; right: 0; width: 300px; z-index: 1050;">
                        <form action="{{ route('search') }}" method="GET" class="input-group">
                            <input type="text" name="query" class="form-control rounded-start-pill" placeholder="Search jewellery...">
                            <button type="submit" class="btn btn-outline-secondary rounded-end-pill">
                                <i class="fas fa-search text-dark"></i>
                            </button>
                        </form>
                    </div>

                </li>

            </ul>
            
        </div>

    </div>
</nav>




<div class="offcanvas offcanvas-end" style="background-color: whitesmoke; z-index: 10500;" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">

    <div class="offcanvas-header" style="background-color: #3B0000;">

        <a class="navbar-brand d-flex " href="{{ route('index') }}" title="PP Jewelers">
            <img src="{{ asset('images/' . $home_setting->logo) }}" alt="Logo" class="img-fluid logo-img">
        </a>

        <button
            type="button"
            class="btn "
            data-bs-dismiss="offcanvas"
            aria-label="Close" style="color: #FFE494;">
            <i class="fas fa-times" style="font-size: 25px;"></i> <!-- Font Awesome icon -->
        </button>

    </div>

    <div class="offcanvas-body" style="background-image: url('images/new/Footer Repeat Grid.svg'); background-size: cover; background-position: center;">


        <ul class="navbar-nav align-items-lg-center gap-lg-3 text-center">

            <li class="nav-item mt-3" style="font-weight: bold; border-bottom: 2px solid #3B0000;"><a class="nav-link text-left text-uppercase fw-semibold text-gold" href="{{ route('index') }}">Home</a></li>

            <li class="nav-item mt-3" style="font-weight: bold; border-bottom: 2px solid #3B0000;"><a class="nav-link text-left text-uppercase fw-semibold text-gold" href="{{ route('frontend.about_us') }}">Our Story</a></li>

            <li class="nav-item mt-3" style="font-weight: bold; border-bottom: 2px solid #3B0000;"><a class="nav-link text-left text-uppercase fw-semibold text-gold" href="{{ route('frontend.product') }}">Collections</a></li>

            <li class="nav-item mt-3" style="font-weight: bold; border-bottom: 2px solid #3B0000;"><a class="nav-link text-left text-uppercase fw-semibold text-gold" href="{{ route('frontend.update') }}">Latest News</a></li>

            <li class="nav-item mt-3" style="font-weight: bold; border-bottom: 2px solid #3B0000;"><a class="nav-link text-left text-uppercase fw-semibold text-gold" href="{{ route('frontend.blog') }}">Journal</a></li>

            <li class="nav-item mt-3" style="font-weight: bold; border-bottom: 2px solid #3B0000;"><a class="nav-link text-left text-uppercase fw-semibold text-gold" href="{{ route('frontend.getTouch') }}">Social Sparkle</a></li>

            <li class="nav-item mt-3" style="font-weight: bold; border-bottom: 2px solid #3B0000;"><a class="nav-link text-left text-uppercase fw-semibold text-gold" href="{{ route('frontend.contact_us') }}">Get In Touch</a></li>

            <div class="social-wrapper text-center mt-5 ">

                <h3 class="follow-title mob_follow-title2" style="color: #3B0000; font-family: 'Aladin', system-ui; letter-spacing: 3px; font-weight: bold;">Follow Us</h3>

                <div class="social-icons ">

                    <a href="{{ $detail->fb_link }}" target="_blank" class="icon fb mob_follow-title2 mob_offcanvas_social-icons2" style=" border: 2px solid #3B0000 !important;">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="{{ $detail->insta_link }}" target="_blank" class="icon insta mob_follow-title2 mob_offcanvas_social-icons2" style=" border: 2px solid #3B0000 !important;">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="{{ $detail->whatsapp_link }}" target="_blank" class="icon whatsapp mob_follow-title2 mob_offcanvas_social-icons2" style=" border: 2px solid #3B0000 !important;">
                        <i class="fab fa-whatsapp"></i>
                    </a>

                    <a href="tel:{{ $detail->phone }}" class="icon phone mob_follow-title2 mob_offcanvas_social-icons2" style=" border: 2px solid #3B0000 !important;">
                        <i class="fas fa-phone"></i>
                    </a>

                </div>

            </div>

        </ul>

    </div>

</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">


<style>
    body {
        overflow-x: hidden;
        font-family: 'Poppins', sans-serif;
    }

    .navbar-toggler:focus {
        box-shadow: none;
    }

    .navbar {
        background-color: whitesmoke;
        padding-top: 0px;
        padding-bottom: 0px;
        /* background-image:
            linear-gradient(135deg, rgba(255, 228, 148, 0.05) 25%, transparent 25%),
            linear-gradient(225deg, rgba(255, 228, 148, 0.05) 25%, transparent 25%),
            linear-gradient(45deg, rgba(255, 228, 148, 0.05) 25%, transparent 25%),
            linear-gradient(315deg, rgba(255, 228, 148, 0.05) 25%, #0d0d0d 25%);
        background-size: 20px 20px;
        background-position: 0 0, 0 10px, 10px -10px, -10px 0px;
        z-index: 999; */
    }

    .logo-bg {
        object-fit: cover;
        background: #3B0000;
        padding: 5px 80px;
        /* reduced padding so logo doesn’t look too wide */
        position: relative;
        display: flex;
        align-items: center;
        /* vertically centers the logo */
        clip-path: polygon(0 0, 85% 0, 100% 100%, 0 100%);
    }


    .logo-img {
        height: 100px;
        /* fixed height instead of vh for consistency */
        max-height: 100%;
        /* prevents overflow */
        width: 250px;
        /* keeps aspect ratio */
        transition: transform 0.3s ease;
    }

    .logo-img:hover {
        transform: scale(1.05);
    }

    .text-gold {
        color: black !important;
    }

    .nav-link {
        transition: all 0.3s ease;
        font-weight: bold;
        font-size: 14px;
        letter-spacing: 0.5px;
        position: relative;
    }

    .nav-link::after {
        content: '';
        display: block;
        height: 2px;
        width: 0;
        background: #3B0000;
        transition: width 0.3s ease;
        margin-top: 4px;
        margin-left: auto;
        margin-right: auto;
    }

    .nav-link:hover {
        color: #3B0000 !important;
        font-weight: bold !important;
        transform: translateY(-2px);
    }

    .nav-link:hover::after {
        width: 60%;
        font-weight: bold;

    }

    .navbar-toggler-icon {
        background-image: none;
        position: relative;
        width: 25px;
        height: 18px;
    }

    .navbar-toggler-icon::before,
    .navbar-toggler-icon::after,
    .navbar-toggler-icon span {
        content: '';
        position: absolute;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: black;
        transition: all 0.3s ease;
    }

    .navbar-toggler-icon::before {
        top: 0;
    }

    .navbar-toggler-icon span {
        top: 8px;
    }

    .navbar-toggler-icon::after {
        bottom: 0;
    }


    .offcanvas {
        max-width: 75% !important;
    }

    /* Optional: Responsive tweaks */
    /* Mobile Responsive Tweaks */
    /* Mobile view: place logo + toggler in same row */
    @media (max-width: 768px) {
        .logo-bg {
            padding: 0 19px;
        }

        .logo-img {
            height: 50px;
            width: auto;
        }

        .mob_follow-title2 {
            color: #3B0000;
        }

        .mob_offcanvas_social-icons2 {
            border: 2px solid #3B0000 !important;
        }


    }


    @media (max-width: 576px) {
        .logo-img {
            height: 86px !important;
            /* even smaller for extra small screens */
        }
    }
</style>

<!-- offcanvas csss start -->

<style>
    .offcanvas {
        max-width: 65%;
        /* background-color: #0d0d0d;
        background-image:
            linear-gradient(135deg, rgba(255, 228, 148, 0.05) 25%, transparent 25%),
            linear-gradient(225deg, rgba(255, 228, 148, 0.05) 25%, transparent 25%),
            linear-gradient(45deg, rgba(255, 228, 148, 0.05) 25%, transparent 25%),
            linear-gradient(315deg, rgba(255, 228, 148, 0.05) 25%, #0d0d0d 25%);
        background-size: 20px 20px;
        background-position: 0 0, 0 10px, 10px -10px, -10px 0px; */
    }

    .text-left {
        text-align: left;
    }
</style>

<!-- offcanvas csss end -->

<script>
    function toggleSearchPopup(event) {
        event.preventDefault();
        const popup = document.getElementById('searchPopup');
        popup.style.display = popup.style.display === 'block' ? 'none' : 'block';
    }

    document.addEventListener('click', function(e) {
        const popup = document.getElementById('searchPopup');
        const trigger = document.querySelector('[onclick="toggleSearchPopup(event)"]');
        if (popup && !popup.contains(e.target) && !trigger.contains(e.target)) {
            popup.style.display = 'none';
        }
    });
</script>


<!-- Mobile Search Trigger -->
<h3 class="rotate-heading d-block d-md-none" data-bs-toggle="modal" data-bs-target="#mobileSearchModal">
    <i class="fas fa-search mx-2 "></i> Search
</h3>

<!-- Mobile Search Modal -->
<div class="modal fade" id="mobileSearchModal" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered mx-3">

        <div class="modal-content rounded-4 shadow-lg border-0 overflow-hidden">

            <!-- Modal Header with Gradient -->
            <div class="modal-header border-0 text-white"
                style="background: #3B0000;">
                <h5 class="modal-title fw-bold">
                    <i class="fas fa-search me-2"></i> Search Jewellery
                </h5>
                <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body bg-light">
                <form action="{{ route('search') }}" method="GET" class="input-group shadow-sm rounded-pill overflow-hidden">
                    <input type="text"
                        name="query"
                        class="form-control border-0"
                        placeholder="Type your search..."
                        autofocus>
                    <button type="submit"
                        class="btn text-white px-4"
                        style="background-color: #3B0000;">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>

        </div>

    </div>

</div>



<style>
    .rotate-heading {
        /* display: none !important; */
        position: fixed;
        left: -98px;
        top: 50%;
        transform: rotate(90deg);
        transform-origin: center center;
        background-color: #3B0000;
        color: white;
        border: 2px solid #3B0000;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;


        /* color: white; */
        padding: 10px 10px;
        font-size: 18px;
        z-index: 9999;
        /* border-radius: 25px; */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Arial', sans-serif;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }

    /* Hover effect */
    .rotate-heading:hover {
        background-color: #FFBA50;
        border: 2px solid #3B0000;

        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        color: white;
    }

    /* Styling for icon */
    .rotate-heading .icon {
        margin-left: 10px;
        font-size: 20px;
        transition: transform 0.3s ease-in-out;
    }

    /* Icon movement on hover */
    .rotate-heading:hover .icon {
        transform: translateX(5px);
    }

    .rotate-heading {
        display: none;
        /* Hidden by default */
    }

    /* Mobile view adjustments */
    @media (max-width: 767px) {
        .rotate-heading {
            display: flex;

            text-align: center;
            /* Show only on mobile */


            position: fixed;
            left: 0;
            right: 0;
            bottom: -10px;
            top: auto;
            transform: rotate(0deg);

            background-color: #3B0000;
            border: 2px solid #3B0000;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;

            padding: 7px 15px;
            font-size: 22px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);

            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            z-index: 9999;
        }

        .rotate-heading .icon {
            font-size: 24px;
            margin-left: 12px;
        }

        .rotate-heading:hover {
            background-color: #FFBA50;
            border: 2px solid #3B0000;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            color: white;
        }
    }
</style>