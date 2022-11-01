@extends('layouts.main')
@section('title', 'Category-Add')

@section('content')

<section class="content">
    <div class="card">
        <div class="card-body">
            <p>Category Add</p>
              <!-- /.card -->
              <div class="card">
                <div class="card-body">
                    <form action="category-add" method="post">
                        @csrf
                         <div class="mb-2">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control" name="name" id="category" placeholder="category" required>
                          </div>
                          <div class="d-flex justify-content-end">
                            <button type="submit" name="button" class="btn btn-primary px-3 d-flex justify-content-end">Tambah</button>
                          </div>
                    </form>
                </div>
              </div>
        </div>
    </div>
</section>


 @endsection

