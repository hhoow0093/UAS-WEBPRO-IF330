<x-layout>
    <link rel="stylesheet" href="/css/mainSection.css">
    <x-slot:title>Halaman Products</x-slot:title>
    <x-navbar-tertiary></x-navbar-tertiary>
    <x-navbar-secondary></x-navbar-secondary>
    
    
    <x-modals.alert />

    <section class="product-page-header text-white py-5" style="background-color: rgb(5, 89, 158);">
        <div class="container">
            <h1 class="text-center mb-4 montserrat"><span style="text-decoration-line: underline; text-decoration-color: #ffff; text-decoration-thickness: 5px; text-underline-offset: 10px;">Our Products</span></h1>
            <p class="text-center lead roboto">Premium Indonesian Commodities and Agricultural Exports</p>
        </div>
    </section>  
    <div class="container">
        <input type="text" class="col-6 col-md-4">
        <!-- Example single danger button -->
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
       
    </div>
    <section class="product-categories my-5">
        <div class="container">
            <div class="row justify-content-around">
                @foreach($categories as $category)
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <div class="borderku my-3 mx-auto rounded-circle border-4 d-flex justify-content-center align-items-center"
                                    style="width: 64px; height:64px;">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                        class="bi bi-folder" viewBox="0 0 16 16">
                                        <path d="M1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13ZM1 2.5A1.5 1.5 0 0 1 2.5 1h2a.5.5 0 0 1 .4.2L6.8 3h7.7a1.5 1.5 0 0 1 1.5 1.5v9A1.5 1.5 0 0 1 14.5 15h-13A1.5 1.5 0 0 1 0 13.5v-9Z" />
                                    </svg> -->
                                </div>
                                <h4 class="card-title font-semiboldlora text-[35px]">{{ $category->name }}</h4>
                                <div class="inline-block">
                                    <a href="#{{ $category->name  }}-section" class="scroll-link btn btn-outline-primary">View {{ ucfirst($category->name) }}</a>
                                </div>
                                <form action="deleteCategory/{{ $category->id }}" method="POST" class="pt-2">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-sm btn-outline-danger" value="Delete">
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm d-flex justify-content-center align-items-center">
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#createCategoryModal">+ Add Category</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @foreach($categories as $category)
        <section id="{{ $category->name }}-section" class="bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-4" style="color: rgb(5, 89, 158);">{{ ucfirst($category->name) }} Products</h2>
                <div class="text-end mb-3">
                    <a href="/seadex/products/create/{{ $category->name }}" class="btn btn-primary">
                        Create New {{ ucfirst($category->name) }} Product
                    </a>
                </div>
                <div class="row justify-content-around">
                    @forelse($category->products as $product)
                    
                    <div class="col-12 col-md-6">
                        <a href="/seadex/products/{{$product->id}}" class="href">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h4 class="card-title font-semiboldlora text-[35px]">{{ $product->nama }}</h4>
                                    <p class="card-text roboto text-[18px]">{{ $product->deskripsi }}</p>
                                    <a href="/seadex/products/{{ $product->id }}/edit" class="btn btn-sm btn-outline-secondary">
                                        Edit
                                    </a>
                                    <form action="/seadex/products/{{ $product->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-sm btn-outline-danger" value="Delete">
                                    </form>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    @empty
                        <div class="col-12">
                            <p>No products available in this category   .</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
    @endforeach
    <x-modals.create-category-modals />

    <script>
        document.querySelectorAll('.scroll-link').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault(); 

                const targetId = this.getAttribute('href').substring(1); 
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    const offset = -60; 
                    const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY + offset;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth', 
                    });
                }
            });
        });
    </script>

    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/mainSection.js"></script>
</x-layout>

