<nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Original Group</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarsExample02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{url('/home')}}"> หน้าแรก <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link active" href="{{url('/about')}}"> เกี่ยวกับ </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{url('/service')}}"> บริการ </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{url('/portfolio')}}"> ผลงาน </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{url('/contact')}}"> ติดต่อ </a>
        </li>
        
      </ul>
    </div>
  </nav>