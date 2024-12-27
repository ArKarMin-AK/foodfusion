<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
    body{
       font-family: serif;
        background-color: #ffaa00;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg %3E%3Cpath fill='%23ffb100' d='M486 705.8c-109.3-21.8-223.4-32.2-335.3-19.4C99.5 692.1 49 703 0 719.8V800h843.8c-115.9-33.2-230.8-68.1-347.6-92.2C492.8 707.1 489.4 706.5 486 705.8z'/%3E%3Cpath fill='%23ffb800' d='M1600 0H0v719.8c49-16.8 99.5-27.8 150.7-33.5c111.9-12.7 226-2.4 335.3 19.4c3.4 0.7 6.8 1.4 10.2 2c116.8 24 231.7 59 347.6 92.2H1600V0z'/%3E%3Cpath fill='%23ffbe00' d='M478.4 581c3.2 0.8 6.4 1.7 9.5 2.5c196.2 52.5 388.7 133.5 593.5 176.6c174.2 36.6 349.5 29.2 518.6-10.2V0H0v574.9c52.3-17.6 106.5-27.7 161.1-30.9C268.4 537.4 375.7 554.2 478.4 581z'/%3E%3Cpath fill='%23ffc500' d='M0 0v429.4c55.6-18.4 113.5-27.3 171.4-27.7c102.8-0.8 203.2 22.7 299.3 54.5c3 1 5.9 2 8.9 3c183.6 62 365.7 146.1 562.4 192.1c186.7 43.7 376.3 34.4 557.9-12.6V0H0z'/%3E%3Cpath fill='%23ffcc00' d='M181.8 259.4c98.2 6 191.9 35.2 281.3 72.1c2.8 1.1 5.5 2.3 8.3 3.4c171 71.6 342.7 158.5 531.3 207.7c198.8 51.8 403.4 40.8 597.3-14.8V0H0v283.2C59 263.6 120.6 255.7 181.8 259.4z'/%3E%3Cpath fill='%23ffd914' d='M1600 0H0v136.3c62.3-20.9 127.7-27.5 192.2-19.2c93.6 12.1 180.5 47.7 263.3 89.6c2.6 1.3 5.1 2.6 7.7 3.9c158.4 81.1 319.7 170.9 500.3 223.2c210.5 61 430.8 49 636.6-16.6V0z'/%3E%3Cpath fill='%23ffe529' d='M454.9 86.3C600.7 177 751.6 269.3 924.1 325c208.6 67.4 431.3 60.8 637.9-5.3c12.8-4.1 25.4-8.4 38.1-12.9V0H288.1c56 21.3 108.7 50.6 159.7 82C450.2 83.4 452.5 84.9 454.9 86.3z'/%3E%3Cpath fill='%23ffef3d' d='M1600 0H498c118.1 85.8 243.5 164.5 386.8 216.2c191.8 69.2 400 74.7 595 21.1c40.8-11.2 81.1-25.2 120.3-41.7V0z'/%3E%3Cpath fill='%23fff852' d='M1397.5 154.8c47.2-10.6 93.6-25.3 138.6-43.8c21.7-8.9 43-18.8 63.9-29.5V0H643.4c62.9 41.7 129.7 78.2 202.1 107.4C1020.4 178.1 1214.2 196.1 1397.5 154.8z'/%3E%3Cpath fill='%23ffff66' d='M1315.3 72.4c75.3-12.6 148.9-37.1 216.8-72.4h-723C966.8 71 1144.7 101 1315.3 72.4z'/%3E%3C/g%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
    }
    .register-form{
        background-color: #ffff99;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1000 1000'%3E%3Cg fill='%23ffd573'%3E%3Cpolygon points='1000 -50 0 -50 500 450'/%3E%3Cpolygon points='550 500 1050 1000 1050 0'/%3E%3Cpolygon points='-50 0 -50 1000 450 500'/%3E%3Cpolygon points='0 1050 1000 1050 500 550'/%3E%3C/g%3E%3Cg fill='%23ffaa4d'%3E%3Cpolygon points='1000 -133.3 0 -133.3 500 366.7'/%3E%3Cpolygon points='633.3 500 1133.3 1000 1133.3 0'/%3E%3Cpolygon points='-133.3 0 -133.3 1000 366.7 500'/%3E%3Cpolygon points='0 1133.3 1000 1133.3 500 633.3'/%3E%3C/g%3E%3Cg fill='%23ff8026'%3E%3Cpolygon points='1000 -216.7 0 -216.7 500 283.3'/%3E%3Cpolygon points='716.7 500 1216.7 1000 1216.7 0'/%3E%3Cpolygon points='-216.7 0 -216.7 1000 283.3 500'/%3E%3Cpolygon points='0 1216.7 1000 1216.7 500 716.7'/%3E%3C/g%3E%3Cg fill='%23F50'%3E%3Cpolygon points='1000 -300 0 -300 500 200'/%3E%3Cpolygon points='800 500 1300 1000 1300 0'/%3E%3Cpolygon points='-300 0 -300 1000 200 500'/%3E%3Cpolygon points='0 1300 1000 1300 500 800'/%3E%3C/g%3E%3Cg fill-opacity='0.43'%3E%3Cpolygon fill='%23FE0' points='0 707.1 0 292.9 292.9 0 707.1 0 1000 292.9 1000 707.1 707.1 1000 292.9 1000'/%3E%3Cg fill='%23ffc800'%3E%3Cpolygon points='464.6 -242.5 -242.5 464.6 464.6 464.6'/%3E%3Cpolygon points='535.4 464.6 1242.5 464.6 535.4 -242.5'/%3E%3Cpolygon points='-242.5 535.4 464.6 1242.5 464.6 535.4'/%3E%3Cpolygon points='535.4 1242.5 1242.5 535.4 535.4 535.4'/%3E%3C/g%3E%3Cg fill='%23ffa200'%3E%3Cpolygon points='405.7 -301.4 -301.4 405.7 405.7 405.7'/%3E%3Cpolygon points='594.3 405.7 1301.4 405.7 594.3 -301.4'/%3E%3Cpolygon points='-301.4 594.3 405.7 1301.4 405.7 594.3'/%3E%3Cpolygon points='594.3 1301.4 1301.4 594.3 594.3 594.3'/%3E%3C/g%3E%3Cg fill='%23ff7b00'%3E%3Cpolygon points='346.8 -360.3 -360.3 346.8 346.8 346.8'/%3E%3Cpolygon points='653.2 346.8 1360.3 346.8 653.2 -360.3'/%3E%3Cpolygon points='-360.3 653.2 346.8 1360.3 346.8 653.2'/%3E%3Cpolygon points='653.2 1360.3 1360.3 653.2 653.2 653.2'/%3E%3C/g%3E%3Cg fill='%23F50'%3E%3Cpolygon points='287.9 -419.2 -419.2 287.9 287.9 287.9'/%3E%3Cpolygon points='712.1 287.9 1419.2 287.9 712.1 -419.2'/%3E%3Cpolygon points='-419.2 712.1 287.9 1419.2 287.9 712.1'/%3E%3Cpolygon points='712.1 1419.2 1419.2 712.1 712.1 712.1'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
    }
</style>
</head>
<body>
    <form class="register-form ms-auto bg-secondary-subtle me-auto p-3 m-3 border border-3 rounded-3"  action="{{route('password.update')}}" method="POST" style="width: 500px">
        @csrf
        <!-- Heading -->
        <div class="text-center fs-1 text-white">Reset your Password</div>
        <input type="hidden" name="token" value="{{$token}}">
        <!-- Email Input -->
        <div class="mb-3">
            <label for="UserEmail" class="form-label text-white">Email</label>
            <input type="email" class="form-control" name="email" value="" id="UserEmail" aria-describedby="emailHelp" placeholder="Enter your email">        
            <p class="error text-danger">{{$errors->first('email')}}</p>
        </div>
        <!-- Password Input -->
        <div class="mb-3">
            <label for="UserRPassword" class="form-label text-white">Password</label>
            <input type="password" class="form-control" name="password" id="UserRPassword">
            <p class="error text-danger">{{$errors->first('password')}}</p>
        </div>
        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="confirmRpassword" class="form-label text-white">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="confirmRpassword">
            <p class="error text-danger">{{$errors->first('password_confirmation')}}</p>
        </div>
        <!-- Show Password -->
        <div class="mb-3 form-check">
            <input type="checkbox"  class="form-check-input " id="showRP">
            <label class="form-check-label text-white" for="showRP">Show Password</label>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary bg-warning border-dark">Submit</button>
        
    </form>
    <!-- Show Password with Checkbox -->
    <script>
    let password = document.getElementById('UserRPassword');
    let con_password =document.getElementById('confirmRpassword');
    let checkbox =document.getElementById('showRP');
    checkbox.addEventListener('change', () => {
        if(checkbox.checked){
            password.type = 'text';
            con_password.type ='text';
        }
        else{
            password.type = 'password';
            con_password.type ='password';
        }
    });
    </script>
</body>
</html>
    <




