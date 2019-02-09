@extends('layouts.menu')

@section('content')

<h1>CodeTec</h1>

<div class="modulos-div">
  
<a href="{{ secure_url('ejercicio1') }}" class="card-link cardc">
  <div class="card" style="width: 18rem;" >
    <img class="card-img-top" src="img/banner-html.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Modulo 1</h5>
      <p class="card-text">Ejerciciós propuestos</p>
    </div>
      <a href="#" class="card-link"></a>
  </div>
</a>
  
</div>



<!-- Modal -->
<div class="modal fade" id="modal-bienvenida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bienvenido {{$nombre}}!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="container-fluid">
		    <div class="row">
		      <div class="col-md-6"><img class="img-fluid" src="img/hola.png"></img></div>
		      <div class="col-md-6 ml-auto"> <p class="center">Estas en <strong>CodeTec</strong> el editor de código de Tecsup <br> Escoge el módulo dependiendo del nivel que te encuentres.</p></div>
		    </div>
		</div>    
        
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>
</div>

<script type="text/javascript" >
        $('#modal-bienvenida').modal("show");
</script>


@endsection
