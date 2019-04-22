@extends('layout')

@section('content')
    <h1>Tasks Go Here</h1>
    <h2>{{$title}}</h2>
    
    @foreach ($taskList as $task)
        <li>{{$task->taskDesc}}</li>
    @endforeach
@endsection

