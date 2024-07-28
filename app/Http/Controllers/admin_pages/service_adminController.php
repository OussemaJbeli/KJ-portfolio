<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Subscription;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Token_tracker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use DateTime;

class service_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $Service = Service::all();

        return Inertia::render('admin_pages/Services/index',[
            'Services' => $Service,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'skil' => 'required', 'confirmed',
            'value' => 'required', 'confirmed',
            'skil' => 'required', 'confirmed',
            'value' => 'required', 'confirmed',
        ]);
    
        $Service = new Service();
    
        $Service->title = $request->title;
        $Service->pricePerHoure = $request->pricePerHoure;
        $Service->discription = $request->discription;
        $Service->logo = $request->logo;
    
        $Service->save();

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
        $title = $request->get('title');
        $pricePerHoure = $request->get('pricePerHoure');
        $discription = $request->get('discription');
        $logo = $request->get('logo');
        
        $Service = Service::find($id);

        if($Service){

            $Service->title = $title;
            $Service->pricePerHoure = $pricePerHoure;
            $Service->discription = $discription;
            $Service->logo = $logo;
    
            $Service->save();
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
        Service::where('id', $id)
        ->delete();

        return Redirect::back()->with('success','delete Service successfuly');
    }
}
