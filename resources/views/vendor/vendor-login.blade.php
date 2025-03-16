<x-DefaultLayout title="Vendor Login">
    <section id="vendor-login">
        <div class="container-fluid h-100 d-flex justify-content-center align-items-center">
            <div class="border p-4 rounded shadow-sm" style="width: 40%;">
                <form id="vendor-login-form-view" action="{{ route('vendor-login-verify') }}" method="POST">
                    @csrf
                    @if(session('vendorloginsuccess'))
                    <div class="alert alert-success alert-dismissible text-center fade show" role="alert">
                        <strong><i class="bi bi-check2-square me-2"></i>{{ session('vendorloginsuccess') }}</strong>
                        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if(session('vendorloginfailed'))
                    <div class="alert alert-danger alert-dismissible text-center fade show" role="alert">
                        <strong><i class="bi bi-x-circle me-2"></i>{{ session('vendorloginfailed') }}</strong>
                        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if(session('logoutvendor'))
                    <div class="alert alert-primary alert-dismissible text-center fade show" role="alert">
                        <strong><i class="bi bi-check-circle me-2"></i>{{ session('logoutvendor') }}</strong>
                        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="vendor-login-email" class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none fze-1" id="vendor-login-email" name="vendor-login-email" value="{{ old('vendor-login-email') }}">
                        @error('vendor-login-email')
                        <span>
                            <p class="text-danger fze">{{ $message }}</p>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="vendor-login-password" class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none fze-1" id="vendor-login-password" name="vendor-login-password">
                        @error('vendor-login-password')
                        <span>
                            <p class="text-danger fze">{{ $message }}</p>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100 fze-1">Submit</button>
                </form>
            </div>
        </div>
    </section>

    @section('extracss')
    <style>
        #vendor-login {
            height: 100vh;
        }
    </style>
    @endsection
</x-DefaultLayout>