<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-logo">
        <img src="{{ asset('images/logo.png') }}" alt="GearUp Logo" style="width: 120px; height: auto;">
    </div>
    
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                <i class="bi bi-grid-1x2-fill" style="color: var(--accent);"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('orders*') ? 'active' : '' }}" href="{{ route('orders') }}">
                <i class="fa-solid fa-cart-shopping" style="color: var(--accent);"></i>
                <span>Orders</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('inventory*') ? 'active' : '' }}" href="{{ route('inventory') }}">
                <i class="fa-solid fa-warehouse" style="color: var(--accent);"></i>
                <span>Inventory</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('reports*') ? 'active' : '' }}" href="#">
                <i class="fa-solid fa-chart-line" style="color: var(--accent);"></i>
                <span>Reports</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('settings*') ? 'active' : '' }}" href="#">
                <i class="fa-solid fa-gear" style="color: var(--accent);"></i>
                <span>Settings</span>
            </a>
        </li>
    </ul>
</div> 