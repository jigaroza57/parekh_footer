<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-sm main-navbar">
    <div class="container-fluid px-lg-5 d-flex align-items-center justify-content-between py-2">

        <!-- Logo -->
        <a class="navbar-brand d-flex " href="{{ route('index') }}" title="PP Jewelers">
            <img src="{{ asset('images/' . $home_setting->logo) }}" alt="Logo" class="img-fluid logo-img">
        </a>

        <!-- Toggler Button -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><span></span></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-lg-center gap-lg-3 text-center">

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



<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
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
    <div class="offcanvas-body">



        <ul class="navbar-nav align-items-lg-center gap-lg-3 text-center">

            <li class="nav-item "><a class="nav-link text-left text-uppercase fw-semibold text-gold" href="{{ route('frontend.about_us') }}">Our Story</a></li>
            <li class="nav-item "><a class="nav-link text-left text-uppercase fw-semibold text-gold" href="{{ route('frontend.product') }}">Collections</a></li>
            <li class="nav-item "><a class="nav-link text-left text-uppercase fw-semibold text-gold" href="{{ route('frontend.update') }}">Latest News</a></li>
            <li class="nav-item "><a class="nav-link text-left text-uppercase fw-semibold text-gold" href="{{ route('frontend.blog') }}">Journal</a></li>
            <li class="nav-item "><a class="nav-link text-left text-uppercase fw-semibold text-gold" href="{{ route('frontend.getTouch') }}">Social Sparkle</a></li>
            <li class="nav-item "><a class="nav-link text-left text-uppercase fw-semibold text-gold" href="{{ route('frontend.contact_us') }}">Get In Touch</a></li>



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
        background-color: #0d0d0d;
        background-image:
            linear-gradient(135deg, rgba(255, 228, 148, 0.05) 25%, transparent 25%),
            linear-gradient(225deg, rgba(255, 228, 148, 0.05) 25%, transparent 25%),
            linear-gradient(45deg, rgba(255, 228, 148, 0.05) 25%, transparent 25%),
            linear-gradient(315deg, rgba(255, 228, 148, 0.05) 25%, #0d0d0d 25%);
        background-size: 20px 20px;
        background-position: 0 0, 0 10px, 10px -10px, -10px 0px;
        z-index: 999;
    }

    .logo-img {
        height: 13vh;
        transition: transform 0.3s ease;
    }

    .logo-img:hover {
        transform: scale(1.05);
    }

    .text-gold {
        color: #FFE494 !important;
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
        background: #FFC258;
        transition: width 0.3s ease;
        margin-top: 4px;
        margin-left: auto;
        margin-right: auto;
    }

    .nav-link:hover {
        color: #FFC258 !important;
        transform: translateY(-2px);
    }

    .nav-link:hover::after {
        width: 60%;
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
        background-color: #FFE494;
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

    /* Optional: Responsive tweaks */
    @media (max-width: 576px) {
        .logo-img {
            height: 10vh;
        }

        .navbar-nav {
            gap: 1rem;
            padding-top: 1rem;
        }
    }
</style>

<!-- offcanvas csss start -->

<style>
    .offcanvas {
        max-width: 65%;
        background-color: #0d0d0d;
        background-image:
            linear-gradient(135deg, rgba(255, 228, 148, 0.05) 25%, transparent 25%),
            linear-gradient(225deg, rgba(255, 228, 148, 0.05) 25%, transparent 25%),
            linear-gradient(45deg, rgba(255, 228, 148, 0.05) 25%, transparent 25%),
            linear-gradient(315deg, rgba(255, 228, 148, 0.05) 25%, #0d0d0d 25%);
        background-size: 20px 20px;
        background-position: 0 0, 0 10px, 10px -10px, -10px 0px;
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