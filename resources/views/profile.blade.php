@extends('layouts.theme')
@section('title', 'Profile')

@section('logname')
<h1>Welcome {{Auth::user()->username}} </h1>
@endsection


@section('content')




 @endsection