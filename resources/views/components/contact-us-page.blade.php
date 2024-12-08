<x-layout>
    <link rel="stylesheet" href="/css/mainSection.css">
    <x-slot:title>Halaman Contact us</x-slot:title>
    <x-navbar-tertiary></x-navbar-tertiary>
    <x-navbar-secondary></x-navbar-secondary>
    <div class="container">
        <div class="contact-header text-center">
            <h2>Kontak Kami</h2>
            <p>Silakan isi form di bawah ini untuk menghubungi kami. Kami akan merespons sesegera mungkin.</p>
        </div>

        <!-- Pesan sukses setelah form terkirim -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Kontak -->
        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="subject">Subjek</label>
                <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject') }}" required>
                @error('subject')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="message">Pesan</label>
                <textarea class="form-control" id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
                @error('message')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary contact-btn mt-3">Kirim Pesan</button>
        </form>
    </div>
    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/mainSection.js"></script>
</x-layout>