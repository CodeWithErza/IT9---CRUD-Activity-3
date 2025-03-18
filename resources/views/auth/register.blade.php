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
      /* Override the animated background with the specific gradient */
      .main-container {
        background: linear-gradient(117deg, #26547C 32.6%, #F40000 100.62%) !important;
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
      
      /* Removed the static background gradient to use the animated one from index.css */
      .glass-card {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        animation: pulse 4s infinite ease-in-out;
      }
      .custom-input {
        height: 50px;
        background-color: #6cbeed !important;
        border: 1px solid #ffffff !important;
        border-radius: 10px !important;
        color: #ffffff !important;
      }
      .custom-input::placeholder {
        color: #ffffff;
        opacity: 0.75;
      }
      .custom-btn {
        background-color: #ff9d25;
        border: 1px solid #ffffff;
        color: #000000;
      }
      .social-btn {
        background-color: #ffffff;
        border-radius: 10px;
        height: 62px;
      }
      
      @media (max-width: 576px) {
        .form-container {
          max-width: 100%;
          padding: 0 15px;
        }
      }
    </style>
  </head>
  <body>
    <div class="main-container">
      <!-- Radial overlay for consistent look with login page -->
      <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle, transparent 20%, rgba(0,0,0,0.1) 100%); z-index: 2; opacity: 0.7;"></div>
      
      <div class="container d-flex align-items-center justify-content-center" style="position: relative; z-index: 10; min-height: 100vh;">
        <div class="form-container">
          <div class="glass-card p-md-5 p-4">
            <!-- Form Column (centered) -->
            <h1 class="text-white fw-normal mb-3 text-center" style="font-family: Oswald, sans-serif; font-size: 2.5rem; text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">Create an account</h1>
            
            <div class="mb-4 text-center">
              <span class="text-white" style="font-family: 'Open Sans', sans-serif; font-size: 0.9rem;">Already have an account?</span>
              <a href="{{ route('login') }}" class="ms-1" style="color: #0495b0; font-family: 'Open Sans', sans-serif; font-size: 0.9rem; text-decoration: underline;">Log in</a>
            </div>
            
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <!-- First and Last Name Row -->
              <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                  <input type="text" class="form-control custom-input" name="name" placeholder="First Name" required>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control custom-input" name="last_name" placeholder="Last Name" required>
                </div>
              </div>
              
              <!-- Email Field -->
              <div class="mb-3">
                <input type="email" class="form-control custom-input" name="email" placeholder="Email" required>
              </div>
              
              <!-- Password Field -->
              <div class="mb-3 position-relative">
                <input type="password" class="form-control custom-input" id="password" name="password" placeholder="Password" required>
                <button type="button" class="btn position-absolute end-0 top-50 translate-middle-y bg-transparent border-0" onclick="togglePasswordVisibility()">
                  <i class="fa-solid fa-eye text-white opacity-75"></i>
                </button>
              </div>
              
              <!-- Terms and Conditions -->
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="terms" name="terms" required style="width: 20px; height: 20px; background-color: transparent; border: 2px solid #ffffff;">
                  <label class="form-check-label text-white" for="terms" style="font-family: 'Open Sans', sans-serif;">
                    I agree to the <a href="#" style="color: #009fb7; text-decoration: underline;">Terms and Conditions</a>
                  </label>
                </div>
              </div>
              
              <!-- Create Account Button -->
              <button type="submit" class="btn custom-btn w-100 py-2 mb-4 fw-bold" style="font-family: Roboto, sans-serif; font-size: 1.2rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.25);">
                Create Account
              </button>
              
              <!-- Or Register With -->
              <div class="text-center mb-3">
                <div class="d-flex align-items-center justify-content-center">
                  <hr class="flex-grow-1 border-white opacity-25">
                  <span class="px-3 text-white" style="font-family: Roboto, sans-serif;">Or register with</span>
                  <hr class="flex-grow-1 border-white opacity-25">
                </div>
              </div>
              
              <!-- Social Login Buttons -->
              <div class="row g-3">
                <div class="col-md-6 mb-3 mb-md-0">
                  <a href="#" class="btn social-btn d-flex align-items-center justify-content-center w-100">
                    <img src="https://static.codia.ai/image/2025-03-18/77cf9b98-24af-47b7-ad59-2aab97bb0447.svg" alt="Google" height="24" class="me-2">
                    <span style="color: #000000; font-family: Roboto, sans-serif; font-size: 1.25rem;">Google</span>
                  </a>
                </div>
                <div class="col-md-6">
                  <a href="#" class="btn social-btn d-flex align-items-center justify-content-center w-100">
                    <img src="https://static.codia.ai/image/2025-03-18/b33a819e-c60e-4257-a018-0634083757bb.svg" alt="Apple" height="28" class="me-2">
                    <span style="color: #000000; font-family: Roboto, sans-serif; font-size: 1.25rem;">Apple</span>
                  </a>
                </div>
              </div>
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
