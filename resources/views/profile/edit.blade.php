<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Login </title>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Profile</title>
</head>

<body>
    <title>Authentification</title>
<link rel="stylesheet" href="{{ asset('assets/register.css') }}">
<div class="container">
    <div class="title">Modification</div>
    <div class="content">
        <form action="{{route('login.modifier',$passenger->passenger_id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" name="name" placeholder="Enter your name"  value="{{{old('name',$passenger->name )}}}">
                @error('name')
                    <p style="color:red">{{$message}}</p> 
                @enderror
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="username" placeholder="Enter your username"  value="{{old('username',$passenger->username)}}">
                @error('username')
                    <p style="color:red">{{$message}}</p> 
                @enderror
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" name="email" placeholder="Enter your email"  value="{{old('email',$passenger->email)}}">
                @error('email')
                    <p style="color:red">{{$message}}</p> 
                @enderror
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" name="mobile" placeholder="Enter your number"  value="{{old('email',$passenger->mobile)}}">
                @error('mobile')
                    <p style="color:red">{{ $message }}</p> 
                @enderror
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Enter your password" required >
                @error('password')
                    <p style="color:red">{{$message}}</p> 
                @enderror
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password"name="password_confirmation"  placeholder="Confirm your password"required >
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" name="address" placeholder="Enter your address"  value="{{{old('address',$passenger->address)}}}"> 
                @error('address')
                    <p style="color:red">{{$message}}</p> 
                @enderror
                </div>
            
            </div>
            <div class="button">
                <input type="submit" value="Modifier"> <br>
            </div>
        </form>
    </div>

</body>

</html>
