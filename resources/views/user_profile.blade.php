@extends('layout')
@section('title','Manage Information')
@section('content')
<section class="vh-100">
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <img src="https://img.freepik.com/free-psd/contact-icon-illustration-isolated_23-2151903337.jpg?t=st=1735234808~exp=1735238408~hmac=b4f9faab43f41cf633763b5b1fbde7653ac8b8ca9f2ebef997b7975beaebf31d&w=740"
                class="rounded-circle img-fluid" style="width: 100px;" />
            </div>
            @foreach ($user as $u)

            
                <h4 class="mb-2">{{$u->First_Name}} {{$u->Last_Name}}</h4>
                <p class="text-muted mb-4">{{$u->email}}</p>
                <form action="{{route('edit',$u->id)}}" method="POST">
                    @csrf
                    <div>
                        <label for="">Edit First Name</label>
                        <input type="text" name="First_Name" value="{{$u->First_Name}}">
                        <p class="text-danger">{{$errors->first('First_Name')}}</p>
                    </div>
                    <div>
                        <label for="">Edit Last Name</label>
                        <input type="text" name="Last_Name" value="{{$u->Last_Name}}">
                        <p class="text-danger">{{$errors->first('Last_Name')}}</p>
                    </div>
                    <div>
                        <label for="">Edit Password</label>
                        <input type="password" name="password">
                        <p class="text-danger">{{$errors->first('password')}}</p>
                    </div>
                    <div>
                    
                        <button type="submit" class="text-center rounded-pill bg-danger text-white">Edit Profile</button>
  
                    </div>
                </form>
            @endforeach
            
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection
