<x-DefaultLayout title="Vendor Login">
    <section id="vendor-login">
        <div class="container-fluid h-100 d-flex justify-content-center align-items-center">
            <div class="border p-4 rounded shadow-sm" style="width: 40%;">
                <form id="vendor-login-form-view" action="{{ route('vendor-login-verify') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="vendor-login-email" class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none fze-1" id="vendor-login-email" name="vendor-login-email">
                    </div>
                    <div class="mb-3">
                        <label for="vendor-login-password" class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none fze-1" id="vendor-login-password" name="vendor-login-password">
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