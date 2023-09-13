@extends('master')
@section('content')

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{asset('assets/images/img-01.png')}}" alt="IMG">
                </div>
                @if(session('status'))
                <div class="text-success"> {{session('status')}}</div>
                @endif

                <form class="login100-form validate-form" action="login" method="post">
                    <span class="login100-form-title">
                        Member Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="email" placeholder="Enter your Email">
                        @csrf
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <span style="color:red">@error('email'){{$message}} @enderror</span>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Enter your Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <span style="color:red">@error('password'){{$message}} @enderror</span>

                    <div class="mb-2">
                        <span style="color:red">@error('loginError'){{$message}} @enderror</span>

                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Username / Password?
                        </a>
                    </div>

                    <div class="text-center p-t-12 text-primary">

                        <a class="" href="/googlelogin">
                            <i class="fa-brands fa-google"></i>

                        </a>
                    </div>
                    <!-- -->

                    <div class="text-center p-t-136">
                        <a class="txt2" href="/signup">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
