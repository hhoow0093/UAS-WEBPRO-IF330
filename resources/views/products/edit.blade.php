<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit</h1>
        <form action="/seadex/products/{{ $product->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama', $product->nama) }}" class="form-control @error('nama') is-invalid @enderror">
                @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">deskripsi:</label>
                <input type="text" id="deskripsi" name="deskripsi" value="{{ old('deskripsi', $product->deskripsi) }}" class="form-control @error('deskripsi') is-invalid @enderror">
                @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="featured" class="form-label">featured:</label>
                <select id="featured" name="featured" class="form-select @error('featured') is-invalid @enderror">
                    <option value="0" {{ old('featured', '0') == '0' ? 'selected' : '' }}>Not Featured</option>
                    <option value="1" {{ old('featured') == '1' ? 'selected' : '' }}>Featured</option>
                </select>
                @error('featured') 
                    <div class="invalid-feedback">{{ $message }}</div> 
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" id="price" name="price" value="{{ old('price', $product->price) }}" class="form-control @error('price') is-invalid @enderror">
                @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Foto:</label>
                <input type="file" id="gambar" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                @error('gambar') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
