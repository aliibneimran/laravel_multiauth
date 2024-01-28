@extends('backend.layouts.app')

@section('title','Jobs')

@section('content')
<div class="box-heading">
    <div class="box-title">
        <h3 class="mb-35">My Jobs</h3>
    </div>
    <div class="box-breadcrumb">
        <div class="breadcrumbs">
            <ul>
                <li> <a class="icon-home" href="index.html">Admin</a></li>
                <li><span>My Jobs</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="section-box">
            <div class="container">
                <div class="panel-white mb-30">
                    <div class="box-padding">
                        <div class="box-filters-job">
                            <div class="row">
                                <!-- Success Message -->
                                @if (session('msg'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('msg') }}
                                </div>
                                @endif
                                <div class="col-xl-3 col-lg-3"><span class="font-sm text-showing color-text-paragraph">Showing 41-60 of 944 jobs</span></div>
                                <div class="col-xl-4 col-lg-4">
                                    <form method="GET">
                                        <div class="input-group mb-3">
                                          <input type="text" name="search" value="{{ request()->get('search') }}" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="button-addon2">
                                          <select class="form-control" name="category">
                                            <option value="">Select</option>
                                            @foreach($categories as $cat)
                                            <option value="{{$cat->id}}" {{old('category')==$cat->id?'selected':''}}>{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                        <select class="form-control" name="location">
                                            <option value="">Select</option>
                                            @foreach($locations as $item)
                                            <option value="{{$item->id}}" {{old('location')==$item->id?'selected':''}}>{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                          <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xl-5 col-lg-5 text-lg-end mt-sm-15">
                                    <div class="display-flex2">
                                        <div class="box-border mr-10"><span class="text-sortby">Show:</span>
                                            <div class="dropdown dropdown-sort">
                                                <button class="btn dropdown-toggle" id="dropdownSort" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>12</span><i class="fi-rr-angle-small-down"></i></button>
                                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort">
                                                    <li><a class="dropdown-item active" href="#">10</a></li>
                                                    <li><a class="dropdown-item" href="#">12</a></li>
                                                    <li><a class="dropdown-item" href="#">20</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-border"><span class="text-sortby">Sort by:</span>
                                            <div class="dropdown dropdown-sort">
                                                <button class="btn dropdown-toggle" id="dropdownSort2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>Newest Post</span><i class="fi-rr-angle-small-down"></i></button>
                                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                                                    <li><a class="dropdown-item active" href="#">Newest Post</a></li>
                                                    <li><a class="dropdown-item" href="#">Oldest Post</a></li>
                                                    <li><a class="dropdown-item" href="#">Rating Post</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-view-type"><a class="view-type" href="my-job-list.html"><img src="backend/assets/imgs/template/icons/icon-list.svg" alt="jobBox"></a><a class="view-type" href="my-job-grid.html"><img src="backend/assets/imgs/template/icons/icon-grid-hover.svg" alt="jobBox"></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(count($jobs)>0)
                        <div class="row">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Industrial</th>
                                        <th>Location</th>
                                        <th>Salary</th>
                                        <th>Vacancy</th>
                                        <th>Tags</th>
                                        <th>Availability</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1 @endphp
                                    @foreach ($jobs as $item)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td><img src="{{ asset('uploads/' . $item->image) }}" alt="Image" width="50px" height="50px"></td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->category->name}}</td>
                                        <td>{{$item->industry->name}}</td>
                                        <td>{{$item->location->name}}</td>
                                        <td>{{$item->salary}}</td>
                                        <td>{{$item->vacancy}}</td>
                                        <td>
                                            <!-- {{ implode(', ', $item->tag) }} -->
                                            <ul></ul>
                                            @foreach($item->tag as $tag)
                                            <li>{{$tag}}</li>
                                            @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            @if($item->availability == 1)
                                            Available
                                            @else
                                            Not Available
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('jobs.edit',$item->id)}}"><i class="fas fa-edit"></i></a>
                                            <a href="{{route('jobs.delete',$item->id)}}" onclick="return confirm('Are you sure to delete')"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="paginations">
                            <ul class="pager">
                                <li><a class="pager-prev" href="#"></a></li>
                                <li><a class="pager-number" href="#">1</a></li>
                                <li><a class="pager-number" href="#">2</a></li>
                                <li><a class="pager-number" href="#">3</a></li>
                                <li><a class="pager-number" href="#">4</a></li>
                                <li><a class="pager-number" href="#">5</a></li>
                                <li><a class="pager-number active" href="#">6</a></li>
                                <li><a class="pager-number" href="#">7</a></li>
                                <li><a class="pager-next" href="#"></a></li>
                            </ul>
                        </div>
                        @else 
                            <h1 class="text-center">No data</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection