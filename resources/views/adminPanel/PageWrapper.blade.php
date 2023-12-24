 @extends("adminPanel.dinamicAdmin")
@section("content")

{{-- <div class="page-wrapper">
    <div class="container-fluid">
<table class="table">
    <thead>
    <tr>
        <th  scope="col">Name</th>
        <th scope="col">descripton</th>
        <th scope="col">cover_image</th>
    </tr>
</thead>
<tbody>
    
    @foreach ($AlbumDetails as $product)
    <tr scope="row"> 
        <td>
            {{$product->name}}
        </td>
        <td>
            {{$product->description}}
        </td>
        <td>
            {{$product->cover_image}}
        </td>
    </tr>
    @endforeach
</tbody>
    
</table>

</div>
</div> --}}


<div class="page-wrapper">
    <div class="container-fluid">
<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Action</th>
        
        
      </tr>
    </thead>
    @foreach ($AlbumDetails as $album)
    <tbody>
        
      <tr>
        <td>
          <div class="d-flex align-items-center">
            <img
                src="{{asset("$album->cover_image")  }}"
                alt=""
                style="width: 45px; height: 45px"
                class="rounded-circle"
                />
            <div class="ms-3">
              <p class="fw-bold mb-1">{{$album->name}}</p>
              
            </div>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1">{{$album->description}}</p>
         
        </td>
        
       
        <td>
          
          <a href="{{route("album.edit",$album->id)}}" type="button" class="btn btn-success btn-sm btn-rounded">Edit</a>
        </td>
      </tr>
     
        </td>
      </tr>
    </tbody>
    @endforeach

  </table>
  </div>
  </div>
 


@endsection