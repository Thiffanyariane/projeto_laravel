<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}"> <!-- Seu arquivo CSS personalizado -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/login.js') }}"></script> <!-- Seu arquivo JS personalizado -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<div class="container login-container">
<div class="card">
    <div class="card-body">

    <div class="title-login">
        <h2 >Login</h2>
      <!-- Pills navs -->
    </div>
    
    <!-- Pills content -->
    <div class="tab-content">
    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
      <form>
        
        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="loginName">Email</label>
          <input type="email" id="loginName" class="form-control" />
        </div>
    
        <!-- Password input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="loginPassword">Password</label>
          <input type="password" id="loginPassword" class="form-control" />
        </div>
    
        <!-- 2 column grid layout -->
        <div class="row mb-4">
            <!-- Simple link -->
            <a href="#!">Esqueceu a senha?</a>
        </div>
    
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
    
        <!-- Register buttons -->
      </form>
    </div>
      
    </div>
    <!-- Pills content -->
    </div>
</div>
</div>

</body>
</html>
