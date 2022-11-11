@extends('layouts.theme')
@section('title', 'User-Detail')

@section('content')


 <section class="content">
    <div class="card">
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">User Detail</h3>
                  <div class="d-flex justify-content-end">
                    <div class="m">
                        @if ($user->status == 'inactive')
                        <a href="/user-approve/{{$user->slug}}" class="btn btn-dark">Approve User</a>
                        @endif
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
            
                      <div class="mb-2">
                        <label for="user" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" readonly id="user" value="{{$user->username}} "  required>
                      </div>
                      <div class="mb-2">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" readonly id="phone" value="{{$user->phone}} "  required>
                      </div>
                      <div class="mb-2">
                        <label for="addres" class="form-label">Adress</label>
                        <textarea name="addres" id="" class="form-control" cols="10" rows="5">{{$user->addres}}</textarea>
                      </div>
                      <div class="mb-2">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" class="form-control" name="status" readonly id="status" value="{{$user->status}} "  required>
                      </div>
                
              </div>
              <!-- /.card -->
        </div>
    </div>
</section>

 @endsection