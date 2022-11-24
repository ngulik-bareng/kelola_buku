@extends('layouts.theme')
@section('title', 'Book-Delete')

@section('content')

<section class="content">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-7">
          <div class="card ">
             <div class="card-body d-flex justify-content-center flex-column align-items-center">
              <h2>Yakin Ingin Hapus Buku {{$book->title}} ? </h2>
                    <div class="">
                        <a href="/book-destroy/{{$book->slug}}" class="btn btn-danger">No</a>
                        <a href="/books" class="btn btn-info">Cancle</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 @endsection

