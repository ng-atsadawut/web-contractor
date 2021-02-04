
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ URL::asset('images/spring-001.jpg') }}" alt="" title="" style="width:13.2rem;height:6.rem">
    </div>
    <div class="carousel-item">
      <img src="{{ URL::asset('images/spring-002.jpg') }}" alt="" title="" style="width:13.2rem;height:6.rem">
    </div>
    <div class="carousel-item">
      <img src="{{ URL::asset('images/spring-003.jpg') }}" alt="" title="" style="width:13.2rem;height:6.rem">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>