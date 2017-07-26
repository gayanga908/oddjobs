@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>user dash</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form-horizontal" method="POST" action="{{ route('jobs.store') }}">
            <div class="form-group">
                <label for="job_title">Title*</label>
                <input type="text" class="form-control" name="job_title" aria-describedby="jobTitleHelp" placeholder="Enter email">
                {{--<small id="jobTitleHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
            </div>
            <div class="form-group">
                <label for="job_description">Description*</label>
                <input type="textarea" class="form-control" name="job_description" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="job_payment">Payment*</label>
                <input type="text" class="form-control" name="job_payment" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="job_no_vacancies">Needed*</label>
                <input type="text" class="form-control" name="job_no_vacancies" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="job_location">Location*</label>
                <select class="form-control" name="job_location">
                    <option value="Colombo">Colombo</option>
                    <option value="Kalutara">Kalutara</option>
                    <option value="Gampaha">Gampaha</option>
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" name="job_promoter" value="{{ Auth::user()->id }}">
            </div>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
