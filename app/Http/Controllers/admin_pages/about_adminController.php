<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;
use App\Models\About;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use DateTime;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class about_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $About = About::all();

        return Inertia::render('admin_pages/About/index',[
            'About' => $About,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = 1;
        $name = $request->get('name');
        $description = $request->get('description');
        $ExpYears = $request->get('ExpYears');
        $projects = $request->get('projects');
        $happy_client = $request->get('happy_client');
        $cups_of_coffee = $request->get('cups_of_coffee');
        $image = $request->file('image');

        $newPath = public_path('img/about/');
        
        if($image){
            $filename_bg = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move($newPath, $filename_bg);
        }
        
        $about = About::find($id);

        $about->name = $name;
        $about->description = $description;
        $about->ExpYears = $ExpYears;
        $about->projects = $projects;
        $about->happy_client = $happy_client;
        $about->cups_of_coffee = $cups_of_coffee;

        if ($image != null) {
            $oldImagePath = public_path($about->image);

            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }
    
            $filePath = 'img/about/' . $filename_bg;
            $about->image = $filePath;
        }

        $about->save();
        
        return Redirect::back()->with('success','edit success');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
