@extends('Books.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Book</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('books.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-xm-12 col-md-12">
            <div class="form-group">
                <strong>Title :</strong>
                {{ $book->title }}
            </div>
        </div>
        <div class="col-xs-12 col-xm-12 col-md-12">
            <div class="form-group">
                <strong>Author :</strong>
                {{ $book->author }}
            </div>
        </div>
        <div class="col-xs-12 col-xm-12 col-md-12">
            <div class="form-group">
                <strong>Year of Publication :</strong>
                {{ $book->pub_year}}
            </div>
        </div>
        <div class="col-xs-12 col-xm-12 col-md-12">
            <div class="form-group">
                <strong>Plot: </strong>
                {{ $book->plot }}
            </div>
        </div>
    </div>
@endsection