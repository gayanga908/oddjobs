@extends('layouts.app')

@section('content')
    {{--$user_role = {{Auth::user()->user_role }}--}}
    @if ((Auth::user()->user_role) == "user")
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in User!
                </div>
            </div>
        </div>
    </div>
</div>
    @elseif((Auth::user()->user_role) == "promoter")
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>

                        <div class="panel-body">
                            You are logged in Promoter!
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif
@endsection
