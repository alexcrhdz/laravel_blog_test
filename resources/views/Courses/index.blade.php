@extends('layouts.layout')

@section('title', 'Courses')
    
@section('content')
    <h1>Welcome to Courses Page</h1>
    <a href="{{route('courses.create')}}">Create Course</a>
    <ul>
        @foreach ($courses as $course)
            <li>
                <a href="{{route('courses.show', $course->id)}}">{{$course->name}}</a>
            </li>
        @endforeach
    </ul>
    {{$courses->links()}}
@endsection
    