<!DOCTYPE html>
<html lang="en">
<head>

<title>Original Group</title>

@include('fragment.header')

<style>
  /* carousel style */
  .carousel-inner{
    width: 100%;
    max-height: 500px !important;
  }

  .carousel-caption{
    position: absolute;
    top: 300px;
    left: 50%;
    height: 20%;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, 0.7);
    color: white;
    padding-left: 20px;
    padding-right: 20px;
  }

</style>

</head>
<body>
  
  <!--home page cover slide-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/homeCover/cover02.jpg" alt="First slide">
        <div class="carousel-caption  d-block">
          <div class="text-block">
          <h5>Photo 1</h5>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt earum aspernatur assumenda ipsum. Voluptatem totam aut quae quidem et accusantium ipsam magnam harum! Atque, mollitia!</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/homeCover/cover03.jpg" alt="Second slide">
        <div class="carousel-caption d-block">
          <h5>Photo 2</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit pariatur reiciendis nesciunt accusantium quasi impedit!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/homeCover/cover01.jpg" alt="Third slide">
        <div class="carousel-caption d-block">
          <h5>Photo 3</h5>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci soluta ullam rerum, beatae obcaecati dolorum reiciendis sed consectetur rem facilis.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

@include('fragment.nav')

<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5>Photo of me:</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <h3>More Text</h3>
    <p>Lorem ipsum dolor sit ame.</p>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div>
  </div>
  <div class="main">
    <h2>TITLE HEADING</h2>
    <h5>Title description, Dec 7, 2021</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Sep 2, 2021</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
  </div>
</div>

@include('fragment.footer')

</body>
</html>
