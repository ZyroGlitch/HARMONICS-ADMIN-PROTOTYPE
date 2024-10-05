@extends('../index')

@section('page-content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{route('view.orders')}}" style="text-decoration: none">Orders</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Order</li>
            </ol>
        </nav>
    
        <h3 id="orderStatusHeader" class="text-muted fw-bold">21 Total Orders</h3>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div style="max-height:410px;overflow-y: auto;overflow-x: hidden;">
                <table class="table table-hover" id="ordersTable">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>Item No.</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $totalData = 0;
                        ?>
                        @while ($totalData <= 20) 
                        <tr class="align-middle">
                            <td>{{ $totalData + 1 }}</td>
                            <td>Electric Guitar</td>
                            <td>2</td>
                            <td>₱10,500</td>
                            <td>₱21,000</td>
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