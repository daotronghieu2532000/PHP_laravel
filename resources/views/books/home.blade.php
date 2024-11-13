@extends('layouts.app')

@section('title', 'Trang Chủ')

@section('content')
<div class="container">
    <h1 class="mb-4"> Trang Sách📖 của tôi</h1>
    <h3>📌Sách nổi bật</h3>
    <div class="row">
        @foreach ($featuredBooks as $book)
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="{{ $book->thumbnail }}" class="card-img-top" alt="{{ $book->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">Tác giả: {{ $book->author }}</p>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
