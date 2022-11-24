@extends('layouts.theme')
@section('title', 'User-Baru')

@section('content')


 <section class="content">
    <div class="card">
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Daftar New Users</h3>
                  <div class="d-flex justify-content-end">
                    <div class="m">
                      <a href="/user" class="btn btn-dark">Back</a>
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
                        <th style="width: 30%">Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($userBaru as $user)
                      <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $user->username}} </td>
                        <td>  
                                @if($user->status != '')
                                    {{ $user->status}}
                                @else 
                                <i>tidak ada</i>
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