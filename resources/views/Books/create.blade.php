@extends('Books.layout')

@section('content')
<style>
    .uper {
      margin-top: 40px;
    }
  </style>
  <div class="card uper">
    <div class="card-header text-center">
      Add A Book
    </div>
    <div class="card-body">
      @if ($errors->any())
        <div class="alert alert-danger">
            <p><strong>Whoops!</strong> There ere some problems with your input!</p>
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div><br />
      @endif
        <form method="post" action="{{ route('books.store') }}">
            <div class="form-group">
                @csrf
                <label for="country_name">Title :</label>
                <input type="text" class="form-control" name="title" placeholder="Book Title"/>
            </div>
            <div class="form-group">
                <label for="cases">Author :</label>
                <input type="text" class="form-control" name="author" placeholder="Name of the Author"/>
            </div>
            <div class="form-group">
                <label for="cases">Year of Publication :</label>
                <input type="text" class="form-control" name="pub_year" placeholder="YYYY"/>
            </div>
            <div class="form-group">
                <label for="cases">Plot :</label>
                <textarea class="form-control" name="plot" cols="30" rows="10" 
                    style="height-150px; resize:none"></textarea>
            </div>
            <div class="col-xs-12 col-ms-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Add Book</button>
            <a href="{{ route('books.index') }}" class="btn btn-danger" >Return</a>

            </div>
        </form>
    </div>
  </div>
  
@endsection