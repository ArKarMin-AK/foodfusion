@extends('layout')
@section('title','Recipe Post')
@section('content')
<div class="container">
    <form action="{{route('create_recipe')}}" method="POST" enctype="multipart/form-data" class="m-4">
        @csrf
        @if ($errors)
            @foreach ($errors as $error)
                <p class="text-danger">{{$error}}</p>
            @endforeach
        @endif
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        
        @endif
        <input type="hidden" name="user_email" value="{{Auth::user()->email}}">
    <div class="mb-3">
        <label for="Recipe_name" class="form-label">Recipe Name</label>
        <input type="text" name="recipe_name" class="form-control" id="Recipe_name" placeholder="Enter recipe_name">
        <p class="text-danger">{{$errors->first('recipe_name')}}</p>
    </div>
    <div class="mb-3">
        <label for="imgFile" class="form-label">Choose Image File</label>
        <input class="form-control" name="image_path" type="file" id="imgFile">
        <p class="text-danger">{{$errors->first('image_path')}}</p>
    </div>
    <div class="mb-3">
        <label for="desc" class="form-label">Description</label>
        <input type="text" name="description" class="form-control" id="desc" placeholder="Enter Description">
        <p class="text-danger">{{$errors->first('description')}}</p>
    </div>
    <div class="mb-3">
        <label for="ingre" class="form-label">Recipe's Ingredients</label>
        <textarea class="form-control" name="ingredient" id="ingre" rows="3"></textarea>
        <p class="text-danger">{{$errors->first('ingredient')}}</p>
    </div>
    <div class="mb-3" style="200px">
        <label for="cookinst" class="form-label">Cooking Instruction</label>
        <textarea class="form-control" name="cooking_instruction" id="cookinst" rows="3"></textarea>
        <p class="text-danger">{{$errors->first('cooking_instruction')}}</p>
    </div>
    <button type="submit" class="btn btn-warning">Submit</button>
    </form>

</div>
@endsection
