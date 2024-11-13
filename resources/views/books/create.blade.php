@extends('layouts.app')

@section('title', 'Thêm Sách Mới')

@section('content')
<div class="container">
    <h1 class="mb-4">Thêm Sách Mới</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        @include('books.partials.form')
        <button type="submit" class="btn btn-success">Thêm Sách</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Quay lại danh sách</a>
    </form>
</div>
@endsection
