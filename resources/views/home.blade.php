
@extends('master')
@section('title','Dashboard')
@section('content')




@guest
    <div class="container col-md-8 col-md-offset-2">
<div class="alert alert-warning alert-dismissible show"> Welcome to the cplex software dashboard!, It seems you are not logged in </br>
    If you are a guest user please <strong><a href="{{route('login')}}">sign in</a></strong> or <strong><a href="{{route('register')}}">register</a></a></strong>! You may only view Movie list and ticket list as a guest</div>
    </div>
    @else

    <h3> Welcome {{Auth::user()->name}}</h3>

@endguest




@endsection
