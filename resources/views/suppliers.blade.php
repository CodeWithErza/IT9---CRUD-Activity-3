<x-dashboard-layout :title="'Supplier Management'" :icon="'fa-solid fa-truck'">
    <div class="container-fluid">
        <!-- Action Buttons -->
        <div class="row mb-4">
            <div class="col-md-6">
                <button type="button" class="btn btn-accent" data-bs-toggle="modal" data-bs-target="#addSupplierModal">
                    <i class="fas fa-plus"></i> Add New Supplier
                </button>
            </div>
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control search-input" placeholder="Search suppliers...">
                    <button class="btn btn-outline-secondary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Suppliers Table -->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Suppliers Directory</h5>
                        <div>
                            <select class="form-select form-select-sm sort-select">
                                <option value="name_asc">Name (A-Z)</option>
                                <option value="name_desc">Name (Z-A)</option>
                                <option value="recent">Most Recent</option>
                                <option value="products">Most Products</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle data-table">
                                <thead>
                                    <tr>
                                        <th scope="col">Supplier</th>
                                        <th scope="col">Contact Person</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Products</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                                    <i class="fas fa-building text-primary"></i>
                                                </div>
                                                <div>
                                                    <strong>ABC Auto Parts</strong>
                                                    <div class="small text-muted">Since Jun 2020</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>John Smith</td>
                                        <td>+63 912 345 6789</td>
                                        <td>johnsmith@abcautoparts.com</td>
                                        <td>42</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-sm btn-outline-secondary" title="View Details" data-bs-toggle="modal" data-bs-target="#viewSupplierModal">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-primary" title="Edit Supplier" data-bs-toggle="modal" data-bs-target="#editSupplierModal">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger" title="Delete Supplier">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                                    <i class="fas fa-truck text-success"></i>
                                                </div>
                                                <div>
                                                    <strong>XYZ Distributors</strong>
                                                    <div class="small text-muted">Since Mar 2021</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Maria Garcia</td>
                                        <td>+63 923 456 7890</td>
                                        <td>maria@xyzdistributors.com</td>
                                        <td>29</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-sm btn-outline-secondary" title="View Details" data-bs-toggle="modal" data-bs-target="#viewSupplierModal">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-primary" title="Edit Supplier" data-bs-toggle="modal" data-bs-target="#editSupplierModal">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger" title="Delete Supplier">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                                    <i class="fas fa-cogs text-info"></i>
                                                </div>
                                                <div>
                                                    <strong>Genuine Parts Co.</strong>
                                                    <div class="small text-muted">Since Nov 2019</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>David Lee</td>
                                        <td>+63 934 567 8901</td>
                                        <td>david@genuineparts.com</td>
                                        <td>64</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-sm btn-outline-secondary" title="View Details" data-bs-toggle="modal" data-bs-target="#viewSupplierModal">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-primary" title="Edit Supplier" data-bs-toggle="modal" data-bs-target="#editSupplierModal">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger" title="Delete Supplier">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                                    <i class="fas fa-car text-warning"></i>
                                                </div>
                                                <div>
                                                    <strong>JDM Imports</strong>
                                                    <div class="small text-muted">Since Feb 2022</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Hiroshi Tanaka</td>
                                        <td>+63 945 678 9012</td>
                                        <td>hiroshi@jdmimports.com</td>
                                        <td>18</td>
                                        <td><span class="badge bg-warning text-dark">On Hold</span></td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-sm btn-outline-secondary" title="View Details" data-bs-toggle="modal" data-bs-target="#viewSupplierModal">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-primary" title="Edit Supplier" data-bs-toggle="modal" data-bs-target="#editSupplierModal">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger" title="Delete Supplier">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                                    <i class="fas fa-oil-can text-danger"></i>
                                                </div>
                                                <div>
                                                    <strong>PetroLube Supplies</strong>
                                                    <div class="small text-muted">Since May 2020</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Sarah Johnson</td>
                                        <td>+63 956 789 0123</td>
                                        <td>sarah@petrolube.com</td>
                                        <td>15</td>
                                        <td><span class="badge bg-secondary">Inactive</span></td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-sm btn-outline-secondary" title="View Details" data-bs-toggle="modal" data-bs-target="#viewSupplierModal">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-primary" title="Edit Supplier" data-bs-toggle="modal" data-bs-target="#editSupplierModal">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger" title="Delete Supplier">
                                                    <i class="fas fa-trash"></i>
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
                            <span>Showing 5 of 12 suppliers</span>
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
    </div>

    <!-- Add Supplier Modal -->
    <div class="modal fade" id="addSupplierModal" tabindex="-1" aria-labelledby="addSupplierModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSupplierModalLabel">Add New Supplier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addSupplierForm">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="supplierName" class="form-label">Supplier Name</label>
                                <input type="text" class="form-control" id="supplierName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="supplierCode" class="form-label">Supplier Code</label>
                                <input type="text" class="form-control" id="supplierCode" placeholder="Auto-generated if left blank">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="contactPerson" class="form-label">Contact Person</label>
                                <input type="text" class="form-control" id="contactPerson" required>
                            </div>
                            <div class="col-md-6">
                                <label for="position" class="form-label">Position</label>
                                <input type="text" class="form-control" id="position">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" rows="3" required></textarea>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="paymentTerms" class="form-label">Payment Terms</label>
                                <select class="form-select" id="paymentTerms">
                                    <option value="cod">Cash on Delivery</option>
                                    <option value="15days">15 Days</option>
                                    <option value="30days">30 Days</option>
                                    <option value="60days">60 Days</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status">
                                    <option value="active" selected>Active</option>
                                    <option value="on_hold">On Hold</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="notes" class="form-label">Notes</label>
                            <textarea class="form-control" id="notes" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-accent" id="saveSupplierBtn">Save Supplier</button>
                </div>
            </div>
        </div>
    </div>

    <!-- View Supplier Modal -->
    <div class="modal fade" id="viewSupplierModal" tabindex="-1" aria-labelledby="viewSupplierModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewSupplierModalLabel">Supplier Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>ABC Auto Parts</h4>
                            <p class="text-muted">Supplier of quality automotive parts since 2020</p>
                            
                            <h6 class="mt-4 mb-3">Contact Information</h6>
                            <div class="row mb-2">
                                <div class="col-md-4 text-muted">Contact Person:</div>
                                <div class="col-md-8">John Smith (General Manager)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4 text-muted">Phone:</div>
                                <div class="col-md-8">+63 912 345 6789</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4 text-muted">Email:</div>
                                <div class="col-md-8">johnsmith@abcautoparts.com</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4 text-muted">Address:</div>
                                <div class="col-md-8">123 Main Street, Makati City, Metro Manila, Philippines</div>
                            </div>
                            
                            <h6 class="mt-4 mb-3">Business Information</h6>
                            <div class="row mb-2">
                                <div class="col-md-4 text-muted">Supplier Code:</div>
                                <div class="col-md-8">SUP-001</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4 text-muted">Payment Terms:</div>
                                <div class="col-md-8">30 Days</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4 text-muted">Status:</div>
                                <div class="col-md-8"><span class="badge bg-success">Active</span></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4 text-muted">Notes:</div>
                                <div class="col-md-8">Reliable supplier for engine components and filters. Offers bulk discounts.</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h6 class="card-title">Supply Statistics</h6>
                                    <div class="mb-3">
                                        <label class="small text-muted d-block">Total Products Supplied</label>
                                        <span class="fs-5 fw-bold">42</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="small text-muted d-block">Last Supply Date</label>
                                        <span>June 18, 2023</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="small text-muted d-block">Average Lead Time</label>
                                        <span>3.5 days</span>
                                    </div>
                                    <div>
                                        <label class="small text-muted d-block">Total Orders</label>
                                        <span>24</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Top Products</h6>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">Premium Engine Oil</li>
                                        <li class="list-group-item px-0">Air Filters</li>
                                        <li class="list-group-item px-0">Brake Pads</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#editSupplierModal">
                        <i class="fas fa-edit"></i> Edit
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Supplier Modal (Same fields as Add Supplier Modal but pre-filled) -->
    <div class="modal fade" id="editSupplierModal" tabindex="-1" aria-labelledby="editSupplierModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSupplierModalLabel">Edit Supplier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form fields would be the same as Add Supplier Modal but pre-filled -->
                    <form id="editSupplierForm">
                        <!-- Same structure as add form but with pre-filled values -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-accent" id="updateSupplierBtn">Update Supplier</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize supplier management functionality
            
            // Save supplier button
            document.getElementById('saveSupplierBtn').addEventListener('click', function() {
                const form = document.getElementById('addSupplierForm');
                
                // Basic form validation
                if (!form.checkValidity()) {
                    form.reportValidity();
                    return;
                }
                
                // In a real application, collect form data and submit to server
                alert('Supplier added successfully!');
                
                // Close modal and reset form
                const modal = bootstrap.Modal.getInstance(document.getElementById('addSupplierModal'));
                modal.hide();
                form.reset();
            });
            
            // Implement supplier search functionality
            document.querySelector('.search-input').addEventListener('input', function() {
                // In a real application, filter the suppliers table based on search input
                console.log('Searching for:', this.value);
            });
            
            // Setup delete confirmation
            document.querySelectorAll('.btn-outline-danger').forEach(button => {
                button.addEventListener('click', function() {
                    if (confirm('Are you sure you want to delete this supplier? This action cannot be undone.')) {
                        // In a real application, send delete request to server
                        alert('Supplier deleted successfully!');
                    }
                });
            });
        });
    </script>
</x-dashboard-layout> 