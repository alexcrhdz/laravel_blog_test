@extends('layouts.layout')

@section('title', 'Course: '.$course->name)

@section('content')
    <h1>Welcome to Course: {{$course->name}} </h1>
    <a href="{{route('courses.index')}}">Back</a><br>
    <a href="{{route('courses.edit', $course)}}">Edit Course</a>
    <p>
        <strong>Category:</strong>
        {{$course->categories}}
    </p>
    <br>
    <p>{{$course->desc}}</p>
@endsection