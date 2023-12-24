@extends("BlogTable/insert_blog")

<table class="table container">
    @if ($blogDetails)
    <thead>          
        
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">View Count</th>
        <th scope="col">Created by</th>
        
    </tr>
</thead>

<tr>
    <td>
        {{$blogDetails->title}}
    </td>
    <td>
        {{$blogDetails->description}}
    </td>
    <td>
        {{$blogDetails->view_count}}
    </td>
    <td>
        {{$blogDetails->created_by}}
    </td>
    
</tr>
@else
<tr>
    <th> no data found</th>
</tr>
@endif

</table>