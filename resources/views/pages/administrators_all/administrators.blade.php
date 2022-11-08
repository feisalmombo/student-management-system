@extends('layouts.master')
@section('page_title', 'All Administrators')
@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h6 class="card-title">All Administrators</h6>
        {!! Qs::getPanelOptions() !!}
    </div>

    <div class="card-body">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="nav-item"><a href="#all-administrators" class="nav-link active" data-toggle="tab">All Administrators</a></li>
        </ul>

        <div class="tab-content">
			@if(!empty($administrators))
            <div class="tab-pane fade show active" id="all-administrators">
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
                        @foreach($administrators as $key=>$administrator)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td><img class="rounded-circle" style="height: 40px; width: 40px;" src="{{ $administrator->photo }}" alt="photo"></td>
                        <td>{{ $administrator->username}}</td>
                        <td>{{ $administrator->name}}</td>
                        <td>{{ $administrator->email}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>No Administrators found</strong>
                </div>
            @endif
            </div>
        </div>
    </div>
</div>

@endsection
