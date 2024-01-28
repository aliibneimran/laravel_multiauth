@extends('backend.layouts.app')

@section('title','Add Category')

@section('content')
<form action="{{route('categories.store')}}" method="POST">
@csrf
    <label for="" class="p-2">Category Name</label>
    <input type="text" name="name"><br><br>
    <button class="btn btn-success" type="submit">Add</button>
</form>
@endsection