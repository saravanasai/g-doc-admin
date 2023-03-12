@extends('layouts.master')

@section('tab_tittle','User Management')

@section('content')
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title">User List</h4>
        </div>
    </div>
    <div class="card-body px-0">
        @livewire('application.user-management-component')
    </div>
@endsection
