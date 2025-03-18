<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-logo">
        <img src="{{ asset('images/logo.png') }}" alt="GearUp Logo" style="width: 120px; height: auto;">
    </div>
    
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('orders*') ? 'active' : '' }}" href="#">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Orders</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('inventory*') ? 'active' : '' }}" href="#">
                <i class="fa-solid fa-warehouse"></i>
                <span>Inventory</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('reports*') ? 'active' : '' }}" href="#">
                <i class="fa-solid fa-chart-line"></i>
                <span>Reports</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('settings*') ? 'active' : '' }}" href="#">
                <i class="fa-solid fa-gear"></i>
                <span>Settings</span>
            </a>
        </li>
    </ul>
    
    <div class="user-section">
        <div class="user-avatar">
            <i class="bi bi-person-circle" style="font-size: 3rem; color: white;"></i>
        </div>
        <div class="user-name">{{ Auth::user()->name }}</div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn">
                <i class="bi bi-box-arrow-right"></i> Log out
            </button>
        </form>
    </div>
</div> 