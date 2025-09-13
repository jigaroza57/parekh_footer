@extends('frontend/layout')
@section('content')
<br>
    <br>
    <br>
    <div class="container">
        <div class="row">
           

            <div class="col-md-1" id="sub">
                <div id="thumbnails">
                @foreach(explode('|', $product->images) as $img)
                    <img src="{{ asset('images/product/'.$img) }}" class="thumbnail img-fluid mt-3"
                        style="width: 100px; height: 100px;border-radius: 10px;" alt="">
                       
                @endforeach
                </div>
            </div>

            <div class="col-md-5" id="sub">
                <div id="mainImage">
                    <img  src="{{ asset('images/product/'.$product->image) }}" class="main-img img-fluid"
                        style="width: 500px; height: 540px; border-radius: 10px;" alt="">
                </div>
            </div>

            <div class="col-md-6">
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <br>
                            <p style="color:#5a1010; font-family: 'Open Sans', SemiBold; font-size: 45px; margin-bottom: -4px;">
                                {{$product->name}}</p>


                        </div>
                        <!-- <div class="col-md-6" id="soc">
                             <div style="position: relative;  background: white; margin-top: -10px; ">
                                <img src="public/Wishlist.svg" class="mt-3 mx-4 fixed-img"
                                    style="width: 60px; position: absolute; top: 0; right: -11px; padding: 15px; border-radius: 50%; overflow: visible; border: 2px solid #5a1010;"
                                    alt="">
                            </div> 
                        </div> -->
                    </div>
                  
                    <div class="row">
                        <div class="col-md-2 col-4">
                            <img src="{{ asset('images/Stars.svg')}}" style="width: 100px; height: 100px;" alt="">
                        </div>
                        <!-- <div class="col-md-1 col-2">
                            <div class="vertical-line"
                                style=" border-left: 2px solid #707070;  height: 40px; margin-left: 20px; margin-top: 30px;">
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <p
                                style="color: #707070; font-size: 16px; font-family: 'Open Sans', Regular; margin-top: 35px;">
                                9 Customer Review</p>
                        </div> -->

                    </div>
                    <div>
                        <div style="display: flex; color: #5a1010; font-size: 20px; font-family: 'Open Sans', Regular; text-align:justify;">
                            <div style="flex: 0 0 auto; margin-right: 10px;">
                             <label>Purity</lable>
                            </div>
                            <div style="flex: 1;">
                                {{$product->karat}} KT
                                    
                            </div>
                        </div>
                    </div>
                    <div>
                        <div style="display: flex; color: #5a1010; font-size: 20px; font-family: 'Open Sans', Regular; text-align:justify;">
                            <div style="flex: 0 0 auto; margin-right: 10px;">
                            <label>Weight</lable>
                            </div>
                            <div style="flex: 1;">
                                {{$product->weight}}
                                    
                            </div>
                        </div>
                    </div>

                    <div>
                        <div style="color: #5a1010; font-size: 20px; font-family: 'Open Sans', Regular; text-align:justify;">
                        
                            <div style="flex: 1;">
                                <p id="each"
                                    style="color: #5a1010; font-size: 20px; font-family: 'Open Sans', Regular; text-align:justify;">{{$product->description}}</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    
                     @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <br>
                    <button class="conSubmit" type="button" data-toggle="modal" data-target="#detailsModal">Get More Details</button>                    <br>
                    <br>
                    <br>

                   
                    
                </div>
            </div>
        </div>
    </div>


    <br>
    <br>

<!---------------------->
<!-- The Modal -->
    <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailsModalLabel">Enter Your Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color:white;border:none;font-size:20px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="detailsForm" action="{{route('frontend.inquiry',['id'=>$product->id])}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile Number</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" required>
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                        </div>
                        <br>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



 
@endsection
@push('script')
    <!---model--->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
        // Get all elements with class "border-box"
        const borderBoxes = document.querySelectorAll('.border-box');

        // Add click event listener to each border box
        borderBoxes.forEach(box => {
            box.addEventListener('click', () => {
                // Remove dark-border class from all border boxes
                borderBoxes.forEach(b => {
                    b.classList.remove('dark-border');
                });
                // Add dark-border class to the clicked border box
                box.classList.add('dark-border');
            });
        });
    </script>
<!-- <script>





$(document).on('click', '.gallery', function(e) {

                
e.preventDefault();
$('.zoom').attr("src", $(this).attr("src"));


});


</script> -->

<script>
        // Get all elements with class "border-box"
        const borderBoxes = document.querySelectorAll('.border-box');

        // Add click event listener to each border box
        borderBoxes.forEach(box => {
            box.addEventListener('click', () => {
                // Remove dark-border class from all border boxes
                borderBoxes.forEach(b => {
                    b.classList.remove('dark-border');
                });
                // Add dark-border class to the clicked border box
                box.classList.add('dark-border');
            });
        });
    </script>

    <script>
        // Ensure that jQuery and Bootstrap JavaScript are included before this script

        $(document).ready(function () {
            // Activate the carousel with a 1-second interval
            $('#carouselExampleControls2').carousel({
                interval: 1000 // Adjusted to 1000 milliseconds (1 second)
            });

            // Start the carousel sliding automatically
            $('#carouselExampleControls2').carousel('cycle');
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const thumbnails = document.querySelectorAll('.thumbnail');

            thumbnails.forEach(function (thumbnail) {
                thumbnail.addEventListener('click', function () {
                    const mainImage = document.querySelector('.main-img');
                    const thumbnailSrc = this.getAttribute('src');
                    mainImage.setAttribute('src', thumbnailSrc);
                });
            });
        });

    </script>
@endpush