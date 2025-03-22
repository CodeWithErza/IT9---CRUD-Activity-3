<x-dashboard-layout :title="'Stock In'" :icon="'fa-solid fa-arrow-down'">
    <div class="container-fluid">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('inventory') }}">Inventory</a></li>
                <li class="breadcrumb-item active" aria-current="page">Stock In</li>
            </ol>
        </nav>

        <div class="row">
            <!-- Stock In Form -->
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Add Stock</h5>
                    </div>
                    <div class="card-body">
                        <form id="stockInForm">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="referenceNumber" class="form-label">Reference Number</label>
                                    <input type="text" class="form-control" id="referenceNumber" value="SI-{{ date('Ymd') }}-001" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="date" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="date" value="{{ date('Y-m-d') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="supplier" class="form-label">Supplier</label>
                                    <select class="form-select" id="supplier" required>
                                        <option value="" selected disabled>Select a supplier</option>
                                        <option value="1">ABC Auto Parts</option>
                                        <option value="2">XYZ Distributors</option>
                                        <option value="3">Genuine Parts Co.</option>
                                        <option value="4">JDM Imports</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="invoiceNumber" class="form-label">Invoice Number</label>
                                    <input type="text" class="form-control" id="invoiceNumber" placeholder="Supplier invoice #">
                                </div>
                            </div>
                            
                            <h6 class="mt-4 mb-3">Product Information</h6>
                            
                            <div class="mb-3">
                                <label for="searchProduct" class="form-label">Search Product</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    <input type="text" class="form-control" id="searchProduct" placeholder="Search by product name or SKU">
                                    <button class="btn btn-outline-secondary" type="button" id="scanBarcode">
                                        <i class="fas fa-barcode"></i> Scan
                                    </button>
                                </div>
                            </div>
                            
                            <div class="table-responsive mb-3">
                                <table class="table table-hover align-middle" id="selectedProductsTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product</th>
                                            <th scope="col">SKU</th>
                                            <th scope="col">Current Stock</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Purchase Price</th>
                                            <th scope="col">Subtotal</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="noProductsRow">
                                            <td colspan="7" class="text-center py-3">No products selected. Search or scan products to add.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <button type="button" class="btn btn-outline-accent" id="addManualProduct">
                                <i class="fas fa-plus"></i> Add Product Manually
                            </button>
                            
                            <hr class="my-4">
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="notes" class="form-label">Notes</label>
                                    <textarea class="form-control" id="notes" rows="3" placeholder="Additional notes or remarks"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <div class="card bg-light">
                                        <div class="card-body p-3">
                                            <div class="d-flex justify-content-between mb-2">
                                                <span>Total Items:</span>
                                                <span id="totalItems">0</span>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2">
                                                <span>Total Quantity:</span>
                                                <span id="totalQuantity">0</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <span class="fw-bold">Total Amount:</span>
                                                <span class="fw-bold" id="totalAmount">₱0.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='{{ route('inventory') }}'">
                                    Cancel
                                </button>
                                <button type="button" class="btn btn-outline-primary" id="saveAsDraft">
                                    Save as Draft
                                </button>
                                <button type="submit" class="btn btn-accent">
                                    <i class="fas fa-save"></i> Complete Stock In
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Side Panel -->
            <div class="col-md-4">
                <!-- Recent Stock Ins -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Recent Stock Ins</h5>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">SI-20230622-001</h6>
                                <small>2 hours ago</small>
                            </div>
                            <p class="mb-1">ABC Auto Parts</p>
                            <small>15 items, ₱24,350.00</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">SI-20230621-003</h6>
                                <small>1 day ago</small>
                            </div>
                            <p class="mb-1">XYZ Distributors</p>
                            <small>8 items, ₱15,780.50</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">SI-20230621-002</h6>
                                <small>1 day ago</small>
                            </div>
                            <p class="mb-1">Genuine Parts Co.</p>
                            <small>12 items, ₱18,425.75</small>
                        </a>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="text-decoration-none">View All</a>
                    </div>
                </div>
                
                <!-- Quick Supplier Add -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Quick Add Supplier</h5>
                    </div>
                    <div class="card-body">
                        <form id="quickSupplierForm">
                            <div class="mb-3">
                                <label for="supplierName" class="form-label">Supplier Name</label>
                                <input type="text" class="form-control" id="supplierName" placeholder="Enter supplier name">
                            </div>
                            <div class="mb-3">
                                <label for="contactPerson" class="form-label">Contact Person</label>
                                <input type="text" class="form-control" id="contactPerson" placeholder="Contact person name">
                            </div>
                            <div class="mb-3">
                                <label for="contactNumber" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" id="contactNumber" placeholder="Contact number">
                            </div>
                            <div class="mb-3">
                                <label for="emailAddress" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="emailAddress" placeholder="Email address">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-accent">
                                    <i class="fas fa-plus"></i> Add Supplier
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Product Selection Modal -->
    <div class="modal fade" id="productSelectionModal" tabindex="-1" aria-labelledby="productSelectionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productSelectionModalLabel">Select Products</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="modalProductSearch" placeholder="Search products...">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">SKU</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Current Stock</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
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
                                    <td>
                                        <button class="btn btn-sm btn-accent select-product">Select</button>
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
                                    <td>
                                        <button class="btn btn-sm btn-accent select-product">Select</button>
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
                                    <td>
                                        <button class="btn btn-sm btn-accent select-product">Select</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Manual Product Modal -->
    <div class="modal fade" id="manualProductModal" tabindex="-1" aria-labelledby="manualProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="manualProductModalLabel">Add Product Manually</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="manualProductForm">
                        <div class="mb-3">
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="productName" required>
                        </div>
                        <div class="mb-3">
                            <label for="productSKU" class="form-label">SKU</label>
                            <input type="text" class="form-control" id="productSKU" required>
                        </div>
                        <div class="mb-3">
                            <label for="productCategory" class="form-label">Category</label>
                            <select class="form-select" id="productCategory" required>
                                <option value="" selected disabled>Select category</option>
                                <option value="Lubricants">Lubricants</option>
                                <option value="Electrical">Electrical</option>
                                <option value="Filters">Filters</option>
                                <option value="Brakes">Brakes</option>
                                <option value="Engine">Engine</option>
                                <option value="Suspension">Suspension</option>
                                <option value="Exterior">Exterior</option>
                                <option value="Interior">Interior</option>
                                <option value="Tools">Tools</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="productQuantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="productQuantity" min="1" required>
                        </div>
                        <div class="mb-3">
                            <label for="productPurchasePrice" class="form-label">Purchase Price</label>
                            <div class="input-group">
                                <span class="input-group-text">₱</span>
                                <input type="number" class="form-control" id="productPurchasePrice" step="0.01" min="0" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="productSellingPrice" class="form-label">Selling Price</label>
                            <div class="input-group">
                                <span class="input-group-text">₱</span>
                                <input type="number" class="form-control" id="productSellingPrice" step="0.01" min="0" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="productReorderPoint" class="form-label">Reorder Point</label>
                            <input type="number" class="form-control" id="productReorderPoint" min="0" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-accent" id="addManualProductBtn">Add Product</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scanner Modal -->
    <div class="modal fade" id="scannerModal" tabindex="-1" aria-labelledby="scannerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="scannerModalLabel">Scan Barcode</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="scanner">
                        <div class="viewport"></div>
                    </div>
                    <div class="mt-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="barcodeInput" placeholder="Enter barcode manually">
                            <button class="btn btn-accent" type="button" id="manualBarcodeBtn">Add</button>
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <div class="last-scanned mb-2">Last scanned:</div>
                        <div class="scanned-code" id="lastScannedCode">-</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Product selection modal
            const productSelectionModal = new bootstrap.Modal(document.getElementById('productSelectionModal'));
            const manualProductModal = new bootstrap.Modal(document.getElementById('manualProductModal'));
            const scannerModal = new bootstrap.Modal(document.getElementById('scannerModal'));
            
            // Search product button
            document.getElementById('searchProduct').addEventListener('focus', function() {
                productSelectionModal.show();
            });
            
            // Add manual product button
            document.getElementById('addManualProduct').addEventListener('click', function() {
                manualProductModal.show();
            });
            
            // Scan barcode button
            document.getElementById('scanBarcode').addEventListener('click', function() {
                scannerModal.show();
                // In a real application, initialize barcode scanner here
            });
            
            // Handle product selection from modal
            document.querySelectorAll('.select-product').forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr');
                    const productName = row.querySelector('.product-name span').textContent;
                    const productSKU = row.querySelector('td:nth-child(2)').textContent;
                    const currentStock = row.querySelector('td:nth-child(4)').textContent;
                    
                    addProductToTable(productName, productSKU, currentStock);
                    productSelectionModal.hide();
                });
            });
            
            // Add manual product
            document.getElementById('addManualProductBtn').addEventListener('click', function() {
                const form = document.getElementById('manualProductForm');
                if (form.checkValidity()) {
                    const productName = document.getElementById('productName').value;
                    const productSKU = document.getElementById('productSKU').value;
                    
                    addProductToTable(productName, productSKU, 0, 
                                      document.getElementById('productQuantity').value,
                                      document.getElementById('productPurchasePrice').value);
                    manualProductModal.hide();
                    form.reset();
                } else {
                    form.reportValidity();
                }
            });
            
            // Function to add product to the table
            function addProductToTable(name, sku, currentStock, quantity = 1, price = 0) {
                const tbody = document.getElementById('selectedProductsTable').querySelector('tbody');
                const noProductsRow = document.getElementById('noProductsRow');
                
                if (noProductsRow) {
                    noProductsRow.style.display = 'none';
                }
                
                const newRow = document.createElement('tr');
                newRow.setAttribute('data-sku', sku);
                
                const subtotal = quantity * price;
                
                newRow.innerHTML = `
                    <td>
                        <div class="product-name">
                            <div class="product-img">
                                <i class="fas fa-box"></i>
                            </div>
                            <span>${name}</span>
                        </div>
                    </td>
                    <td>${sku}</td>
                    <td>${currentStock}</td>
                    <td>
                        <input type="number" class="form-control form-control-sm quantity-input" value="${quantity}" min="1" style="width: 80px;">
                    </td>
                    <td>
                        <div class="input-group input-group-sm" style="width: 120px;">
                            <span class="input-group-text">₱</span>
                            <input type="number" class="form-control form-control-sm price-input" value="${price}" min="0" step="0.01">
                        </div>
                    </td>
                    <td class="text-end subtotal">₱${subtotal.toFixed(2)}</td>
                    <td>
                        <button type="button" class="btn btn-sm btn-outline-danger remove-product">
                            <i class="fas fa-times"></i>
                        </button>
                    </td>
                `;
                
                // Add event listeners for the inputs
                const quantityInput = newRow.querySelector('.quantity-input');
                const priceInput = newRow.querySelector('.price-input');
                
                function updateSubtotal() {
                    const quantity = parseFloat(quantityInput.value) || 0;
                    const price = parseFloat(priceInput.value) || 0;
                    const subtotal = quantity * price;
                    newRow.querySelector('.subtotal').textContent = `₱${subtotal.toFixed(2)}`;
                    updateTotals();
                }
                
                quantityInput.addEventListener('input', updateSubtotal);
                priceInput.addEventListener('input', updateSubtotal);
                
                // Remove product button
                newRow.querySelector('.remove-product').addEventListener('click', function() {
                    newRow.remove();
                    if (tbody.querySelectorAll('tr').length <= 1) {
                        document.getElementById('noProductsRow').style.display = 'table-row';
                    }
                    updateTotals();
                });
                
                tbody.appendChild(newRow);
                updateTotals();
            }
            
            // Update totals
            function updateTotals() {
                const rows = document.querySelectorAll('#selectedProductsTable tbody tr:not(#noProductsRow)');
                let totalItems = rows.length;
                let totalQuantity = 0;
                let totalAmount = 0;
                
                rows.forEach(row => {
                    const quantity = parseFloat(row.querySelector('.quantity-input').value) || 0;
                    const price = parseFloat(row.querySelector('.price-input').value) || 0;
                    totalQuantity += quantity;
                    totalAmount += quantity * price;
                });
                
                document.getElementById('totalItems').textContent = totalItems;
                document.getElementById('totalQuantity').textContent = totalQuantity;
                document.getElementById('totalAmount').textContent = `₱${totalAmount.toFixed(2)}`;
            }
            
            // Form submission
            document.getElementById('stockInForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const rows = document.querySelectorAll('#selectedProductsTable tbody tr:not(#noProductsRow)');
                if (rows.length === 0) {
                    alert('Please add at least one product to complete stock in.');
                    return;
                }
                
                const supplier = document.getElementById('supplier').value;
                if (!supplier) {
                    alert('Please select a supplier.');
                    return;
                }
                
                // In a real application, collect all form data and submit to server
                alert('Stock in completed successfully!');
                // Redirect to inventory page
                window.location.href = '{{ route('inventory') }}';
            });
            
            // Save as draft
            document.getElementById('saveAsDraft').addEventListener('click', function() {
                alert('Stock in saved as draft.');
            });
            
            // Quick supplier form
            document.getElementById('quickSupplierForm').addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Supplier added successfully!');
                this.reset();
                
                // In a real application, add the new supplier to the dropdown
                const supplierDropdown = document.getElementById('supplier');
                const newSupplier = document.getElementById('supplierName').value;
                const option = document.createElement('option');
                option.text = newSupplier;
                option.value = 'new-supplier';
                supplierDropdown.add(option);
                supplierDropdown.value = 'new-supplier';
            });
        });
    </script>
</x-dashboard-layout> 