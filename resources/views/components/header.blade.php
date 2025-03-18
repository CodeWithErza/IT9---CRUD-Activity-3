<!-- Header -->
<div class="header mb-4">
    <h1 class="page-title">
        <i class="{{ $icon ?? 'fa-solid fa-gauge-high' }} me-2"></i>
        {{ $title ?? 'Parts Shop Dashboard' }}
    </h1>
    
    <div class="user-info">
        <div class="date-time">
            <span id="current-date"></span>
            <span class="mx-2">|</span>
            <span id="current-time"></span>
        </div>
        
        <div class="employee-profile">
            <div class="employee-avatar">
                <i class="bi bi-person-circle" style="font-size: 1.5rem; color: #333;"></i>
            </div>
            <span>{{ Auth::user()->name }}</span>
        </div>
    </div>
</div> 