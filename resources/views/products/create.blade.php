<x-layout>
    <link rel="stylesheet" href="/css/mainSection.css">
    <x-navbar-tertiary></x-navbar-tertiary>
    <x-navbar-secondary></x-navbar-secondary>
    <x-slot:title>Halaman Products</x-slot:title>
    <div class="container mt-5">
        <h1>Create New</h1>
        <form action="/seadex/products" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror">
                @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi:</label>
                <input type="text" id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}" class="form-control @error('deskripsi') is-invalid @enderror">
                @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <input type="hidden" id="kategori" name="kategori" value="{{ request('category') }}">

            <div class="mb-3">
                <label for="featured" class="form-label">Featured:</label>
                <select id="featured" name="featured" class="form-select @error('featured') is-invalid @enderror">
                    <option value="0" {{ old('featured', '0') == '0' ? 'selected' : '' }}>Not Featured</option>
                    <option value="1" {{ old('featured') == '1' ? 'selected' : '' }}>Featured</option>
                </select>
                @error('featured') 
                    <div class="invalid-feedback">{{ $message }}</div> 
                @enderror
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Foto:</label>
                <input type="file" id="gambar" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                @error('gambar') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/mainSection.js"></script>
</x-layout>
