<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <style>
      .main-container {
        background: #111111 !important;
        position: relative;
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        overflow: hidden;
      }
      
      .form-container {
        max-width: 500px;
        width: 100%;
        margin: 0 auto;
      }
      
      .glass-form {
        background: rgba(26, 26, 26, 0.6);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(255, 228, 92, 0.2), 0 4px 24px rgba(0, 0, 0, 0.4), inset 0 2px 20px rgba(255, 228, 92, 0.05);
        border: 1px solid rgba(255, 228, 92, 0.2);
        padding: 2.5rem;
      }

      .welcome-title {
        color: #FFE45C;
        font-family: Oswald, sans-serif;
        font-size: 2.5rem;
        font-weight: 500;
        line-height: 1.2;
        text-shadow: 0 0 25px rgba(255, 228, 92, 0.5), 0 0 10px rgba(0, 0, 0, 0.8);
        margin-bottom: 2rem;
        text-align: center;
      }

      .welcome-subtitle {
        color: rgba(255, 255, 255, 0.95);
        font-family: 'Open Sans', sans-serif;
        font-size: 1rem;
        text-align: center;
        margin-bottom: 2rem;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.7);
      }

      .form-input-group {
        position: relative;
        margin-bottom: 1.5rem;
      }

      .form-input-icon {
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        color: #FFE45C;
        font-size: 1.2rem;
        z-index: 2;
      }

      .form-input {
        width: 100%;
        height: 50px;
        background-color: rgba(17, 17, 17, 0.7) !important;
        border: 1px solid rgba(255, 228, 92, 0.3) !important;
        color: #FFFFFF !important;
        border-radius: 8px !important;
        padding: 12px 12px 12px 48px !important;
        transition: all 0.3s ease;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
      }

      .form-input:focus {
        box-shadow: 0 0 0 4px rgba(255, 228, 92, 0.15) !important;
        border: 1px solid #FFE45C !important;
        outline: none;
      }

      .form-input::placeholder {
        color: rgba(255, 255, 255, 0.5) !important;
      }

      .login-btn {
        width: 100%;
        height: 50px;
        background-color: #FFE45C !important;
        color: #111111 !important;
        border: none !important;
        font-weight: 600 !important;
        border-radius: 8px !important;
        font-size: 1.1rem !important;
        transition: all 0.3s ease !important;
        margin-top: 1rem;
      }

      .login-btn:hover {
        background-color: #FFF200 !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(255, 228, 92, 0.3);
      }

      .form-check-input {
        width: 20px;
        height: 20px;
        background-color: rgba(17, 17, 17, 0.9) !important;
        border: 2px solid rgba(255, 228, 92, 0.5) !important;
        border-radius: 4px !important;
        margin-right: 10px;
        cursor: pointer;
      }

      .form-check-input:checked {
        background-color: #FFE45C !important;
        border-color: #FFE45C !important;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23111111' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e") !important;
        background-position: center;
        background-size: 75%;
        box-shadow: 0 0 10px rgba(255, 228, 92, 0.3);
      }

      .form-check-input:focus {
        box-shadow: 0 0 0 3px rgba(255, 228, 92, 0.2) !important;
        border-color: #FFE45C !important;
      }

      .form-check {
        display: flex;
        align-items: center;
      }

      .form-check-label {
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.95rem;
        cursor: pointer;
        user-select: none;
      }

      .forgot-link {
        color: #FFE45C !important;
        text-decoration: none !important;
        transition: all 0.3s ease;
        font-size: 0.95rem;
      }

      .forgot-link:hover {
        color: #FFF200 !important;
      }

      @media (max-width: 576px) {
        .form-container {
          max-width: 100%;
          padding: 0 15px;
        }
        
        .welcome-title {
          font-size: 2rem;
        }
      }

      /* Add floating particles for consistent design with welcome page */
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
        background: #FFE45C;
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

      @supports (backdrop-filter: blur(10px)) or (-webkit-backdrop-filter: blur(10px)) {
        .glass-form {
          background: rgba(17, 17, 17, 0.4);
        }
        .form-input {
          background-color: rgba(17, 17, 17, 0.4) !important;
        }
      }
    </style>
  </head>
  <body>
    <div class="main-container">
      <!-- Particles Background -->
      <div class="particles">
        @for ($i = 0; $i < 80; $i++)
          <div class="particle" style="left: {{ rand(0, 100) }}%; animation-delay: -{{ rand(0, 20) }}s; width: {{ rand(2, 4) }}px; height: {{ rand(2, 4) }}px;"></div>
        @endfor
      </div>
      
      <!-- Radial overlay -->
      <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle, transparent 20%, rgba(0,0,0,0.1) 100%); z-index: 2; opacity: 0.7;"></div>
      
      <div class="container d-flex align-items-center justify-content-center" style="position: relative; z-index: 10; min-height: 100vh;">
        <div class="form-container">
          <div class="glass-form">
            <h1 class="welcome-title">Welcome back!</h1>
            <p class="welcome-subtitle">Sign in to access your account</p>
            
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-input-group">
                <i class="fas fa-envelope form-input-icon"></i>
                <input type="email" class="form-input" id="email" name="email" placeholder="Email" required autofocus>
              </div>
              
              <div class="form-input-group">
                <i class="fas fa-lock form-input-icon"></i>
                <input type="password" class="form-input" id="password" name="password" placeholder="Password" required>
                <button type="button" class="btn position-absolute end-0 top-50 translate-middle-y bg-transparent border-0 pe-3" onclick="togglePasswordVisibility()">
                  <i class="fa-solid fa-eye" style="color: #FFE45C; font-size: 1.2rem;"></i>
                </button>
              </div>
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                  <label class="form-check-label" for="remember_me">
                    Keep me logged in
                  </label>
                </div>
                <a href="{{ route('password.request') }}" class="forgot-link">Forgot Password?</a>
              </div>
              
              <button type="submit" class="login-btn btn">
                Log in
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.querySelector('.fa-eye, .fa-eye-slash');
        
        if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
          toggleIcon.classList.remove('fa-eye');
          toggleIcon.classList.add('fa-eye-slash');
        } else {
          passwordInput.type = 'password';
          toggleIcon.classList.remove('fa-eye-slash');
          toggleIcon.classList.add('fa-eye');
        }
      }
    </script>
  </body>
</html>
