<x-auth>
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Account Login</h1>
                        </div>
                        <form class="form-group user row gy-3" method="post" action="/authenticate">
                            @csrf
                            <div class="col-12 my-2">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Email Address" name="email" value={{ old('email') }}>
                                @error('email')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-12 my-2">
                                <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                                    placeholder="Password" name="password">
                                @error('password')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12 my-2">
                                <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"
                                    placeholder="Repeat Password" name="password_confirmation">
                                @error('password_confirmation')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-12 my-3">
                                <button class="btn btn-primary btn-block rounded-pill" type="submit">Login
                                    Account</button>
                            </div>
                            <hr>
                            {{-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a> --}}
                        </form>

                        {{-- <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div> --}}
                        <div class="text-center">
                            <a class="small" href="register">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-auth>
