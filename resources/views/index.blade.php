@extends('components.app')

@section('content')
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar" class="shadow-sm" style="background:#FEFEFF">
            <div class="sidebar-header d-flex align-items-center p-3">
                <img src="assets/logo1.png" alt="LOGO" class="object-contain text-center rounded-pill shadow-sm me-2"
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
                    class="nav-button @if (request()->is('messages') || request()->is('viewMessage')) current @endif"><i
                        class="fa-solid fa-comment-dots me-2"></i>
                    <span>Messages</span></a>
            </li>
            <li class="d-flex justify-content-start align-items-center p-3" style="height:50px;">
                <a href="{{ route('view.login') }}" class="nav-button @if (request()->is('/')) current @endif"><i
                        class="fa-solid fa-arrow-right-from-bracket me-2"></i>
                    <span>Sign Out</span></a>
            </li>
        </nav>

        <!-- Main content -->
        <div id="content">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-b-2 shadow-sm p-2">
                <div class="container-fluid d-flex justify-content-end">
                    <a class="position-relative me-3" data-bs-toggle="offcanvas" data-bs-target="#notification"
                        aria-controls="offcanvasRight">
                        <i class="bi bi-bell-fill fs-3"></i>
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-secondary">
                            20
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>

                    <div class="d-flex align-items-center ms-3">
                        <img src="assets/photo.png" alt="img" class="object-fit rounded shadow-md me-3"
                            style="width:50px;height:50px;">

                        <div>
                            <h4 class="fw-bold mb-0">Cristopher</h4>
                            <p class="mb-0">Admin</p>
                        </div>
                    </div>
                </div>

            </nav>
            <!-- Content Section -->
            <div class="container-fluid h-auto p-4">
                @yield('page-content')
            </div>
        </div>
    </div>

    {{-- OFFCANVAS NOTIFICATION --}}
    <div class="offcanvas offcanvas-end" tabindex="-1" id="notification" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header bg-primary text-light">
            <h5 class="offcanvas-title fw-bold" id="offcanvasRightLabel">NOTIFICATIONS</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body h-auto p-2">
            <?php
            $notifications = 10;
            ?>

            @while ($notifications >= 0)
                <div class="card shadow-sm mb-2">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <img src="assets/photo.png" alt="image" class="object-fit-contain rounded-pill shadow-sm me-3"
                            style="width:60px;height:60px;">

                        <div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="fw-bold">Boss Malupiton</h5>
                                <p class="fw-bold text-success">New</p>
                            </div>

                            <p class="fw-medium">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </div>
                </div>

                <?php
                $notifications--;
                ?>
            @endwhile
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
