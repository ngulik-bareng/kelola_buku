@extends('layouts.theme')
@section('title', 'User')

@section('content')


 <section class="content">
    <div class="card">
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Daftar Users</h3>
                  <div class="d-flex justify-content-end">
                    <div class="mr-3 d-block">
                      <a href="/user-deleted" class="btn btn-info me-3">User Deleted</a>
                    </div>
                    <div class="m">
                      <a href="/user-add" class="btn btn-primary">New User</a>
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
                        <th style="width: 40%">User</th>
                        <th style="width: 30%">Phone</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $user->username}} </td>
                        <td>  
                                @if($user->phone != '')
                                    {{ $user->phone}}
                                @else 
                                <i>belum ada nomor</i>
                                @endif
                        </td>
                        <td>
                          <a href="/user-edit/{{$user->slug}} " class="btn btn-success">Detil</a>
                          <a href="/user-delete/{{$user->slug}}" class="btn btn-danger">Delete</a>
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