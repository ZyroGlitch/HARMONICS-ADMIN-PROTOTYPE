@extends('index')

@section('page-content')
<div class="d-flex justify-content-between align-items-center">
    <div>
        <h6 class="fw-bold mb-2">Filter Status</h6>
        <select id="statusFilter" class="form-select mb-3 shadow-sm" style="width:248px;">
            <option value="out_of_stock" selected>Out of Stock</option>
            <option value="active">Active</option>
        </select>
    </div>

    <h3 id="orderStatusHeader" class="text-muted fw-bold">21 Products Out of Stock</h3>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <div style="max-height:370px;overflow-y: auto;overflow-x: hidden;">
            <table class="table table-hover">
                <thead class="text-center">
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Stock Available</th>
                        <th>Total Ordered</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="productTable" class="text-center">
                    <?php $totalData = 0; ?>
                    @while ($totalData <= 20) <tr class="align-middle">
                        <td>{{$totalData + 1}}</td>
                        <td>Basketball</td>
                        <td>₱800</td>
                        <td>50</td>
                        <td>100</td>
                        <td>Sports</td>
                        <td class="status text-danger">Out of Stock</td> <!-- Default to red for Out of Stock -->
                        <td>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-5 col-md-5">
                                    <div class="d-grid">
                                        <a href="#" class="btn btn-warning btn-sm fw-bold">EDIT</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5">
                                    <div class="d-grid">
                                        <a href="#" class="btn btn-danger btn-sm fw-bold">DELETE</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                        </tr>
                        <?php $totalData++; ?>
                        @endwhile
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    document.getElementById('statusFilter').addEventListener('change', function() {
        const statusValue = this.value === 'active' ? 'Active' : 'Out of Stock';
        const statusCells = document.querySelectorAll('.status');
        const orderStatusHeader = document.getElementById('orderStatusHeader'); // Select the h3 header

        // Update the status of each product
        statusCells.forEach(function(cell) {
            cell.textContent = statusValue;

            // Apply color based on the selected value
            if (statusValue === 'Active') {
                cell.classList.remove('text-danger');
                cell.classList.add('text-success'); // Green text for active
            } else {
                cell.classList.remove('text-success');
                cell.classList.add('text-danger'); // Red text for out of stock
            }
        });

        // Update the h3 header with new text and count
        const totalOrders = statusCells.length; // Total number of products
        orderStatusHeader.textContent = `${totalOrders} Products ${statusValue}`;
    });
</script>
@endsection