@extends('admin/layout')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">General Details</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">General Details</li>
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
                <h3 class="card-title">Contact Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('admin.contact_details_update',['id' => $detail->id])}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="Address">Address 1</label>
                    <input type="textarea" class="form-control" id="address" name="address" value="{{ $detail->address}}" required>
                  </div>
                  <div class="form-group">
                    <label for="Address2">Address 2</label>
                    <input type="textarea" class="form-control" id="address2" name="address2" value="{{ $detail->address2}}" required>
                  </div>
                  <div class="form-group">
                    <label for="Phone">Phone No.</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $detail->phone }}" required>
                  </div>
                  <div class="form-group">
                    <label for="fb_link">Facebook Link</label>
                    <input type="textarea" class="form-control" id="fb_link" name="fb_link" value="{{ $detail->fb_link}}" required>
                  </div>
                  <div class="form-group">
                    <label for="insta_link">Instagram Link</label>
                    <input type="text" class="form-control" id="insta_link" name="insta_link" value="{{ $detail->insta_link }}" required>
                  </div>
                  <div class="form-group">
                    <label for="insta_link">Whatsapp Link</label>
                    <input type="text" class="form-control" id="whatsapp_link" name="whatsapp_link" value="{{ $detail->whatsapp_link }}" required>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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
