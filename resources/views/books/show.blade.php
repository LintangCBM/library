@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Book Details</h1>
        <div class="card">
            <div class="card-header">
                {{ $book->title }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Author: {{ $book->author }}</h5>
                <p class="card-text">ISBN: {{ $book->isbn }}</p>
                <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
