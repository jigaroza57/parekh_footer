<div class="container" style="margin-top: 16%;">

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
                 </div>
                 </a>
             </div>
          </div>

         <div class="col-md-1"></div>

    </div>

</div>


<br>
<br>
<footer style="  background-color: #0d0d0d;
        background-image:
            linear-gradient(135deg, rgba(255, 228, 148, 0.05) 25%, transparent 25%),
            linear-gradient(225deg, rgba(255, 228, 148, 0.05) 25%, transparent 25%),
            linear-gradient(45deg, rgba(255, 228, 148, 0.05) 25%, transparent 25%),
            linear-gradient(315deg, rgba(255, 228, 148, 0.05) 25%, #0d0d0d 25%);
        background-size: 20px 20px;
        background-position: 0 0, 0 10px, 10px -10px, -10px 0px;">

    <br>
    <br>
    <br>

    <div class="row p-4">
        <div class="col-md-3 ">
            <center>
                <img src="{{asset('images/'.$home_setting->logo) }}" style="width: 40vh;" class="img-fluid" alt="Footer Image">
                <br>
                <br>
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

<style></style>