@extends('layouts.main')
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
             <div class="row">
               <div class="col-md-3 col-sm-6 col-12">
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
               <div class="col-md-3 col-sm-6 col-12">
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
               <div class="col-md-3 col-sm-6 col-12">
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
               <div class="col-md-3 col-sm-6 col-12">
                 <div class="info-box">
                   <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>
       
                   <div class="info-box-content">
                     <span class="info-box-text">Likes</span>
                     <span class="info-box-number">93,139</span>
                   </div>
                   <!-- /.info-box-content -->
                 </div>
                 <!-- /.info-box -->
               </div>
               <!-- /.col -->
             </div>
             <!-- /.row -->
            </div>
          </div>
        </div>
      </section> 
      
      <section class="content">
        <div class="card">
          <div class="card-body">
            <div class="row mt-3">
             <div class="col-12">
               <div class="card">
                 <div class="card-header">
                   <h3 class="card-title">Fixed Header Table</h3>
           
                   <div class="card-tools">
                     <div class="input-group input-group-sm" style="width: 150px;">
                       <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
           
                       <div class="input-group-append">
                         <button type="submit" class="btn btn-default">
                           <i class="fas fa-search"></i>
                         </button>
                       </div>
                     </div>
                   </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body table-responsive p-0" style="height: 300px;">
                   <table class="table table-head-fixed text-nowrap">
                     <thead>
                       <tr>
                         <th>ID</th>
                         <th>User</th>
                         <th>Date</th>
                         <th>Status</th>
                         <th>Reason</th>
                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <td>183</td>
                         <td>John Doe</td>
                         <td>11-7-2014</td>
                         <td><span class="tag tag-success">Approved</span></td>
                         <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                       </tr>
                       <tr>
                         <td>219</td>
                         <td>Alexander Pierce</td>
                         <td>11-7-2014</td>
                         <td><span class="tag tag-warning">Pending</span></td>
                         <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                       </tr>
                     </tbody>
                   </table>
                 </div>
                 <!-- /.card-body -->
               </div>
               <!-- /.card -->
             </div>
        </div>
    </div>
    </section> 



 @endsection





 {{-- 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 --}}