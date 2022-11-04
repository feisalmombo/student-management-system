@extends('layouts.master')
@section('page_title', 'My Dashboard')
@section('content')

    @if(Qs::userIsTeamSA())
       <div class="row">
           <div class="col-sm-6 col-xl-3">
                <a href="{{ url('/all/students') }}">
                    <div class="card card-body bg-blue-400 has-bg-image">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mb-0">{{ $users->where('user_type', 'student')->count() }}</h3>
                                <span class="text-uppercase font-size-xs font-weight-bold">Total Students</span>
                            </div>

                            <div class="ml-3 align-self-center">
                                <i class="icon-users4 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </a>
           </div>

           <div class="col-sm-6 col-xl-3">
                <a href="{{ url('/all/teachers') }}">
                    <div class="card card-body bg-danger-400 has-bg-image">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mb-0">{{ $users->where('user_type', 'teacher')->count() }}</h3>
                                <span class="text-uppercase font-size-xs">Total Teachers</span>
                            </div>

                            <div class="ml-3 align-self-center">
                                <i class="icon-users2 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </a>
           </div>

           <div class="col-sm-6 col-xl-3">
                <a href="{{ url('/all/administrators') }}">
                    <div class="card card-body bg-success-400 has-bg-image">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-pointer icon-3x opacity-75"></i>
                            </div>

                            <div class="media-body text-right">
                                <h3 class="mb-0">{{ $users->where('user_type', 'admin')->count() }}</h3>
                                <span class="text-uppercase font-size-xs">Total Administrators</span>
                            </div>
                        </div>
                    </div>
                </a>
           </div>

           <div class="col-sm-6 col-xl-3">
                <a href="{{ url('/all/parents') }}">
                    <div class="card card-body bg-indigo-400 has-bg-image">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-user icon-3x opacity-75"></i>
                            </div>

                            <div class="media-body text-right">
                                <h3 class="mb-0">{{ $users->where('user_type', 'parent')->count() }}</h3>
                                <span class="text-uppercase font-size-xs">Total Parents</span>
                            </div>
                        </div>
                    </div>
                </a>
           </div>
       </div>
    @endif

    {{--  @if(Qs::userIsTeamSA())
        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <a href="#">
                    <div class="card card-body bg-green-400 has-bg-image">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mb-0">345</h3>
                                <span class="text-uppercase font-size-xs font-weight-bold">Total Subjects</span>
                            </div>

                            <div class="ml-3 align-self-center">
                                <i class="icon-box icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-xl-3">
                <a href="#">
                    <div class="card card-body bg-success-400 has-bg-image">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mb-0">566</h3>
                                <span class="text-uppercase font-size-xs">Total Classes</span>
                            </div>

                            <div class="ml-3 align-self-center">
                                <i class="icon-pen icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-xl-3">
                <a href="#">
                    <div class="card card-body bg-warning-400 has-bg-image">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-car icon-3x opacity-75"></i>
                            </div>

                            <div class="media-body text-right">
                                <h3 class="mb-0">407</h3>
                                <span class="text-uppercase font-size-xs">Total Dormitories</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-xl-3">
                <a href="#">
                    <div class="card card-body bg-pink-400 has-bg-image">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-pencil icon-3x opacity-75"></i>
                            </div>

                            <div class="media-body text-right">
                                <h3 class="mb-0">708</h3>
                                <span class="text-uppercase font-size-xs">Total Subjects</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endif  --}}


    {{--  @if(Qs::userIsTeamSA())
    <div class="card">

    </div>
    @endif  --}}

    {{--  Students view dashboard details  --}}
    @if (auth()->check())
        @if (auth()->user()->user_type == 'student')
        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <a href="#">
                    <div class="card card-body bg-green-400 has-bg-image">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mb-0">341</h3>
                                <span class="text-uppercase font-size-xs font-weight-bold">Total Subjects</span>
                            </div>

                            <div class="ml-3 align-self-center">
                                <i class="icon-box icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-xl-3">
                <a href="#">
                    <div class="card card-body bg-success-400 has-bg-image">
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mb-0">562</h3>
                                <span class="text-uppercase font-size-xs">Total Classes</span>
                            </div>

                            <div class="ml-3 align-self-center">
                                <i class="icon-pen icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-xl-3">
                <a href="#">
                    <div class="card card-body bg-warning-400 has-bg-image">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-car icon-3x opacity-75"></i>
                            </div>

                            <div class="media-body text-right">
                                <h3 class="mb-0">403</h3>
                                <span class="text-uppercase font-size-xs">Total Dormitories</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-xl-3">
                <a href="#">
                    <div class="card card-body bg-pink-400 has-bg-image">
                        <div class="media">
                            <div class="mr-3 align-self-center">
                                <i class="icon-pencil icon-3x opacity-75"></i>
                            </div>

                            <div class="media-body text-right">
                                <h3 class="mb-0">704</h3>
                                <span class="text-uppercase font-size-xs">Total Subjects</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @else
      @endif
    @endif


    {{--Events Calendar Begins--}}
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">School Events Calendar</h5>
         {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="fullcalendar-basic"></div>
        </div>
    </div>
    {{--Events Calendar Ends--}}
    @endsection
