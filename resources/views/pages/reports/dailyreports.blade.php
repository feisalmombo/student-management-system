@extends('layouts.master')
@section('page_title', 'Daily Reports')
@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h6 class="card-title">All Teachers</h6>
        {!! Qs::getPanelOptions() !!}
    </div>

    <div class="card-body">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="nav-item"><a href="#daily-reports" class="nav-link active" data-toggle="tab">Daily Reports</a></li>
        </ul>

        <div class="tab-content">
			{{--  @if(!empty($teachers))  --}}
            <div class="tab-pane fade show active" id="daily-reports">
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
                        {{--  @foreach($teachers as $key=>$teacher)  --}}
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                    {{--  @endforeach  --}}
                    </tbody>
                </table>
            {{--  @endif  --}}
            </div>
        </div>
    </div>
</div>

@endsection
