@extends('components.app')

@section('content')
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar" class="shadow-sm" style="background:#FEFEFF">
            <div class="sidebar-header d-flex align-items-center p-3">
                <img src="assets/logo.png" alt="LOGO" class="object-contain text-center me-2"
                    style="width:50px;height:50px;">
                <h4 class="fw-bold mb-0">HARMONICS</h4>
            </div>


            <!-- Home Dropdown Menu -->
            <li class="d-flex justify-content-start align-items-center p-3" style="height:50px;">
                <a href="{{ route('view.dashboard') }}"
                    class="nav-button @if (request()->is('dashboard')) current @endif"><i
                        class="fa-solid fa-chart-pie me-2"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="d-flex justify-content-start align-items-center p-3" style="height:50px;">
                <a href="{{ route('view.orders') }}" class="nav-button @if (request()->is('orders') || request()->is('viewOrder')) current @endif"><i
                        class="fa-solid fa-cart-shopping me-2"></i>
                    <span>Orders</span></a>
            </li>
            <li class="d-flex justify-content-start align-items-center p-3" style="height:50px;">
                <a href="{{ route('view.product') }}" class="nav-button @if (request()->is('product')) current @endif"><i
                        class="fa-solid fa-bag-shopping me-2"></i>
                    <span>Product</span></a>
            </li>
            <li class="d-flex justify-content-start align-items-center p-3" style="height:50px;">
                <a href="{{ route('view.salesReport') }}"
                    class="nav-button @if (request()->is('salesReport')) current @endif"><i
                        class="fa-solid fa-chart-line me-2"></i>
                    <span>Sales Report</span></a>
            </li>
            <li class="d-flex justify-content-start align-items-center p-3" style="height:50px;">
                <a href="{{ route('view.customers') }}"
                    class="nav-button @if (request()->is('customers') || request()->is('viewProfile')) current @endif"><i
                        class="fa-solid fa-users me-2"></i>
                    <span>Customers</span></a>
            </li>
            <li class="d-flex justify-content-start align-items-center p-3" style="height:50px;">
                <a href="{{ route('view.messages') }}"
                    class="nav-button @if (request()->is('messages')) current @endif"><i
                        class="fa-solid fa-comment-dots me-2"></i>
                    <span>Messages</span></a>
            </li>
            <li class="d-flex justify-content-start align-items-center p-3" style="height:50px;">
                <a href="#" class="nav-button @if (request()->is('logout')) current @endif"><i
                        class="fa-solid fa-arrow-right-from-bracket me-2"></i>
                    <span>Sign Out</span></a>
            </li>
        </nav>

        <!-- Main content -->
        <div id="content">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-b-2 shadow-sm">
                <div class="container-fluid d-flex justify-content-end">
                    <div class="d-flex align-items-center">
                        <img src="assets/default.jpg" alt="img" class="object-fit rounded shadow-md me-3"
                            style="width:50px;height:50px;">

                        <div>
                            <h4 class="fw-bold mb-0 me-3">Cristopher</h4>
                            <p class="mb-0">Admin</p>
                        </div>

                        {{-- @if (session('user_id'))
                            <h4 class="fw-bold mb-0 me-3">Admin</h4>
                        @endif --}}
                    </div>
                </div>
            </nav>
            <!-- Content Section -->
            <div class="container-fluid h-auto p-4">
                @yield('page-content')
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Attach click event listeners to AJAX links
            const ajaxLinks = document.querySelectorAll('.ajax-link');
            ajaxLinks.forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent default link behavior

                    const url = this.getAttribute('href');
                    fetch(url)
                        .then(response => response.text())
                        .then(html => {
                            // Update the content area with the new page content
                            document.getElementById('content').innerHTML = html;
                        })
                        .catch(error => console.error('Error loading content:', error));
                });
            });
        });
    </script>
@endsection
