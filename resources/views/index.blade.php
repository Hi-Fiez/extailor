@extends('layouts.app')

@section('content')
<div>
  <center>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 910px; height: auto;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>            
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <center>
            <img class="first-slide" src="/img/carousel-1.jpg" alt="First slide" style="width: 910px; height: auto;">
          </center>            
        </div>
        <div class="item">
          <center>
            <img class="second-slide" src="/img/carousel-2.jpg" alt="Second slide" style="width: 910px; height: auto;">
          </center>          
        </div>
        <div class="item">
          <center>
            <img class="third-slide" src="/img/carousel-3.jpg" alt="Third slide" style="width: 910px; height: auto;">
          </center>  
        </div>
        <div class="item">
          <center>
            <img class="third-slide" src="/img/carousel-4.jpg" alt="Fourth slide" style="width: 910px; height: auto;">
          </center>  
        </div>
        <div class="item">
          <center>
            <img class="third-slide" src="/img/carousel-5.jpg" alt="Fifth slide" style="width: 910px; height: 512px;">
          </center>  
        </div>    
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div style="width: 910px;">
      <div class="jumbotron">
        <div class="jumbotron">
          <h1>Hello, world!</h1>
          <p>...</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
        <div style="background-color: white;" class="jumbotron">
          <h1>Hello, world!</h1>
          <p>...</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
        <div class="jumbotron">
          <h1>Hello, world!</h1>
          <p>...</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
        <div class="jumbotron" style="background-color: white;">
          <h1>Hello, world!</h1>
          <p>...</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
        <div class="jumbotron">
          <h1>Hello, world!</h1>
          <p>...</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
      </div>  
    </div>
  </center>
</div>
@endsection