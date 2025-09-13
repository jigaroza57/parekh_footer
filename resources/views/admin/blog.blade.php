@extends('admin/layout')

@section('content')

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Blog</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Blog</li>
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
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Blog List</h3>
                        <a href="{{ route('admin.add_blog')}}"><button type="button" class="btn btn-primary float-right">Add New Blog</button></a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Detail</th>
                            
                            <th>Action</th>
                        
                        </tr>
                        </thead>
                        <tbody>
                                <?php if($blogs != ""){ 
                            
                                    foreach($blogs as $blog){

                                    
                                    ?>

                                    <tr>
                                        <td>{{ $blog->title }}</td>
                                        <td><img src="{{asset('public/images/blog/'.$blog->image) }}" height="200" width="200"> </td>
                                        <td>{{ $blog->detail }}</td>
                                        <td>
                                            <a href="{{ route('admin.edit_blog',['id'=> $blog->id]) }}" ><i class="fa fa-pencil-square-o fa-xl" aria-hidden="true" ></i></a>&nbsp; &nbsp;
                                            <a href="{{ route('admin.delete_blog',['id'=> $blog->id]) }}"
                                                onclick="return confirm('Are You Sure to Delete?');"
                                            >
                                            <i class="fa fa-trash fa-xl" aria-hidden="true" style="color:red;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }
                                    } ?>
                    
                            
                        
                            
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
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



@endpush