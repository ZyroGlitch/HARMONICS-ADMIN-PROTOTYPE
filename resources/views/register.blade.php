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

    <section class="d-flex justify-content-center align-items-center vh-100">
        <div class="col-lg-8 col-md-8">
            <div class="card shadow-sm p-3">
                <div class="card-body d-flex">
                    <div class="col-lg-6 col-md-6 text-center">
                        <div class="d-flex align-items-center gap-3 text-center">
                            <img src="assets/logo1.png" alt="logo" class="object-fit-contain rounded-pill"
                                style="width:50px;height:50px;">
                            <h5 class="fw-bold">HARMONICS</h5>
                        </div>
                        <img src="assets/register.png" alt="register img" class="object-fit-contain"
                            style="width:400px;height:400px;">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="text-center mb-3">
                            <h1 class="fw-bold">Get Started</h1>
                            <h6 class="fw-bold">Already have an account? <a href="{{ route('view.login') }}"
                                    style="text-decoration: none">Sign
                                    In</a>
                            </h6>
                        </div>

                        <form action="{{ route('view.registerAccount') }}" method="POST">
                            @csrf

                            <label for="firstname" class="form-label">Firstname</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" id="firstname" required>
                            </div>

                            <label for="lastname" class="form-label">Lastname</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" id="lastname" required>
                            </div>

                            <label for="email" class="form-label">Email</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
                                <input type="email" class="form-control" id="email" required>
                            </div>

                            <label for="password" class="form-label">Password</label>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i class="bi bi-shield-lock-fill"></i></span>
                                <input type="password" class="form-control" id="password" required>
                                <span class="input-group-text" onclick="togglePassword()" style="cursor: pointer;">
                                    <i class="bi bi-eye-slash" id="toggleEye"></i>
                                </span>
                            </div>

                            <div class="d-grid">
                                <input type="submit" value="SIGN UP" class="btn btn-dark fw-bold">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById("password");
            const toggleEye = document.getElementById("toggleEye");

            // Toggle the password field between text and password
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleEye.classList.remove("bi-eye-slash");
                toggleEye.classList.add("bi-eye");
            } else {
                passwordField.type = "password";
                toggleEye.classList.remove("bi-eye");
                toggleEye.classList.add("bi-eye-slash");
            }
        }
    </script>
@endsection
