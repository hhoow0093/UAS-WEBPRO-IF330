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

    <section>
        <div class="container mt-2">
            <div class="row align-items-start">
                <div class="col-md-8 d-flex align-items-center">
                    <form id="filterSearchForm" method="GET" action="{{ url()->current() }}" class="d-flex align-items-center w-100">
                        <input type="text" name="product_name" class="form-control me-2 border border-success"
                            placeholder="Search for products" value="{{ request('product_name') }}"
                            style="max-width: 300px; padding: 0.5rem;">
                        <input type="hidden" name="filter" value="{{ request('filter') }}"> <!-- Retain filter in the form -->
                        <button type="submit" class="btn btn-success px-4 py-2">Search</button>
                    </form>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
                    @auth
                        <a href="{{ route('cart.index') }}" class="btn btn-outline-success px-4 py-2">
                            Shopping Cart
                        </a>
                    @endauth
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <select id="filterDropdown" name="filter" class="form-select mb-3" style="max-width: 200px;">
                        <option value="" {{ request('filter') === null ? 'selected' : '' }}>Default</option>
                        <option value="featured" {{ request('filter') === 'featured' ? 'selected' : '' }}>Featured</option>
                        <option value="not_featured" {{ request('filter') === 'not_featured' ? 'selected' : '' }}>Not Featured</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        @if ($isSearch && $searchTerm)
            <h3>Search Results for "{{ $searchTerm }}"</h3>
        @elseif (request('filter') === 'featured')
            <h3>Featured Products</h3>
        @elseif (request('filter') === 'not_featured')
            <h3>Not Featured Products</h3>
        @else
            <h3>All Categories and Products</h3>
        @endif
    </div>

    <section class="product-categories my-5">
        <div class="container">
            <div class="row justify-content-around">
                @foreach ($categories as $category)
                    @if ($category->products->isNotEmpty())
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body text-center">
                                    @if ($category->image)
                                        <img src="{{ asset('storage/' . $category->image) }}"
                                            alt="{{ $category->name }}" class="img-fluid rounded mb-3"
                                            style="height: 150px; object-fit: cover;">
                                    @endif
                                    <h4 class="card-title">{{ $category->name }}</h4>
                                    <a href="#{{ $category->name }}-section"
                                        class="scroll-link btn btn-outline-primary">View
                                        {{ ucfirst($category->name) }}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    @foreach ($categories as $category)
        @if ($category->products->isNotEmpty())
            <section id="{{ $category->name }}-section" class="bg-light py-5">
                <div class="container">
                    <h2 class="text-center mb-4" style="color: rgb(5, 89, 158);">
                        {{ ucfirst($category->name) }}
                    </h2>

                    <div class="row justify-content-around">
                        @foreach ($category->products as $product)
                            @if (
                                request('filter') === 'featured' && $product->featured == 1 ||
                                request('filter') === 'not_featured' && $product->featured == 0 ||
                                request('filter') === null)
                                <div class="col-12 col-md-6">
                                    <div class="card mb-4">
                                        @if ($product->featured == 1)
                                            <div
                                                class="position-absolute top-0 start-90 bg-success text-white px-3 py-1 rounded-end">
                                                Featured
                                            </div>
                                        @endif
                                        <div class="card-body">
                                            <img src="{{ asset('storage/' . $product->gambar) }}"
                                                alt="{{ $product->nama }}" class="img-fluid rounded mb-3"
                                                style="height: 200px; object-fit: cover;">
                                            <h4 class="card-title">{{ $product->nama }}</h4>
                                            <p class="card-text">{{ $product->deskripsi }}</p>
                                            <p class="card-text roboto text-[18px]">Rp {{ $product->price }}</p>

                                            @auth
                                                <form method="POST" action="{{ route('product.buy', $product->id) }}">
                                                    @csrf
                                                    @method('POST')
                                                    <div class="d-flex align-items-center mb-3">
                                                        <label for="quantity-{{ $product->id }}"
                                                            class="me-2">Quantity:</label>
                                                        <input type="number" name="quantity" id="quantity-{{ $product->id }}"
                                                            class="form-control form-control-sm" value="1" min="1"
                                                            style="width: 80px;">
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-sm btn-outline-success">Buy</button>
                                                </form>

                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    @endforeach

    <x-footer></x-footer>

    <script src="/js/jquery-3.7.1.min.js"></script>
    <script>
        document.getElementById('filterDropdown').addEventListener('change', function() {
            const form = document.getElementById('filterSearchForm');
            const filterValue = this.value;

            const filterInput = document.createElement('input');
            filterInput.type = 'hidden';
            filterInput.name = 'filter';
            filterInput.value = filterValue;

            form.appendChild(filterInput);
            form.submit();
        });
    </script>
    <script src="/js/mainSection.js"></script>
</x-layout>
