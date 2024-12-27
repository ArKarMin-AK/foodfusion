@extends('layout')
@section('title','Recipe')
<style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .recipe-image {
            border-radius: 15px;
            justify-content: center;
            overflow: hidden;
            height: 400px;
            width: 70%;
        }
        .section-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #343a40;
            margin-top: 20px;
        }
        .ingredients-list,
        .instructions-list {
            padding-left: 1.5rem;
        }
        .ingredients-list li,
        .instructions-list li {
            margin-bottom: 10px;
            color: #555;
        }
        .card {
            border: none;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
@section('content')
@foreach ($selection as $selected)
    <div class="container my-5">
        <!-- Recipe_Name -->
         <div class="text-warning text-center fs-1 mb-3">
            {{$selected->name}}
         </div>
    <!-- Recipe Image -->
    <div class="text-center mb-4">
        <img src="{{$selected->img}}" alt="Recipe Image" class="recipe-image">
    </div>
    

    <!-- Recipe Details -->
    <div class="card p-4">
        <!-- Ingredients Section -->
        <h2 class="section-title text-warning">Ingredients :</h2>
        <div class="ingredients-list text-danger">
            - {{$selected->ingredient}}
        </div>

        <!-- Cooking Instructions Section -->
        <h2 class="section-title text-warning">Cooking Instructions :</h2>
        <div class="instructions-list text-danger">
            - {{$selected->recipe_txt}}
        </div>
    </div>
</div>
@if ($errors)
    @foreach ($errors as $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@elseif(session()->has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
@endif
@if (auth()->check())
<form action="{{route('comment',$selected->id)}}" method="POST" class="card-footer py-3 border-0 m-5 p-3" style="background-color: #f8f9fa;">
@csrf            
<div class="d-flex flex-start w-100">
              <div data-mdb-input-init class="form-outline w-100">

                    <input type="hidden" name="recipe_id" value="{{$selected->id}}">
                
                <input type="hidden" name="user_email" value="{{Auth::user()->email}}">
              <label class="form-label" for="textAreaExample">Write your feedbacks about above Recipe</label>
                <textarea class="form-control" name="comment" id="message_area" rows="4"
                  style="background: #fff;" placeholder="Comment....."></textarea>
                
              </div>
             </div>
            <div class="float-end mt-2 pt-1">
              <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-sm">Post comment</button>
              <button  type="button" data-mdb-button-init data-mdb-ripple-init id="delete_btn" class="btn btn-outline-primary btn-sm">Cancel</button>
            </div>
    </form>
@endif

@endforeach
<script>
    let dbtn =document.getElementById('delete_btn');
    let ma =document.getElementById('message_area');
    dbtn.onclick =function(){
        ma.value = "";
    };
</script>
    
@endsection