@extends('layouts.dashboard')

@section('aaa')
{{$global}}
{{$multi}}{{$multi1}}
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css'><link rel="stylesheet" href="demo/style.css">


<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="row">
    <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid rounded">
    </a>
    <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="https://unsplash.it/600.jpg?image=252" class="img-fluid rounded">
    </a>
    <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="https://unsplash.it/600.jpg?image=253" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="https://unsplash.it/600.jpg?image=254" class="img-fluid rounded">
    </a>
    <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="https://unsplash.it/600.jpg?image=255" class="img-fluid rounded">
    </a>
    <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="https://unsplash.it/600.jpg?image=256" class="img-fluid rounded">
    </a>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js'></script><script  src="demo/script.js"></script>

</body>

@endsection
