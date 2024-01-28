@extends('backend.layouts.app')

@section('title','Industries')

@section('content')
<div><a href="{{URL('industries/create')}}" class="btn btn-primary">Add Industries</a></div>
<h4>All Industries</h4>
<div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead >
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1 @endphp
            @foreach($industries as $item)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$item->name}}</td>
                <td>
                    <a href="{{route('industries.edit',$item->id)}}" class="m-2"><i class="fas fa-pen-to-square"></i></a>
                    <a href="{{route('industries.delete',$item->id)}}" ><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection