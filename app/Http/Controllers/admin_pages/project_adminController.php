<?php

namespace App\Http\Controllers\admin_pages;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Project;
use App\Models\Project_image;
use App\Models\Project_section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Inertia\Inertia;
use DateTime;


class project_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $Project = Project::all();

        return Inertia::render('admin_pages/Project/index',[
            'Projects' => $Project,
        ]);

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'imageCover' => 'required',
        ]);
        $title = $request->get('title');
        $imageCover = $request->file('imageCover');
        $categorie = $request->get('categorie');

        $imagePath = public_path('/img/project/cover/');

        $directoryPath = dirname($imagePath);
        if (!file_exists($directoryPath)) {
            mkdir($directoryPath, 0755, true);
        }

        $filename_bg = uniqid() . '_' . time() . '.' . $imageCover->getClientOriginalExtension();
        $imageCover->move($imagePath, $filename_bg);

        $Project = new Project();
        $Project->title = $title;
        $Project->categorie = $categorie;
        $Project->imageCover = '/img/project/cover/'.$filename_bg;

        $Project->save();

        $project_sections = [
            ['title' => 'Location'],
            ['title' => 'Client'],
            ['title' => 'Duration'],
            ['title' => 'Budget'],
            ['title' => 'Role'],
            ['title' => 'Challenges'],
            ['title' => 'Outcomes'],
            ['title' => 'Team'],
            ['title' => 'Technologies/Methods Used'],
            ['title' => 'Visuals'],
            ['title' => 'Awards/Recognition'],
        ];
    
        foreach ($project_sections as $section) {
            $Project_section = new Project_section();
            $Project_section->id_projects = $Project->id; // Assuming the foreign key is project_id
            $Project_section->title = $section['title'];
            $Project_section->save();
        }
        
        return Redirect::back()->with('success','Save Successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Project_image = Project::where('projects.id',$id)
        ->join('project_images', 'project_images.id_projects', '=', 'projects.id')
        ->get();

        $Project_sections = Project::where('projects.id',$id)
        ->join('project_sections', 'project_sections.id_projects', '=', 'projects.id')
        ->get();

        $id_Project = $id;

        return Inertia::render('admin_pages/Project/project',[
            'Project_image' => $Project_image,
            'id_Project' => ['id'=>$id_Project],
            'Project_sections' => $Project_sections,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $id)
    {
        $request->validate([
            'imageCover' => 'required',
        ]);
        $title = $request->get('title');
        $categorie = $request->get('categorie');
        $imageCover = $request->file('imageCover');

        $newPath = public_path('img/Testimonial/');
        
        if($imageCover){
            $filename_bg = uniqid() . '_' . time() . '.' . $imageCover->getClientOriginalExtension();
            $imageCover->move($newPath, $filename_bg);
        }


        $Project = Project::find($id);

        if($Project){
            
            $Project->title = $title;
            $Project->categorie = $categorie;
            if($imageCover)
            {
                $relativePath = ltrim($Project['imageCover'], '/');

                $imagePath = public_path($relativePath);
        
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
                
                $imagePath = public_path('/img/project/cover/');
                $filename_bg = uniqid() . '_' . time() . '.' . $imageCover->getClientOriginalExtension();
                $imageCover->move($imagePath, $filename_bg);

                $Project->imageCover = '/img/project/cover/'.$filename_bg;
            }
    
            $Project->save();
        }
        return Redirect::back()->with('success','Save Successfuly');
    }

    public function addSections(Request $request,string $id)
    {
        $title = $request->get('title');
        $content = $request->get('content');

        $Project_section = new Project_section();

        $Project_section->id_projects = $id;
        $Project_section->title = $title;
        $Project_section->content = $content;

        $Project_section->save();

        return Redirect::back()->with('success','Save Successfuly');
    }

    public function editSections(Request $request,string $id)
    {
        $title = $request->get('title');
        $content = $request->get('content');

        $Project = Project_section::find($id);

        if($Project){
            $Project->title = $title;
            $Project->content = $content;
    
            $Project->save();   
        }

        return Redirect::back()->with('success','Save Successfuly');
    }

    /**
     * Update the specified resource in storage.
     */
    public function addImageProject(Request $request, string $id)
    {
        $request->validate([
            'imagePath' => 'required',
        ]);

        $imageCover = $request->file('imagePath');

        $imagePath = public_path('/img/project/images/');

        $directoryPath = dirname($imagePath);
        if (!file_exists($directoryPath)) {
            mkdir($directoryPath, 0755, true);
        }

        $filename_bg = uniqid() . '_' . time() . '.' . $imageCover->getClientOriginalExtension();
        $imageCover->move($imagePath, $filename_bg);

        $Project = new Project_image();
        $Project->id_projects = $id;
        $Project->imagePath = '/img/project/images/'.$filename_bg;

        $Project->save();
        
        return Redirect::back()->with('success','Save Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Project = Project::where('id', $id)->first();

        $relativePath = ltrim($Project['imageCover'], '/');

        $imagePath = public_path($relativePath);

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        Project::where('id', $id)
        ->forceDelete();

        return Redirect::back()->with('success','delete successfuly');
    }
    public function destroyImage(string $id)
    {
        $Project_image = Project_image::where('id', $id)->first();

        $relativePath = ltrim($Project_image['imagePath'], '/');

        $imagePath = public_path($relativePath);

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        Project_image::where('id', $id)
        ->forceDelete();

        return Redirect::back()->with('success','delete successfuly');
    }
    public function destroySections(string $id)
    {
        Project_section::where('id', $id)
        ->forceDelete();

        return Redirect::back()->with('success','delete successfuly');
    }
}
