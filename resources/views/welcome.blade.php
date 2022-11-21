@extends('layouts.theme')
@section('title', 'Books')

@section('content')



<section class="content">
{{-- search --}}
<div class="container py-3">
    <div class="container-fluid">
        <form action="" method="get">
          <div class="row">
              <div class="col-12 col-sm-6">
                  <select name="category" id="" class="form-control">
                    <option value="">select category</option>
                    @foreach ($categories as $item)
                        <option value="{{$item->id}}">{{$item->name}} </option>
                    @endforeach
                  </select>
              </div>
              <div class="col-12 col-sm-6">
                <div class="input-group">
                    <input type="text" name="title" class="form-control" placeholder="search book title">
                    <button type="submit" class="btn btn-outline-success">search</button>
                </div>
              </div>
          </div>
        </form>
    </div>
</div>
{{-- end search --}}

    <div class="container">
        <div class="container-fluid">
            <div class="row">

                @foreach($books as $book)
                    <div class="col-lg-3 col-md-4 col-sm-12 ms-2 mb-3">
                        <div class="card" style="width:">
                           @if($book->cover!= '')
                            <img src="{{ asset('storage/cover/'.$book->cover)}}" alt="" style="height: 300px; width:auto; object-fit:cover">
                           @else
                           <div class="p-5 " style="height: 300px; width:auto; object-fit:cover">
                               <p class="card-text text-center"><i>tidak ada gambar</i></p>
                           </div>
                           @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $book->book_code}} </h5>
                                <p class="card-text">{{ $book->title}}</p>
                                <p class="card-text 
                                          text-right
                                          {{$book->status == 'In Stock' ? 'text-success' : 'text-danger'}}">
                                    {{ $book->status}}
                                </p>
                            </div>
                        </div>
                    </div>         
                @endforeach
              
               
            </div>
        </div>
    </div>
</section>

 @endsection