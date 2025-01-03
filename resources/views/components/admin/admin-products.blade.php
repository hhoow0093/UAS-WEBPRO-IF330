<x-layout>
    <link rel="stylesheet" href="/css/mainSection.css">
    <x-slot:title>Halaman Products</x-slot:title>
    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var myModal = new bootstrap.Modal(document.getElementById('createCategoryModal'));
                myModal.show();
            });
        </script>
    @endif
    <x-modals.alert />
    <!-- delete-confirmation-modal -->
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete <strong id="itemName"></strong>?</p>
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/interesteduser">Users</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('user.edit') }}">Edit Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="product-page-header text-white py-5" style="background-color: rgb(5, 89, 158);">
        <div class="container">
            <h1 class="text-center mb-4 montserrat"><span style="text-decoration-line: underline; text-decoration-color: #ffff; text-decoration-thickness: 5px; text-underline-offset: 10px;">Our Products</span></h1>
            <p class="text-center lead roboto">Premium Indonesian Commodities and Agricultural Exports</p>
        </div>
    </section>  
    <div class="container mt-2 d-flex align-items-center">
    </div>

    </div>
    </div>
    <section class="product-categories my-5">
        <div class="container">
            <div class="row justify-content-around">
                <h3 class="text-align-center">Categories</h3>
                @foreach($categories as $category)
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                @if($category->image)
                                    <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="img-fluid rounded mb-3" style="height: 150px; object-fit: cover;">
                                @endif
                                <h4 class="card-title">{{ $category->name }}</h4>
                                <a href="#{{ $category->name }}-section" class="btn btn-outline-primary">View {{ ucfirst($category->name) }}</a>
                                <div>
                                    <button class="btn btn-outline-secondary mt-2" data-bs-toggle="modal" data-bs-target="#editCategoryModal-{{ $category->id }}">Edit</button>
                                    <form action="/seadex/deleteCategory/{{ $category->id }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="mt-2 btn btn-outline-danger delete-btn"data-name="{{ $category->name }}"data-action="{{ route('categories.destroy', $category->id) }}"data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                        Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- edit-category-modal -->
                    <div class="modal fade" id="editCategoryModal-{{ $category->id }}" tabindex="-1" aria-labelledby="editCategoryModalLabel-{{ $category->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editCategoryModalLabel-{{ $category->id }}">Edit Category</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Category Name</label>
                                            <input type="text" id="name" name="name" class="form-control" value="{{ $category->name }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" id="image" name="image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    </div>
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
                        <div class="card mb-4">
                            <div class="card-body">
                                <img src="{{ asset('storage/' . $product->gambar) }}" alt="{{ $product->nama }}" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover;">
                                <h4 class="card-title font-semiboldlora text-[35px]">{{ $product->nama }}</h4>
                                <p class="card-text roboto text-[18px]">{{ $product->deskripsi }}</p>
                                <p class="card-text roboto text-[18px]">Rp {{ $product->price }}</p>
                                <a href="/seadex/products/{{ $product->id }}/edit" class="btn btn-sm btn-outline-secondary">
                                    Edit
                                </a>
                                <form action="/seadex/products/{{ $product->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-sm mt-2 btn-outline-danger delete-btn"data-name="{{ $product->nama }}"data-action="{{ route('products.destroy', $product->id) }}"data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
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

        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function () {
                const itemName = this.dataset.name;
                const actionUrl = this.dataset.action;

                document.getElementById('itemName').textContent = itemName;
                document.getElementById('deleteForm').setAttribute('action', actionUrl);
            });
        });
    </script>
    
    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/mainSection.js"></script>
</x-layout>

