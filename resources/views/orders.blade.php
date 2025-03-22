<x-dashboard-layout :title="'Orders'" :icon="'fa-solid fa-cart-shopping'">
    <div class="container-fluid">
        <div class="row g-4">
            <!-- Left Column - Order Items -->
            <div class="col-lg-8">
                <div class="card shadow-sm h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-shopping-cart me-2" style="color: var(--accent);"></i>
                            Order Items
                        </h5>
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm btn-accent" id="clearOrder">
                                <i class="fas fa-trash me-1"></i>Clear
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Barcode Scanner Section -->
                        <div class="barcode-container mb-4">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-barcode"></i>
                                        </span>
                                        <input type="text" class="form-control" id="barcodeInput" placeholder="Scan or enter barcode">
                                        <button class="btn btn-accent" type="button" id="searchBarcode">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-accent" type="button" id="toggleScanner">
                                        <i class="fas fa-camera me-1"></i>
                                        Toggle Barcode Scanner
                                    </button>
                                </div>
                            </div>
                            <!-- Camera view for barcode scanning -->
                            <div id="scanner" class="mt-3" style="display: none;">
                                <div id="interactive" class="viewport"></div>
                                <div class="last-scanned mt-2">
                                    Last scanned: <span class="scanned-code">None</span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Catalog Section -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="fw-bold mb-0">Product Catalog</h6>
                                <div class="d-flex gap-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="productSearch" placeholder="Search products...">
                                        <button class="btn btn-accent" type="button">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <select class="form-select" id="categoryFilter">
                                        <option value="">All Categories</option>
                                        <option value="engine">Engine</option>
                                        <option value="electrical">Electrical</option>
                                        <option value="brakes">Brakes</option>
                                        <option value="filters">Filters</option>
                                        <option value="exterior">Exterior</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row g-3" id="productGrid">
                                <!-- Product Cards -->
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <i class="fas fa-oil-can"></i>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-name">Premium Engine Oil</h6>
                                            <p class="product-price">₱350.00</p>
                                            <button class="btn btn-sm btn-accent w-100 add-to-order" data-id="P001">
                                                <i class="fas fa-plus me-1"></i>Add to Order
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <i class="fas fa-car-battery"></i>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-name">Performance Battery</h6>
                                            <p class="product-price">₱2,450.00</p>
                                            <button class="btn btn-sm btn-accent w-100 add-to-order" data-id="P002">
                                                <i class="fas fa-plus me-1"></i>Add to Order
                                            </button>
                                        </div>
        </div>
    </div>

                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <i class="fas fa-filter"></i>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-name">Air Filter</h6>
                                            <p class="product-price">₱250.00</p>
                                            <button class="btn btn-sm btn-accent w-100 add-to-order" data-id="P003">
                                                <i class="fas fa-plus me-1"></i>Add to Order
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <i class="fas fa-cogs"></i>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-name">Brake Pads</h6>
                                            <p class="product-price">₱750.00</p>
                                            <button class="btn btn-sm btn-accent w-100 add-to-order" data-id="P004">
                                                <i class="fas fa-plus me-1"></i>Add to Order
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <i class="fas fa-bolt"></i>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-name">Spark Plugs</h6>
                                            <p class="product-price">₱120.00</p>
                                            <button class="btn btn-sm btn-accent w-100 add-to-order" data-id="P005">
                                                <i class="fas fa-plus me-1"></i>Add to Order
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <i class="fas fa-tint"></i>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-name">Coolant</h6>
                                            <p class="product-price">₱280.00</p>
                                            <button class="btn btn-sm btn-accent w-100 add-to-order" data-id="P006">
                                                <i class="fas fa-plus me-1"></i>Add to Order
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <i class="fas fa-brush"></i>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-name">Wiper Blades</h6>
                                            <p class="product-price">₱350.00</p>
                                            <button class="btn btn-sm btn-accent w-100 add-to-order" data-id="P007">
                                                <i class="fas fa-plus me-1"></i>Add to Order
                    </button>
                                        </div>
                                    </div>
                </div>
                
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <i class="fas fa-lightbulb"></i>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-name">Headlight Bulb</h6>
                                            <p class="product-price">₱180.00</p>
                                            <button class="btn btn-sm btn-accent w-100 add-to-order" data-id="P008">
                                                <i class="fas fa-plus me-1"></i>Add to Order
                    </button>
                                        </div>
                                    </div>
                </div>
            </div>
        </div>
        
                        <!-- Order Items Table -->
            <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th class="ps-3">Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th class="text-end">Total</th>
                                        <th class="text-center">Action</th>
                        </tr>
                    </thead>
                                <tbody id="orderItemsList">
                                    <tr id="emptyOrderMessage">
                                        <td colspan="5" class="text-center py-5">
                                            <div class="no-data-message">
                                                <i class="fas fa-shopping-cart fa-3x mb-3" style="color: var(--accent);"></i>
                                                <h6 class="fw-normal">No items in order</h6>
                                                <p class="small mb-0" style="color: rgba(255, 255, 255, 0.6);">
                                                    Scan a barcode or browse products to add items
                                                </p>
                                            </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
            </div>

            <!-- Right Column - Order Details -->
            <div class="col-lg-4">
                <div class="card shadow-sm h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-file-invoice me-2" style="color: var(--accent);"></i>
                            Order Details
                        </h5>
                    </div>
                    <div class="card-body">
                        <!-- Customer Information -->
                        <div class="mb-4">
                            <h6 class="fw-bold mb-3">Customer Information</h6>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="customerName" placeholder="Customer Name">
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" id="customerPhone" placeholder="Phone Number">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="customerEmail" placeholder="Email Address">
                            </div>
                        </div>

                        <!-- Order Summary -->
                        <div class="mb-4">
                            <h6 class="fw-bold mb-3">Order Summary</h6>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Subtotal:</span>
                                <span id="subtotalAmount">₱0.00</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Tax (12%):</span>
                                <span id="taxAmount">₱0.00</span>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <span>Discount:</span>
                                <div class="d-flex align-items-center">
                                    <input type="number" class="form-control form-control-sm me-2" id="discountInput" value="0" style="width: 80px;">
                                    <select class="form-select form-select-sm" id="discountType" style="width: 80px;">
                                        <option value="amount">₱</option>
                                        <option value="percent">%</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between fw-bold">
                                <span>Total:</span>
                                <span id="totalAmount">₱0.00</span>
                            </div>
                        </div>

                        <!-- Order Notes -->
                        <div class="mb-4">
                            <button class="btn btn-link text-accent p-0 mb-3 d-flex align-items-center w-100" type="button" data-bs-toggle="collapse" data-bs-target="#orderNotesCollapse" aria-expanded="false" aria-controls="orderNotesCollapse">
                                <i class="fas fa-sticky-note me-2"></i>
                                <h6 class="fw-bold mb-0">Notes</h6>
                                <small class="ms-2 text-muted">(Optional)</small>
                                <i class="fas fa-chevron-down ms-auto"></i>
                            </button>
                            <div class="collapse" id="orderNotesCollapse">
                                <textarea class="form-control" id="orderNotes" rows="3" placeholder="Add notes about the order..."></textarea>
                            </div>
                        </div>

                        <!-- Payment Method -->
                        <div class="mb-4">
                            <h6 class="fw-bold mb-3">Payment Method</h6>
                            <select class="form-select mb-3" id="paymentMethod">
                                <option value="cash">Cash</option>
                                <option value="gcash">GCash</option>
                                <option value="maya">Maya</option>
                            </select>

                            <!-- Cash Payment Details -->
                            <div id="cashPaymentDetails">
                                <div class="mb-3">
                                    <label class="form-label">Amount Received</label>
                                    <div class="input-group">
                                        <span class="input-group-text">₱</span>
                                        <input type="number" class="form-control" id="amountReceived" placeholder="0.00">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <span>Change:</span>
                                    <span id="changeAmount" class="fw-bold">₱0.00</span>
                                </div>
                            </div>

                            <!-- E-wallet Payment Details (hidden by default) -->
                            <div id="ewalletPaymentDetails" style="display: none;">
                                <div class="mb-3">
                                    <label class="form-label">Reference Number</label>
                                    <input type="text" class="form-control" id="ewalletReference" placeholder="Enter reference number">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Amount Paid</label>
                                    <div class="input-group">
                                        <span class="input-group-text">₱</span>
                                        <input type="number" class="form-control" id="ewalletAmount" placeholder="0.00">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Complete Order Button -->
                        <button class="btn btn-accent w-100" id="completeOrder">
                            <i class="fas fa-check-circle me-1"></i>
                            Complete Order
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @push('styles')
    <!-- QuaggaJS for barcode scanning -->
    <script src="https://cdn.jsdelivr.net/npm/quagga@0.12.1/dist/quagga.min.js"></script>
    @endpush
    
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let isScanning = false;
            
            // Toggle scanner button click handler
            document.getElementById('toggleScanner').addEventListener('click', function() {
                const scanner = document.getElementById('scanner');
                if (!isScanning) {
                    scanner.style.display = 'block';
                    startScanner();
                    this.innerHTML = '<i class="fas fa-camera-slash me-1"></i>Stop Scanner';
                } else {
                    scanner.style.display = 'none';
                    stopScanner();
                    this.innerHTML = '<i class="fas fa-camera me-1"></i>Toggle Barcode Scanner';
                }
                isScanning = !isScanning;
            });
            
            // Initialize barcode scanner
            function startScanner() {
                Quagga.init({
                    inputStream: {
                        name: "Live",
                        type: "LiveStream",
                        target: document.querySelector("#interactive"),
                        constraints: {
                            facingMode: "environment"
                        },
                    },
                    decoder: {
                        readers: [
                            "ean_reader",
                            "ean_8_reader",
                            "code_128_reader",
                            "code_39_reader",
                            "upc_reader"
                        ]
                    }
                }, function(err) {
                    if (err) {
                        console.error(err);
                        alert("Error starting scanner: " + err);
                        return;
                    }
                    Quagga.start();
                });
                
                // Listen for barcode detection
                Quagga.onDetected(function(result) {
                    const code = result.codeResult.code;
                    document.querySelector('.scanned-code').textContent = code;
                    document.getElementById('barcodeInput').value = code;
                    searchBarcode(code);
                });
            }
            
            function stopScanner() {
                Quagga.stop();
            }
            
            function searchBarcode(code) {
                // In a real application, this would fetch product data from server
                console.log('Searching for barcode:', code);
                // Simulate finding a product
                setTimeout(() => {
                    // Example implementation - would be replaced with actual API call
                    alert(`Product found for barcode: ${code}`);
                }, 500);
            }
            
            // Manual barcode search
            document.getElementById('searchBarcode').addEventListener('click', function() {
                const code = document.getElementById('barcodeInput').value;
                if (code) {
                    searchBarcode(code);
                }
            });
            
            // Enter key in input triggers search
            document.getElementById('barcodeInput').addEventListener('keyup', function(e) {
                if (e.key === 'Enter') {
                    const code = this.value;
                    if (code) {
                        searchBarcode(code);
                    }
                }
            });

            // Product catalog functionality
            const products = [
                { id: 'P001', name: 'Premium Engine Oil', price: 350.00, category: 'engine' },
                { id: 'P002', name: 'Performance Battery', price: 2450.00, category: 'electrical' },
                { id: 'P003', name: 'Air Filter', price: 250.00, category: 'filters' },
                { id: 'P004', name: 'Brake Pads', price: 750.00, category: 'brakes' },
                { id: 'P005', name: 'Spark Plugs', price: 120.00, category: 'electrical' },
                { id: 'P006', name: 'Coolant', price: 280.00, category: 'engine' },
                { id: 'P007', name: 'Wiper Blades', price: 350.00, category: 'exterior' },
                { id: 'P008', name: 'Headlight Bulb', price: 180.00, category: 'electrical' }
            ];

            let orderItems = [];

            // Search and filter products
            function filterProducts() {
                const searchTerm = document.getElementById('productSearch').value.toLowerCase();
                const category = document.getElementById('categoryFilter').value;
                
                document.querySelectorAll('#productGrid .product-item').forEach(item => {
                    const button = item.querySelector('.add-to-order');
                    const productId = button.dataset.id;
                    const product = products.find(p => p.id === productId);
                    
                    const matchesSearch = product.name.toLowerCase().includes(searchTerm);
                    const matchesCategory = !category || product.category === category;
                    
                    item.closest('.col-sm-6').style.display = 
                        matchesSearch && matchesCategory ? 'block' : 'none';
                });
            }

            document.getElementById('productSearch').addEventListener('input', filterProducts);
            document.getElementById('categoryFilter').addEventListener('change', filterProducts);

            // Add to order functionality
            document.querySelectorAll('.add-to-order').forEach(button => {
                button.addEventListener('click', function() {
                    const productId = this.dataset.id;
                    const product = products.find(p => p.id === productId);
                    
                    const existingItem = orderItems.find(item => item.id === productId);
                    
                    if (existingItem) {
                        existingItem.quantity += 1;
                        updateOrderItemRow(existingItem);
                    } else {
                        const newItem = {
                            id: product.id,
                            name: product.name,
                            price: product.price,
                            quantity: 1
                        };
                        orderItems.push(newItem);
                        addOrderItemRow(newItem);
                    }
                    
                    updateOrderSummary();
                    document.getElementById('emptyOrderMessage').style.display = 'none';
                });
            });

            function addOrderItemRow(item) {
                const tbody = document.getElementById('orderItemsList');
                const row = document.createElement('tr');
                row.dataset.productId = item.id;
                
                row.innerHTML = `
                    <td class="ps-3">
                        <div class="product-name">
                            <div class="product-img">
                                <i class="fas fa-box"></i>
                            </div>
                            ${item.name}
                        </div>
                    </td>
                    <td>₱${item.price.toFixed(2)}</td>
                    <td>
                        <div class="input-group quantity-control">
                            <button class="btn btn-sm btn-outline-secondary quantity-btn minus" type="button">-</button>
                            <input type="number" class="form-control quantity-input" value="${item.quantity}" min="1">
                            <button class="btn btn-sm btn-outline-secondary quantity-btn plus" type="button">+</button>
                        </div>
                    </td>
                    <td class="text-end">₱${(item.price * item.quantity).toFixed(2)}</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-danger remove-item">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                `;
                
                const quantityInput = row.querySelector('.quantity-input');
                const minusBtn = row.querySelector('.minus');
                const plusBtn = row.querySelector('.plus');
                const removeBtn = row.querySelector('.remove-item');
                
                quantityInput.addEventListener('change', function() {
                    updateItemQuantity(item.id, parseInt(this.value));
                });
                
                minusBtn.addEventListener('click', function() {
                    if (item.quantity > 1) {
                        updateItemQuantity(item.id, item.quantity - 1);
                    }
                });
                
                plusBtn.addEventListener('click', function() {
                    updateItemQuantity(item.id, item.quantity + 1);
                });
                
                removeBtn.addEventListener('click', function() {
                    orderItems = orderItems.filter(i => i.id !== item.id);
                    row.remove();
                    updateOrderSummary();
                    if (orderItems.length === 0) {
                        document.getElementById('emptyOrderMessage').style.display = '';
                    }
                });
                
                tbody.appendChild(row);
            }

            function updateItemQuantity(productId, newQuantity) {
                const item = orderItems.find(i => i.id === productId);
                if (item) {
                    item.quantity = Math.max(1, newQuantity);
                    updateOrderItemRow(item);
                    updateOrderSummary();
                }
            }

            function updateOrderItemRow(item) {
                const row = document.querySelector(`tr[data-product-id="${item.id}"]`);
                if (row) {
                    row.querySelector('.quantity-input').value = item.quantity;
                    row.querySelector('td:nth-last-child(2)').textContent = 
                        `₱${(item.price * item.quantity).toFixed(2)}`;
                }
            }

            function updateOrderSummary() {
                const subtotal = orderItems.reduce((sum, item) => sum + (item.price * item.quantity), 0);
                const tax = subtotal * 0.12;
                const discountInput = document.getElementById('discountInput');
                const discountType = document.getElementById('discountType').value;
                const completeOrderBtn = document.getElementById('completeOrder');
                const selectedPayment = document.getElementById('paymentMethod').value;
                
                let discount = 0;
                if (discountType === 'amount') {
                    discount = parseFloat(discountInput.value) || 0;
                } else {
                    discount = subtotal * (parseFloat(discountInput.value) || 0) / 100;
                }
                
                const total = subtotal + tax - discount;
                
                document.getElementById('subtotalAmount').textContent = `₱${subtotal.toFixed(2)}`;
                document.getElementById('taxAmount').textContent = `₱${tax.toFixed(2)}`;
                document.getElementById('totalAmount').textContent = `₱${total.toFixed(2)}`;
                
                // Update change amount and validate payment
                if (selectedPayment === 'cash') {
                    const received = parseFloat(document.getElementById('amountReceived').value) || 0;
                    const change = received - total;
                    const changeAmount = document.getElementById('changeAmount');
                    
                    // Handle negative values and insufficient amount
                    if (received < 0) {
                        changeAmount.textContent = '₱0.00';
                        changeAmount.style.color = '#dc3545';
                        completeOrderBtn.disabled = true;
                        return;
                    }
                    
                    changeAmount.textContent = `₱${Math.abs(change).toFixed(2)}`;
                    changeAmount.style.color = change >= 0 ? 'var(--accent)' : '#dc3545';
                    completeOrderBtn.disabled = change < 0;
                    
                } else if (selectedPayment === 'gcash' || selectedPayment === 'maya') {
                    const ewalletAmount = parseFloat(document.getElementById('ewalletAmount').value) || 0;
                    
                    // Handle negative values and insufficient amount
                    if (ewalletAmount < 0) {
                        completeOrderBtn.disabled = true;
                        return;
                    }
                    
                    completeOrderBtn.disabled = ewalletAmount < total;
                }
            }

            // Clear order functionality
            document.getElementById('clearOrder').addEventListener('click', function() {
                orderItems = [];
                document.getElementById('orderItemsList').innerHTML = `
                    <tr id="emptyOrderMessage">
                        <td colspan="5" class="text-center py-5">
                            <div class="no-data-message">
                                <i class="fas fa-shopping-cart fa-3x mb-3" style="color: var(--accent);"></i>
                                <h6 class="fw-normal">No items in order</h6>
                                <p class="small mb-0" style="color: rgba(255, 255, 255, 0.6);">
                                    Scan a barcode or browse products to add items
                                </p>
                            </div>
                        </td>
                    </tr>
                `;
                updateOrderSummary();
            });

            // Payment method handling
            const paymentMethod = document.getElementById('paymentMethod');
            const cashPaymentDetails = document.getElementById('cashPaymentDetails');
            const ewalletPaymentDetails = document.getElementById('ewalletPaymentDetails');
            const amountReceived = document.getElementById('amountReceived');
            const ewalletAmount = document.getElementById('ewalletAmount');

            paymentMethod.addEventListener('change', function() {
                cashPaymentDetails.style.display = 'none';
                ewalletPaymentDetails.style.display = 'none';

                switch(this.value) {
                    case 'cash':
                        cashPaymentDetails.style.display = 'block';
                        break;
                    case 'gcash':
                    case 'maya':
                        ewalletPaymentDetails.style.display = 'block';
                        break;
                }
                updateOrderSummary(); // Update button state when payment method changes
            });

            // Calculate change when amount received is entered
            amountReceived.addEventListener('input', updateOrderSummary);
            ewalletAmount.addEventListener('input', updateOrderSummary);
            document.getElementById('discountInput').addEventListener('input', updateOrderSummary);
            document.getElementById('discountType').addEventListener('change', updateOrderSummary);

            // Complete order functionality
            document.getElementById('completeOrder').addEventListener('click', function() {
                if (orderItems.length === 0) {
                    alert('Please add items to the order first.');
                    return;
                }

                const customerName = document.getElementById('customerName').value;
                if (!customerName) {
                    alert('Please enter customer information.');
                    document.getElementById('customerName').focus();
                    return;
                }

                const selectedPayment = paymentMethod.value;
                const total = parseFloat(document.getElementById('totalAmount').textContent.replace('₱', ''));

                if (selectedPayment === 'cash') {
                    const received = parseFloat(amountReceived.value) || 0;
                    if (received < total) {
                        alert('Insufficient amount received.');
                        amountReceived.focus();
                        return;
                    }
                } else if (selectedPayment === 'gcash' || selectedPayment === 'maya') {
                    const ewalletRef = document.getElementById('ewalletReference').value;
                    const ewalletAmount = parseFloat(document.getElementById('ewalletAmount').value) || 0;
                    
                    if (!ewalletRef) {
                        alert('Please enter the reference number.');
                        document.getElementById('ewalletReference').focus();
                        return;
                    }
                    
                    if (ewalletAmount < total) {
                        alert('The amount paid is less than the total amount.');
                        document.getElementById('ewalletAmount').focus();
                        return;
                    }
                }

                // If all validations pass, complete the order
                alert(`Order completed for ${customerName}!`);
                
                // Reset the form
                orderItems = [];
                document.getElementById('orderItemsList').innerHTML = `
                    <tr id="emptyOrderMessage">
                        <td colspan="5" class="text-center py-5">
                            <div class="no-data-message">
                                <i class="fas fa-shopping-cart fa-3x mb-3" style="color: var(--accent);"></i>
                                <h6 class="fw-normal">No items in order</h6>
                                <p class="small mb-0" style="color: rgba(255, 255, 255, 0.6);">
                                    Scan a barcode or browse products to add items
                                </p>
                            </div>
                        </td>
                    </tr>
                `;
                document.getElementById('customerName').value = '';
                document.getElementById('customerPhone').value = '';
                document.getElementById('customerEmail').value = '';
                document.getElementById('orderNotes').value = '';
                document.getElementById('discountInput').value = '0';
                document.getElementById('amountReceived').value = '';
                document.getElementById('changeAmount').textContent = '₱0.00';
                document.getElementById('changeAmount').style.color = 'var(--accent)';
                document.getElementById('ewalletReference').value = '';
                document.getElementById('ewalletAmount').value = '';
                updateOrderSummary();
            });
        });
    </script>
    @endpush
</x-dashboard-layout> 