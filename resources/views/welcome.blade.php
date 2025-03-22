    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600&display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;600;700&display=swap" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

            <style>
            :root {
                --primary-color: #111111;
                --accent-color: #FFE45C;
                --highlight-color: #FFE45C;
                --text-color: #FFFFFF;
                --gradient-start: #111111;
                --gradient-end: #1A1A1A;
            }
            
            body {
                margin: 0;
                padding: 0;
                background: var(--primary-color);
                font-family: 'Barlow', sans-serif;
                color: var(--text-color);
                overflow-x: hidden;
            }
            
            .hero-section {
                position: relative;
                min-height: 100vh;
                display: flex;
                align-items: center;
                padding: 2rem;
                overflow: hidden;
                background: var(--primary-color);
            }
            
            .hero-content {
                position: relative;
                z-index: 2;
                max-width: 1200px;
                margin: 0 auto;
                padding: 3rem;
                background: rgba(26, 26, 26, 0.6);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                border-radius: 20px;
                border: 1px solid rgba(255, 228, 92, 0.2);
                box-shadow: 0 8px 32px rgba(255, 228, 92, 0.2), 0 4px 24px rgba(0, 0, 0, 0.4), inset 0 2px 20px rgba(255, 228, 92, 0.05);
            }
            
            .hero-title {
                font-size: 4.5rem;
                font-weight: 700;
                margin-bottom: 2rem;
                opacity: 0;
                transform: translateY(30px);
                animation: fadeInUp 0.8s ease forwards;
                text-shadow: 0 0 25px rgba(255, 228, 92, 0.5), 0 0 10px rgba(0, 0, 0, 0.8);
                color: var(--text-color);
                font-family: 'Rajdhani', sans-serif;
                letter-spacing: 1px;
                line-height: 1.1;
                text-align: center;
            }
            
            .hero-title .brand-name {
                font-size: 6rem;
                font-weight: 800;
                display: block;
                margin: 0.3rem 0 0.6rem;
                letter-spacing: 3px;
                animation: glow 3s infinite;
                position: relative;
                z-index: 1;
            }
            
            .hero-title .highlighted {
                color: var(--highlight-color);
                position: relative;
                display: inline-block;
            }
            
            .hero-title .sub-title {
                font-size: 2.8rem;
                letter-spacing: 1.5px;
                display: block;
                color: var(--highlight-color);
                font-weight: 600;
                text-shadow: 0 0 20px rgba(255, 228, 92, 0.6), 0 0 40px rgba(255, 228, 92, 0.3);
                margin-top: 0.2rem;
            }
            
            .hero-subtitle {
                font-size: 1.5rem;
                margin-bottom: 2rem;
                opacity: 0;
                transform: translateY(30px);
                animation: fadeInUp 0.8s ease forwards 0.2s;
                color: rgba(255, 255, 255, 0.95);
                font-family: 'Barlow', sans-serif;
                font-weight: 500;
                text-shadow: 0 2px 10px rgba(0, 0, 0, 0.7);
            }
            
            .hero-buttons {
                opacity: 0;
                transform: translateY(30px);
                animation: fadeInUp 0.8s ease forwards 0.4s;
            }
            
            .hero-btn {
                padding: 1rem 2rem;
                font-size: 1.1rem;
                border-radius: 8px;
                text-decoration: none;
                transition: all 0.3s ease;
                margin-right: 1rem;
                position: relative;
                box-shadow: 0 4px 15px rgba(255, 228, 92, 0.2);
                font-weight: 600;
            }
            
            .hero-btn.primary {
                background: var(--accent-color);
                color: var(--primary-color);
                border: none;
            }
            
            .hero-btn.secondary {
                background: transparent;
                color: var(--text-color);
                border: 2px solid var(--accent-color);
            }
            
            .hero-btn:hover {
                transform: translateY(-2px);
                box-shadow: 0 8px 25px rgba(255, 228, 92, 0.3);
            }
            
            .hero-btn.primary:hover {
                background: #FFF200;
                color: var(--primary-color);
            }
            
            .hero-btn.secondary:hover {
                background: var(--accent-color);
                color: var(--primary-color);
            }
            
            .hero-btn i {
                transition: transform 0.3s ease;
            }
            
            .hero-btn:hover i {
                transform: translateX(3px);
            }
            
            .floating-gears {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                pointer-events: none;
            }
            
            .gear {
                position: absolute;
                opacity: 0.1;
                animation: rotate 20s linear infinite;
                filter: drop-shadow(0 0 10px rgba(255, 228, 92, 0.3));
                color: var(--accent-color);
            }
            
            .gear:nth-child(1) { top: 10%; left: 10%; font-size: 4rem; animation-duration: 30s; }
            .gear:nth-child(2) { top: 20%; right: 20%; font-size: 6rem; animation-duration: 25s; }
            .gear:nth-child(3) { bottom: 15%; left: 15%; font-size: 5rem; animation-duration: 35s; }
            .gear:nth-child(4) { bottom: 25%; right: 10%; font-size: 3rem; animation-duration: 40s; }
            
            @keyframes rotate {
                from { transform: rotate(0deg); }
                to { transform: rotate(360deg); }
            }
            
            @keyframes fadeInUp {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            .nav-links {
                position: absolute;
                top: 2rem;
                right: 2rem;
                z-index: 3;
                opacity: 0;
                animation: fadeIn 0.8s ease forwards 0.6s;
            }
            
            @keyframes fadeIn {
                to {
                    opacity: 1;
                }
            }
            
            @media (max-width: 768px) {
                .hero-title {
                    font-size: 3.5rem;
                }
                
                .hero-title .brand-name {
                    font-size: 4rem;
                }
                
                .hero-title .sub-title {
                    font-size: 2.5rem;
                }
                
                .hero-subtitle {
                    font-size: 1.2rem;
                }
                
                .hero-buttons {
                    display: flex;
                    flex-direction: column;
                    gap: 1rem;
                }
                
                .hero-btn {
                    margin-right: 0;
                    text-align: center;
                }
            }
            
            @media (max-width: 576px) {
                .hero-title {
                    font-size: 2.5rem;
                }
                
                .hero-title .brand-name {
                    font-size: 3rem;
                }
                
                .hero-title .sub-title {
                    font-size: 2rem;
                }
            }
            
            /* Particle effect */
            .particles {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                pointer-events: none;
                overflow: hidden;
            }
            
            .particle {
                position: absolute;
                width: 3px;
                height: 3px;
                background: var(--accent-color);
                border-radius: 50%;
                animation: float 20s linear infinite;
                opacity: 0.5;
                box-shadow: 0 0 10px 2px rgba(255, 228, 92, 0.3);
            }
            
            @keyframes float {
                0% {
                    transform: translateY(100vh) scale(0);
                    opacity: 0;
                }
                50% {
                    opacity: 0.7;
                }
                100% {
                    transform: translateY(-100px) scale(1);
                    opacity: 0;
                }
            }
            
            /* Add hover effect for title */
            .hero-title span {
                display: inline-block;
                transition: transform 0.3s ease;
                color: var(--accent-color);
                font-weight: 700;
            }
            
            .hero-title span:hover {
                transform: scale(1.05);
                text-shadow: 0 0 20px var(--accent-color);
            }

            /* Add neon effect to gears */
            .gear::after {
                content: '';
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 100%;
                height: 100%;
                background: radial-gradient(circle, rgba(255, 228, 92, 0.2) 0%, transparent 70%);
                filter: blur(5px);
                animation: pulse 2s infinite;
            }
            
            @keyframes pulse {
                0% { opacity: 0.5; }
                50% { opacity: 1; }
                100% { opacity: 0.5; }
            }

            /* Main title animations and effects */
            @keyframes glow {
                0% { text-shadow: 0 0 15px rgba(255, 228, 92, 0.6), 0 0 5px rgba(0, 0, 0, 0.8); }
                50% { text-shadow: 0 0 35px rgba(255, 228, 92, 0.9), 0 0 50px rgba(255, 228, 92, 0.5), 0 0 5px rgba(0, 0, 0, 0.8); }
                100% { text-shadow: 0 0 15px rgba(255, 228, 92, 0.6), 0 0 5px rgba(0, 0, 0, 0.8); }
            }

            /* Add glass morphism effect for better transparency appearance */
            @supports (backdrop-filter: blur(10px)) or (-webkit-backdrop-filter: blur(10px)) {
                .hero-content {
                    background: rgba(17, 17, 17, 0.4);
                }
            }
        </style>
    </head>
    <body>
        <div class="hero-section">
            <!-- Particles Background -->
            <div class="particles">
                @for ($i = 0; $i < 80; $i++)
                    <div class="particle" style="left: {{ rand(0, 100) }}%; animation-delay: -{{ rand(0, 20) }}s; width: {{ rand(2, 4) }}px; height: {{ rand(2, 4) }}px;"></div>
                @endfor
            </div>

            <!-- Floating Gears Background -->
            <div class="floating-gears">
                <i class="fas fa-cog gear"></i>
                <i class="fas fa-cog gear"></i>
                <i class="fas fa-cog gear"></i>
                <i class="fas fa-cog gear"></i>
                <i class="fas fa-wrench gear" style="top: 40%; left: 30%; font-size: 3rem; animation-duration: 45s;"></i>
                <i class="fas fa-tools gear" style="top: 60%; right: 25%; font-size: 3.5rem; animation-duration: 38s;"></i>
            </div>

            <!-- Navigation Links -->
            @if (Route::has('login'))
                <div class="nav-links">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="hero-btn secondary">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="hero-btn primary">
                            <i class="fas fa-sign-in-alt me-2"></i>Log in
                        </a>
                    @endauth
                </div>
            @endif
            
            <!-- Main Content -->
            <div class="hero-content">
                <h1 class="hero-title">
                    WELCOME TO
                    <span class="brand-name highlighted">GEARUP</span>
                    <span class="sub-title">MOTOR & VEHICLE PARTS SHOP</span>
                </h1>
                <p class="hero-subtitle">
                    Your one-stop destination for quality automotive parts and exceptional service.
                    <br>Experience the future of automotive maintenance with our cutting-edge platform.
                </p>
                <div class="hero-buttons">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="hero-btn primary">
                            <i class="fas fa-tachometer-alt me-2"></i>Go to Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="hero-btn primary">
                            <i class="fas fa-sign-in-alt me-2"></i>Get Started
                        </a>
                        <a href="#about" class="hero-btn secondary">
                            <i class="fas fa-info-circle me-2"></i>About Us
                        </a>
                    @endauth
                </div>
            </div>
        </div>

        <!-- Footer Component -->
        <x-footer />

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
