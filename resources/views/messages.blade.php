@extends('index')

@section('page-content')
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h6 class="fw-bold mb-2">Filter Status</h6>
            <select id="statusFilter" class="form-select mb-3 shadow-sm" style="width:248px;">
                <option value="unresolved" selected>Unresolved</option>
                <option value="resolved">Resolved</option>
            </select>
        </div>

        <!-- Updated h3 for dynamic content -->
        <h3 id="orderStatusHeader" class="text-muted fw-bold">21 Unresolved Messages</h3>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div style="max-height:370px;overflow-y: auto;overflow-x: hidden;">
                <table class="table table-hover">
                    <thead class="text-center table-dark">
                        <tr>
                            <th>Message ID</th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Date Received</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="messageTable" class="text-center">
                        <?php $totalData = 0; ?>
                        @while ($totalData <= 20)
                            <tr class="align-middle">
                                <td>1001</td>
                                <td>John Doe</td>
                                <td>john.doe@email.com</td>
                                <td>Order Issue</td>
                                <td>07 / 29 / 23</td>
                                <td class="status text-danger">Unresolved</td> <!-- Default red for Unresolved -->
                                <td>
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <a href="#" class="btn btn-primary btn-sm fw-bold w-100">View</a>
                                        <a href="#" class="btn btn-success btn-sm fw-bold w-100">Respond</a>
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
            const statusValue = this.value === 'resolved' ? 'Resolved' : 'Unresolved';
            const statusCells = document.querySelectorAll('.status');
            const orderStatusHeader = document.getElementById('orderStatusHeader'); // Select the h3 header

            // Update the status of each message in the table
            statusCells.forEach(function(cell) {
                cell.textContent = statusValue;

                // Apply color based on the selected status
                if (statusValue === 'Resolved') {
                    cell.classList.remove('text-danger');
                    cell.classList.add('text-success'); // Green text for Resolved
                } else {
                    cell.classList.remove('text-success');
                    cell.classList.add('text-danger'); // Red text for Unresolved
                }
            });

            // Update the h3 header with new text and count
            const totalMessages = statusCells.length; // Total number of messages
            orderStatusHeader.textContent = `${totalMessages} ${statusValue} Messages`;
        });
    </script>
@endsection
