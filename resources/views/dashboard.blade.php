<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Dashboard Custom CSS -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body>
    <x-dashboard-layout title="Dashboard Overview" icon="fa-solid fa-gauge-high">
        <!-- Welcome Section -->
        <div class="welcome-section mb-4">
            <div class="row">
                <div class="col-12">
                    <h2 class="welcome-title mb-2">Welcome back, {{ Auth::user()->name }}! 👋</h2>
                    <p class="welcome-subtitle">Here's what's happening with your auto parts shop today.</p>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row g-4 mb-4">
            <!-- Sales Today -->
            <div class="col-sm-6 col-xl-3">
                <a href="#" class="text-decoration-none">
                    <div class="stats-card">
                        <div class="stats-icon">
                            <i class="fa-solid fa-money-bill-wave fa-lg"></i>
                        </div>
                        <div class="stats-title">Sales Today</div>
                        <div class="stats-value">₱0.00</div>
                        <div class="stats-change positive">
                            <i class="fas fa-chart-line me-1"></i>
                            Daily Revenue
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Orders Today -->
            <div class="col-sm-6 col-xl-3">
                <a href="#" class="text-decoration-none">
                    <div class="stats-card">
                        <div class="stats-icon">
                            <i class="fa-solid fa-cart-shopping fa-lg"></i>
                        </div>
                        <div class="stats-title">Orders Today</div>
                        <div class="stats-value">0</div>
                        <div class="stats-change status-indicator positive">
                            <i class="fas fa-clipboard-list me-1"></i>
                            Orders Processed
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Customers -->
            <div class="col-sm-6 col-xl-3">
                <a href="#" class="text-decoration-none">
                    <div class="stats-card">
                        <div class="stats-icon">
                            <i class="fa-solid fa-users fa-lg"></i>
                        </div>
                        <div class="stats-title">Total Customers</div>
                        <div class="stats-value">0</div>
                        <div class="stats-change status-indicator neutral">
                            <i class="fas fa-user-plus me-1"></i>
                            Customer Base
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Products -->
            <div class="col-sm-6 col-xl-3">
                <a href="#" class="text-decoration-none">
                    <div class="stats-card">
                        <div class="stats-icon">
                            <i class="fa-solid fa-boxes-stacked fa-lg"></i>
                        </div>
                        <div class="stats-title">Total Products</div>
                        <div class="stats-value">0</div>
                        <div class="stats-change status-indicator warning">
                            <i class="fas fa-box-open me-1"></i>
                            Items in Stock
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="quick-actions mb-4">
            <div class="row g-3">
                <div class="col-sm-6 col-md-3">
                    <a href="#" class="quick-action-card">
                        <i class="fa-solid fa-plus"></i>
                        <span>New Order</span>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#" class="quick-action-card">
                        <i class="fa-solid fa-box"></i>
                        <span>Add Product</span>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#" class="quick-action-card">
                        <i class="fa-solid fa-truck"></i>
                        <span>Track Orders</span>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#" class="quick-action-card">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span>View Reports</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Content Cards -->
        <div class="row g-4">
            <!-- Recent Orders - Left Column -->
            <div class="col-xl-8 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">
                            <i class="fa-solid fa-clock-rotate-left me-2" style="color: var(--accent);"></i>Recent Orders
                        </h5>
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm btn-accent">
                                <i class="fa-solid fa-filter me-1"></i>Filter
                            </button>
                            <button class="btn btn-sm btn-accent">
                                <i class="fa-solid fa-download me-1"></i>Export
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive" style="max-height: 400px;">
                            <table class="table table-hover align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th class="ps-3">Order ID</th>
                                        <th>Customer</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th class="text-end pe-3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Example data - will be replaced with actual data from the database -->
                                    <tr>
                                        <td class="ps-3">ORD-2023-001</td>
                                        <td>John Smith</td>
                                        <td>May 15, 2023</td>
                                        <td>₱4,850.00</td>
                                        <td><span class="order-status completed">Completed</span></td>
                                        <td class="text-end pe-3">
                                            <button class="btn btn-sm btn-accent">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-3">ORD-2023-002</td>
                                        <td>Maria Garcia</td>
                                        <td>May 16, 2023</td>
                                        <td>₱2,350.00</td>
                                        <td><span class="order-status processing">Processing</span></td>
                                        <td class="text-end pe-3">
                                            <button class="btn btn-sm btn-accent">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-3">ORD-2023-003</td>
                                        <td>David Lee</td>
                                        <td>May 16, 2023</td>
                                        <td>₱7,120.00</td>
                                        <td><span class="order-status shipped">Shipped</span></td>
                                        <td class="text-end pe-3">
                                            <button class="btn btn-sm btn-accent">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-3">ORD-2023-004</td>
                                        <td>Sarah Johnson</td>
                                        <td>May 17, 2023</td>
                                        <td>₱1,275.00</td>
                                        <td><span class="order-status pending">Pending</span></td>
                                        <td class="text-end pe-3">
                                            <button class="btn btn-sm btn-accent">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-3">ORD-2023-005</td>
                                        <td>Michael Wong</td>
                                        <td>May 17, 2023</td>
                                        <td>₱3,450.00</td>
                                        <td><span class="order-status cancelled">Cancelled</span></td>
                                        <td class="text-end pe-3">
                                            <button class="btn btn-sm btn-accent">View</button>
                                        </td>
                                    </tr>
                                    <!-- Uncomment below to show the empty state -->
                                    <!--
                                    <tr>
                                        <td colspan="6" class="text-center py-5">
                                            <div class="no-data-message">
                                                <i class="fa-solid fa-receipt fa-3x mb-3" style="color: var(--accent);"></i>
                                                <h6 class="fw-normal">No orders yet</h6>
                                                <p class="small mb-0" style="color: rgba(255, 255, 255, 0.6);">New orders will appear here</p>
                                            </div>
                                        </td>
                                    </tr>
                                    -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-xl-4">
                <div class="row g-4">
                    <!-- Most Ordered Parts -->
                    <div class="col-12">
                        <div class="card shadow-sm">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">
                                    <i class="fa-solid fa-trophy me-2" style="color: var(--accent);"></i>Top Products
                                </h5>
                                <button class="btn btn-sm btn-accent">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive" style="max-height: 250px;">
                                    <table class="table table-hover align-middle mb-0">
                                        <thead>
                                            <tr>
                                                <th class="ps-3">Product</th>
                                                <th>Quantity</th>
                                                <th class="text-end pe-3">Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Example data - will be replaced with actual data from the database -->
                                            <tr>
                                                <td class="ps-3">
                                                    <div class="product-name">
                                                        <div class="product-img">
                                                            <i class="fa-solid fa-oil-can fa-sm" style="color: var(--accent);"></i>
                                                        </div>
                                                        <span>Premium Engine Oil</span>
                                                    </div>
                                                </td>
                                                <td>42</td>
                                                <td class="text-end pe-3">
                                                    <span class="status-indicator positive">₱12,600</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-3">
                                                    <div class="product-name">
                                                        <div class="product-img">
                                                            <i class="fa-solid fa-filter fa-sm" style="color: var(--accent);"></i>
                                                        </div>
                                                        <span>Air Filter Set</span>
                                                    </div>
                                                </td>
                                                <td>36</td>
                                                <td class="text-end pe-3">
                                                    <span class="status-indicator positive">₱9,720</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-3">
                                                    <div class="product-name">
                                                        <div class="product-img">
                                                            <i class="fa-solid fa-car-battery fa-sm" style="color: var(--accent);"></i>
                                                        </div>
                                                        <span>Performance Battery</span>
                                                    </div>
                                                </td>
                                                <td>28</td>
                                                <td class="text-end pe-3">
                                                    <span class="status-indicator positive">₱8,400</span>
                                                </td>
                                            </tr>
                                            <!-- Uncomment below to show the empty state -->
                                            <!--
                                            <tr>
                                                <td colspan="3" class="text-center py-5">
                                                    <div class="no-data-message">
                                                        <i class="fa-solid fa-box fa-3x mb-3" style="color: var(--accent);"></i>
                                                        <h6 class="fw-normal">No products yet</h6>
                                                        <p class="small mb-0" style="color: rgba(255, 255, 255, 0.6);">Best selling products will appear here</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Low Stock Alert (Previously Customer Overview) -->
                    <div class="col-12">
                        <div class="card shadow-sm">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">
                                    <span class="low-stock-alert-header">
                                        <i class="fa-solid fa-exclamation-triangle me-2" style="color: var(--accent);"></i>Low Stock Alert
                                    </span>
                                </h5>
                                <button class="btn btn-sm btn-accent">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive" style="max-height: 250px;">
                                    <table class="table table-hover align-middle mb-0">
                                        <thead>
                                            <tr>
                                                <th class="ps-3">Product</th>
                                                <th>Category</th>
                                                <th class="text-end pe-3">Stock</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Example data - will be replaced with actual data from the database -->
                                            <tr class="low-stock-item">
                                                <td class="ps-3">
                                                    <div class="product-name">
                                                        <div class="product-img">
                                                            <i class="fa-solid fa-oil-can fa-sm" style="color: var(--accent);"></i>
                                                        </div>
                                                        <span>Premium Engine Oil</span>
                                                    </div>
                                                </td>
                                                <td class="product-category">Lubricants</td>
                                                <td class="text-end pe-3">
                                                    <span class="stock-level critical">3</span>
                                                    <button class="restock-btn ms-2">Restock</button>
                                                </td>
                                            </tr>
                                            <tr class="low-stock-item">
                                                <td class="ps-3">
                                                    <div class="product-name">
                                                        <div class="product-img">
                                                            <i class="fa-solid fa-car-battery fa-sm" style="color: var(--accent);"></i>
                                                        </div>
                                                        <span>Performance Battery</span>
                                                    </div>
                                                </td>
                                                <td class="product-category">Electrical</td>
                                                <td class="text-end pe-3">
                                                    <span class="stock-level warning">7</span>
                                                    <button class="restock-btn ms-2">Restock</button>
                                                </td>
                                            </tr>
                                            <tr class="low-stock-item">
                                                <td class="ps-3">
                                                    <div class="product-name">
                                                        <div class="product-img">
                                                            <i class="fa-solid fa-gear fa-sm" style="color: var(--accent);"></i>
                                                        </div>
                                                        <span>Brake Pads (Front)</span>
                                                    </div>
                                                </td>
                                                <td class="product-category">Braking System</td>
                                                <td class="text-end pe-3">
                                                    <span class="stock-level critical">2</span>
                                                    <button class="restock-btn ms-2">Restock</button>
                                                </td>
                                            </tr>
                                            <!-- Uncomment below to show the empty state -->
                                            <!--
                                            <tr>
                                                <td colspan="3" class="text-center py-5">
                                                    <div class="no-data-message">
                                                        <i class="fa-solid fa-box-open fa-3x mb-3" style="color: var(--accent);"></i>
                                                        <h6 class="fw-normal">No low stock items</h6>
                                                        <p class="small mb-0" style="color: rgba(255, 255, 255, 0.6);">Low stock products will appear here</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </x-dashboard-layout>

    <!-- Script for date and time -->
    <script>
        function updateDateTime() {
            const now = new Date();
            const dateOptions = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const timeOptions = { hour: '2-digit', minute: '2-digit' };
            
            document.getElementById('current-date').textContent = now.toLocaleDateString('en-US', dateOptions);
            document.getElementById('current-time').textContent = now.toLocaleTimeString('en-US', timeOptions);
        }
        
        // Update time immediately and then every second
        updateDateTime();
        setInterval(updateDateTime, 60000);
    </script>
</body>
</html>
