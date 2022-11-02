@extends('layouts.main')
@section('title', 'Category-Edit')

@section('content')

<section class="content">
    <div class="card">
        <div class="card-body">
            <p>Category Edit</p>
              <!-- /.card -->
              <div class="card">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <form action="/category-edit/{{$category->slug}} " method="post">
                        @csrf
                        @method('put')
                         <div class="mb-2">
                            <label for="category" class="form-label">Category Edit</label>
                            <input type="text" class="form-control" name="name" id="category" value="{{$category->name}} " placeholder="category" required>
                          </div>
                          <div class="d-flex justify-content-end">
                            <button type="submit" name="button" class="btn btn-primary px-3 d-flex justify-content-end">Update</button>
                          </div>
                    </form>
                </div>
              </div>
        </div>
    </div>
</section>


 @endsection

