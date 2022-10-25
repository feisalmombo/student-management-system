@extends('layouts.master')
@section('page_title', 'All Students')
@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h6 class="card-title">All Students</h6>
        {!! Qs::getPanelOptions() !!}
    </div>

    <div class="card-body">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="nav-item"><a href="#all-students" class="nav-link active" data-toggle="tab">All Students</a></li>
        </ul>

        <div class="tab-content">
			@if(!empty($students))
            <div class="tab-pane fade show active" id="all-students">
                <table class="table datatable-button-html5-columns">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Photo</th>
                        <th>User Name</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $key=>$student)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td><img class="rounded-circle" style="height: 40px; width: 40px;" src="{{ $student->photo }}" alt="photo"></td>
                        <td>{{ $student->username}}</td>
                        <td>{{ $student->name}}</td>
                        <td>{{ $student->email}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
            </div>
        </div>
    </div>
</div>

@endsection
