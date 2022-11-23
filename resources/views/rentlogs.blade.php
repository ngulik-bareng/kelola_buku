@extends('layouts.theme')
@section('title', 'Rentlogs')

@section('content')
<section class="content">

    <div class="card">
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Rent Logs</h3>
             
                  <div class="d-flex justify-content-end">
                    <div class="mr-3 d-block">
                      <a href="/book-deleted" class="btn btn-info me-3">Book Deleted</a>
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
                  <table class="table table-bordered table-sm table-resposive">
                    <thead>
                      <tr>
                        <th style="width: 7%">No</th>
                        <th style="width: 15%">User</th>
                        <th style="width: 19%">Book</th>
                        <th style="width: 15%">Rent Date</th>
                        <th style="width: 17%">Return Date</th>
                        <th style="width: 15%">Actual Return Date</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($rent_logs as $rent_log)
                      <tr class=" {{$rent_log->actual_return_date == null ? '' :
                                   ($rent_log->return_date < $rent_log->actual_return_date ? 'bg-danger' : 'bg-success' )}} ">
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $rent_log->user->username}} </td>
                        <td> {{ $rent_log->book->title}} </td>
                        <td> {{ $rent_log->rent_date}} </td>
                        <td> {{ $rent_log->return_date}} </td>
                        <td> {{ $rent_log->actual_return_date}} </td>
                      </tr>
                      @endforeach
                    </tbody>  
                  </table>
              </div>
              <!-- /.card -->
            </div>
        </div>
    </div>
</section>
    

@endsection