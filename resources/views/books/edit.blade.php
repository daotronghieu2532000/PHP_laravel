@extends('layouts.app')

@section('title', 'Chỉnh Sửa Sách')

@section('content')
<div class="container">
    <h1 class="mb-4">Chỉnh Sửa Sách</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('books.partials.form')
        <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Quay lại danh sách</a>
    </form>
</div>
@endsection
