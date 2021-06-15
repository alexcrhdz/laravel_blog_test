@extends('layouts.layout')

@section('title', 'Create Course')

@section('content')
    <h1>Page to Create a course</h1>
    <form action="{{route('courses.store')}}" method="POST">

        @csrf

        <label>
            Name:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Description:
            <br> 
            <textarea name="description" rows="5"></textarea>
        </label>
        <br>
        <label>
            Categories:
            <br>
            <input type="text" name="categories">
        </label>
        <br>
        <br>
        <button type="submit">Create</button>
    </form>
@endsection