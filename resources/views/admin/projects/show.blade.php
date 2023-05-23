@extends('layouts.app')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center">
        <div class="row">
            <div class="details">
                <h2 class="fs-4 text-secondary my-3">
                    {{$project->project_title}}
                </h2>
                <div>
                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->project_title }}">
                </div>
                <p>{{$project->description}}</p>
                <p>{{$project->creation_date}}</p>
            </div>
        </div>
    </div>
</div>
@endsection