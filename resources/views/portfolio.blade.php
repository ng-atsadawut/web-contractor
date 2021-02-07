<!DOCTYPE html>
<html lang="en">
<head>

<title>Original Group - portfolio</title>

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
  
@include('fragment.nav')


@include('fragment.footer')

</body>
</html>
