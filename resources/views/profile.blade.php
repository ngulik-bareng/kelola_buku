@extends('layouts.theme')
@section('title', 'Profile')



@section('content')


<section class="content">
    <div class="mt-5">
        <x-rent-log-table :rentlog='$rent_logs' />
      </div>
</section>


 @endsection