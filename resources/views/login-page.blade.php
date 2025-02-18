<x-DefaultLayout title="Login" bodyId="login">
    @section('extracss')
    <style>
        #login {
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    @endsection

    {{--signup form start--}}
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="border shadow w-50 p-4 rounded-3">
            <h3 class="text-center fze-4 fw-bold text-black text-uppercase my-3">Login</h3>
            <form action="{{ route('user-login-verification') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
                @endif
                @if (session('loginerror'))
                <div class="alert alert-danger text-center">
                    {{ session('loginerror') }}
                </div>
                @endif
                <div class="mb-3">
                    <label for="user-loginemail-address" class="form-label fze-2 font-500 text-black">Email address</label>
                    <input type="email" class="form-control shadow-none" id="user-loginemail-address" name="user-loginemail-address" value="{{ old('user-loginemail-address') }}">
                    @error('user-loginemail-address')
                    <p class="text-danger fst-italic fze">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="user-loginpassword" class="form-label fze-2 font-500 text-black">Password</label>
                    <input type="password" class="form-control shadow-none" id="user-loginpassword" name="user-loginpassword" value="{{ old('user-loginpassword') }}">
                    @error('user-loginpassword')
                    <p class="text-danger fst-italic fze">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary border-0 shadow-none">Submit</button>
            </form>
            <p class="text-center text-capitalize fze-1 mt-3">do't have any account? <a href="{{ route('user-signup') }}">signup now</a></p>
        </div>
    </div>
    {{--login form end--}}


</x-DefaultLayout>