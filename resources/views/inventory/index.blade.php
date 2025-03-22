<x-dashboard-layout :title="'Inventory Management'" :icon="'fa-solid fa-warehouse'">
    <div class="container-fluid">
        <!-- Quick Action Cards -->
        <div class="row mb-4">
            <div class="col-md-4">
                <a href="{{ route('inventory.stock-in') }}" class="text-decoration-none">
                    <div class="quick-action-card">
                        <i class="fas fa-arrow-down" style="background-color: rgba(40, 167, 69, 0.2); color: #28a745;"></i>
                        <span>Stock In</span>
                        <p class="card-description">Add new inventory to stock</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('inventory.stock-out') }}" class="text-decoration-none">
                    <div class="quick-action-card">
                        <i class="fas fa-exchange-alt" style="background-color: rgba(220, 53, 69, 0.2); color: #dc3545;"></i>
                        <span>Stock Out & Adjustments</span>
                        <p class="card-description">Remove or adjust inventory items</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('suppliers') }}" class="text-decoration-none">
                    <div class="quick-action-card">
                        <i class="fas fa-truck" style="background-color: rgba(13, 110, 253, 0.2); color: #0d6efd;"></i>
                        <span>Suppliers</span>
                        <p class="card-description">Manage supplier profiles</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Current Inventory Table -->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Current Inventory</h5>
                        <div class="d-flex">
                            <input type="text" class="form-control form-control-sm me-2 search-input" placeholder="Search products...">
                            <select class="form-select form-select-sm sort-select">
                                <option value="name">Name</option>
                                <option value="sku">SKU</option>
                                <option value="quantity">Quantity</option>
                                <option value="category">Category</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle data-table">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">SKU</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">In Stock</th>
                                        <th scope="col">Reorder Point</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Last Updated</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Sample inventory items - would be populated from database -->
                                    <tr>
                                        <td>
                                            <div class="product-name">
                                                <div class="product-img">
                                                    <i class="fas fa-oil-can"></i>
                                                </div>
                                                <span>Premium Engine Oil</span>
                                            </div>
                                        </td>
                                        <td>OIL-1001</td>
                                        <td>Lubricants</td>
                                        <td>42</td>
                                        <td>20</td>
                                        <td><span class="stock-level normal">Normal</span></td>
                                        <td>2023-06-15</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-sm btn-outline-secondary" title="View Details">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-primary" title="Stock In">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger" title="Stock Out & Adjust">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-name">
                                                <div class="product-img">
                                                    <i class="fas fa-car-battery"></i>
                                                </div>
                                                <span>Performance Battery</span>
                                            </div>
                                        </td>
                                        <td>BAT-2002</td>
                                        <td>Electrical</td>
                                        <td>15</td>
                                        <td>10</td>
                                        <td><span class="stock-level normal">Normal</span></td>
                                        <td>2023-06-18</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-sm btn-outline-secondary" title="View Details">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-primary" title="Stock In">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger" title="Stock Out & Adjust">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-name">
                                                <div class="product-img">
                                                    <i class="fas fa-filter"></i>
                                                </div>
                                                <span>Air Filter</span>
                                            </div>
                                        </td>
                                        <td>FIL-3003</td>
                                        <td>Filters</td>
                                        <td>8</td>
                                        <td>15</td>
                                        <td><span class="stock-level warning">Low Stock</span></td>
                                        <td>2023-06-20</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-sm btn-outline-secondary" title="View Details">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-primary" title="Stock In">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger" title="Stock Out & Adjust">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-name">
                                                <div class="product-img">
                                                    <i class="fas fa-cogs"></i>
                                                </div>
                                                <span>Brake Pads</span>
                                            </div>
                                        </td>
                                        <td>BRK-4004</td>
                                        <td>Brakes</td>
                                        <td>3</td>
                                        <td>5</td>
                                        <td><span class="stock-level critical">Critical</span></td>
                                        <td>2023-06-22</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-sm btn-outline-secondary" title="View Details">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-primary" title="Stock In">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger" title="Stock Out & Adjust">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Showing 4 of 56 items</span>
                            <div class="pagination">
                                <button class="pagination-btn" disabled>
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="pagination-btn active">1</button>
                                <button class="pagination-btn">2</button>
                                <button class="pagination-btn">3</button>
                                <button class="pagination-btn">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Inventory Statistics -->
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Inventory Value</h5>
                        <div class="d-flex align-items-center mb-3">
                            <h2 class="mb-0 me-2">₱256,789.50</h2>
                            <span class="status-indicator positive">+8.5%</span>
                        </div>
                        <p class="text-muted mb-0">Total value of current inventory</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Stock Status</h5>
                        <div class="d-flex justify-content-around mb-3">
                            <div class="text-center">
                                <div class="fs-4 fw-bold text-success">42</div>
                                <div class="text-muted">Normal</div>
                            </div>
                            <div class="text-center">
                                <div class="fs-4 fw-bold text-warning">8</div>
                                <div class="text-muted">Low</div>
                            </div>
                            <div class="text-center">
                                <div class="fs-4 fw-bold text-danger">6</div>
                                <div class="text-muted">Critical</div>
                            </div>
                        </div>
                        <p class="text-muted mb-0">Current stock level status</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Monthly Movement</h5>
                        <div class="d-flex align-items-center mb-3">
                            <h2 class="mb-0 me-2">352</h2>
                            <span class="status-indicator positive">+12.3%</span>
                        </div>
                        <p class="text-muted mb-0">Items moved (in & out) this month</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout> 