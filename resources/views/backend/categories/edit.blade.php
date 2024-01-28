@extends('backend.layouts.app')

@section('title','Edit Category')

@section('content')
<form action="{{ route('categories.update', $single->id) }}" method="POST">
@csrf
    <label for="" class="p-2">Category Name</label>
    <input type="text" name="name" value="{{old('name')?old('name'):$single->name}}"><br><br>
    <button class="btn btn-success" type="submit">Update</button>
</form>
@endsection