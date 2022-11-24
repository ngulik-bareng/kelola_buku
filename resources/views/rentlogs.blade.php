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
                  <x-rent-log-table :rentlog='$rent_logs' />
              </div>
              <!-- /.card -->
            </div>
        </div>
    </div>
</section>
    

@endsection