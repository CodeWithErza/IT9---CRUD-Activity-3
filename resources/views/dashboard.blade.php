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
    <x-dashboard-layout title="Dashboard" icon="fa-solid fa-gauge-high">
        <!-- Stats Cards -->
        <div class="row mb-4">
            <!-- Sales Today -->
            <div class="col-md-3 mb-3">
                <a href="#" class="text-decoration-none">
                    <div class="stats-card" style="border-left-color: #26547C;">
                        <div class="stats-icon primary">
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
            <div class="col-md-3 mb-3">
                <a href="#" class="text-decoration-none">
                    <div class="stats-card" style="border-left-color: #FF9D25;">
                        <div class="stats-icon accent">
                            <i class="fa-solid fa-file-invoice fa-lg"></i>
                        </div>
                        <div class="stats-title">Orders Today</div>
                        <div class="stats-value">0</div>
                        <div class="stats-change">
                            <i class="fa-solid fa-receipt me-1"></i>
                            Total Transactions
                        </div>
                    </div>
                </a>
            </div>

            <!-- Low Stock Items -->
            <div class="col-md-3 mb-3">
                <a href="#" class="text-decoration-none">
                    <div class="stats-card" style="border-left-color: #F40000;">
                        <div class="stats-icon highlight">
                            <i class="fa-solid fa-triangle-exclamation fa-lg"></i>
                        </div>
                        <div class="stats-title">Low Stock Parts</div>
                        <div class="stats-value">0</div>
                        <div class="stats-change positive">
                            <i class="fa-solid fa-clipboard-check me-1"></i>
                            Inventory Status
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Total Product Items -->
            <div class="col-md-3 mb-3">
                <a href="#" class="text-decoration-none">
                    <div class="stats-card" style="border-left-color: #6CBEED;">
                        <div class="stats-icon secondary">
                            <i class="fa-solid fa-gears fa-lg"></i>
                        </div>
                        <div class="stats-title">Vehicle Parts</div>
                        <div class="stats-value">0</div>
                        <div class="stats-change">
                            <i class="fa-solid fa-list me-1"></i>
                            Active Products
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Cards Row -->
        <div class="row mt-3">
            <!-- Recent Orders - Left Column -->
            <div class="col-md-6 mb-3">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm h-100">
                        <div class="card-header text-white d-flex justify-content-between align-items-center" style="background-color: #26547C !important;">
                            <h5 class="card-title mb-0">
                                <i class="fa-solid fa-clock-rotate-left me-2"></i>Recent Orders
                            </h5>
                            <span class="badge text-primary" style="background-color: #F6FEDB !important; color: #26547C !important;">View All</span>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                                <table class="table table-hover mb-0">
                                    <thead style="background-color: rgba(38, 84, 124, 0.1); position: sticky; top: 0; z-index: 1;">
                                        <tr>
                                            <th scope="col" class="py-2"><i class="fa-solid fa-hashtag me-1"></i> Order ID</th>
                                            <th scope="col" class="py-2"><i class="fa-solid fa-user me-1"></i> Customer</th>
                                            <th scope="col" class="py-2"><i class="fa-solid fa-calendar-day me-1"></i> Date</th>
                                            <th scope="col" class="py-2"><i class="fa-solid fa-peso-sign me-1"></i> Total</th>
                                            <th scope="col" class="py-2"><i class="fa-solid fa-circle-info me-1"></i> Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="align-middle">
                                            <td colspan="5" class="text-center py-2">
                                                <i class="fa-solid fa-receipt fa-2x mb-2" style="color: #6CBEED;"></i>
                                                <h5 class="mb-0">No recent orders</h5>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Right Column -->
            <div class="col-md-6">
                <!-- Most Ordered Parts Table - Top Right -->
                <div class="card shadow-sm mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #6CBEED !important; color: #26547C;">
                        <h5 class="card-title mb-0">
                            <i class="fa-solid fa-trophy me-2"></i>Most Ordered Parts
                        </h5>
                        <span class="badge text-primary" style="background-color: #F6FEDB !important; color: #26547C !important;">View All</span>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive" style="max-height: 180px; overflow-y: auto;">
                            <table class="table table-hover mb-0">
                                <thead style="background-color: rgba(108, 190, 237, 0.1); position: sticky; top: 0; z-index: 1;">
                                    <tr>
                                        <th scope="col" class="py-2"><i class="fa-solid fa-hashtag me-1"></i> ID</th>
                                        <th scope="col" class="py-2"><i class="fa-solid fa-car-battery me-1"></i> Part Name</th>
                                        <th scope="col" class="py-2"><i class="fa-solid fa-tag me-1"></i> Category</th>
                                        <th scope="col" class="py-2"><i class="fa-solid fa-chart-simple me-1"></i> Sales</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="align-middle">
                                        <td colspan="4" class="text-center py-2">
                                            <i class="fa-solid fa-box-open fa-2x mb-2" style="color: #6CBEED;"></i>
                                            <h5 class="mb-0">No parts data available</h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Low Stock Alert - Bottom Right -->
                <div class="card shadow-sm">
                    <div class="card-header bg-warning text-dark" style="background-color: #FF9D25 !important;">
                        <h5 class="card-title mb-0">
                            <i class="fa-solid fa-triangle-exclamation me-2"></i>Low Stock Parts
                        </h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive" style="max-height: 180px; overflow-y: auto;">
                            <table class="table table-hover mb-0">
                                <thead style="background-color: rgba(255, 157, 37, 0.1); position: sticky; top: 0; z-index: 1;">
                                    <tr>
                                        <th scope="col" class="py-2"><i class="fa-solid fa-hashtag me-1"></i> ID</th>
                                        <th scope="col" class="py-2"><i class="fa-solid fa-car-battery me-1"></i> Part Name</th>
                                        <th scope="col" class="py-2"><i class="fa-solid fa-layer-group me-1"></i> Stock</th>
                                        <th scope="col" class="py-2"><i class="fa-solid fa-triangle-exclamation me-1"></i> Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="align-middle">
                                        <td colspan="4" class="text-center py-2">
                                            <i class="fa-solid fa-check-circle fa-2x mb-1" style="color: #26547C;"></i>
                                            <h5 class="mb-0">All parts are well stocked!</h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-dashboard-layout>
</body>
</html>
