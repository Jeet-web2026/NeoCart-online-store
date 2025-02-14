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
            <form>
                <div class="mb-3">
                    <label for="user-email-address" class="form-label fze-2 font-500 text-black">Email address</label>
                    <input type="email" class="form-control shadow-none" id="user-email-address" name="user-email-address">
                </div>
                <div class="mb-3">
                    <label for="user-password" class="form-label fze-2 font-500 text-black">Password</label>
                    <input type="password" class="form-control shadow-none" id="user-password" name="user-password">
                </div>
                <button type="submit" class="btn btn-primary border-0 shadow-none">Submit</button>
            </form>
            <p class="text-center text-capitalize fze-1 mt-3">do't have any account? <a href="{{ route('sign-up') }}">signup now</a></p>
        </div>
    </div>
    {{--login form end--}}


</x-DefaultLayout>