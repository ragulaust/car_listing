<?php

namespace App\Http\Controllers;

use App\Models\CarImage;
use App\Models\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Cars::get();
        return view('home',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('back.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cars = new Cars();

        $cars->name = $request->name;
        $cars->model = $request->model;
        $cars->mileage = $request->mileage;
        $cars->hex_code = $request->hex_code;
        $cars->year = $request->year;
        $cars->save();
        $new_car_id = $cars->id;

        if ($request->file('upload_file')){
            $files = $request->file('upload_file');
            $filecontent = base64_encode(file_get_contents($files->path()));
            $orginal_filename = $files->getClientOriginalName();
            $filename = "image_" .md5($orginal_filename . microtime());
            $filetype = $files->getClientMimeType();
            $filesize = $files->getSize();
            // dd($filecontent);
            $filemodel = new CarImage();
            $filemodel->cars_id = $new_car_id;
            $filemodel->filename = $filename;
            $filemodel->orginal_filename = $orginal_filename;
            $filemodel->filetype = $filetype;
            $filemodel->filesize = $filesize;
            $filemodel->file = $filecontent;

            $filemodel->save();
        }

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $cars = Cars::with('CarImage')->find($id);
        // $carimage = CarImage::all();
        return view('back.cars.edit', compact('cars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function edit(Cars $cars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cars = Cars::find($id);
        // $cars_image = Cars::with('CarImage')->find($id);
        $cars->name = $request->name;
        $cars->model = $request->model;
        $cars->mileage = $request->mileage;
        $cars->hex_code = $request->hex_code;
        $cars->year = $request->year;
        $cars->save();
        $new_car_id = $cars->id;

        if ($request->file('upload_file')){
            $files = $request->file('upload_file');
            $filecontent = base64_encode(file_get_contents($files->path()));
            $orginal_filename = $files->getClientOriginalName();
            $filename = "image_" .md5($orginal_filename . microtime());
            $filetype = $files->getClientMimeType();
            $filesize = $files->getSize();
            // dd($filecontent);
            $filemodel = new CarImage();
            $filemodel->cars_id = $new_car_id;
            $filemodel->filename = $filename;
            $filemodel->orginal_filename = $orginal_filename;
            $filemodel->filetype = $filetype;
            $filemodel->filesize = $filesize;
            $filemodel->file = $filecontent;

            $filemodel->save();

            return redirect('/cars')->with('message', 'Product Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cars = Cars::find( $id );
        $cars->delete();

        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }
}
