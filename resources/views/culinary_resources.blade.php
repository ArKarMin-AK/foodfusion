@extends('layout')
@section('title','Culinary Resources')
@section('content')
@if ($errors)
    @foreach ($errors as $error)
        <p class="alert alert-danger">{{$error}}</p>
    @endforeach
@endif

<style>
    .jumbotron{
        background-color: #ffaa00;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg %3E%3Cpath fill='%23ffb100' d='M486 705.8c-109.3-21.8-223.4-32.2-335.3-19.4C99.5 692.1 49 703 0 719.8V800h843.8c-115.9-33.2-230.8-68.1-347.6-92.2C492.8 707.1 489.4 706.5 486 705.8z'/%3E%3Cpath fill='%23ffb800' d='M1600 0H0v719.8c49-16.8 99.5-27.8 150.7-33.5c111.9-12.7 226-2.4 335.3 19.4c3.4 0.7 6.8 1.4 10.2 2c116.8 24 231.7 59 347.6 92.2H1600V0z'/%3E%3Cpath fill='%23ffbe00' d='M478.4 581c3.2 0.8 6.4 1.7 9.5 2.5c196.2 52.5 388.7 133.5 593.5 176.6c174.2 36.6 349.5 29.2 518.6-10.2V0H0v574.9c52.3-17.6 106.5-27.7 161.1-30.9C268.4 537.4 375.7 554.2 478.4 581z'/%3E%3Cpath fill='%23ffc500' d='M0 0v429.4c55.6-18.4 113.5-27.3 171.4-27.7c102.8-0.8 203.2 22.7 299.3 54.5c3 1 5.9 2 8.9 3c183.6 62 365.7 146.1 562.4 192.1c186.7 43.7 376.3 34.4 557.9-12.6V0H0z'/%3E%3Cpath fill='%23ffcc00' d='M181.8 259.4c98.2 6 191.9 35.2 281.3 72.1c2.8 1.1 5.5 2.3 8.3 3.4c171 71.6 342.7 158.5 531.3 207.7c198.8 51.8 403.4 40.8 597.3-14.8V0H0v283.2C59 263.6 120.6 255.7 181.8 259.4z'/%3E%3Cpath fill='%23ffd914' d='M1600 0H0v136.3c62.3-20.9 127.7-27.5 192.2-19.2c93.6 12.1 180.5 47.7 263.3 89.6c2.6 1.3 5.1 2.6 7.7 3.9c158.4 81.1 319.7 170.9 500.3 223.2c210.5 61 430.8 49 636.6-16.6V0z'/%3E%3Cpath fill='%23ffe529' d='M454.9 86.3C600.7 177 751.6 269.3 924.1 325c208.6 67.4 431.3 60.8 637.9-5.3c12.8-4.1 25.4-8.4 38.1-12.9V0H288.1c56 21.3 108.7 50.6 159.7 82C450.2 83.4 452.5 84.9 454.9 86.3z'/%3E%3Cpath fill='%23ffef3d' d='M1600 0H498c118.1 85.8 243.5 164.5 386.8 216.2c191.8 69.2 400 74.7 595 21.1c40.8-11.2 81.1-25.2 120.3-41.7V0z'/%3E%3Cpath fill='%23fff852' d='M1397.5 154.8c47.2-10.6 93.6-25.3 138.6-43.8c21.7-8.9 43-18.8 63.9-29.5V0H643.4c62.9 41.7 129.7 78.2 202.1 107.4C1020.4 178.1 1214.2 196.1 1397.5 154.8z'/%3E%3Cpath fill='%23ffff66' d='M1315.3 72.4c75.3-12.6 148.9-37.1 216.8-72.4h-723C966.8 71 1144.7 101 1315.3 72.4z'/%3E%3C/g%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
    }
</style>
    <!-- Hero Section -->
 <div class="jumbotron bg-primary text-white text-center py-5">
        <h1>Culinary Resources</h1>
        <p class="lead">Download Resources to learn about Culinary</p>
    </div>
<h2 class="mb-4 display-5 text-center mt-4 fst-italic fw-bold text-warning" style="font-family: serif">Click to Download Recipe Cards</h2>
<div class="container text-center mt-4 mb-5">
  <div class="row">
    <div class="col">
        <a href="{{route('download','vegetables_pirogue.png')}}" style="text-decoration:none;text-transform:none">
            <img class="shadow-lg m-2" src="{{asset('storage/images/Beige Cute Recipe Card.png')}}" alt="" style="width:100%;height:350px">
            <p class="text-center mt-2 mb-2 text-warning fs-4 fst-italic" style="font-family: serif" >Vegetable Pirogue Recipe card</p>
            <button type="button" class="btn btn-danger m-2" style="width:100%">Download <i class="fa-solid fa-download"></i></button>
        </a>
      

    </div>
    <div class="col">
    <a href="{{route('download','mini_apple_pie.png')}}" style="text-decoration:none;text-transform:none">
            <img class="shadow-lg m-2" src="{{asset('storage/images/White Beige Modern Recipe Card.png')}}" alt="" style="width:100%;height:350px">
            <p class="text-center mt-2 mb-2 text-warning fs-4 fst-italic" style="font-family: serif" >Mini Apple Pie Recipe Card</p>
            <button type="button" class="btn btn-danger m-2" style="width:100%">Download <i class="fa-solid fa-download"></i></button>
    </a>
    </div>
    <div class="col">
    <a href="{{route('download','special_hot_dog.png')}}" style="text-decoration:none;text-transform:none">
            <img class="shadow-lg m-2" src="{{asset('storage/images/Brown Abstract Recipe Card.png')}}" alt="" style="width:100%;height:350px">
            <p class="text-center mt-2 mb-2 text-warning fs-4 fst-italic" style="font-family: serif" >Special Hot Dog Recipe Card</p>
            <button type="button" class="btn btn-danger m-2" style="width:100%">Download <i class="fa-solid fa-download"></i></button>
    </a>
    </div>
  </div>
</div>
<h2 class="mb-4 display-5 text-center mt-4 fst-italic fw-bold text-warning" style="font-family: serif">Click to Download Cooking Tutorials' E-Books</h2>
<div class="container text-center mt-3 mb-5">
  <div class="row">
  <div class="col">
    <a href="{{route('download','cooking_for_kids.pdf')}}" style="text-decoration:none;text-transform:none">
            <img class="shadow-lg m-2" src="https://stepstoolchef.com/cdn/shop/files/What_s_Inside_3_720x.jpg?v=1732042329" alt="" style="width:100%;height:350px">
            <p class="text-center mt-2 mb-2 text-warning fs-4 fst-italic" style="font-family: serif" >Cooking for kids</p>
            <button type="button" class="btn btn-danger m-2" style="width:100%">Download <i class="fa-solid fa-download"></i></button>
    </a>
    </div>
    <div class="col">
    <a href="{{route('download','easy_chinese_recipes.pdf')}}" style="text-decoration:none;text-transform:none">
            <img class="shadow-lg m-2" src="https://i.pinimg.com/736x/97/d7/95/97d79588fab9bd7fce077758bbd03443.jpg" alt="" style="width:100%;height:350px">
            <p class="text-center mt-2 mb-2 text-warning fs-4 fst-italic" style="font-family: serif" >Easy Chinese Recipes</p>
            <button type="button" class="btn btn-danger m-2" style="width:100%">Download <i class="fa-solid fa-download"></i></button>
    </a>
    </div>
    <div class="col">
    <a href="{{route('download','high_protein_recipes.pdf')}}" style="text-decoration:none;text-transform:none">
            <img class="shadow-lg m-2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJk6_D05BoM74xn9PC-qeDn_dQgnSZbXr9wg&s" alt="" style="width:100%;height:350px">
            <p class="text-center mt-2 mb-2 text-warning fs-4 fst-italic" style="font-family: serif" >Fitness Cooking</p>
            <button type="button" class="btn btn-danger m-2" style="width:100%">Download <i class="fa-solid fa-download"></i></button>
    </a>
    </div>
  </div>
</div>

<section id="videos" class="container my-5">
<h2 class="mb-4 display-5 text-center mt-4 fst-italic fw-bold text-warning" style="font-family: serif">Click to Download Kitchen Hacks Video</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="ratio ratio-16x9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/dCGS067s0zo?si=s6pgJdTnvQ9ACkAt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <p class="text-center mt-2">Tips for cutting onions</p>
                <a href="{{route('download','cutting_onions.mp4')}}" class="btn btn-warning">Download</a>
            </div>
            <div class="col-md-6">
                <div class="ratio ratio-16x9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/G-Fg7l7G1zw?si=gybr6Q3kvat7r_8_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <p class="text-center mt-2">Basic Knife Skills</p>
                <a href="{{route('download','basic_knife_skill.mp4')}}" class="btn btn-warning">Download</a>
            </div>
        </div>
    </section>
    
@endsection