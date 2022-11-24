@extends('layouts.theme')
@section('title', 'Category')

@section('content')

<section class="content">
    <div class="card">
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Category</h3>
                  <div class="d-flex justify-content-end">
                    <div class="mr-3 d-block">
                      <a href="category-deleted" class="btn btn-info me-3">Category Deleted</a>
                    </div>
                    <div class="m">
                      <a href="category-add" class="btn btn-primary">Add New</a>
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
                        <th style="width: 60%">Category</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $category)
                      <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $category->name}} </td>
                        <td>
                          <a href="category-edit/{{$category->slug}} " class="btn btn-success">Edit</a>
                          <a href="category-delete/{{$category->slug}}" class="btn btn-danger">Delete</a>
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

