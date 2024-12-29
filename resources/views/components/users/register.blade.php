<x-layout>
    <link rel="stylesheet" href="/css/login.css">
    <style>
        @keyframes slide-left {
            from {
                transform: translateX(5%);
            }

            to {
                transform: translateX(0);
            }
        }
    </style>
    <div class="container-fluid" id="login-page">
        <div class="row formulir">
            <div class="col-md-6 col-lg-8 d-none d-md-block">
            </div>
            <div class="col-md-6 col-lg-4 col-12 formulir-login">
                <div class="container mt-3 isi-login">
                    <div class="row gap-4">
                        <div class="col-12">
                            <div class="logo d-flex justify-content-between gap-2 align-items-center">
                                <img src="/img/color-seadex.webp" alt="seadex" height="60" width="180">
                                <h2 class="fw-bold my-auto d-flex align-items-center header text-end"
                                    style="height: 30px; color:#125A95;">REGISTER PAGE</h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <h4 class="fw-bold">Source for Indonesia's Finest Premium Goods</h4>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-12">
                        <form method="POST" action="{{ route('register-post') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}"      autofocus>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}"  >
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control"   >
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"     >
                                @error('password_confirmation')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success" style="background-color: #009BB3">Register</button>
                            </div>
                        </form>
                        </div>
                        <div class="col-12 text-center">
                            <a href="{{ route('login') }}"><button type="submit" class="btn container-fluid text-white"
                                    style="background-color: #125A95;">Already have an account? Login here</button></a>
                        </div>
                                                <div class="col-12 text-center">
                            <a href="/seadex/home"><button type="submit" class="btn container-fluid text-white" style="background-color: #0077c1;">Back to home page</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
