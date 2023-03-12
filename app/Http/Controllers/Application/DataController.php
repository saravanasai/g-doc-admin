<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Application\Projects;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index($projectId, $userId)
    {

        $project = Projects::find($projectId);

        $view = $project->app_type_id == 1 ? 'contact' : 'todo';

        return view('pages.' . $view . '.index', ['appId' => $project->id, 'userId' => $project->user_id]);

    }
}
