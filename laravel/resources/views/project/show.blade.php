@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Проект</h1>
    
    <div class="row">
        <div class="col-4">
            <img src="{{asset($project->image)}}" alt=""/>
        </div>
    <div class="row">
        <div class="col-8">
            <h2>{{$project->title}}</h2>
            <p>{{$project->content}}</p>
            <p><span>{{$project->created_at}}</span></p>
        </div>
    </div>
    
</div>


@endsection