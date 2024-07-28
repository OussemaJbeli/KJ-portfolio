<?php

namespace App\Http\Controllers\gest_pages;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BLogPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        return Inertia::render('gest_pages/blogs/blogsList');
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
    public function show()
    {
        return Inertia::render('gest_pages/blogs/blog');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
