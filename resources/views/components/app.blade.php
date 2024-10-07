<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HARMONICS</title>

    <link rel="icon" href="{{ URL('assets/logo1.png') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- SweetJsAlert2 CDN -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- FontAwesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    {{-- Custom Font Montserrat --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <style>
        /* General body style */
        body {
            font-family: "Montserrat", sans-serif;
            font-weight: bold;
            background: #fafafa;
        }

        /* Sidebar styling */
        .wrapper {
            display: flex;
        }

        #sidebar {
            min-width: 250px;
            background: #7386D5;
            color: black;
            transition: all 0.3s;
        }

        #sidebar li {
            list-style-type: none;
        }


        #sidebar.active {
            margin-left: -250px;
        }

        #content {
            width: 100%;
            min-height: 100vh;
        }

        /* Media query for smaller screens */
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }

            #sidebar {
                margin-left: 0;
            }

            #sidebarCollapse {
                display: none;
            }
        }

        .nav-button {
            width: 100%;
            color: black;
            background: white;
            font-size: 1rem;
            font-weight: bold;
            padding: 0.5rem;
            border-radius: 10px;
            text-decoration: none;
        }

        .nav-button:hover {
            color: white;
            background: black;
        }

        /* Active class for the current page */
        .current {
            color: white;
            background: black;
        }


        /* Add transition effect for icon */
        #toggleIcon {
            transition: transform 0.3s ease;
        }

        #sidebar.active #toggleIcon {
            transform: rotate(90deg);
            /* Rotate the icon when the sidebar is active */
        }


        .form-background {
            background-image: url('assets/background1.png');
            /* Replace with the actual image path */
            background-size: cover;
            /* Ensures the image covers the entire background */
            background-position: center;
            /* Centers the image */
            background-repeat: no-repeat;
            /* Prevents the image from repeating */
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            margin: 0px;
        }


        svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            display: block;
            background-color: #0e4166;
            background-image: linear-gradient(to bottom, rgba(14, 65, 102, 0.86), #0e4166);
        }


        /**
  * Building blocks
  *
  * @author jh3y - jheytompkins.com
*/
        @-webkit-keyframes building-blocks {

            0%,
            20% {
                opacity: 0;
                -webkit-transform: translateY(-300%);
                transform: translateY(-300%);
            }

            30%,
            70% {
                opacity: 1;
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }

            90%,
            100% {
                opacity: 0;
                -webkit-transform: translateY(300%);
                transform: translateY(300%);
            }
        }

        @keyframes building-blocks {

            0%,
            20% {
                opacity: 0;
                -webkit-transform: translateY(-300%);
                transform: translateY(-300%);
            }

            30%,
            70% {
                opacity: 1;
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }

            90%,
            100% {
                opacity: 0;
                -webkit-transform: translateY(300%);
                transform: translateY(300%);
            }
        }

        .building-blocks {
            position: relative;
            transition: opacity 1s ease-in-out;
            /* Add transition property for smooth effect */

            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: white;
        }

        .building-blocks div {
            height: 40px;
            position: absolute;
            width: 40px;
        }

        .building-blocks div:after {
            -webkit-animation: building-blocks 2.1s ease infinite backwards;
            animation: building-blocks 2.1s ease infinite backwards;
            background: var(--primary);
            content: '';
            display: block;
            height: 40px;
            width: 40px;
        }

        .building-blocks div:nth-child(1) {
            -webkit-transform: translate(-50%, -50%) translate(60%, 120%);
            transform: translate(-50%, -50%) translate(60%, 120%);
        }

        .building-blocks div:nth-child(2) {
            -webkit-transform: translate(-50%, -50%) translate(-60%, 120%);
            transform: translate(-50%, -50%) translate(-60%, 120%);
        }

        .building-blocks div:nth-child(3) {
            -webkit-transform: translate(-50%, -50%) translate(120%, 0);
            transform: translate(-50%, -50%) translate(120%, 0);
        }

        .building-blocks div:nth-child(4) {
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .building-blocks div:nth-child(5) {
            -webkit-transform: translate(-50%, -50%) translate(-120%, 0);
            transform: translate(-50%, -50%) translate(-120%, 0);
        }

        .building-blocks div:nth-child(6) {
            -webkit-transform: translate(-50%, -50%) translate(60%, -120%);
            transform: translate(-50%, -50%) translate(60%, -120%);
        }

        .building-blocks div:nth-child(7) {
            -webkit-transform: translate(-50%, -50%) translate(-60%, -120%);
            transform: translate(-50%, -50%) translate(-60%, -120%);
        }

        .building-blocks div:nth-child(1):after {
            -webkit-animation-delay: 0.15s;
            animation-delay: 0.15s;
        }

        .building-blocks div:nth-child(2):after {
            -webkit-animation-delay: 0.3s;
            animation-delay: 0.3s;
        }

        .building-blocks div:nth-child(3):after {
            -webkit-animation-delay: 0.45s;
            animation-delay: 0.45s;
        }

        .building-blocks div:nth-child(4):after {
            -webkit-animation-delay: 0.6s;
            animation-delay: 0.6s;
        }

        .building-blocks div:nth-child(5):after {
            -webkit-animation-delay: 0.75s;
            animation-delay: 0.75s;
        }

        .building-blocks div:nth-child(6):after {
            -webkit-animation-delay: 0.9s;
            animation-delay: 0.9s;
        }

        .building-blocks div:nth-child(7):after {
            -webkit-animation-delay: 1.05s;
            animation-delay: 1.05s;
        }

        :root {
            --primary: #535C91;
            /* Define your primary color */
        }
    </style>
</head>

<body class="bg-light h-auto">
    @yield('content')

    <!-- Script to toggle sidebar -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the sidebar collapse button
            const sidebarCollapse = document.getElementById('sidebarCollapse');
            // Get the sidebar element
            const sidebar = document.getElementById('sidebar');
            // Get the toggle icon
            const toggleIcon = document.getElementById('toggleIcon');

            // Add click event listener to toggle the sidebar
            sidebarCollapse.addEventListener('click', function() {
                // Toggle 'active' class on the sidebar
                sidebar.classList.toggle('active');

                // Change icon based on sidebar state
                if (sidebar.classList.contains('active')) {
                    toggleIcon.classList.remove('bi-list');
                    toggleIcon.classList.add('bi-x');
                } else {
                    toggleIcon.classList.remove('bi-x');
                    toggleIcon.classList.add('bi-list');
                }
            });
        });

        // For Toggle Show / Hide Password
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('bi-eye');
        });
    </script>
</body>

</html>
