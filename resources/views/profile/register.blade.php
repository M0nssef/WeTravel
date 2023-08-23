<title>Authentification</title>
<link rel="stylesheet" href="{{ asset('assets/register.css') }}">
<div class="container">
    <div class="title">Registration</div>
    <div class="content">
        <form action="{{route('store')}}" method="POST">
            @csrf
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" name="name" placeholder="Enter your name" required {{old('name')}}>
                @error('name')
                    <p style="color:red">{{$message}}</p> 
                @enderror
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="username" placeholder="Enter your username" required {{old('username')}}>
                @error('username')
                    <p style="color:red">{{$message}}</p> 
                @enderror
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" name="email" placeholder="Enter your email" required value="{{old('email')}}">
                @error('email')
                    <p style="color:red">{{$message}}</p> 
                @enderror
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" name="mobile" placeholder="Enter your number" required>
                @error('mobile')
                    <p style="color:red">{{ $message }}</p> 
                @enderror
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Enter your password" required>
                @error('password')
                    <p style="color:red">{{$message}}</p> 
                @enderror
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password"name="password_confirmation"  placeholder="Confirm your password" required>
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" name="address" placeholder="Enter your address" required {{old('address')}}> 
                @error('address')
                    <p style="color:red">{{$message}}</p> 
                @enderror
                </div>
            
            </div>
            <div class="button">
                <input type="submit" value="Register"> <br>
                <a href="{{route('login.login')}}">Alreagy Have an account ?</a>
            </div>
        </form>
    </div>
