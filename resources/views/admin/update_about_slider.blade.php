@extends('admin/layout')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">About Us Slider Setting</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">About Us Slider Setting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
 </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


      <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit About Us Slider Image</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('admin.update_about_slider',['id'=>$about_slider->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                <div class="form-group">
                <div class="alert alert-info">
					            We have limited banner height to maintain UI. We had to crop from both left & right side in view for different devices to make it responsive. Before designing banner keep these points in mind. MAX size 500px
				        </div>
                    <input type="text" value="{{$about_slider->id}}" hidden>
                    <img id="" src="{{ asset('public/images/about_slider/'.$about_slider->image)}}" alt="" style="width:100px; height:100px;" /><br>

                        <label for="exampleInputFile">Select Image</label>
                        <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" accept="image/*" name="image" required>
                            <label class="custom-file-label" for="exampleInputFile">Choose File</label>
                        </div>

                        </div>
                        <div class="form-group">
                            <img id="blah" src="#" alt="your Photo" style="width:100px; height:100px;" />
                        </div>
                  </div>
                  <div class="form-group">
                        <select name="status">Status
                        <option value="0">Visible</option>
                        <option value="1">Hidden</option>
                        </select>
                  </div>

                 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="{{ route('admin.about_us') }}" class="btn btn-primary">Back</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
      </div>  





      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection     

@push('script')
<!-- bs-custom-file-input -->
<script src="{{ asset('public/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
 <script>
  $(function () {
    bsCustomFileInput.init();
  });


  exampleInputFile.onchange = evt => {
  const [file] = exampleInputFile.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}

</script>

@endpush
     