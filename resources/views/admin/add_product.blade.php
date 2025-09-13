@extends('admin/layout')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Product</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
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
                Add Product Detail
              </h3>
            </div>
            <!-- /.card-header id="summernote" -->
            <form method="POST" action="{{ route('admin.add_product') }}" enctype="multipart/form-data">
                @csrf

            <div class="card-body"> 
                    
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                  </div>  
                  <div class="form-group row">
                  <label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="input-group col-sm-8">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" accept="image/*" name="image" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose File</label>
                      </div>

                    </div>
                    <div class="form-group col-sm-2">
                        <img id="blah" src="#" alt="your Photo" style="width:100px; height:100px;" />

                    </div>
                  </div>
                  <!---->
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Gallery Images</label>
                    <div class="input-group col-sm-8">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="images" accept="image/*" name="images[]" multiple="multiple">
                            <label class="custom-file-label" for="exampleInputFile">Choose File</label>
                          </div>
                          <output></output>
                          <small class="text-muted">These images are visible in product details page gallery. Use 600x600 sizes images.</small>
                    </div>
                  </div>

                  <!----->
                  <!-- <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                    </div>
                  </div>   -->
                  <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Weight</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight" required>
                    </div>
                  </div>  
                  <div class="form-group row">
                    <label for="karat" class="col-sm-2 col-form-label">Karat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="karat" name="karat" placeholder="karat" required>
                    </div>
                  </div> 
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="description" name="description" placeholder="Description" required>
                    </div>
                  </div>  
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                      
                      <select type="text" name="category_id" class="form-control" required>
                                    <option>Select Category</option>
                                        @if($categories)
                                            @foreach($categories as $category)
                                                <?php $dash=''; ?>
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @if(count($category->subcategory))
                                                    @include('admin/subcategoryList-option',['subcategories' => $category->subcategory])
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                    </div>
                 </div>
                 
                  
                
                  
                  <div class="form-group row">
                    <label for="meta_title" class="col-sm-2 col-form-label">Meta Title</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="meta_title" name="meta_title"  required>
                    </div>
                  </div>     
                  <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="status" required>
                        <option value="0" selected>Visible</option>
                        <option value="1">Hidden</option>
                      </select>
                    </div>
                  </div>            
            </div>
             <!-- /.card-body -->

             <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
                  <a href="{{ route('admin.product')}}" class="btn btn-primary">Back</a>

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


const output = document.querySelector("output")
const input = document.querySelector('[name="images[]"]')
let imagesArray = []

input.addEventListener("change", () => {
  const files = input.files
  for (let i = 0; i < files.length; i++) {
    imagesArray.push(files[i])
  }
  displayImages()
})

function displayImages() {
  let images = ""
  imagesArray.forEach((image, index) => {
    images += `<div class="image">
                <img src="${URL.createObjectURL(image)}" alt="image">
                <span onclick="deleteImage(${index})">&times;</span>
              </div>`
  })
  output.innerHTML = images
}

function deleteImage(index) {
  imagesArray.splice(index, 1)
  displayImages()
}

</script>

@endpush