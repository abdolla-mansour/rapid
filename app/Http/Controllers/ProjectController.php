<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Exception;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        try {
            $project = new Project();
            $project->name = $request->name;
            $project->image = $request->image->store('projects', 'public');
            $project->description = $request->description;
            $project->budaget = $request->budaget;
            $project->client = $request->client;
            $photos = [];
            foreach ($request->photos as $photo) {
                $photos[] = $photo->store('projects/photos', 'public');
            }
            $project->photos = json_encode($photos);
            $project->save();
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->back();
        } catch (Exception $e) {
            toastr()->error('حدث خطا ما');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        try {
            $project->name = $request->name;
            if ($request->image) {
                Storage::disk('public')->delete($project->image);
                $project->image = $request->image->store('projects', 'public');
            }
            $project->description = $request->description;
            $project->budaget = $request->budaget;
            $project->client = $request->client;
            if ($request->photos) {
                $photos = json_decode($project->photos);
                foreach ($photos as $photo) {
                    Storage::disk('public')->delete($photo);
                }
                foreach ($request->photos as $photo) {
                    $photos[] = $photo->store('projects/photos', 'public');
                }
                $project->photos = json_encode($photos);
            }
            $project->save();
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->back();
        } catch (Exception $e) {
            toastr()->error('حدث خطا ما');
            dd($e);// redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($project_id)
    {
        $project = Project::find($project_id);
        if (!$project) {
            toastr()->error('هذا المشروع غير موجود');
            return redirect()->back();
        }
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }
        if ($project->photos) {
            foreach (json_decode($project->photos) as $photo) {
                Storage::disk('public')->delete($photo);
            }
        }
        $project->delete();
        toastr()->success('تم الحذف بنجاح');
        return redirect()->back();
    }
}
