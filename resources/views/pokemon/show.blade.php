@extends('layouts.app')

@section('content')
<div class="container py-5">

    <h2 class="text-center pb-4 text-secondary">Pokemon details</h2>

    <div class="row py-3">
        <div class="col-12">
            <div class="card">
                <img src="{{$pokemon->thumb}}" alt="{{$pokemon->name}}">

                <div class="card-body">
                    <h4>Name: <span class="fw-normal fs-5">{{$pokemon->name}}</span></h4>
                    <h4>Type: <span class="fw-normal fs-5">{{$pokemon->type}}</span></h4>
                    <h4>Start level: <span class="fw-normal fs-5">{{$pokemon->start_level}}</span></h4>
                    <h4>Description: <span class="fw-normal fs-5">{{$pokemon->description}}</span></h4>
                </div>
            </div>
        </div>
    </div>

    @endsection