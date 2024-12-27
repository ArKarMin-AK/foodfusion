<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Food Fusion')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        /* Blur Background Effect */
        .blur-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(8px);
            z-index: 999;
        }
        html,body{
            height: 100%;
        }
        body{
            display: flex;
            flex-direction: column;
            background-color: #ffffff;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 900'%3E%3Cdefs%3E%3ClinearGradient id='a' x1='0' x2='0' y1='1' y2='0' gradientTransform='rotate(93,0.5,0.5)'%3E%3Cstop offset='0' stop-color='%230FF'/%3E%3Cstop offset='1' stop-color='%23CF6'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' x1='0' x2='0' y1='0' y2='1' gradientTransform='rotate(228,0.5,0.5)'%3E%3Cstop offset='0' stop-color='%23F00'/%3E%3Cstop offset='1' stop-color='%23FC0'/%3E%3C/linearGradient%3E%3C/defs%3E%3Cg fill='%23FFF' fill-opacity='0' stroke-miterlimit='10'%3E%3Cg stroke='url(%23a)' stroke-width='11.549999999999999'%3E%3Cpath transform='translate(-11.9 -1.1999999999999997) rotate(-1.7999999999999998 1409 581) scale(0.982916)' d='M1409 581 1450.35 511 1490 581z'/%3E%3Ccircle stroke-width='3.8500000000000005' transform='translate(-21.5 11) rotate(-0.19999999999999996 800 450) scale(0.998994)' cx='500' cy='100' r='40'/%3E%3Cpath transform='translate(-1.3000000000000003 -1.5) rotate(-5.5 401 736) scale(0.998994)' d='M400.86 735.5h-83.73c0-23.12 18.74-41.87 41.87-41.87S400.86 712.38 400.86 735.5z'/%3E%3C/g%3E%3Cg stroke='url(%23b)' stroke-width='3.5'%3E%3Cpath transform='translate(66 2.6) rotate(-0.65 150 345) scale(1.002972)' d='M149.8 345.2 118.4 389.8 149.8 434.4 181.2 389.8z'/%3E%3Crect stroke-width='7.700000000000001' transform='translate(-5.5 -31) rotate(-10.799999999999999 1089 759)' x='1039' y='709' width='100' height='100'/%3E%3Cpath transform='translate(-26.8 5.2) rotate(-1.8000000000000003 1400 132) scale(0.965)' d='M1426.8 132.4 1405.7 168.8 1363.7 168.8 1342.7 132.4 1363.7 96 1405.7 96z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
        }
        /* Center the Popup */
        .popup-form {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            max-width: 90%; /* Adjust for mobile responsiveness */
            width: 400px; /* Desktop width */
            background: #fff;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Disable body scrolling when popup is open */
        body.modal-open {
            overflow: hidden;
        }
        body{
           
        }
        
    </style>
    
</head>
<body>
    @include('cookie-consent::index')
@if (!auth()->check())

<div class="blur-bg" id="blur-bg"></div>

<div class="popup-form" id="join-popup">
    <h2 class="text-center">Join Us</h2>
    <p class="text-center">Sign up to gain access to our page and community</p>
    <form action="{{route('login_post')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
            <p>{{$errors->first('email')}}</p>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Create a password">
            <p>{{$errors->first('password')}}</p>
        </div>
        <button type="submit" id="loginbtn" class="btn btn-primary bg-warning border-dark m-3">LOGIN</button>
        <a href="{{route('password.request')}}">Forgot password?</a>
        <div class="mb-3 form-check text-black">
            Don't have an account? <a href="{{route('registration')}}">Register Here</a>
        </div>
    </form>
</div>
    
    @endif
    @include('include.header')
    @yield('content')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
@include('include.footer')

</html>

