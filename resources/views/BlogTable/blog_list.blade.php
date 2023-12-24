@extends("BlogTable/insert_blog")
<table class="table container">
    <thead>
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">View Count</th>
        <th scope="col">Created by</th>
        
    </tr>
</thead>
@foreach ($blogs as $blog)
<tr>
    <td>
        {{$blog->title}}
    </td>
    <td>
        {{$blog->description}}
    </td>
    <td>
        {{$blog->view_count}}
    </td>
    <td>
        {{$blog->created_by}}
    </td>
</tr>
    
@endforeach
</table>