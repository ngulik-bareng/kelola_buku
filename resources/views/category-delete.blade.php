@extends('layouts.theme')
@section('title', 'Category-Delete')

@section('content')

<section class="content">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-7">
          <div class="card ">
             <div class="card-body d-flex justify-content-center flex-column align-items-center">
              <h2>Yakin Ingin Hapus Category {{$category->name}} ? </h2>
                    <div class="">
                        <a href="/category-destroy/{{$category->slug}}" class="btn btn-danger">Ya</a>
                        <a href="/category" class="btn btn-info">Cancle</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 @endsection

