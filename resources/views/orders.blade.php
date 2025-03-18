<x-dashboard-layout title="Orders Management" icon="fa-solid fa-file-invoice">
    <!-- Content Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h5 class="text-muted mb-1">Manage your orders</h5>
            <p class="text-muted mb-0">View, process, and track all customer orders</p>
        </div>
        <a href="#" class="btn btn-primary">
            <i class="fa-solid fa-plus me-1"></i> New Order
        </a>
    </div>

    <!-- Orders Table Card -->
    <div class="card shadow-sm">
        <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
            <h5 class="card-title mb-0 text-primary">
                <i class="fa-solid fa-list-check me-2"></i>All Orders
            </h5>
            
            <!-- Filter Controls -->
            <div class="d-flex align-items-center">
                <div class="input-group me-3" style="width: 250px;">
                    <input type="text" class="form-control" placeholder="Search orders...">
                    <button class="btn btn-outline-secondary" type="button">
                        <i class="fa-solid fa-search"></i>
                    </button>
                </div>
                
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-filter me-1"></i> Filter
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">All Orders</a></li>
                        <li><a class="dropdown-item" href="#">Processing</a></li>
                        <li><a class="dropdown-item" href="#">Shipped</a></li>
                        <li><a class="dropdown-item" href="#">Completed</a></li>
                        <li><a class="dropdown-item" href="#">Cancelled</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead style="background-color: rgba(38, 84, 124, 0.05);">
                        <tr>
                            <th scope="col" class="py-3"><i class="fa-solid fa-hashtag me-1"></i> Order ID</th>
                            <th scope="col" class="py-3"><i class="fa-solid fa-user me-1"></i> Customer</th>
                            <th scope="col" class="py-3"><i class="fa-solid fa-calendar-day me-1"></i> Date</th>
                            <th scope="col" class="py-3"><i class="fa-solid fa-list me-1"></i> Items</th>
                            <th scope="col" class="py-3"><i class="fa-solid fa-peso-sign me-1"></i> Total</th>
                            <th scope="col" class="py-3"><i class="fa-solid fa-circle-info me-1"></i> Status</th>
                            <th scope="col" class="py-3 text-center"><i class="fa-solid fa-ellipsis-vertical me-1"></i> Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-middle">
                            <td colspan="7" class="text-center py-4">
                                <i class="fa-solid fa-receipt fa-2x mb-3" style="color: #6CBEED;"></i>
                                <h5 class="mb-0">No orders found</h5>
                                <p class="text-muted">Orders will appear here once they are created.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-dashboard-layout> 