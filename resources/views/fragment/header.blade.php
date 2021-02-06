
<Style>
  .carousel-inner{
  width:100%;
  max-height: 250px;
}
</Style>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" >
    <div class="carousel-item active" width="96">
      <img class="d-block w-100"src="{{ URL::asset('images/building/building-001.jpg') }}" alt="First slide">
    </div>
    <div class="carousel-item" width="96">
      <img class="d-block w-100" src="{{ URL::asset('images/building/building-002.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item" width="96">
      <img class="d-block w-100" src="{{ URL::asset('images/building/building-003.jpg') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>