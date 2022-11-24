@extends('layouts.theme')
@section('title', 'Dashboard')

@section('logname')
<h1>Welcome {{Auth::user()->username}} </h1>
@endsection
@section('content')
<section class="content">
  <div class="card">
      <div class="card-body">
        <section class="content">
           <div class="container-fluid">
             <h5 class="mb-2">Info Books</h5>
             <hr>
             <div class="row">
               <div class="col-md-4 col-sm-6 col-12">
                 <div class="info-box">
                   <span class="info-box-icon bg-info"><i class="fas fa-book"></i></span>
       
                   <div class="info-box-content">
                     <span class="info-box-text">Books</span>
                     <span class="info-box-number"> {{$book_count}} </span>
                   </div>
                   <!-- /.info-box-content -->
                 </div>
                 <!-- /.info-box -->
               </div>
               <!-- /.col -->
               <div class="col-md-4 col-sm-6 col-12">
                 <div class="info-box">
                   <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
       
                   <div class="info-box-content">
                     <span class="info-box-text">Category</span>
                     <span class="info-box-number">{{$category_count}}</span>
                   </div>
                   <!-- /.info-box-content -->
                 </div>
                 <!-- /.info-box -->
               </div>
               <!-- /.col -->
               <div class="col-md-4 col-sm-6 col-12">
                 <div class="info-box">
                   <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>
       
                   <div class="info-box-content">
                     <span class="info-box-text">User</span>
                     <span class="info-box-number">{{$user_count}}</span>
                   </div>
                   <!-- /.info-box-content -->
                 </div>
                 <!-- /.info-box -->
               </div>
               <!-- /.col -->
              
               <!-- /.col -->
             </div>
             <!-- /.row -->
            </div>
          </div>
        </div>
      </section> 
      
  



 @endsection





 {{-- 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 --}}