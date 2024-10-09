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
                                <td>Electric Guitar</td>
                                <td class="d-flex align-items-center gap-3">
                                    <a type="button" href="{{ route('view.viewSalesReport') }}"
                                        class="btn btn-primary btn-sm fw-bold w-100" target="_blank">View</a>

                                    <a type="button" href="{{ route('view.download') }}"
                                        class="btn btn-dark btn-sm fw-bold w-100">Download</a>
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
