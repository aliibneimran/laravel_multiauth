@extends('backend.layouts.app')

@section('title','Add Location')

@section('content')
<form action="{{route('locations.store')}}" method="POST">
@csrf
    <label for="" class="p-2">Location Name</label>
    <input type="text" name="name"><br><br>
    <button class="btn btn-success" type="submit">Add</button>
</form>
@endsection