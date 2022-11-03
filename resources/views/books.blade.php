@extends('layouts.main')
@section('title', 'Books')

@section('content')

 <section class="content">
    <div class="card">
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Bordered Table</h3>
                  <div class="d-flex justify-content-end">
                    <div class="mr-3 d-block">
                      <a href="book-deleted" class="btn btn-info me-3">Book Deleted</a>
                    </div>
                    <div class="m">
                      <a href="book-add" class="btn btn-primary">Tambah Data</a>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                  </div>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10%">No</th>
                        <th style="width: 15%">Code</th>
                        <th style="width: 35%">Title</th>
                        <th style="width: 15%">Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($books as $book)
                      <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $book->book_code}} </td>
                        <td> {{ $book->title}} </td>
                        <td> {{ $book->status}} </td>
                        <td>
                          <a href="book-edit/{{$book->slug}} " class="btn btn-success">Edit</a>
                          <a href="book-delete/{{$book->slug}}" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>  
                  </table>
              </div>
              <!-- /.card -->
        </div>
    </div>
</section>

 @endsection