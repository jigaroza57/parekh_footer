@extends('frontend/layout')
@section('content')



<div class="container mt-3">


    <!-- Connect With Us Section -->
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="mt-5" style="color: #5b2323; font-family: 'Lustria', serif; color: #622c2c;">Connect With Us</h2>
            <img src="{{ asset('images/group-48099402.svg')}}" class="img-fluid" style="width: 320px;" alt="">
        </div>
    </div>
    <br><br>

    <div class="row" id="card">
        <div class="col-md-6 col-lg-4" style="text-align: center;">
            <div class="card-body" style="color: #5b2323 !important; height:120px; display: flex; flex-direction: column; justify-content: center;">
                <a href="tel:0278 222 4177" style="color: #5b2323 !important; text-decoration: none; text-align: center;">
                    <i class="fa fa-phone" style="font-size: 36px; margin-bottom: 10px;"></i>
                    <p style="margin: 0;"><b> {{ $detail->phone}} </b></p>
                </a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4" style="text-align: center;">
            <div class="card-body" style="color: #5b2323 !important; height:120px; display: flex; flex-direction: column; justify-content: center;">
                <a href="mailto: phjewellers@gmail.com" style="color: #5b2323 !important; text-decoration: none; text-align: center;">
                    <i class="fa fa-envelope" style="font-size: 36px; margin-bottom: 10px;"></i>
                    <p><b> phjewellers@gmail.com </b></p>
                </a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4" style="text-align: center;">
            <div class="card-body" style="color: #5b2323 !important; height:120px; display: flex; flex-direction: column; justify-content: center;">
                <a href="https://maps.app.goo.gl/U3oP7EYiTYjG2j9h7"
                    style="color: #5b2323 !important; text-decoration: none;">
                    <i class="fa fa-map-marker" style="font-size: 36px; margin-bottom: 7px;"></i>
                    <p><b> {{ $detail->address}} </b></p>
                </a>
            </div>
        </div>
    </div> <br><br>

    <!-- Form Section -->
    <div class="row map-container">
        <div class="col-md-4 mt-3">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.2718434231147!2d72.14242437478904!3d21.769737561918085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5a7e4a25d6c5%3A0xff188f0e3723e667!2sParekh%20Pravinchandra%20Hiralal%20%26%20Co.!5e0!3m2!1sen!2sin!4v1714654746665!5m2!1sen!2sin"
                width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-7 content mt-3">
            <br>
            <h2 style="font-family: 'Lustria', serif; color: #622c2c;">Send Your Message</h2> <br>
            <form id="frmContact">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="name"
                        style="background: transparent; border-color: #5b2323;" required>
                    <label for="floatingInput">Name</label>
                </div> <br>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingPassword" name="email"
                        style="background: transparent; border-color: #5b2323;" required>
                    <label for="floatingPassword">Email</label>
                </div> <br>

                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a message here" name="message" id="floatingTextarea"
                        style="background: transparent; border-color: #5b2323;" required></textarea>
                    <label for="floatingTextarea">Message</label>
                </div><br>
                <div id="msg"></div>
                <br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="conSubmit" type="submit">Submit</button>
                </div>

            </form>
        </div>
    </div> <br><br>

</div>

@endsection

@push('script')
<script>
    $('#frmContact').submit(function(e) {

        e.preventDefault();
        $('#msg').html('');
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
                    $('#msg').html(errorMessage);
                } else {

                    $('#frmContact')[0].reset();
                    $('#msg').html(response.msg);
                }

            },
            error: function(xhr, status, error) {
                console.error('AJAX Error: ' + status + error);
                $('#msg').html('An error occurred. Please try again.');
            }
        });

    });
</script>
@endpush