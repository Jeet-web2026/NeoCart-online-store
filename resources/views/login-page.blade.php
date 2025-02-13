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

    {{--login form start--}}
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="border shadow w-50 p-4 rounded-3">
            <h3 class="text-center fze-4 fw-bold text-black text-uppercase my-3">login</h3>
            <form>
                <div class="mb-3">
                    <label for="user-email-address" class="form-label fze-2 font-500">Email address</label>
                    <input type="email" class="form-control" id="user-email-address" name="user-email-address">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <p class="text-center text-capitalize fze-1 mt-3">already have an account? <a href="">Login now</a></p>
        </div>
    </div>
    {{--login form end--}}


</x-DefaultLayout>