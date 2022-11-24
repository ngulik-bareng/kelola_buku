@extends('layouts.theme')
@section('title', 'User-Delete')

@section('content')

<section class="content">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-7">
          <div class="card ">
             <div class="card-body d-flex justify-content-center flex-column align-items-center">
              <h2>Yakin Ingin Hapus User {{$user->username}} ? </h2>
                    <div class="">
                        <a href="/user-destroy/{{$user->slug}}" class="btn btn-danger">Yes</a>
                        <a href="/user" class="btn btn-info">Cancle</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 @endsection

