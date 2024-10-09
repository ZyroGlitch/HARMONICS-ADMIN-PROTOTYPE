@extends('components.app')

@section('content')
    {{-- Background Wave Image --}}
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
        <defs>
            <linearGradient id="bg">
                <stop offset="0%" style="stop-color:rgba(130, 158, 249, 0.06)"></stop>
                <stop offset="50%" style="stop-color:rgba(76, 190, 255, 0.6)"></stop>
                <stop offset="100%" style="stop-color:rgba(115, 209, 72, 0.2)"></stop>
            </linearGradient>
            <path id="wave" fill="url(#bg)"
                d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
                                                                                                                                                                                                                                                 s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
        </defs>
        <g>
            <use xlink:href='#wave' opacity=".3">
                <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="10s"
                    calcMode="spline" values="270 230; -334 180; 270 230" keyTimes="0; .5; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
            </use>
            <use xlink:href='#wave' opacity=".6">
                <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="8s"
                    calcMode="spline" values="-270 230;243 220;-270 230" keyTimes="0; .6; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
            </use>
            <use xlink:href='#wave' opacty=".9">
                <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="6s"
                    calcMode="spline" values="0 230;-140 200;0 230" keyTimes="0; .4; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
            </use>
        </g>
    </svg>

    <div class="d-flex justify-content-center align-items-center vh-100 wave-background">
        <div class="col-lg-4 col-md-5">
            <div class="card shadow-sm p-3">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <img src="assets/logo1.png" alt="logo" class="object-fit-contain shadow-sm rounded mb-3"
                            style="width:100px;height:100px;">
                        <h4 class="fw-bold">HARMONICS</h4>
                    </div>

                    <form action="{{ route('view.loginAuth') }}" method="POST">
                        @csrf

                        <label for="email" class="form-label fw-bold text-muted">Email</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <label for="password" class="form-label fw-bold text-muted">Password</label>
                        <div class="input-group mb-2">
                            <span class="input-group-text"><i class="bi bi-shield-lock-fill"></i></span>
                            <input type="password" class="form-control" id="password" name="password" required>
                            <span class="input-group-text">
                                <i class="bi bi-eye-slash" id="togglePassword" style="cursor: pointer;"></i>
                            </span>
                        </div>

                        <p class="text-end mb-4">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#forgotPass"
                                style="text-decoration: none">Forgot
                                Password?</a>
                        </p>

                        <div class="d-grid mb-3">
                            <input type="submit" value="SIGN IN" class="btn btn-dark fw-bold">
                        </div>

                        <p class="text-center">Don't have an account? <a href="{{ route('view.register') }}"
                                style="text-decoration: none">Sign
                                Up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- FORGOT PASSWORD MODAL -->
    <div class="modal fade" id="forgotPass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="forgotPassLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-light">
                    <h1 class="modal-title fs-5" id="forgotPassLabel">Forgot Password?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('view.forgotPassword') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="emailInput" class="form-label fw-bold">Enter your email</label>
                            <input type="email" class="form-control" id="emailInput" placeholder="you@example.com"
                                required>
                        </div>
                        <button type="button" class="btn btn-primary fw-bold w-100" data-bs-toggle="modal"
                            data-bs-target="#resetPasswordModal">VERIFY EMAIL</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- RESET PASSWORD Structure -->
    <div class="modal fade" id="resetPasswordModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('view.forgotPassword') }}" method="POST">
                    @csrf

                    <div class="modal-header bg-primary text-light">
                        <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Your Reset Password Form Here -->

                        <div class="mb-3">
                            <label for="newPassword" class="form-label">Enter New Password</label>
                            <input type="password" class="form-control" id="newPassword">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        @if (session('error'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Incorrect email or password!',
                    });
                });
            </script>
        @endif

        @if (session('resetPass'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Password Successfully Updated.',
                    });
                });
            </script>
        @endif

        <script>
            // JavaScript to toggle password visibility
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');

            togglePassword.addEventListener('click', function(e) {
                // Toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);

                // Toggle the eye icon
                this.classList.toggle('bi-eye');
                this.classList.toggle('bi-eye-slash');
            });
        </script>
    @endsection
