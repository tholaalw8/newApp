@extends('master')
@section('title','Selected Movie')

@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="content">
            <h2 class="header"> {!! $movies->title !!}</h2>

            <p><strong>released_year</strong>: {!! $movies->released_year !!}</p>
            <p><strong>genre</strong>: {!! $movies->genre !!}</p>
            <p><strong>rating</strong>: {!! $movies->rating !!}</p>
            <p><strong>casts</strong>: {!! $movies->casts !!}</p>
            <p><strong>director</strong>: {!! $movies->director !!}</p>
            <p><strong>language</strong>: {!! $movies->language !!}</p>
            <p><strong>type</strong>: {!! $movies->type !!}</p>
        </div>
        <a href="{!! action('MoviesController@edit',$movies->slug) !!}" class="btn btn-info">Edit</a>
        <a href="#" class="btn btn-info">Delete</a>

    </div>

<p>test</p>

@endsection