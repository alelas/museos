@extends("layouts.sitio")
@section("contenedor")
<br/><br/><br/>
<div class="container"  >
<h6><div style="text-indent: 10px;"><a href="/" >Inicio</a>&nbsp; > <a href="/contacto">Contactos</a></div></h6>
      <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
		<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
        var setting = {"height":500,"width":1500,"zoom":16,"queryString":"Museo Nacional de Etnografía y Folklore (MUSEF), Ingavi, La Paz, Bolivia","place_id":"ChIJRXLwpXMgX5ER0OW3cGZuBec","satellite":false,"centerCoord":[-16.494458354702275,-68.13504304999996],"cid":"0xe7056e6670b7e5d0","lang":"es","cityUrl":"/bolivia/la-paz-13481","cityAnchorText":"Mapa de La Paz, La Paz Region, Bolivia","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"215452"};
        var d = document;
        var s = d.createElement('script');
        s.src = 'https://1map.com/js/script-for-user.js?embed_id=215452';
        s.async = true;
        s.onload = function (e) {
          window.OneMap.initMap(setting)
        };
        var to = d.getElementsByTagName('script')[0];
        to.parentNode.insertBefore(s, to);
      })();</script><a href="https://1map.com/es/map-embed">1 Map</a></div>
      
</div>
<br/>
<div class="container"  >
        <div class="row">
            <div class="col-md-6">
                <h5 class="p-3 mb-2 bg-info text-white">Horarios de atención</h5>
                <p>Lunes a Viernes de 9:00 a.m. a 12:30 p.m. - 15:00 p.m. a 19:00 p.m.</p>
                <p>Sábado de 9:00 a.m. a 16:30 p.m.</p>
                <p>Domingo de 09:00 a.m. a 12:30 p.m.</p>
            </div> 
            <div class="col-md-6">
                <h5 class="p-3 mb-2 bg-info text-white">Costos</h5>  
                <p>Nacionales y residentes	Bs. 5</p>
                <p>Extranjeros	Bs. 20</p>
                <p>Menores de 18 años ingreso Libre</p>
             </div>       
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2></h2>
                <p></p>
            
            </div>
        </div>
</div>

  
		
@endsection
