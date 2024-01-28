@extends('backend.layouts.app')

@section('title','Applicants')

@section('content')
<h4>All Applicants</h4>
<div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead >
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>CV</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1 @endphp
            @foreach($applicants as $item)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->contact}}</td>
                <td>
                    <a href="{{$item->id}}" class="view-cv-link" data-bs-toggle="modal" data-bs-target="#fileModal" data-cv="{{ $item->cv }}"><i class="fa-solid fa-eye"></i></a>

                </td>
                <td>
                    <a href="{{route('categories.delete',$item->id)}}" ><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


@section('scripts')
    @parent
    <script>
        // Add a script section to handle the dynamic loading of CVs
        $(document).ready(function () {
            $('.view-cv-link').click(function (event) {
                event.preventDefault();

                // Get the CV filename from the data attribute
                var cvFilename = $(this).data('cv');

                // Update the iframe source in the modal
                $('#fileModal .modal-body').html('<iframe src="{{ asset("uploads/application/") }}' + '/' + cvFilename + '" width="100%" height="500px" frameborder="0"></iframe>');
            });
        });
    </script>
@endsection

<!-- Modal -->
<div class="modal fade" id="fileModal" tabindex="-1" aria-labelledby="fileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fileModalLabel">File Viewer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <iframe src="{{ asset('uploads/application/' . $item->cv) }}" width="100%" height="500px" frameborder="0"></iframe>

            </div>  
        </div>
    </div>
</div>


