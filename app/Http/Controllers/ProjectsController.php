<?php 

namespace App\Http\Controllers;

Use App\Project;

Class ProjectsController extends Controller 
{
    /** 
     * Show the page to create a new project
     */

    public function create() 
    {
        return view('projects.create', [
            'projects' => Project::all()->reverse()->values(),
        ]);
    }

    /**
     * Store a new project in the database
    */

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        Project::forceCreate([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return ['message' => 'Project Created!', 'projects' => Project::all()->reverse()->values() ];
    }

    /**
     * Get list of projects
     */
    public function list() 
    {
        return [ 'projects' => Project::all()->reverse()->values() ];
    }
}