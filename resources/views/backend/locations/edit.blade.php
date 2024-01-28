@extends('backend.layouts.app')

@section('title','Edit Location')

@section('content')
<form action="{{ route('locations.update', $single->id) }}" method="POST">
@csrf
    <label for="" class="p-2">Location Name</label>
    <input type="text" name="name" value="{{old('name')?old('name'):$single->name}}"><br><br>
    <button class="btn btn-success" type="submit">Update</button>
</form>
@endsection