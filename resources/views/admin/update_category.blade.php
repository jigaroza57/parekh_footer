@extends('admin/layout')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Category</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit Category</li>
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
                Edit Category Detail
              </h3>
            </div>
            <!-- /.card-header id="summernote" -->
            <form method="POST" action="{{ route('admin.update_category',['id'=> $category->id]) }}" enctype="multipart/form-data">
                @csrf

            <div class="card-body"> 
                    
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}" required>
                    </div>
                  </div>  
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Parent Category</label>
                    <div class="col-sm-10">
                                    <select type="text" name="parent_id" class="form-control" data-selected="{{ $category->parent_id }}" >
                                    @if($p_id)    
                                    <option value="{{$p_id->id}}">{{$p_id->name}}</option>
                                    @else
                                    <option value="0">None</option>
                                    @endif
                                         @if($categories)
                                            @foreach($categories as $category)
                                                <?php $dash=''; ?>
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @if(count($category->subCatRecursive)>0)
                                                    @include('admin.subcategoryList-option',['subcategories' => $category->subCatRecursive])
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                    </div>
                 </div>
                  <div class="form-group row">
                  <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="input-group col-sm-8">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" accept="image/*" name="image" value="{{$category->image}}">
                        <label class="custom-file-label" for="exampleInputFile">{{$category->image}}</label>
                      </div>

                    </div>
                    <div class="form-group col-sm-2">
                        <img id="blah" src="{{ asset('public/images/category/'.$category->image)}}" alt="your Photo" style="width:100px; height:100px;" />

                    </div>
                  </div>
                  
                
                  
                  <div class="form-group row">
                    <label for="meta_title" class="col-sm-2 col-form-label">Meta Title</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ $category->meta_title}}">
                    </div>
                  </div>            
            </div>
             <!-- /.card-body -->

             <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="{{ route('admin.category')}}" class="btn btn-primary">Back</a>
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