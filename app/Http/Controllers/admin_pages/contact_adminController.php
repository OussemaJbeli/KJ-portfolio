<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Subscription;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Token_tracker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use DateTime;

class contact_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $Contact = Contact::all();

        return Inertia::render('admin_pages/Contact/index',[
            'Contact' => $Contact,
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
        $location = $request->get('location');
        $phone = $request->get('phone');
        $email = $request->get('email');

        $Contact = Contact::find($id);

        $Contact->location = $location;
        $Contact->phone = $phone;
        $Contact->email = $email;

        $Contact->save();
        
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
