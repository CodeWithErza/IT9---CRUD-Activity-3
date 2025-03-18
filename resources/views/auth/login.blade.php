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
        max-width: 450px;
        width: 100%;
        margin: 0 auto;
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
      <!-- Radial overlay -->
      <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle, transparent 20%, rgba(0,0,0,0.1) 100%); z-index: 2; opacity: 0.7;"></div>
      
      <div class="container d-flex align-items-center justify-content-center" style="position: relative; z-index: 10; min-height: 100vh;">
        <div class="form-container">
          <div style="position: relative; background: rgba(255, 255, 255, 0.05); border-radius: 16px; box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 2.5rem; animation: pulse 4s infinite ease-in-out;">
            <h1 class="welcome-back mb-3 text-center" style="color: #ffffff; font-family: Oswald, sans-serif; font-size: 2.75rem; font-weight: 400; line-height: 1.2; text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);">Welcome back!</h1>
            
            <div class="mb-4 d-flex justify-content-center">
              <span style="color: #ffffff; font-family: 'Open Sans', sans-serif; font-size: 0.9rem; font-weight: 400; margin-right: 0.5rem;">Don't have an account yet?</span>
              <a href="{{ route('register') }}" style="color: #009fb7; font-family: 'Open Sans', sans-serif; font-size: 0.9rem; font-weight: 400; text-decoration: underline; transition: all 0.3s ease;">Sign up</a>
            </div>
            
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="mb-4 position-relative">
                <input type="text" class="form-control" id="username" name="email" placeholder="Username" required autofocus style="height: 50px; background-color: #6cbeed; border: 1px solid #ffffff; border-radius: 10px; color: #ffffff; font-family: Roboto, sans-serif; font-size: 1rem; padding: 0.375rem 1rem; transition: all 0.3s ease;">
              </div>
              
              <div class="mb-4 position-relative">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required style="height: 50px; background-color: #6cbeed; border: 1px solid #ffffff; border-radius: 10px; color: #ffffff; font-family: Roboto, sans-serif; font-size: 1rem; padding: 0.375rem 1rem; transition: all 0.3s ease;">
                <button type="button" class="btn" onclick="togglePasswordVisibility()" style="position: absolute; right: 5px; top: 50%; transform: translateY(-50%); background-color: transparent; border: none; z-index: 5; transition: all 0.3s ease;">
                  <i class="fa-solid fa-eye" style="color: #ffffff; font-size: 1.25rem; opacity: 0.8;"></i>
                </button>
              </div>
              
              <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember_me" name="remember" style="width: 20px; height: 20px; background-color: transparent; border: 2px solid #ffffff; border-radius: 4px; margin-right: 10px; transition: all 0.3s ease;">
                  <label class="form-check-label" for="remember_me" style="color: #ffffff; font-family: 'Open Sans', sans-serif; font-size: 0.95rem; font-weight: 400;">
                    Keep me logged in
                  </label>
                </div>
                <a href="{{ route('password.request') }}" style="color: #0b87a5; font-family: 'Open Sans', sans-serif; font-size: 0.95rem; font-weight: 400; text-decoration: underline; transition: all 0.3s ease;">Forgot Password</a>
              </div>
              
              <button type="submit" class="btn w-100" style="height: 50px; background-color: #ff9d25; border: 1px solid #ffffff; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.25); transition: all 0.3s ease; overflow: hidden; position: relative;">
                <span style="color: #000000; font-family: Roboto, sans-serif; font-size: 1.2rem; font-weight: 400;">Log in</span>
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
