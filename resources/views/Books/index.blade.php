@extends('Books.layout')

@section('content')
<style>
    .uper {
      margin-top: 40px;
    }
  </style>
  
  <div class="uper">
    @if($msg=session()->get('success'))
      <div class="alert alert-success">
        {{ $msg }}  
      </div><br />
    @endif

    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Edit Book</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('books.create') }}">Add New Book</a>
            </div>
        </div>
    </div>
    
    <table class="table table-striped">
      <thead>
          <tr>
            <td>ID</td>
            <td>Book Title</td>
            <td>Author</td>
            <td>Year of Publication</td>
            <td>Plot</td>
            <td colspan="2">Action</td>
          </tr>
      </thead>
      <tbody>
          @foreach($books as $book)
          <tr>
              <td>{{$book->id}}</td>
              <td>{{$book->title}}</td>
              <td>{{$book->author}}</td>
              <td>{{$book->pub_year}}</td>
              <td>{{$book->plot}}</td>

              <td><a href="{{ route('books.show', $book->id)}}" class="btn btn-info">Show</a></td>
              <td><a href="{{ route('books.edit', $book->id)}}" class="btn btn-primary">Edit</a></td>
              <td>
                  <form action="{{ route('books.destroy', $book->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>

  <div>
@endsection