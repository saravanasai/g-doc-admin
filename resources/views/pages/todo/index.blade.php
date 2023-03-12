@extends('layouts.master')

@section('tab_tittle','Todo Application')

@section('content')
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title">Todo List</h4>
        </div>
    </div>
    <div class="card-body px-0">
        @livewire('application.todo.todo-list-component',['appId'=>$appId,'userId'=>$userId])
    </div>
@endsection
