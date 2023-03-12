@extends('layouts.master')

@section('tab_tittle','Contact Application')

@section('content')
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title">Contact List</h4>
        </div>
    </div>
    <div class="card-body px-0">
        @livewire('application.contact.contact-list-component',['appId'=>$appId,'userId'=>$userId])
    </div>
@endsection
