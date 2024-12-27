@extends('layout')
@section('title','FoodFusion Community')

@section('content')
    
    <div  class="d-flex justify-content-center mt-3">
     <a href="{{route('creation')}}" class=""><button type="button" class="btn btn-primary bg-danger border-white fw-bold rounded-pill" style="height:50px" data-mdb-ripple-init>Create Your Own Recipe</button></a>
    </div>
    <!--User Recipes-->
    @foreach ($user_recipes as $user_recipe)
    <div class="row gx-5 m-3 border border-opacity-50 border-3 pt-3 rounded">
  <div class="col-md-6 mb-4">
    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
      <img src="{{$user_recipe->image_path}}" class="img-fluid" style="height:300px; width:100%" />
    </div>
  </div>

  <div class="col-md-6 mb-4" style="">
    @if ($user_recipe->user_email == Auth::user()->email)
    <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3 text-warning">created by you</span>
    @endif
    <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3 text-warning">{{$user_recipe->user_email}}</span>
    <h4><strong>{{$user_recipe->recipe_name}}</strong></h4>
    <p class="text-muted">
      {{$user_recipe->description}}
    </p>
    <a href="{{route('user_recipe',$user_recipe->id)}}"><button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger text-white">Read more</button></a>
    @if ($user_recipe->user_email == Auth::user()->email)
    <form action="{{ route('delete', $user_recipe->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger mt-3">Delete<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></button>
</form>
    @endif
  </div>
  
</div>
    @endforeach     

   



@endsection

