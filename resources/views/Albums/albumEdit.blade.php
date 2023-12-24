@section("content")

@extends("adminPanel.dinamicAdmin")



  
  <!-- Custom CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset("/assets/libs/select2/dist/css/select2.min.css")}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset("/assets/libs/jquery-minicolors/jquery.minicolors.css")}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset("/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset("/assets/libs/quill/dist/quill.snow.css")}}"
    />
    <link href="{{asset("/dist/css/style.min.css")}}" rel="stylesheet" >
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">

        
    
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">

          <div class="card">
          <div class="row">
            @if (session("success"))
             <div class="alert alert-success alert-dismissible fade show" role="alert">
              <i class="mdi mdi-check-all me-2"></i>
              {{session("success")}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

             </div>
              
            @endif
          <div class="card-body col-6">
            Go to Dashboard
            
          </div>
          <div class="col-sm text-end col-6 my-auto me-3">
          <a href="{{route("album.index")}}" type="button" class="btn btn-success">Back</a>
          </div>
          
        </div>
      </div>

          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-md-8">
              <div class="card">
               
                  <div class="card-body">
                    <h4 class="card-title">Edit</h4>
                    <div class="form-group row">
                      <form class="form-horizontal" method="POST" action="{{ route('album.update', $album->id) }}" enctype="multipart/form-data" >
                        @csrf   
                        @method('PUT')                      
                       
                          <div class="form-group">
                            <label for="exampleInputname1">Name</label>
                            <input name="name" type="name" class="form-control"  placeholder="Enter name" value="{{$album->name}}">
                            @error("name")
                            <p class="text-danger">{{$message}}</p>
                              
                            @enderror

                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <input name="description" type="description" class="form-control"  placeholder="Enter description" value="{{$album->description}}">
                            @error("description")
                            <p class="text-danger">{{$message}}</p>
                              
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Cover Photo</label>
                            <input name="cover_image" type="file" class="form-control-file"  placeholder="Cover photo" value="{{$album->cover_image}}">
                            @error("cover_image")
                            <p class="text-danger">{{$message}}</p>
                              
                            @enderror
                          </div>
                         
                         <button type="submit" class="btn btn-primary">Update</button>
                          
                        
                        
                  </form>
              </div>
              </div>
            </div>
          </div> 
      

         


         
             
            
         
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
       
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
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
    <script src="{{asset("/assets/libs/jquery/dist/jquery.min.js")}}"></script>
    
    <!-- This Page JS -->
    <script src="{{asset("/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js")}}"></script>
    <script src="{{asset("/dist/js/pages/mask/mask.init.js")}}"></script>
    <script src="{{asset("/assets/libs/select2/dist/js/select2.full.min.js")}}"></script>
    <script src="{{asset("/assets/libs/select2/dist/js/select2.min.js")}}"></script>
    <script src="{{asset("/assets/libs/jquery-asColor/dist/jquery-asColor.min.js")}}"></script>
    <script src="{{asset("/assets/libs/jquery-asGradient/dist/jquery-asGradient.js")}}"></script>
    <script src="{{asset("/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js")}}"></script>
    <script src="{{asset("/assets/libs/jquery-minicolors/jquery.minicolors.min.js")}}"></script>
    <script src="{{asset("/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")}}"></script>
    <script src="{{asset("/assets/libs/quill/dist/quill.min.js")}}"></script>
    <script>
      //***********************************//
      // For select 2
      //***********************************//
      $(".select2").select2();

      /*colorpicker*/
      $(".demo").each(function () {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time{{asset("")}}.they're
        // only used for this demo.
        //
        $(this).minicolors({
          control: $(this).attr("data-control") || "hue",
          position: $(this).attr("data-position") || "bottom left",

          change: function (value, opacity) {
            if (!value) return;
            if (opacity) value += ", " + opacity;
            if (typeof console === "object") {
              console.log(value);
            }
          },
          theme: "bootstrap",
        });
      });
      /*datwpicker*/
      jQuery(".mydatepicker").datepicker();
      jQuery("#datepicker-autoclose").datepicker({
        autoclose: true,
        todayHighlight: true,
      });
      var quill = new Quill("#editor", {
        theme: "snow",
      });
    </script>
@endsection