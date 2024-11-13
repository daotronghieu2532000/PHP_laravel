<div class="mb-3">
    <label for="title" class="form-label">Tiêu đề</label>
    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" 
           value="{{ old('title', $book->title ?? '') }}" required>
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="thumbnail" class="form-label">Ảnh bìa (URL)</label>
    <input type="text" name="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail" 
           value="{{ old('thumbnail', $book->thumbnail ?? '') }}">
    @error('thumbnail')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="author" class="form-label">Tác giả</label>
    <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" id="author" 
           value="{{ old('author', $book->author ?? '') }}" required>
    @error('author')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="publisher" class="form-label">Nhà xuất bản</label>
    <input type="text" name="publisher" class="form-control @error('publisher') is-invalid @enderror" id="publisher" 
           value="{{ old('publisher', $book->publisher ?? '') }}" required>
    @error('publisher')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="publication" class="form-label">Ngày xuất bản</label>
    <input type="date" name="publication" class="form-control @error('publication') is-invalid @enderror" id="publication" 
           value="{{ old('publication', isset($book) ? \Carbon\Carbon::parse($book->publication)->format('Y-m-d') : '') }}" required>
    @error('publication')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="price" class="form-label">Giá</label>
    <input type="number" step="0.01" name="price" class="form-control @error('price') is-invalid @enderror" id="price" 
           value="{{ old('price', $book->price ?? '') }}" required>
    @error('price')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="quantity" class="form-label">Số lượng</label>
    <input type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror" id="quantity" 
           value="{{ old('quantity', $book->quantity ?? '') }}" required>
    @error('quantity')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="category_id" class="form-label">Thể loại</label>
    <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror" required>
        <option value="">-- Chọn Thể loại --</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" 
                {{ (old('category_id') == $category->id) || (isset($book) && $book->category_id == $category->id) ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
