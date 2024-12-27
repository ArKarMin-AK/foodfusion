@extends('layout')
@section('title','FoodFusion Home')
@section('content')
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
        <h1>Welcome to FoodFusion</h1>
        <p class="lead">Create Your Own Recipe and Join Our Community Now</p>
        <a href="{{route('creation')}}" class=""><button type="button" class="btn btn-primary bg-danger border-white fw-bold rounded-pill" style="height:50px" data-mdb-ripple-init>Create Your Own Recipe</button></a>
    </div>
    <!-- Featured Recipe -->
    <div class="featured-recipe mt-3 mb-5">
        <h1 class="fs-1 text-center text-warning mb-2" style="">Featured Recipes</h1>
        <p class="text-warning text-center mt-2">Our featured Recipes are fast and easy to make by anyone.</p>
        <hr class="text-warning align-middle border-2" style="width:65%;margin-left:15%;margin-right:10%">
    </div>
    <div class="container text-center">
  <div class="row">
    <a class="col" style="text-transform:none; text-decoration:none" href="{{route('feature','Egg Fried Rice')}}">
      <img src="https://christieathome.com/wp-content/uploads/2022/06/Egg-Fried-Rice-3.jpg" style="width:300px;height:300px" alt="fried rice image">
      <p class="text-warning mt-2">Egg Fried Rice</p>
    </a>
    <a style="text-transform:none; text-decoration:none" href="{{route('feature','Omurice (Japanese Omelet Rice)')}}" class="col">
      <img src="https://takestwoeggs.com/wp-content/uploads/2023/02/Omurice-Japanese-Rice-Omelete-Takestwoeggs-5-sq.jpg" style="width:300px;height:300px" alt="Omurice (Japanese Rice Omelet)">
      <p class="text-warning mt-2">Omurice (Japanese Omelet Rice)</p>
    </a>
    <a style="text-transform:none; text-decoration:none" href="{{route('feature','French Toast')}}" class="col">
      <img src="https://www.seriouseats.com/thmb/haULEn7EZKSPwwLNIf6VFjkNmTA=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/perfect-quick-easy-french-toast-hero-03-2a9485bbb12b4cf5abcfef53aa9accd9.jpg" style="width:300px;height:300px" alt="">
      <p class="text-warning mt-2">French Toast</p>
  </a>
  </div>
</div>
    <!-- Culinary Trends -->
    <div class="featured-recipe mt-3 mb-5">
        <h1 class="fs-1 text-center text-warning mb-2" style="">Culinary Trends</h1>
        <p class="text-warning text-center mt-2">These are the Culinary Treands nowadays</p>
        <hr class="text-warning align-middle border-2" style="width:65%;margin-left:15%;margin-right:10%">
    </div>
    <!-- Plant Based Culinary -->
    <div class="card mb-3 me-3 ms-5 border-white mb-5">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="https://media.licdn.com/dms/image/v2/D4D12AQEinqBwFkhtew/article-cover_image-shrink_720_1280/article-cover_image-shrink_720_1280/0/1686718871469?e=2147483647&v=beta&t=02e1QbX4Z3r_FBGyZ2jDjJmnqRfKtJAYo-lbHT5Rhy4" class="img-fluid rounded-start" style="max-width:350px;height:340px" alt="Plant Base Revolution Culinary">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title text-warning fs-2">Plant Based Culinary</h5>
            <p class="card-text text-warning fs-5">In Recent Years, there has been a noticable surge in the popularity of plant-based culinary. </p>
              <p class="card-text text-warning fs-5">Plant based culinary focus foods which is derived from plants like vegetables and fruits. One of the most noticable benefits of this culinary is its beneficial impact on environment. </p>
             <p class="card-text text-warning fs-5">Plant-based cuisine is beneficial for health and wellness.Even chef and home cooks are innovating classic dishes and create new flavour using only plant-based ingredients. Plant-based culinary have a wide variety of flavours, textures, and cooking techinques from around the world.</p>  
             <p class="card-text text-warning fs-5">The rise of plant-based represents a holistic approach to food that celebrates taste, heath and sustainability.</p>
             <p class="card-text text-warning fs-5"></p>
          </div>
        </div>
      </div>
    </div>
    <!-- AI-assisted cooking -->
    <div class="card mb-3 ms-5 border-white mb-5" style="max-width: 1500px;">
      <div class="row g-0">
        <div class="col-md-4 p-2">
          <img src="https://www.bizzbuzz.news/h-upload/2023/11/18/1815392-ai.webp" class="img-fluid rounded-start" style="max-width:350px;height:340px" alt="AI-Assisted Cooking">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title text-warning fs-2">AI-Assisted Cooking</h5>
            <p class="card-text text-warning fs-5">As the technology, our lives become more and more easy. Sometimes, cooking can be exhasuted and tiring. . </p>
            <p class="card-text text-warning fs-5">And then, after cooking for so many hours, the results may be good or bad. If you are new to cooking, this can be really devastating for your motivation for cooking. Without worries, AI can help you to make cooking easy for you</p>
            <p class="card-text text-warning fs-5">There have already been machines that can really cook well with only AI. Unlike human, AI is relatively fast and more precise. This culinary can advance our cooking society into next level.</p>
          </div>
        </div>
      </div>
    </div>
</div>
      <!-- Upcoming Highlighting Event -->
      <div class="featured-recipe mt-3 mb-5">
        <h1 class="fs-1 text-center text-warning mb-2" style="">Upcoming Culinary Events</h1>
        <hr class="text-warning align-middle border-2" style="width:65%;margin-left:15%;margin-right:10%">
    </div>
    <div class="carousel-container m-4">
      <div id="carouselExampleCaptions" class="carousel slide m-3">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="https://worldchefs.org/event/european-grand-prix-2025-global-chefs-challenge-asia-regional-semi-finals-2025/">
            <img style="height: 400px" src="https://worldchefs.org/wp-content/uploads/Africa_semifinals_Page_3-1536x960.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="fs-2">WorldChefs Global Challenge</h5>
              <p>25-25 September, 2025</p>
            </div>
            </a>
          </div>
          <div class="carousel-item">
            <a href="https://worldchefs.org/event/gelato-europe-cup-2025/">
            <img style="height: 400px" src="https://worldchefs.org/wp-content/uploads/New-Endorsed-Competition-Template-3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="fs-2">Gelato Europe Cup 2025</h5>
              <p> January 18, 2025 to January 22, 2025</p>
            </div>
            </a>
            
          </div>
          <div class="carousel-item">
            <a href="https://worldchefs.org/event/join-worldchefs-village-at-the-acf-national-convention-2025-global-chefs-challenge-americas-semi-finals/">
            <img style="height: 400px" src="https://worldchefs.org/wp-content/uploads/Screenshot-2024-11-14-at-12.40.54%E2%80%AFPM-png.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="fs-2">Worldchefs Village</h5>
              <p> July 28, 2025 to July 29, 2025</p>
            </div>
            </a>     
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bg-dark border border-rounded" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon bg-dark border border-rounded" aria-hidden="true"></span>
          <span class="visually-hidden">Next</spa>
        </button>
      </div>
    </div>
  </div>
  <!-- example -->

@endsection
