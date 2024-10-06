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
                    <thead class="text-center table-dark">
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
                        @while ($totalData <= 20)
                            <tr class="align-middle">
                                <td>{{ $totalData + 1 }}</td>
                                <td>Basketball</td>
                                <td>₱800</td>
                                <td>50</td>
                                <td>100</td>
                                <td>Sports</td>
                                <td class="status text-danger">Out of Stock</td> <!-- Default to red for Out of Stock -->
                                <td>
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-warning btn-sm fw-bold" data-bs-toggle="modal"
                                            data-bs-target="#editProductModal">EDIT</button>
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


    <!-- Edit Product Modal -->
    <div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success text-light">
                    <h5 class="modal-title fw-bold" id="editProductModalLabel">Edit Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-start">
                    <div class="col-lg-5 col-md-5 text-center">
                        <img src="assets/product.png" alt="product img" class="object-contain"
                            style="width:200px;height:350px;">
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <form action="{{ route('view.editProduct') }}" method="POST">
                            @csrf


                            <h4 class="fw-bold mb-3">Electric Guitar</h4>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima error beatae fugiat nulla obcaecati.
                            </textarea>
                                <label for="floatingTextarea">Description</label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="col-lg-5 col-md-5">
                                    <label for="price" class="form-label">Price</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">₱</span>
                                        <input type="text" class="form-control" id="price" value="5000">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5">
                                    <label for="price" class="form-label">Stock Available</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-database-add"></i></span>
                                        <input type="number" class="form-control" id="price" value="50">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="col-lg-5 col-md-5">
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-danger fw-bold"
                                            data-bs-dismiss="modal">CANCEL</button>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-success fw-bold">APPLY
                                            CHANGES</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>E
        </div>
    </div>

    @if (session('edit'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Product Information Updated!',
                });
            });
        </script>
    @endif


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
