@extends('layouts.main')
@section('title', 'Book-Add')

@section('content')

<section class="content">
    <div class="card">
        <div class="card-body">
            <p>Book Add</p>
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
                    <form action="book-add" method="post" enctype="multipart/form-data">
                        @csrf
                         <div class="mb-2">
                            <label for="code" class="form-label">code</label>
                            <input type="text" class="form-control" name="book_code" id="code" placeholder="code" required>
                          </div>
                         <div class="mb-2">
                            <label for="title" class="form-label">title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="title" required>
                          </div>
                          <div class="custom-file mb-3 mt-3">
                            <input type="file" class="custom-file-input" id="cover" name="cover">
                            <label class="custom-file-label" for="cover" name="cover">Choose file</label>
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

