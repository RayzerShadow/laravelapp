<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;
use Illuminate\Support\Facades\Response;
use Image;

class StoreImageController extends Controller
{
    function index()
    {
        $data = services::latest()->paginate(6);
        return view('store_image', compact('data'))
                ->with('i', (request()->input('page',1) - 1) * 6);


    }
    function insert_image(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|max:2048',
            'price' => 'required'
        ]);

        $image_file = $request->image;
        $image = Image::make($image_file);

        Response::make($image->encode('jpeg'));

        $form_data = array(
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'time' => $request->time,
            'image' => $image,


        );

        services::create($form_data);

        return redirect()->back()->with('succes', 'Image store in db successfully');
    }

    function fetch_image($image_id)
    {
        $image = services::findOrFail($image_id);

        $image_file = Image::make($image->image);

        $response = Response::make($image_file->encode('jpeg'));

        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }

    function servdetail($id)
    {
    $data = services::find($id);
    $image = services::findOrFail($id);
    return view('detail', ['data' => $image]);

    }
    function order($id)
    {
      $data = services::find($id);
      $image = services::findOrFail($id);
      return view('detail', ['data' => $image]);
    }

}
