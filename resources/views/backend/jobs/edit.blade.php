@extends('backend.layouts.app')

@section('title','Edit Job')

@section('content')
<div class="box-heading">
    <div class="box-title">
        <h3 class="mb-35">Edit a Job</h3>
    </div>
    <div class="box-breadcrumb">
        <div class="breadcrumbs">
            <ul>
                <li> <a class="icon-home" href="index.html">Admin</a></li>
                <li><span>Post New Job</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="section-box">
            <div class="container">
                <div class="panel-white mb-30">
                    <div class="box-padding bg-postjob">
                        <div class="row mt-30">
                            <div class="col-lg-12">
                                <div class="row">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <form action="{{ route('jobs.update', $single->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-lg-12">
                                            <div class="form-group mb-30">
                                                <label class="font-sm color-text-mutted mb-10">Job title *</label>
                                                <input class="form-control" type="text" placeholder="e.g. Senior Product Designer" name="title" value="{{old('title',$single->title)}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-30">
                                                <label class="font-sm color-text-mutted mb-10">Add your job description *</label>
                                                <textarea class="form-control" name="description" rows="8">{{old('description',$single->description)}}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg- col-md-4">
                                                <div class="form-group mb-30">
                                                    <label class="font-sm color-text-mutted mb-10">Workplace type *</label>
                                                    <select class="form-control" name="category">
                                                        <option value="">Select</option>
                                                        @foreach($categories as $cat)
                                                        <option value="{{$cat->id}}" @selected(old('category',$single->category_id) == $cat->id)>{{$cat->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="form-group mb-30">
                                                    <label class="font-sm color-text-mutted mb-10">Location *</label>
                                                    <select class="form-control" name="location">
                                                        <option value="">Select</option>
                                                        @foreach($locations as $loc)
                                                        <option value="{{$loc->id}}" @selected(old('location',$single->location_id) == $loc->id)>{{$loc->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="form-group mb-30">
                                                    <label class="font-sm color-text-mutted mb-10">Industrial *</label>
                                                    <select class="form-control" name="industry">
                                                        <option value="">Select</option>
                                                        @foreach($industry as $loc)
                                                        <option value="{{$loc->id}}" @selected(old('industry',$single->location_id) == $loc->id)>{{$loc->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-30">
                                                    <label class="font-sm color-text-mutted mb-10">Salary*</label>
                                                    <input class="form-control" type="text" placeholder="$2200 - $2500" name="salary" value="{{old('salary',$single->salary)}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-30">
                                                    <label class="font-sm color-text-mutted mb-10">Vacancy*</label>
                                                    <input class="form-control" type="number" placeholder="" name="vacancy" value="{{old('vacancy',$single->vacancy)}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-lg-6 col-md-6">
                                                <label class="form-label">Tags*:</label>
                                                @foreach(['Laravel', 'React', 'Vue','Angular'] as $tag)
                                                <div class="form-check mb-1">
                                                    <input type="checkbox" name="tags[]" id="" value="{{ $tag }}" {{ in_array($tag, old('tags', $single->tag ?? [])) ? 'checked' : '' }} class="form-check-input" />
                                                    <label for="{{ $tag }}" class="form-check-label">{{ $tag }}</label>
                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="mb-3 col-lg-6 col-md-6">
                                                <label class="form-label">Avaiability *:</label>

                                                <div class="form-check mb-1">
                                                    <input type="radio" name="availability" value="1" @checked(old('availability',$single->availability)==1) class="form-check-input">
                                                    <label for="genderM" class="form-check-label">Available</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" name="availability" value="0" @checked(old('availability',$single->availability)==0) class="form-check-input">
                                                    <label for="genderF" class="form-check-label">Not Available</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-30">
                                                <div class="box-upload">
                                                    <input class="fileupload" type="file" name="photo">
                                                    <img src="{{ asset('uploads/'.$single->image) }}" alt="Image" width="50px" height="50px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mt-10">
                                                <button class="btn btn-default btn-brand icon-tick" type="submit">Update Job</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection