@extends('admin/layout')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Update</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Add Update</li>
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
        <div class="col-md-8">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Add Update Detail
              </h3>
            </div>
            <!-- /.card-header id="summernote" -->
            <form method="POST" action="{{ route('admin.store_update') }}" enctype="multipart/form-data">
                @csrf

            <div class="card-body"> 
                  <div class="form-group row">
                    <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                  </div>  
                  <div class="form-group row">
                    <label for="detail" class="col-sm-2 col-form-label">Detail</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="detail" name="detail" placeholder="Detail" required></textarea>
                    </div>
                  </div>  
            </div>
             <!-- /.card-body -->

             <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
                  <a href="{{ route('admin.updates')}}" class="btn btn-primary">Back</a>
             </div>
             </form>
          </div>
        </div>
        <!-- /.col-->
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