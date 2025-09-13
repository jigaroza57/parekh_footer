@extends('admin/layout')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Updates</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Updates</li>
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
            <div class="col-md-12">
                
                  
                    <form method="POST" action="{{route('admin.editstore_update',['id'=>$update->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Updates </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body"> 
                           <label>Gold</label>
                            <textarea  name="gold" id="summernote">
                            {{$update->gold}}
                            </textarea>    </br>
                            
                            <label>Silver</label>
                            <textarea  name="silver" id="summernote1">
                            {{$update->silver}}
                            </textarea>   <br>

                            <label>Platinum</label>
                            <textarea  name="platinum" id="summernote2">
                            {{$update->platinum}}
                            </textarea>   
            
                    
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </div>

                    
                      
                    </form>
                
              </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 @endsection 

 @push('script')

 
<!-- DataTables  & Plugins -->
<script src="{{ asset('public/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('public/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('public/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('public/admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('public/admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('public/admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('public/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('public/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('public/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
  });
</script>
<!-- Summernote -->
<script src="{{ asset('public/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()
    $('#summernote1').summernote()
    $('#summernote2').summernote()
   
  })
</script>


@endpush