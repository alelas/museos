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

<!--<table class="table table-hover table-striped">
    <tr>
        <td>ID</td>
        <td>NOMBRE</td>
        <td>DESCRIPCIOn</td>
        <td>ACCIONES</td>
    </tr>
    @foreach($bienes as $cat)
    <tr>
        <td>{{ $cat->id }}</td>
        <td>{{ $cat->nombre }}</td>
        <td>{{ $cat->descripcion }}</td>
           </tr>
    @endforeach
</table>-->
<div class="container">
<br/>
   

    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Resultados de búsqueda para: {{ $busq }}</li>
  </ol>
</nav>
    <!--<h5 class="text-secondary">Su búsqueda tiene: {{ $c }} resultados</h5>-->
    {{ $bienes->withQueryString()->links() }}
        <div class="row">
                @foreach($bienes as $cat)
                <br/>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <img src="{{ asset('img/mus/'.$cat->foto) }}" class="card-img-top" alt="Imagen" >
                            
                                <div class="card-body">
                                    <h6 class="card-title" class="text-info" ><b class="text-body">Nombre: </b>{{ $cat->nombre }}</h6>
                                    <p class="card-text"><b class="text-body">Objet ID: </b>{{ $cat->id }}<br/>
                                    {{ $cat->descrip }}</p>
                                    <div align="justify"  type="button" class="btn btn-info" data-toggle="popover" data-placement="left" 
                                    title="{{ $cat->nombre }}" 
                                                            data-content="
                                                            <b>Colección: </b>{{ $cat->coleccion }}<br/>
                                                            <b> Tipo Objeto: </b>{{ $cat->tipobjeto }}<br/>
                                                            <b> Grupo Productor: </b>{{ $cat->productor }}<br/>
                                                            <b> Cronologia: </b>{{ $cat->cronologia }}<br/>
                                                            <b> Comunidad: </b>{{ $cat->comunidad}}<br/>
                                                            <b> Procedencia: </b>{{ $cat->procedencia }}<br/>
                                                            <b>Estado: </b>{{ $cat->estado }}<br/>
                                                            <b>Ubicación: </b>{{ $cat->ubicacion }}<br/>">
                                                            
                                                            Ver más
                                      </div>             
                                     
                                                                      <!-- Button trigger modal 
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                                Ver más
                                                </button>

                                                Modal
                                                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">{{ $cat->nombre }}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" align="justify">
                                                    {{ $cat->descripcion }}<br/>
                                                    <b>Colección: </b>{{ $cat->coleccion }}<br/>
                                                    <b>Estado: </b>{{ $cat->estado }}<br/>
                                                    <b> Ubicación: </b>{{ $cat->ubicacion }}<br/>
                                                    <b> Cronologia: </b>{{ $cat->cronologia }}<br/>
                                                    <b> Tipo Objeto: </b>{{ $cat->tipobjeto }}<br/>
                                                    <b> País: </b>{{ $cat->lugar }}<br/>
                                                    <b> Comunidad: </b>{{ $cat->comunidad}}<br/>
                                                    	

                                                    </div>
                                                                                                       </div>
                                                </div>
                                                </div>-->
                                                
                                </div>
                            </div>
                        </div>
                     
                @endforeach
        </div>
        
</div>
<p></p>
<p></p>


@endsection