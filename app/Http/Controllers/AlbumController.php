<?php

namespace App\Http\Controllers;

use App\Models\album;
use Dotenv\Util\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
            $active = "dashboard";
            $AlbumDetails = album::all();

            return view("adminPanel.contentArea", compact("AlbumDetails", "active"));

       
        }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $active = "form";
        return view("Forms.form",compact("active"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
   
       $this->validate($request,[
        "name"=>"required|string|max:25",
        "description"=>"required|string|max:100",

        'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
       ]);
       
  

       if($request ->hasFile("cover_image")){
        $img=$request->file("cover_image");
        $fileNameStore="cover_image".md5(uniqid()).time()."".
        $img->getClientOriginalExtension();
        $img->move(public_path("asset/gallery/album"),
        $fileNameStore);

        
       }
    

    //  DB::table("albums")->insert([
    //     "name"=>$request->name,
    //     "description"=>$request->description,
    // "cover_image"=>  "asset/gallery/album/" . $fileNameStore,
        
    // ]);

    $album = new album();
    $album->name = $request->input('name');
    $album->description = $request->input('description');
    $album->cover_image =  "asset/gallery/album/" . $fileNameStore;
    $album->save();

    return redirect()->back()->with("success","Album create successfully");

    
    }

    /**
     * Display the specified resource.
     */
    public function show( )
    {
        $albums=album::all();
        $active="album";
        return view("Albums.album", compact("albums","active"));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $active="edit";
        $album = album::find($id);
        return view("Albums.albumEdit" ,compact("album","active"));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

       
// $request->validate([
//     "name" => "required|string|max:50",
//     "description" => "required|string|max:200",
//     'cover_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
// ]);

// // Find the album by ID
// $album = DB::table("albums")->where('id', $id)->first();

// if ($album) {
//     // Check if a new cover_image has been uploaded
//     if ($request->hasFile('cover_image')) {
//         $image = $request->file('cover_image');
//         $fileName = "cover_image" . md5(uniqid()) . time() . '.' . $image->getClientOriginalExtension();
//         $image->move(public_path("asset/gallery/album"), $fileName);

//         // Update the cover_image field for the album
//         DB::table("albums")->where('id', $id)->update([
//             "name" => $request->name,
//         "description" => $request->description,
//             "cover_image" => "asset/gallery/album/" . $fileName,
//         ]);
//     }

//     // Update other fields
    

//     return redirect()->route('album.index')
//         ->with('success', 'Album updated successfully.');
// } else {
//     return redirect()->back()->with('error', 'Album not found.');
// }

$request->validate([
    "name" => "required|string|max:50",
    "description" => "required|string|max:200",
    'cover_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
]);

// Find the album by ID
$album = Album::find($id);

if ($album) {
    // Check if a new cover_image has been uploaded
    if ($request->hasFile('cover_image')) {
        $image = $request->file('cover_image');
        $fileName = "cover_image" . md5(uniqid()) . time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path("asset/gallery/album"), $fileName);

        // Update the cover_image field for the album
        $album->name = $request->name;
        $album->description = $request->description;
        $album->cover_image = "asset/gallery/album/" . $fileName;
        $album->save();
    } else {
        // If no new cover_image uploaded, update other fields except cover_image
        $album->name = $request->name;
        $album->description = $request->description;
        $album->save();
    }

    return redirect()->route('album.edit', ['album' => $album])

        ->with('success', 'Album updated successfully.');
} else {
    return redirect()->back()->with('error', 'Album not found.');
}



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
$album = Album::find($id);

    if (!$album) {
        return redirect()->back()->with("error", "Album not found");
    }

    $coverImage = $album->cover_image;

    if (unlink(public_path($coverImage))) {
        $album->delete();
        return redirect()->back()->with("success", "Album deleted successfully");
    }

    return redirect()->back()->with("error", "Failed to delete album");

}
}
