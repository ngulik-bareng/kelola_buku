@extends('layouts.theme')
@section('title', 'User-Deleted')

@section('content')

<section class="content">
    <div class="card">
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">User Deleted</h3>
                  <div class="d-flex justify-content-end">
                    <div class="mr-3 d-block">
                      <a href="user" class="btn btn-dark me-3">Back</a>
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
                        <th style="width: 60%">User</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($deletedUsers as $user)
                      <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $user->username}} </td>
                        <td>
                          <a href="/user-restore/{{$user->slug}} " class="btn btn-primary">Restore</a>
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

