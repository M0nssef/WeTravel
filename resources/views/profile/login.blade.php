<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('assets/login.css') }}">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flights</title>
</head>

<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="assets/images/hero-banner.jpg" alt="">
                <div class="text">
                    <span class="text-1">Every new friend is a <br> new adventure</span>
                    <span class="text-2">Let's get connected</span>
                </div>
            </div>
            <div class="back">
                <div class="text">
                    <span class="text-1">Complete miles of journey <br> with one step</span>
                    <span class="text-2">Let's get started</span>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <form action="{{route('login.login')}}" method="POST">
                        @csrf
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="text" name="email" placeholder="Email" required><br>
                            </div>
                            @error('email')
                                <p style="color: red" class="invalid-feedback" role="alert">{{$message}}</p>
                            @enderror
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password" placeholder="Password" required>
                            </div>
                        
                            @error('password')
                            <p style="color: red" class="invalid-feedback" role="alert">{{$message}}</p>
                        @enderror
                            {{-- <div class="text"><a href="#">Forgot password?</a></div> --}}
                            <div class="button input-box">
                                <input type="submit" value="Sumbit">
                            </div>
                            <div class="text sign-up-text">Don't have an account? <a href="{{route('create')}}">Sigup
                                    now</a></div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>
