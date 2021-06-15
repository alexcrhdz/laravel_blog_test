@extends('layouts.layout')

@section('title', 'Edit Course')

@section('content')
    <h1>Edit course</h1>
    <form action="{{route('courses.update', $course)}}" method="POST">

        @csrf
        @method('put')
        
        <label>
            Name:
            <br>
            <input type="text" name="name" value="{{$course->name}}">
        </label>
        <br>
        <label>
            Description:
            <br> 
            <textarea name="description" rows="5">{{$course->desc}}</textarea>
        </label>
        <br>
        <label>
            Categories:
            <br>
            <input type="text" name="categories" value="{{$course->categories}}">
        </label>
        <br>
        <br>
        <button type="submit">Update</button>
    </form>
@endsection