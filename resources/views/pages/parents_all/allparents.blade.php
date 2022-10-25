@extends('layouts.master')
@section('page_title', 'All Parents')
@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h6 class="card-title">All Parents</h6>
        {!! Qs::getPanelOptions() !!}
    </div>

    <div class="card-body">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="nav-item"><a href="#all-parents" class="nav-link active" data-toggle="tab">All Parents</a></li>
        </ul>

        <div class="tab-content">
			@if(!empty($parents))
            <div class="tab-pane fade show active" id="all-parents">
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
                        @foreach($parents as $key=>$parents)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td><img class="rounded-circle" style="height: 40px; width: 40px;" src="{{ $parents->photo }}" alt="photo"></td>
                        <td>{{ $parents->username}}</td>
                        <td>{{ $parents->name}}</td>
                        <td>{{ $parents->email}}</td>
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
