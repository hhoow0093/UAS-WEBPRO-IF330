<x-layout>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <style>
        .dataTables_length select {
            width: auto !important;
            padding: 0.375rem 0.75rem;
            min-width: 60px;
        }
    </style>
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


    <div class="container mt-5">
        <h1 class="mb-4 text-center">Users and Their Interested Products</h1>
        <table id="usersTable" class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Interested Products</th>
                    <th>Total Quantity</th>
                    <th>Remove</th>
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
                        <td>{{ $user->products->sum('pivot.qty') }}</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-outline-danger delete-btn"
                                data-bs-toggle="modal"
                                data-bs-target="#deleteUserModal"
                                data-name="{{ $user->name }}"
                                data-action="{{ route('users.destroy', $user->id) }}">
                                Delete
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No users found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteUserModalLabel">Delete Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete <strong id="deleteUserName"></strong>?
                </div>
                <div class="modal-footer">
                    <form id="deleteUserForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function () {
                const userName = this.dataset.name;
                const actionUrl = this.dataset.action;

                document.getElementById('deleteUserName').textContent = userName;
                document.getElementById('deleteUserForm').setAttribute('action', actionUrl);
            });
        });

        $(document).ready(function () {
            $('#usersTable').DataTable({
                paging: true,
                lengthChange: true,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false,
                responsive: true
            });
        });
    </script>
</x-layout>