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

{{-- plugin facebook --}}
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v9.0" nonce="MxA4HWc1"></script>

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

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1>Original Group</h1>
    <h3>รับเหมาต่อเติมบ้าน</h3>
    <p>
      หากท่านกำลังมองหาช่างต่อเติมบ้านในราคาถูก เราขอแนะนำ ช่างมืออาชีพที่ผ่านงานก่อสร้างมาอย่างยาวนาน เรายินดี<br>
      รับเหมาต่อเติมบ้าน อาคาร ทั้งงานต่อเติมหลังคา กันสาด ต่อเติมห้องครัว งานปูพื้นปูกระเบื้อง งานฉาบ งานทาสี และอื่นๆอีกมากมาย ตามความต้องการของลูกค้า 
      โดยฝีมือของช่างมืออาชีพ รับประกันตามความพึงพอใจ
    </p>
  </div>
</div>

<!-- facebok plugin -->
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <img class="img-thumbnail border-top-0 border-left-0" width="100%" src="https://media1.tenor.com/images/58e035c7b998c64cf0b7dc22c623e3b3/tenor.gif?itemid=13429938" alt="Home Body">
    </div>
  
    <div class="col-md-4">
      <div class="fb-page" data-href="https://www.facebook.com/OriginalManage/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/OriginalManage/" class="fb-xfbml-parse-ignore">
          <a href="https://www.facebook.com/OriginalManage/">Original Group - รับเหมาต่อเติม รีโนเวทบ้าน</a>
        </blockquote>
      </div>
    </div>
  </div>
  <hr>
</div>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <img class="img-thumbnail border-top-0 border-left-0 " src="images/homeBody/Home01.png" alt="Home Body">
      <br><br>
      <h3>ต่อเติมหลังคากันสาด</h3>
      <p>รับต่อเติมหลังคากันสาดโดยวัสดุคุณภาพ มีให้เลือกหลายแบบตามความต้องการของลูกค้า หลังคาแบบธรรมดาหรือจะสไตล์โมเดิล สามารถเลือกวัสดุหลังคาได้ตามต้องการ ไม่ว่าจะเป็นไวนิล เมทัลชีท หรือแม้กระทั่งวัสดุแบบเก็บเสียง</p>
    </div>
    <div class="col-md-4">
      <img class="img-thumbnail border-top-0 border-left-0" src="images/homeBody/Home02.png" alt="Home Body">
      <br><br>
      <h3>งานก่อฉาบ</h3>
      <p>งานก่อฉาบไม่ว่าจะต่อเติมห้องครัว ก่อผนังกำแพง<br>บิ้วอินต่างๆ สามารถทำได้ตามความต้องการของลูกค้า งานตีฝ้าต่างๆ งานทาสี งานปูกระเบื้อง ครบจบในที่เดียว</p>
    </div>
    <div class="col-md-4">
      <img class="img-thumbnail border-top-0 border-left-0" src="images/homeBody/Home03.png" alt="Home Body">
      <br><br>
      <h3>งานระบบ</h3>
      <p>งานระบบก็สามารถทำได้ ทั้งเดินไฟ วางปลั๊กตามตำแหน่งต่างๆ รวมถึงงานประปา ทำรางน้ำ ออกแบบได้อย่างเป็นระบบ และถูกต้องตามกิจลักษณะ </p>
    </div>
  </div>

  <hr>

</div> <!-- /container -->

@include('fragment.footer')

</body>
</html>