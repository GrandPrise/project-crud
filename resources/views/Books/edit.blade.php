@extends('Books.layout')

@section('content')
<style>
    .uper {
      margin-top: 40px;
    }
  </style>
  <div class="card uper">
    <div class="card-header">
      Edit Book Data
    </div>
    <div class="card-body">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div><br />
      @endif
        <form method="post" action="{{ route('books.update', $book->id ) }}">
            <div class="form-group">
              @method('PATCH')
                @csrf
                <label for="country_name">Book Title:</label>
                <input type="text" class="form-control" name="title" value="{{ $book->title }}"/>
            </div>
            <div class="form-group">
                <label for="cases">Book Autor :</label>
                <input type="text" class="form-control" name="author" value="{{ $book->author }}"/>
            </div>
            <div class="form-group">
                <label for="cases">Book Year of Publication :</label>
                <input type="text" class="form-control" name="pub_year" value="{{ $book->pub_year }}"/>
            </div>
            <div class="form-group">
                <label for="cases">Book Summary :</label>
                <input type="text" class="form-control" name="plot" value="{{ $book->plot }}"/>
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>
  </div>
    
@endsection