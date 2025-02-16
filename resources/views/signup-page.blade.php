<x-DefaultLayout title="Signup" bodyId="sgnup">
    @section('extracss')
    <style>
        #sgnup {
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
            <h3 class="text-center fze-4 fw-bold text-black text-uppercase my-3">signup</h3>
            <form action="{{ route('user-signup') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="user-full-name" class="form-label fze-2 font-500 text-black">Full name</label>
                    <input type="email" class="form-control shadow-none" id="user-full-name" name="user-full-name">
                </div>
                <div class="mb-3">
                    <label for="user-email-address" class="form-label fze-2 font-500 text-black">Email address</label>
                    <input type="email" class="form-control shadow-none" id="user-email-address" name="user-email-address">
                </div>
                <div class="mb-3">
                    <label for="user-password" class="form-label fze-2 font-500 text-black">Password</label>
                    <input type="password" class="form-control shadow-none" id="user-password" name="user-password">
                </div>
                <div class="mb-3">
                    <label for="user-address" class="form-label fze-2 font-500 text-black">Address</label>
                    <input type="email" class="form-control shadow-none" id="user-address" name="user-address">
                </div>
                <button type="submit" class="btn btn-primary border-0 shadow-none">Submit</button>
                <a class="btn btn-primary border-0 shadow-none" href="{{ url('/') }}">Back</a>
            </form>
            <p class="text-center text-capitalize fze-1 mt-3">already have an account? <a href="{{ route('login') }}">login now</a></p>
        </div>
    </div>
    {{--login form end--}}


</x-DefaultLayout>