@extends('layouts.main')
@section('title', 'Category')

@section('content')

<section class="content">
    <div class="card">
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Bordered Table</h3>
                  <div class="d-flex justify-content-end">
                    <a href="#" class="btn btn-primary">Tambah Data</a>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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
                          <a href="#" class="btn btn-success">Edit</a>
                          <a href="#" class="btn btn-danger">Delete</a>
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

