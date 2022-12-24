@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Проекты</h1>
    @foreach($projects as $project)
    <div class="row">
        <div class="col-4">
            <img src="{{asset($project->image)}}" alt=""/>
        </div>
    <div class="row">
        <div class="col-8">
            <h2>{{$project->title}}</h2>
            <p>{{$project->preview}}</p>
            <p><span>{{$project->created_at}}</span></p>
        </div>
        <p> <a class="btn btn-primary" href="{{ route('project.show', $project->id) }}">Перейти</a></p>
    </div>
    @endforeach
</div>



@endsection
