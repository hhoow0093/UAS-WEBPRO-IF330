<x-layout>
    <div class="container mt-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">MyApp</a>
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
            </ul>
        </div>
    </div>
    </nav>
        <h1 class="mb-4 text-center">Users and Their Interested Products</h1>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Interested Products</th>
                    <th>Total Quantity</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->products->isNotEmpty())
                                <ul>
                                    @foreach($user->products as $product)
                                        <li>
                                            {{ $product->nama }} 
                                            <strong>(Qty: {{ $product->pivot->qty }})</strong>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <span>No products interested</span>
                            @endif
                        </td>
                        <td>
                            {{ $user->products->sum('pivot.qty') }} <!-- Total quantity of all interested products -->
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No users found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</x-layout>
