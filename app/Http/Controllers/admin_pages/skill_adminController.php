<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Skil;
use App\Models\Subscription;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Token_tracker;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DateTime;

class skill_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $skils = Skil::all();
        $education = Education::all();

        return Inertia::render('admin_pages/Skils/index',[
            'skils' => $skils,
            'education' => $education,
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

    public function addSkil(Request $request)
    {
        $request->validate([
            'skil' => 'required', 'confirmed',
            'value' => 'required', 'confirmed',
        ]);
    
        $Skil = new Skil();
    
        $Skil->skil = $request->skil;
        $Skil->value = $request->value;
    
        $Skil->save();

        return Redirect::back()->with('success','add Skil successfuly');
    }

    public function addEducation(Request $request)
    {
        $request->validate([
            'title' => 'required', 'confirmed',
            'start_year' => 'required', 'confirmed',
            'end_year' => 'required', 'confirmed',
            'univercety' => 'required', 'confirmed',
        ]);
    
        $Education = new Education();
    
        $Education->title = $request->title;
        $Education->start_year = $request->start_year;
        $Education->end_year = $request->end_year;
        $Education->univercety = $request->univercety;
    
        $Education->save();

        return Redirect::back()->with('success','add Education successfuly');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function editSkil(string $id,Request $request)
    {
        $skil = $request->get('skil');
        $value = $request->get('value');
        
        $Skil = Skil::find($id);

        if($Skil){
            
            $Skil->skil = $skil;
            $Skil->value = $value;
    
            $Skil->save();
        }
        
        return Redirect::back();
    }

    public function editEducation(string $id,Request $request)
    {
        $title = $request->get('title');
        $start_year = $request->get('start_year');
        $end_year = $request->get('end_year');
        $univercety = $request->get('univercety');
        
        $education = Education::find($id);

        if($education){

            $education->title = $title;
            $education->start_year = $start_year;
            $education->end_year = $end_year;
            $education->univercety = $univercety;
    
            $education->save();
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
    public function skildestroy(string $id)
    {
        Skil::where('id', $id)
        ->delete();

        return Redirect::back()->with('success','delete skil successfuly');
    }
    public function educdestroy(string $id)
    {
        Education::where('id', $id)
        ->delete();

        return Redirect::back()->with('success','delete education successfuly');
    }
}
