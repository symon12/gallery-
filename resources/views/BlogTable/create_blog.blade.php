@extends("BlogTable/insert_blog")
<form class=" container" method="POST" enctype="multipart/form-data" action="{{route("blogs.store")}}" >
    @csrf
  <div class="md-4">
    <label for="validationCustom01" class="form-label">Blog Title</label>
    <input type="text" class="form-control" name="title" placeholder="title">
  </div>
  <div class="md-4">
    <label for="validationCustom02" class="form-label">Blog Description</label>
    <input type="text" class="form-control" name="description" required placeholder="description">
  </div>
  <div class="md-4 ">
    <label for="validationCustom02" class="form-label">Upload Image</label>
    <input type="file" class="form-control" name="image" required placeholder="view">
  </div>
  
  <div class="mt-4">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>

