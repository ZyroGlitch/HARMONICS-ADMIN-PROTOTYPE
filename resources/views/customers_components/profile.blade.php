@extends('../index')

@section('page-content')
    <nav aria-label="breadcrumb mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('view.customers') }}" style="text-decoration: none;">Customers</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Customer Profile</li>
        </ol>
    </nav>

    <div class="row justify-content-center align-items-start">
        <div class="col-lg-4 col-md-4">
            <div class="card shadow-sm p-3">
                <div class="card-body text-center">
                    <img src="assets/default.jpg" alt="profile img" class="object-contain rounded shadow-sm mb-3"
                        style="width:180px;height:180px;">

                    <h4 class="fw-bold">My Profile</h4>
                    <hr>

                    <div class="d-flex fs-5 mb-1">
                        <i class="bi bi-person-fill me-3"></i>
                        <p class="text-muted fw-bold">Cris Ann Joy</p>
                    </div>

                    <div class="d-flex fs-5 mb-1">
                        <i class="bi bi-envelope-at-fill me-3"></i>
                        <p class="text-muted fw-bold">cris@gmail.com</p>
                    </div>

                    <div class="d-flex fs-5 mb-1">
                        <i class="bi bi-geo-alt-fill me-3"></i>
                        <p class="text-muted fw-bold">Davao City</p>
                    </div>

                    <div class="d-flex fs-5 mb-1">
                        <i class="bi bi-telephone-inbound-fill me-3"></i>
                        <p class="text-muted fw-bold">09615607681</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8">
            <div class="card shadow-sm p-2">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="card shadow-sm w-100" style="background: #CDC1FF;">
                            <div class="card-body">
                                <img src="assets/sold.png" alt="sales img" class="object-contain mb-3"
                                    style="width:40px;height:40px;">

                                <div>
                                    <h5 class="fw-bold">10</h5>
                                    <p class="text-muted">Total Orders</p>
                                </div>
                            </div>
                        </div>


                        <div class="card shadow-sm w-100" style="background: #CDC1FF;">
                            <div class="card-body">
                                <img src="assets/orders.png" alt="sales img" class="object-contain mb-3"
                                    style="width:40px;height:40px;">

                                <div>
                                    <h5 class="fw-bold">₱50,000</h5>
                                    <p class="text-muted">Total Amount Spent</p>
                                </div>
                            </div>
                        </div>


                        <div class="card shadow-sm w-100" style="background: #CDC1FF;">
                            <div class="card-body">
                                <img src="assets/sales.png" alt="sales img" class="object-contain mb-3"
                                    style="width:40px;height:40px;">

                                <div>
                                    <h5 class="fw-bold">₱5,000</h5>
                                    <p class="text-muted">Average Order Value</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div style="max-height:210px;overflow-y: auto;overflow-x: hidden;">
                                <table class="table table-hover">
                                    <thead class="text-center table-dark">
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody id="messageTable" class="text-center">
                                        <?php $totalData = 0; ?>
                                        @while ($totalData <= 20)
                                            <tr class="align-middle">
                                                <td>Electric Guitar</td>
                                                <td>₱2000</td>
                                                <td>2</td>
                                                <td>₱4000</td>
                                            </tr>
                                            <?php $totalData++; ?>
                                        @endwhile
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
