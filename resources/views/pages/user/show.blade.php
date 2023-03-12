@extends('layouts.master')

@section('tab_tittle', 'Show')

@section('content')
    <div class="card-header d-flex justify-content-end">
        <div class="header-title">
            <h4 class="card-title float-end">
                <div class="">
                    <a href="{{ route('app.user.index') }}" class="btn btn-sm btn-outline-primary ">Back</a>
                    <a href="{{ route('app.home') }}" class="btn btn-sm btn-outline-success ">Home</a>
                </div>
            </h4>
        </div>
    </div>
    <div class="card-body px-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-title">
                                <h4 class="card-title">User Details</h4>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="mb-1">Name: {{ $user->name }}</div>
                            <div class="mb-1">Email: {{ $user->email }}</div>
                            <div class="mb-1">Created At: {{ $user->created_at->diffForHumans() }}</div>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="header-title">
                                <h4 class="card-title">Projects</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-inline m-0 p-0 ">
                                @forelse ($user->projects as $project)
                                    <li class="d-flex mb-4 align-items-center active">
                                        <div class="ms-3">
                                            <h5 class="mb-2">Project Name : {{ $project->name }}</h5>
                                            <h5 class="mb-2">Application Type : {{ $project->appType->name }}</h5>
                                            <h6 class="mb-2">Project Description : {{ $project->description }}</h6>
                                            <h6 class="mb-2">API KEY : {{ $project->api_key }}</h6>

                                            <p class="mb-0">{{ $project->created_at->diffForHumans() }}</p>
                                        </div>
                                    </li>
                                    <h4 class=" float-end">
                                        <div class="float-end">
                                            <a href="{{ route('app.application-info',["userId"=>$project->user_id,"projectId"=>$project->id]) }}" class="btn btn-sm btn-outline-primary">View Data</a>
                                        </div>
                                    </h4>
                                    <br>
                                @empty
                                    <li class="d-flex mb-4 align-items-center active">
                                        <div class="ms-3">
                                            <h5>No Projects</h5>
                                        </div>
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
