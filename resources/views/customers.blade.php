@extends('index')

@section('page-content')
    <div class="row align-items-center mb-3">
        <div class="col-lg-5 col-md-5">
            <form class="d-flex">
                <input class="form-control shadow-sm me-2" type="search" placeholder="Search Customer Name">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
    
    <div class="card shadow-md">
        <div class="card-body">
            <div style="max-height:405px;overflow-y: auto;overflow-x: hidden;">
                <table class="table table-hover">
                    <thead class="text-center">
                        <tr>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Total Orders</th>
                            <th>Total Amount Spent</th>
                            <th>Average Order Value</th>
                            <th>Last Order Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $totalData = 0;
                        ?>
                        @while ($totalData <= 20)
                            <tr class="align-middle">
                                <td>Cris Ann Joy</td>
                                <td>cris@gmail.com</td>
                                <td>10</td>
                                <td>₱50,000</td>
                                <td>₱5,000</td>
                                <td>07 / 29 / 23</td>
                                <td>
                                    <div class="d-grid">
                                        <a href="#" class="btn btn-primary btn-sm fw-bold">VIEW PROFILE</a>
                                    </div>
                                </td>
                            </tr>

                            <?php
                            $totalData++;
                            ?>
                        @endwhile
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
