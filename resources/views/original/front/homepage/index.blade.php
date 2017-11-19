@extends('layouts.source')
@section('title')
    HOMEPAGE
@endsection
@section('style')
    <style media="screen">
        .nav-item{border-left: 2px solid #eeeeee;}
        .row-content{width: 100%; margin-left: 0px;margin-bottom: 3rem;}
        .main-content{height:100%;}
    </style>
@endsection
@section('content')
    <div class="contain-fluid main-content">
        <div class="row row-content">
            <div class="col-md-4 col-md-offset-4">
                <h2>I am Homepage index</h2>
            </div>
            <div class="col-md-6">
                    <h2>&nbsp;&nbsp;&nbsp;&nbsp;ImmunDB is used to show different gene expression patterns in immune cells , including: HSC, B cell, T cell……</h2>
                    <h1>&nbsp;&nbsp;&nbsp;&nbsp;ImmunDB is used to show different gene expression patterns in immune cells , including: HSC, B cell, T cellImmunDB is used to show different gene expression patterns in immune cells , including: HSC, B cell, T cell</h1>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <img src="{{asset('images/system.png')}}" alt="">
            </div>
        </div>
    </div>

@endsection
