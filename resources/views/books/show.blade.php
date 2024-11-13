@extends('layouts.app')

@section('title', 'Chi Tiết Sách')

@section('content')
<div class="container">
    <h1 class="mb-4">{{ $book->title }}</h1>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}" class="img-fluid mb-3">
        </div>
        <div class="col-md-8">
            <p><strong>Tác giả:</strong> {{ $book->author }}</p>
            <p><strong>Nhà xuất bản:</strong> {{ $book->publisher }}</p>
            <p><strong>Ngày xuất bản:</strong> {{ \Carbon\Carbon::parse($book->publication)->format('d/m/Y') }}</p>
            <p><strong>Giá:</strong> ${{ number_format($book->price, 2) }}</p>
            <p><strong>Số lượng:</strong> {{ $book->quantity }}</p>
            <p><strong>Thể loại:</strong> {{ optional($book->category)->name }}</p>

            <a href="{{ route('books.index') }}" class="btn btn-secondary">Quay lại danh sách</a>
        </div>
    </div>
</div>
@endsection
