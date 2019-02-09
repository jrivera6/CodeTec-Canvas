@extends('layouts.menu')

@section('content')

<h3 class="center-text" >Formulario</h3>
<div id="container-fluid">
	    
	   <div class="row">
	     <div id="div-step1"  class="col-md-9" ><p> <strong>Realizar un formulario de inicio de sesión: </strong>El formulario debe tener el método de envió post, dentro una etiqueta table con dos inputs con sus atributos name (usuario/contraseña) y type de cada uno además un botón con su atributo type respectivo. </p></div>
	     <div id="div-step2" class="col-md-3" ><span>Ejemplo a seguir</span><br></imagen><img src="img/form-referencia.png" alt="imagen de ejemplo" class="img-fluid"></div>
	   </div> 
		
	  <textarea id="editorcodigo" ></textarea>
		<iframe id="preview" ></iframe>
		
		<div id="div-pet" class="div-pet">
		  <!--<p class="text-pet"> Hey! Falta algo.</p>-->
		  <img id="pet" class="pet" src="" data-toggle="tooltip" data-placement="left" title="¡Hey!"></img>
		</div>
		
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Felicidades!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="container-fluid">
		    <div class="row">
		      <div class="col-md-6"><img class="img-fluid" src="img/alegre.png"></img></div>
		      <div class="col-md-6 ml-auto"> <p class="center">Genial! Lograste terminar el ejercicio del modulo 1</p></div>
		    </div>
		</div>    
        
       
      </div>
      <div class="modal-footer">
        <a href="{{ secure_url('ejercicio2') }}">
          <button class="btn btn-primary">Siguiente</button>
        </a>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal inicio -->
<div class="modal fade" id="modal-inicio" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bienvenido!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="container-fluid">
		    <div class="row">
		      <div class="col-md-6"><img class="img-fluid" src="img/hola.png"></img></div>
		      <div class="col-md-6 ml-auto"> <p class="center">Hola nuevamente <strong>{{$nombre}}</strong>. <br> Este es el ejercicio del primer módulo. <br>Lee el enunciado y sigue todas las instrucciones. <strong>Suerte</strong></p></div>
		    </div>
		</div>    
        
       
      </div>
      <div class="modal-footer">
        <button id="btn_aceptar" type="button" class="btn btn-primary" data-dismiss="modal" >Aceptar</button>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
