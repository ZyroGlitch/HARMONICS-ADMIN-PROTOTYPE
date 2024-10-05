@extends('index')

@section('page-content')
<div class="d-flex justify-content-between align-items-center">
    <div>
        <h6 class="fw-bold mb-2">Filter Status</h6>
        <select id="statusFilter" class="form-select mb-3 shadow-sm" style="width:248px;">
            <option value="pending" selected>Pending</option>
            <option value="completed">Completed</option>
        </select>
    </div>

    <h3 id="orderStatusHeader" class="text-muted fw-bold">21 Pending Orders</h3> 
</div>


<div class="card shadow-sm">
    <div class="card-body">
        <div style="max-height:370px;overflow-y: auto;overflow-x: hidden;">
            <table class="table table-hover" id="ordersTable">
                <thead class="text-center table-dark">
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Total Product</th>
                        <th>Payment Method</th>
                        <th>Total Amount</th>
                        <th>Order Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    $totalData = 0;
                    ?>
                    @while ($totalData <= 20) <tr class="align-middle">
                        <td>100{{ $totalData + 1 }}</td>
                        <td>Customer {{ $totalData + 1 }}</td>
                        <td>10</td>
                        <td>Gcash</td>
                        <td>₱2000</td>
                        <td>07 / 29 / 23</td>
                        <td class="status-cell {{ $totalData % 2 == 0 ? 'text-success' : 'text-danger' }}">
                            {{ $totalData % 2 == 0 ? 'Completed' : 'Pending' }}
                        </td>
                        <td>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-5 col-md-5">
                                    <div class="d-grid">
                                        <a href="{{route('view.viewOrder')}}" class="btn btn-primary btn-sm fw-bold">VIEW</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5">
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-warning btn-sm fw-bold" data-bs-toggle="modal" data-bs-target="#editBtn">EDIT</button>
                                    </div>
                                </div>
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

<!-- Edit Order Modal -->
<div class="modal fade" id="editBtn" tabindex="-1" aria-labelledby="editOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editOrderModalLabel">Edit Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('view.editOrder')}}" method="POST">
                    @csrf

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h5 class="fw-bold">Customer Name</h5>
                            <p class="text-muted">John Ford Buliag</p>
                        </div>
                        <div>
                            <h5 class="fw-bold">Order ID</h5>
                            <p class="text-muted">1001</p>
                        </div>
                    </div>  
                    <div class="mb-4">
                        <label for="orderStatus" class="form-label">Order Status</label>
                        <select class="form-select" id="orderStatus" required>
                            <option value="" disabled selected>Select status</option>
                            <option value="Pending">Pending</option>
                            <option value="Shipped">Shipped</option>
                            <option value="Delivered">Completed</option>
                        </select>
                    </div>
            
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="d-grid">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" id="saveChangesBtn">Save changes</button>
                            </div>
                        </div>
                    </div>    
                </form>
            </div>
        </div>
    </div>
</div>

@if(session('edit'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'Order Status Updated!',
        });
    });
</script>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const statusFilter = document.getElementById('statusFilter');
        const statusCells = document.querySelectorAll('.status-cell');
        const orderStatusHeader = document.getElementById('orderStatusHeader'); // Select the header

        // Function to change the status text and header
        function updateStatusText(status) {
            statusCells.forEach(cell => {
                if (status === 'pending') {
                    cell.classList.remove('text-success');
                    cell.classList.add('text-danger');
                    cell.textContent = 'Pending';
                } else {
                    cell.classList.remove('text-danger');
                    cell.classList.add('text-success');
                    cell.textContent = 'Completed';
                }
            });

            // Update the header text based on selected status
            if (status === 'pending') {
                orderStatusHeader.textContent = '21 Pending Orders';
            } else {
                orderStatusHeader.textContent = '21 Completed Orders';
            }
        }

        // Initial load to show 'Pending' status
        updateStatusText('pending');

        // Listen to changes in the select box
        statusFilter.addEventListener('change', function() {
            const selectedStatus = statusFilter.value;
            updateStatusText(selectedStatus);
        });
    });
</script>
@endsection