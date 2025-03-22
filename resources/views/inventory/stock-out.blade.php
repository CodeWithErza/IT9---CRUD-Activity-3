<x-dashboard-layout :title="'Stock Out & Adjustments'" :icon="'fa-solid fa-arrow-up'">
    <div class="container-fluid">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('inventory') }}" class="text-decoration-none">
                        <i class="fa-solid fa-warehouse"></i> Inventory
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Stock Out & Adjustments</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-8">
                <!-- Stock Out Form -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-exchange-alt me-2" style="color: var(--accent);"></i>
                            Stock Out & Adjustment Details
                        </h5>
                    </div>
                    <div class="card-body">
                        <form id="stockOutForm">
                            <!-- Reference Number and Date -->
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label">Reference Number</label>
                                    <input type="text" class="form-control" id="referenceNumber" value="SO-{{ date('Ymd') }}-001" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Date</label>
                                    <input type="date" class="form-control" id="stockOutDate" value="{{ date('Y-m-d') }}">
                                </div>
                            </div>

                            <!-- Transaction Type -->
                            <div class="mb-4">
                                <label class="form-label">Transaction Type</label>
                                <select class="form-select" id="transactionType">
                                    <option value="stock_out">Stock Out</option>
                                    <option value="adjustment">Stock Adjustment</option>
                                </select>
                            </div>

                            <!-- Product Search -->
                            <div class="mb-4">
                                <label class="form-label">Search Product</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="productSearch" placeholder="Enter product name or scan barcode">
                                    <button class="btn btn-accent" type="button" id="scanBarcode">
                                        <i class="fas fa-barcode me-1"></i>
                                        Scan
                                    </button>
                                </div>
                            </div>

                            <!-- Stock Out Items Table -->
                            <div class="table-responsive mb-4">
                                <table class="table table-hover align-middle">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>SKU</th>
                                            <th>Current Stock</th>
                                            <th>New Count</th>
                                            <th>Difference</th>
                                            <th>Reason</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="stockOutItems">
                                        <tr id="noItemsMessage">
                                            <td colspan="7" class="text-center py-4">
                                                <div class="no-data-message">
                                                    <i class="fas fa-box-open fa-3x mb-3" style="color: var(--accent);"></i>
                                                    <h6 class="fw-normal">No items added</h6>
                                                    <p class="small mb-0" style="color: rgba(255, 255, 255, 0.6);">
                                                        Search for products to add
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Notes -->
                            <div class="mb-4">
                                <label class="form-label">Notes</label>
                                <textarea class="form-control" id="notes" rows="3" placeholder="Add any additional notes..."></textarea>
                            </div>

                            <!-- Processed By -->
                            <div class="mb-4">
                                <label class="form-label">Processed By</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-outline-secondary" id="saveDraft">
                                    <i class="fas fa-save me-1"></i>
                                    Save as Draft
                                </button>
                                <button type="submit" class="btn btn-accent" id="processStockOut">
                                    <i class="fas fa-check-circle me-1"></i>
                                    Process Transaction
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Recent Transactions -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-history me-2" style="color: var(--accent);"></i>
                            Recent Transactions
                        </h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">SO-20240322-001</h6>
                                    <small class="text-muted">Today</small>
                                </div>
                                <p class="mb-1">Stock Out - 3 items removed</p>
                                <small class="text-muted">Processed by John Doe</small>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">ADJ-20240322-001</h6>
                                    <small class="text-muted">Today</small>
                                </div>
                                <p class="mb-1">Adjustment - Inventory count</p>
                                <small class="text-muted">Processed by Jane Smith</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Guidelines -->
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-info-circle me-2" style="color: var(--accent);"></i>
                            Transaction Guidelines
                        </h5>
                    </div>
                    <div class="card-body">
                        <ul class="mb-0">
                            <li class="mb-2">Always verify product details before processing</li>
                            <li class="mb-2">For stock out: Ensure quantities are correct</li>
                            <li class="mb-2">For adjustments: Perform physical count first</li>
                            <li class="mb-2">Document all reasons for changes</li>
                            <li class="mb-2">Large adjustments require supervisor approval</li>
                            <li>Keep related documents for reference</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stockOutForm = document.getElementById('stockOutForm');
            const productSearch = document.getElementById('productSearch');
            const stockOutItems = document.getElementById('stockOutItems');
            const noItemsMessage = document.getElementById('noItemsMessage');
            const transactionType = document.getElementById('transactionType');
            const processButton = document.getElementById('processStockOut');

            // Update reference number based on transaction type
            transactionType.addEventListener('change', function() {
                const prefix = this.value === 'stock_out' ? 'SO-' : 'ADJ-';
                document.getElementById('referenceNumber').value = prefix + '{{ date('Ymd') }}-001';
                processButton.innerHTML = `<i class="fas fa-check-circle me-1"></i>Process ${this.value === 'stock_out' ? 'Stock Out' : 'Adjustment'}`;
            });

            // Handle form submission
            stockOutForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const type = transactionType.value;
                alert(`${type === 'stock_out' ? 'Stock out' : 'Adjustment'} processed successfully!`);
            });

            // Handle product search
            productSearch.addEventListener('keyup', function(e) {
                if (e.key === 'Enter') {
                    addStockOutItem({
                        name: 'Sample Product',
                        sku: 'SKU-001',
                        currentStock: 100
                    });
                }
            });

            // Function to add item to list
            function addStockOutItem(product) {
                noItemsMessage.style.display = 'none';
                const isAdjustment = transactionType.value === 'adjustment';
                
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${product.name}</td>
                    <td>${product.sku}</td>
                    <td>${product.currentStock}</td>
                    <td>
                        <input type="number" class="form-control form-control-sm new-count" 
                               value="${isAdjustment ? product.currentStock : ''}" 
                               min="0" 
                               ${isAdjustment ? '' : 'max="' + product.currentStock + '"'}>
                    </td>
                    <td class="difference">0</td>
                    <td>
                        <select class="form-select form-select-sm">
                            ${isAdjustment ? `
                                <option value="count">Physical Count</option>
                                <option value="damaged">Damaged/Defective</option>
                                <option value="lost">Lost/Missing</option>
                                <option value="other">Other</option>
                            ` : `
                                <option value="damaged">Damaged</option>
                                <option value="expired">Expired</option>
                                <option value="lost">Lost/Missing</option>
                                <option value="other">Other</option>
                            `}
                        </select>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-outline-danger remove-item">
                            <i class="fas fa-times"></i>
                        </button>
                    </td>
                `;

                // Add quantity change handler
                const quantityInput = row.querySelector('.new-count');
                const differenceCell = row.querySelector('.difference');
                
                quantityInput.addEventListener('input', function() {
                    const newCount = parseInt(this.value) || 0;
                    const difference = isAdjustment ? 
                        newCount - product.currentStock : 
                        -(Math.min(newCount, product.currentStock));
                    
                    differenceCell.textContent = difference;
                    differenceCell.style.color = difference < 0 ? '#dc3545' : 
                                               difference > 0 ? '#28a745' : 'inherit';
                });

                // Add remove functionality
                row.querySelector('.remove-item').addEventListener('click', function() {
                    row.remove();
                    if (stockOutItems.children.length === 1) {
                        noItemsMessage.style.display = '';
                    }
                });

                stockOutItems.appendChild(row);
            }

            // Handle barcode scanning
            document.getElementById('scanBarcode').addEventListener('click', function() {
                alert('Barcode scanner activated');
            });

            // Handle save as draft
            document.getElementById('saveDraft').addEventListener('click', function() {
                alert('Transaction saved as draft');
            });
        });
    </script>
    @endpush
</x-dashboard-layout> 