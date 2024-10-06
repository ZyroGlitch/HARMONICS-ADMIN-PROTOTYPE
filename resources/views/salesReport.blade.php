@extends('index')

@section('page-content')
    <div class="card shadow-sm">
        <div class="card-body">
            <div style="max-height:450px;overflow-y: auto;overflow-x: hidden;">
                <table class="table table-hover">
                    <thead class="text-center table-dark">
                        <tr>
                            <th>Date</th>
                            <th>Total Orders</th>
                            <th>Total Products Sold</th>
                            <th>Total Revenue</th>
                            <th>Average Order Value</th>
                            <th>Best-Selling Product</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $totalData = 0;
                        ?>
                        @while ($totalData <= 20)
                            <tr class="align-middle">
                                <td>07 / 29 / 23</td>
                                <td>75</td>
                                <td>450</td>
                                <td>₱1,200,000</td>
                                <td>₱16,000</td>
                                <td>Electric Guitar</td>
                                <td>
                                    <div class="d-grid">
                                        <a href="#" class="btn btn-primary btn-sm fw-bold">View Report Details</a>
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
