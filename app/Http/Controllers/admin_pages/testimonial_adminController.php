<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Token_tracker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use DateTime;

class testimonial_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $Testimonial = Testimonial::all();

        return Inertia::render('admin_pages/Testimonial/index',[
            'Testimonials' => $Testimonial,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required', 'confirmed',
            'img' => 'required', 'confirmed',
            'description' => 'required', 'confirmed',
        ]);
        $image = $request->file('img');

        $newPath = public_path('img/Testimonial/');
        
        if($image){
            $filename_bg = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move($newPath, $filename_bg);
        }

        $Testimonial = new Testimonial();
    
        $Testimonial->name = $request->name;
        $Testimonial->description = $request->description;
        $filePath = 'img/Testimonial/' . $filename_bg;
        $Testimonial->img = $filePath;

        $Testimonial->save();

        return Redirect::back()->with('success','add Testimonial successfuly');
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
    public function edit(string $id,Request $request)
    {
        $request->validate([
            'name' => 'required', 'confirmed',
            'img' => 'required', 'confirmed',
            'description' => 'required', 'confirmed',
        ]);
        $image = $request->file('img');

        $newPath = public_path('img/Testimonial/');
        
        if($image){
            $filename_bg = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move($newPath, $filename_bg);
        }

        $Testimonial = Testimonial::find($id);

        if($Testimonial){

            $Testimonial->name = $request->name;
            $Testimonial->description = $request->description;
            if ($image != null) {
                $oldImagePath = public_path($Testimonial->image);
    
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
        
                $filePath = 'img/Testimonial/' . $filename_bg;
                $Testimonial->img = $filePath;
            }
            $Testimonial->save();
        }
        
        return Redirect::back();
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
        Testimonial::where('id', $id)
        ->delete();

        return Redirect::back()->with('success','delete Testimonial successfuly');
    }
}
