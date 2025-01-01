<x-layout>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <style>
        .dataTables_length select {
            width: auto !important;
            padding: 0.375rem 0.75rem;
            min-width: 60px;
        }
    </style>
    <div class="container">
        <h1 class="mb-4">Shopping Cart</h1>

        @if ($cartItems->isEmpty())
            <div class="alert alert-info">
                Your cart is empty. Start shopping!
            </div>
        @else
            <table id="cartTable" class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Product</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->name }}" class="img-fluid" style="height: 50px; object-fit: cover;">
                            </td>
                            <td>Rp{{ number_format($item->price, 2) }}</td>
                            <td>{{ $item->pivot->qty }}</td>
                            <td>Rp{{ number_format($item->price * $item->pivot->qty, 2) }}</td>
                            <td>
                                <form method="POST" action="{{ route('cart.remove', $item->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="text-end"><strong>Total:</strong></td>
                        <td colspan="2"><strong>Rp{{ number_format($total, 2) }}</strong></td>
                    </tr>
                </tfoot>
            </table>
        @endif

        <a href="/seadex/products" class="btn btn-primary mt-3">Continue Shopping</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#cartTable').DataTable({
                responsive: true,
                paging: true,
                lengthMenu: [5, 10, 25, 50],
                pageLength: 5,
                ordering: true,
                columnDefs: [
                    { orderable: false, targets: [1, 5] } 
                ]
            });
        });
    </script>
</x-layout>
