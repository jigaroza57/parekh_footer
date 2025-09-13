@extends('admin/layout')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Home Page Setting</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Home Page Setting</li>
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
                <h3 class="card-title">Update Logo </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start  -->
              <form method="POST" action="{{ route('admin.home_setting_update_logo',['id' => $home_setting->id])}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputFile">Select Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" accept="image/*" name="logo">
                        <label class="custom-file-label" for="exampleInputFile">{{$home_setting->logo}}</label>
                      </div>

                    </div>
                  </div>
                  <div class="form-group">
                  <!-- <img id="" src="{{ asset('public/images/'.$home_setting->logo)}}" alt="your Photo" style="width:100px; height:100px;" /> -->
                  <img id="blah" src="{{ asset('public/images/'.$home_setting->logo)}}" alt="your Photo" style="width:100px; height:100px;" />

                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
        </div>
      </div>
            <!---Product Section------->
          <div class="row">
              <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                      <h3 class="card-title">
                        Product Section Details
                      </h3>

                    </div>
                    <form method="POST" action="{{ route('admin.home_setting_update_product_d',['id' => $home_setting->id])}}" enctype="multipart/form-data">
                    @csrf

                    <!-- /.card-header id="summernote" -->
                    <div class="card-body"> 
                    <div class="alert alert-info">
					            We have limited paragraph height to maintain UI and view for different devices to make it responsive. Before designing description keep these points in mind. MAX size 200 words 
				            </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Discription</th>
                          
                      
                        </tr>
                        </thead>
                        <tbody>
                        <!-- <tr>
                        <td><i class="fa fa-diamond fa-7x " aria-hidden="true" style="color:#996f00;"></i></td>
                        <td>Diamond</td>
                        <td>
                          <textarea name="diamond" style="width: 400px; height:100px;" required> {{$home_setting->diamond}}</textarea>
                        </td>
                        
                        </tr> -->
                        <tr>
                        <td><i class="fa-solid fa-coins fa-7x " aria-hidden="true" style="color:#996f00;"></i></td>
                        <td>Gold</td>
                        <td>
                          <textarea name="gold" style="width: 400px; height:100px;"  required>{{$home_setting->gold}}</textarea>

                        </td>
                        
                        </tr>
                        <tr>
                        <td><i class="fa-solid fa-star fa-7x" aria-hidden="true" style="color:#996f00;"></i></td>
                        <td>Silver</td>
                        <td>
                          <textarea name="silver" style="width: 400px; height:100px;"  required>{{$home_setting->silver}}</textarea>
                        </td>
                        
                        </tr>
                        <tr>
                        <td><i class="fa fa-sun-o fa-7x" aria-hidden="true" style="color:#996f00;"></i></td>
                        <td>Platinum</td>
                        <td>
                          <textarea name="platinum" style="width: 400px; height:100px;"  required>{{$home_setting->platinum}}</textarea>
                        </td>
                        
                        </tr>
                        <tr>
                        <td><i class="fa fa-empire fa-7x" aria-hidden="true" style="color:#996f00;"></i></td>
                        <td>Precious Stone</td>
                        <td>
                          <textarea name="stone" style="width: 400px; height:100px;"  required>{{$home_setting->stone}}</textarea>
                        </td>
                        
                        </tr>
                        <tr>
                        <td><i class="fa fa-gift fa-7x" aria-hidden="true" style="color:#996f00;"></i></td>
                        <td>Gift</td>
                        <td>
                          <textarea name="gift" style="width: 400px; height:100px;"  required>{{$home_setting->gift}}</textarea>
                        </td>
                        
                        </tr>
                        </tbody>
                      </table>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                </div>
              </div>
              <!-- /.col-->
           </div>
            
            <!----end product section---->
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