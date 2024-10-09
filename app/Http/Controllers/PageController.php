<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function about() {
        return view('pages.about');
    }

    // optional $id parameter to display a single project
    public function projects($id=null) {
        if ($id) {
            $project = Project::findOrFail($id); // Fetch the project with the given ID from the database
            return view('projects.show', compact('project'));
        }
        $projects = Project::all(); // Fetch all projects from the database
        return view('projects.index', compact('project'));
    }

    public function services() {
        return view('pages.services');
    }

    public function resources() {
        return view('pages.resources');
    }

    public function news() {
        return view('pages.news');
    }

    public function contact() {
        return view('pages.contact');
    }

      // Display a single project
      public function show($id)
      {
          $project = Project::findOrFail($id);
          return view('projects.show', compact('project'));
      }
  

}

