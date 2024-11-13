@extends('layouts.app')

@section('title', 'Danh Sách Sách')

@section('content')
<div class="container">
    <h1 class="mb-4">Danh Sách Sách</h1>
    <a href="{{ route('books.create') }}" class="btn btn-success mb-3">Thêm Sách Mới</a>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Tiêu đề</th>
                <th>Tác giả</th>
                <th>Thể loại</th>
                <th>Giá</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ optional($book->category)->name }}</td>
                    <td>${{ number_format($book->price, 2) }}</td>
                    <td>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm">Xem</a>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Chỉnh sửa</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;" 
                              onsubmit="return confirm('Bạn có chắc chắn muốn xóa sách này không?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Hiển thị phân trang -->
    <div class="d-flex justify-content-center">
        {{ $books->links() }}
    </div>
</div>
@endsection
