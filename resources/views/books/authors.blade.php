@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Authors</h1>
    <ul class="list-group">
        @foreach ($authors as $author)
            <li class="list-group-item">{{ $author->author }}</li>
        @endforeach
    </ul>
</div>
@endsection
