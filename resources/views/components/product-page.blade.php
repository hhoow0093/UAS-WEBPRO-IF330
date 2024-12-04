<x-layout>
    <link rel="stylesheet" href="/css/mainSection.css">
    <x-slot:title>Halaman Products</x-slot:title>
    <x-navbar-tertiary></x-navbar-tertiary>
    <x-navbar-secondary></x-navbar-secondary>
    <x-modals.alert />

    <section class="product-page-header text-white py-5" style="background-color: rgb(5, 89, 158);">
        <div class="container">
            <h1 class="text-center mb-4 montserrat">
                <span style="text-decoration-line: underline; text-decoration-color: #ffff; text-decoration-thickness: 5px; text-underline-offset: 10px;">Our Products</span>
            </h1>
            <p class="text-center lead roboto">Premium Indonesian Commodities and Agricultural Exports</p>
        </div>
    </section>  

    <div class="container mt-2 d-flex align-items-center">
        <form method="POST" action="" class="d-flex align-items-center me-auto">
            <input type="text" name="item_name" class="form-control me-2" placeholder="Search for items">
            <button type="submit" class="btn btn-success">Search</button>
        </form>

        @guest
            <a href="{{ route('login') }}" class="btn btn-primary me-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
        @endguest

        @auth
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-link text-decoration-none">Logout</button>
            </form>
        @endauth
    </div>

    <section class="product-categories my-5">
        <div class="container">
            <div class="row justify-content-around">
                @foreach($categories as $category)
                    @if($category->products->isNotEmpty())
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <h4 class="card-title">{{ $category->name }}</h4>
                                    <a href="#{{ $category->name }}-section" class="scroll-link btn btn-outline-primary">View {{ ucfirst($category->name) }}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    @foreach($categories as $category)
        @if($category->products->isNotEmpty())
            <section id="{{ $category->name }}-section" class="bg-light py-5">
                <div class="container">
                    <h2 class="text-center mb-4" style="color: rgb(5, 89, 158);">{{ ucfirst($category->name) }} Products</h2>
                    <div class="row justify-content-around">
                        @forelse($category->products as $product)
                            <div class="col-12 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $product->nama }}</h4>
                                        <p class="card-text">{{ $product->deskripsi }}</p>
                                        
                                        @auth
                                            <form method="POST" action="{{ route('product.interested', $product->id) }}">
                                                @csrf
                                                @method('POST')
                                                <button type="submit" class="btn btn-sm btn-outline-success">
                                                    {{ Auth::user()->products->contains($product->id) ? 'Not Interested' : 'Interested' }}
                                                </button>
                                            </form>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <p>No products available in this category.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </section>
        @endif
    @endforeach
</x-layout>
