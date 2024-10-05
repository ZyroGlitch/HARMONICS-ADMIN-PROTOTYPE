@extends('index')

@section('page-content')
    <section class="container-fluid h-auto">
        <div class="row justify-content-center align-items-center h-auto">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="mb-4">
                            <h3 class="fw-bold">Today's Sales</h3>
                            <p>Sales Summary</p>
                        </div>

                        <div class="row justify-content-around align-items-center">
                            <div class="col-lg-3 col-md-3">
                                <div class="card shadow-md" style="background: #CDC1FF;">
                                    <div class="card-body">
                                        <img src="assets/sales.png" alt="sales img" class="object-contain mb-3"
                                            style="width:40px;height:40px;">

                                        <div>
                                            <h5 class="fw-bold">₱2000</h5>
                                            <p class="text-muted">Total Sales</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3">
                                <div class="card shadow-md" style="background: #CDC1FF;">
                                    <div class="card-body">
                                        <img src="assets/orders.png" alt="sales img" class="object-contain mb-3"
                                            style="width:40px;height:40px;">

                                        <div>
                                            <h5 class="fw-bold">500</h5>
                                            <p class="text-muted">Total Order</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3">
                                <div class="card shadow-md" style="background: #CDC1FF;">
                                    <div class="card-body">
                                        <img src="assets/sold.png" alt="sales img" class="object-contain mb-3"
                                            style="width:40px;height:40px;">

                                        <div>
                                            <h5 class="fw-bold">50</h5>
                                            <p class="text-muted">Product Sold</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3">
                                <div class="card shadow-md" style="background: #CDC1FF;">
                                    <div class="card-body"><img src="assets/person.png" alt="sales img"
                                            class="object-contain mb-3" style="width:40px;height:40px;">

                                        <div>
                                            <h5 class="fw-bold">5</h5>
                                            <p class="text-muted">New Customers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Chart Section -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card shadow-md my-5">
                    <div class="card-body">
                        <h2 class="fw-bold mb-3">Total Revenue</h2>
                        <canvas id="barChart" style="width:100%;height:400px;" class="object-contain"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- CHARTJS CDN -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            const barChart = document.getElementById('barChart');


            new Chart(barChart, {
                type: 'bar',
                data: {
                    labels: [
                        'January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','December'
                    ],
                    datasets: [{
                        label: '',
                        data: [
                            1000, 2000, 3000, 1500, 5000, 3500, 2500, 4000,1000, 2000, 3000, 1500
                        ],
                        backgroundColor: [
                            'purple',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </section>
@endsection
