<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HARMONICS</title>

    <link rel="icon" href="{{ URL('assets/logo3.png') }}">

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
