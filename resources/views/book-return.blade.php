@extends('layouts.theme')
@section('title', 'Book-Rent')

@section('content')

<section class="content">
    <div class="card">
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Book Return Form</h3>
                  <div class="d-flex justify-content-end">
                    <div class="mr-3 d-block">
                      <a href="/books" class="btn btn-dark me-3">Back</a>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div>
                    @if (session('message'))
                        <div class="alert {{session('alert-class')}} ">
                            {{ session('message') }}
                        </div>
                    @endif
                  </div>
                  <form action="/book-return" method="post">
                    @csrf
                    <div class="mb-2">
                      <label for="code" class="form-label">user</label>
                      <select name="users_id" id="user" multiple="multiple" class="form-control select2bs4">
                        <option value="">select user</option>
                        @foreach ($users as $user)              
                        <option value="{{$user->id}}">{{$user->username}}</option>
                        @endforeach
                      </select>
                    </div>
                   <div class="mb-3">
                      <label for="book" class="form-label">book</label>
                      <select name="book_id" id="book" multiple="multiple" class="form-control select2bs4">
                        <option value="">select book</option>
                        @foreach ($books as $book)              
                        <option value="{{$book->id}}">{{$book->book_code}}  {{$book->title}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                  
              </div>
              <!-- /.card -->
        </div>
    </div>
</section>


 @endsection

