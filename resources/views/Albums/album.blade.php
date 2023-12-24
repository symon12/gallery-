@extends("adminPanel.dinamicAdmin")
@section("content")



    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
   
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
           
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

              
              <div class="card">
                <div class="row">
                <div class="card-body col-6">
                  All Album
                  
                </div>
                <div class="col-sm text-end col-6 my-auto me-3">
                <a href="{{route("form.create")}}" type="button" class="btn btn-success">Create Album</a>
                </div>
                
              </div>
            </div>
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                <div class="row el-element-overlay">
                    @if (session("success"))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <i class="mdi mdi-check-all me-2"></i>
                     {{session("success")}}
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       
                    </div>
                     
                   @endif
                    
                    @foreach ($albums as $album)
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="{{asset("$album->cover_image")  }}"  />
                                    
                                   
                                </div>
                                <div class="el-card-content">
                                    <h4 class="m-b-0"> {{$album->name}}</h4> 
                                    <span class="text-muted">{{$album->description}}</span>
                                    <div class="d-flex justify-content-between align-items-center mx-3">

                                        <a href="{{route("album.index")}}" class="btn btn-primary">View</a>
                                        
                                        <form action="{{route("album.destroy",$album->id)}}" method="POST" >
                                            @csrf
                                            @method("DELETE")
                                            
                                            <BUtton type="submit" class="btn btn-success">Delete</BUtton>
                                        
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    @endforeach
                </div>
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset("assets/libs/jquery/dist/jquery.min.js")}}"></script>
    <

    @endsection

