@extends('admin/layout')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Jewellery Section</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
 </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      <!---Para card---->

      <div class="row">
              <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                      <h3 class="card-title">
                        Jewellery Section Detail
                      </h3>

                    </div>
                    <form method="POST" action="{{ route('admin.jewellery_section_detail',['id'=>$jewellery_detail->id]) }}" enctype="multipart/form-data">
                    @csrf

                    <!-- /.card-header id="summernote" -->
                    <div class="card-body"> 
                            <!-- <div class="alert alert-info">
					            We have limited paragraph height to maintain UI and view for different devices to make it responsive. Before designing description keep these points in mind. MAX size 1000 words 
				            </div> -->
                           
                            <textarea  name="detail" id="summernote" required>
                            {{$jewellery_detail->detail}}
                            </textarea>               
            
                    
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                </div>
              </div>
              <!-- /.col-->
           </div>
            


      <!----end para card-->

      <!---image 1 card---->

      <div class="row">
              <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                      <h3 class="card-title">
                        Jewellery Section Images 1
                      </h3>

                    </div>
                    <form method="POST" action="{{ route('admin.jewellery_section_image1',['id'=>$jewellery_detail->id]) }}" enctype="multipart/form-data">
                    @csrf

                    <!-- /.card-header id="summernote" -->
                    <div class="card-body"> 
                            <!-- <div class="alert alert-info">
					            We have limited paragraph height to maintain UI and view for different devices to make it responsive. Before designing description keep these points in mind. MAX size 1000 words 
				            </div> -->
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputFile">Select Image 1</label>
                                    
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" accept="image/*" name="image_1" >
                                        <label class="custom-file-label" for="exampleInputFile">{{$jewellery_detail->image_1}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <label for="exampleInputFile"></label>
                                    <div class="form-group">
                                        <!-- <img id="" src="{{ asset('public/images/'.$jewellery_detail->image_1)}}" alt="your Photo" style="width:100px; height:100px;" /> -->
                                        <img id="blah" src="{{ asset('public/images/jewellery/'.$jewellery_detail->image_1)}}" alt="your Photo" style="width:100px; height:100px;" />
                                    </div>  
                                </div>
                              </div>
                            </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                </div>
              </div>
              <!-- /.col-->
           </div>
            


      <!----end image card-->
      <!---image 2 card---->

      <div class="row">
              <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                      <h3 class="card-title">
                        Jewellery Section Images 2
                      </h3>

                    </div>
                    <form method="POST" action="{{ route('admin.jewellery_section_image2',['id'=>$jewellery_detail->id]) }}" enctype="multipart/form-data">
                    @csrf

                    <!-- /.card-header id="summernote" -->
                    <div class="card-body"> 
                            <!-- <div class="alert alert-info">
					            We have limited paragraph height to maintain UI and view for different devices to make it responsive. Before designing description keep these points in mind. MAX size 1000 words 
				            </div> -->
                            <div class="form-group">
                              
                              <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputFile">Select Image 2</label>
                                    
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image_2" accept="image/*" name="image_2" >
                                        <label class="custom-file-label" for="image_2">{{$jewellery_detail->image_2}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <label for="exampleInputFile"></label>
                                    <div class="form-group">
                                        <!-- <img id="" src="{{ asset('public/images/'.$jewellery_detail->image_1)}}" alt="your Photo" style="width:100px; height:100px;" /> -->
                                        <img id="blah_2" src="{{ asset('public/images/jewellery/'.$jewellery_detail->image_2)}}" alt="your Photo" style="width:100px; height:100px;" />
                                    </div>  
                                </div>
                              </div>
                            </div>
                    
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                </div>
              </div>
              <!-- /.col-->
           </div>
            


      <!----end image card-->
       <!---image 3 card---->

       <div class="row">
              <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                      <h3 class="card-title">
                        Jewellery Section Images 3
                      </h3>

                    </div>
                    <form method="POST" action="{{ route('admin.jewellery_section_image3',['id'=>$jewellery_detail->id]) }}" enctype="multipart/form-data">
                    @csrf

                    <!-- /.card-header id="summernote" -->
                    <div class="card-body"> 
                            <!-- <div class="alert alert-info">
					            We have limited paragraph height to maintain UI and view for different devices to make it responsive. Before designing description keep these points in mind. MAX size 1000 words 
				            </div> -->
                            <div class="form-group">
                              
                              
                              <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputFile">Select Image 3</label>
                                    
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image_3" accept="image/*" name="image_3" >
                                        <label class="custom-file-label" for="image_3">{{$jewellery_detail->image_3}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <label for="exampleInputFile"></label>
                                    <div class="form-group">
                                        <!-- <img id="" src="{{ asset('public/images/'.$jewellery_detail->image_1)}}" alt="your Photo" style="width:100px; height:100px;" /> -->
                                        <img id="blah_3" src="{{ asset('public/images/jewellery/'.$jewellery_detail->image_3)}}" alt="your Photo" style="width:100px; height:100px;" />
                                    </div>  
                                </div>
                              </div>
                            </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                </div>
              </div>
              <!-- /.col-->
           </div>
            


      <!----end image card-->
       <!---image 4 card---->

       <div class="row">
              <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                      <h3 class="card-title">
                        Jewellery Section Images 4
                      </h3>

                    </div>
                    <form method="POST" action="{{ route('admin.jewellery_section_image4',['id'=>$jewellery_detail->id]) }}" enctype="multipart/form-data">
                    @csrf

                    <!-- /.card-header id="summernote" -->
                    <div class="card-body"> 
                            <!-- <div class="alert alert-info">
					            We have limited paragraph height to maintain UI and view for different devices to make it responsive. Before designing description keep these points in mind. MAX size 1000 words 
				            </div> -->
                            <div class="form-group">
                             
                              
                             
                              <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputFile">Select Image 4</label>
                                    
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image_4" accept="image/*" name="image_4" >
                                        <label class="custom-file-label" for="image_4">{{$jewellery_detail->image_4}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <label for="exampleInputFile"></label>
                                    <div class="form-group">
                                        <!-- <img id="" src="{{ asset('public/images/'.$jewellery_detail->image_1)}}" alt="your Photo" style="width:100px; height:100px;" /> -->
                                        <img id="blah_4" src="{{ asset('public/images/jewellery/'.$jewellery_detail->image_4)}}" alt="your Photo" style="width:100px; height:100px;" />
                                    </div>  
                                </div>
                              </div>
                            </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                </div>
              </div>
              <!-- /.col-->
           </div>
            


      <!----end image card-->
       <!---image 5 card---->

       <div class="row">
              <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                      <h3 class="card-title">
                        Jewellery Section Images 5
                      </h3>

                    </div>
                    <form method="POST" action="{{ route('admin.jewellery_section_image5',['id'=>$jewellery_detail->id]) }}" enctype="multipart/form-data">
                    @csrf

                    <!-- /.card-header id="summernote" -->
                    <div class="card-body"> 
                            <!-- <div class="alert alert-info">
					            We have limited paragraph height to maintain UI and view for different devices to make it responsive. Before designing description keep these points in mind. MAX size 1000 words 
				            </div> -->
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputFile">Select Image 5</label>
                                    
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image_5" accept="image/*" name="image_5" >
                                        <label class="custom-file-label" for="image_5">{{$jewellery_detail->image_5}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <label for="exampleInputFile"></label>
                                    <div class="form-group">
                                        <!-- <img id="" src="{{ asset('public/images/'.$jewellery_detail->image_1)}}" alt="your Photo" style="width:100px; height:100px;" /> -->
                                        <img id="blah_5" src="{{ asset('public/images/jewellery/'.$jewellery_detail->image_5)}}" alt="your Photo" style="width:100px; height:100px;" />
                                    </div>  
                                </div>
                              </div>
                              
                            </div>
                               
                                      
            
                    
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                </div>
              </div>
              <!-- /.col-->
           </div>
            


      <!----end image card-->
       <!---image 6 card---->

       <div class="row">
              <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                      <h3 class="card-title">
                        Jewellery Section Images 6
                      </h3>

                    </div>
                    <form method="POST" action="{{ route('admin.jewellery_section_image6',['id'=>$jewellery_detail->id]) }}" enctype="multipart/form-data">
                    @csrf

                    <!-- /.card-header id="summernote" -->
                    <div class="card-body"> 
                            <!-- <div class="alert alert-info">
					            We have limited paragraph height to maintain UI and view for different devices to make it responsive. Before designing description keep these points in mind. MAX size 1000 words 
				            </div> -->
                            <div class="form-group">
                              
                              <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputFile">Select Image 6</label>
                                    
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image_6" accept="image/*" name="image_6" >
                                        <label class="custom-file-label" for="image_6">{{$jewellery_detail->image_6}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <label for="exampleInputFile"></label>
                                    <div class="form-group">
                                        <!-- <img id="" src="{{ asset('public/images/'.$jewellery_detail->image_1)}}" alt="your Photo" style="width:100px; height:100px;" /> -->
                                        <img id="blah_6" src="{{ asset('public/images/jewellery/'.$jewellery_detail->image_6)}}" alt="your Photo" style="width:100px; height:100px;" />
                                    </div>  
                                </div>
                              </div>
                            </div>
                               
                                      
            
                    
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                </div>
              </div>
              <!-- /.col-->
           </div>
            


      <!----end image card-->
        
            

          
             

            
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 @endsection     
 @push('script')

<!-- Summernote -->
<script src="{{ asset('public/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

   
  })
</script>

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
image_2.onchange = evt => {
  const [file] = image_2.files
  if (file) {
    blah_2.src = URL.createObjectURL(file)
  }
}
image_3.onchange = evt => {
  const [file] = image_3.files
  if (file) {
    blah_3.src = URL.createObjectURL(file)
  }
}
image_4.onchange = evt => {
  const [file] = image_4.files
  if (file) {
    blah_4.src = URL.createObjectURL(file)
  }
}
image_5.onchange = evt => {
  const [file] = image_5.files
  if (file) {
    blah_5.src = URL.createObjectURL(file)
  }
}
image_6.onchange = evt => {
  const [file] = image_6.files
  if (file) {
    blah_6.src = URL.createObjectURL(file)
  }
}

</script>

@endpush