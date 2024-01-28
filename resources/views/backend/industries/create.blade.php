@extends('backend.layouts.app')

@section('title','Add Industries')

@section('content')
<form action="{{route('industries.store')}}" method="POST">
@csrf
    <label for="" class="p-2">Industries Name</label>
    <input type="text" name="name"><br><br>
    <button class="btn btn-success" type="submit">Add</button>
</form>
@endsection