<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Subscription;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Token_tracker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use DateTime;

class experience_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $Experience = Experience::all();

        return Inertia::render('admin_pages/Experience/index',[
            'Experiences' => $Experience,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required', 'confirmed',
            'poste' => 'required', 'confirmed',
            'entreprice' => 'required', 'confirmed',
            'discription' => 'required', 'confirmed',
            'StartYear' => 'required', 'confirmed',
            'EndYear' => 'required', 'confirmed',
        ]);
    
        $Experience = new Experience();
    
        $Experience->title = $request->title;
        $Experience->poste = $request->poste;
        $Experience->entreprice = $request->entreprice;
        $Experience->discription = $request->discription;
        $Experience->StartYear = $request->StartYear;
        $Experience->EndYear = $request->EndYear;
    
        $Experience->save();

        return Redirect::back()->with('success','add Service successfuly');
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
            'title' => 'required', 'confirmed',
            'poste' => 'required', 'confirmed',
            'entreprice' => 'required', 'confirmed',
            'discription' => 'required', 'confirmed',
            'StartYear' => 'required', 'confirmed',
            'EndYear' => 'required', 'confirmed',
        ]);
        
        $Experience = Experience::find($id);

        if($Experience){

            $Experience->title = $request->title;
            $Experience->poste = $request->poste;
            $Experience->entreprice = $request->entreprice;
            $Experience->discription = $request->discription;
            $Experience->StartYear = $request->StartYear;
            $Experience->EndYear = $request->EndYear;
    
            $Experience->save();
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
        Experience::where('id', $id)
        ->delete();

        return Redirect::back()->with('success','delete Experience successfuly');
    }
}
