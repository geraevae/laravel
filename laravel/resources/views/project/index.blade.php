@extends('layouts.app')

@section('content')
<h1>Проекты</h1>
<table>
@foreach($projects as $project)
    <tr>
        <td>{{$project->id}}</td>
        <td>{{$project->title}}</td>
        <td>{{$project->created_at}}</td>
    </tr>
@endforeach
</table>
@endsection
