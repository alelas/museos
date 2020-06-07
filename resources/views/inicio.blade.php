@extends("layouts.sitio")

@section("contenedor")
    
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <!--<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>-->
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active"><br/><br/>
        <img src="{{ asset('img/foto1.jpg')}}" class="img-fluid" alt="Responsive image" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!--<h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>-->
      </div>
    </div>
    <div class="carousel-item"><br/><br/>
      <img src="{{ asset('img/foto2.jpg')}}"class="img-fluid" alt="Responsive image" alt="...">
      <div class="carousel-caption d-none d-md-block">
         <!--<h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
      </div>
    </div>
    <!--<div class="carousel-item">
      <img src="{{ asset('img/foto3.jpg')}}" class="img-fluid" alt="Responsive image" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>-->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
    <div class="row">    
        <div class="col-md-12 text-center m-5">
            <h3>Bienes Culturales</h3><br/>
              <img src="{{ asset('img/mus/100.jpg') }}" alt="..." class="img-thumbnail" style="width:200px;height:200px;">
    ​          <img src="{{ asset('img/mus/1000.jpg') }}" alt="..." class="img-thumbnail" style="width:200px;height:200px;">
              <img src="{{ asset('img/mus/2000.jpg') }}" alt="..." class="img-thumbnail" style="width:200px;height:200px;">
    ​          <img src="{{ asset('img/mus/3000.jpg') }}" alt="..." class="img-thumbnail" style="width:200px;height:200px;">
              <img src="{{ asset('img/mus/4000.jpg') }}" alt="..." class="img-thumbnail" style="width:200px;height:200px;">

              <br/><br/>
              <img src="{{ asset('img/mus/5000.jpg') }}" alt="..." class="img-thumbnail" style="width:200px;height:200px;">
    ​          <img src="{{ asset('img/mus/6000.jpg') }}" alt="..." class="img-thumbnail" style="width:200px;height:200px;">
              <img src="{{ asset('img/mus/7000.jpg') }}" alt="..." class="img-thumbnail" style="width:200px;height:200px;">
    ​          <img src="{{ asset('img/mus/8000.jpg') }}" alt="..." class="img-thumbnail" style="width:200px;height:200px;">
              <img src="{{ asset('img/mus/9000.jpg') }}" alt="..." class="img-thumbnail" style="width:200px;height:200px;">
        </div>
    </div>
</div>
<p></p>
<p></p>
@endsection