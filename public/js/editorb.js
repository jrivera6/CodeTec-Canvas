$(document).ready(function(){
    $('#div-pet').hide();
    $("#div-consejos").hide();
    
    var v;
    var preview = document.getElementById("preview").contentWindow.document;
    // var content = "Prueba";
    var intro = introJs();
    intro.setOptions({
       nextLabel: '>', 
		prevLabel: '<', 
		skipLabel: 'Salir', 
		doneLabel: 'Hecho',
		exitOnEsc: false,
		disableInteraction: false,
		exitOnOverlayClick: false,
		steps: [
          { 
            element: document.querySelector('#div-step1'),
            intro: "Enunciado del ejercicio"
          },
          { 
            element: document.querySelector('#div-step2'),
            intro: "Ejemplo del ejercicio"
          },
          { 
            element: document.querySelector('.CodeMirror'),
            intro: "Editor para realizar el ejercicio"
          },
          { 
            element: document.querySelector('#preview'),
            intro: "Por último, la vista previa donde veras el resultado del código"
          }
          
        ]
    });
    
    editor.setValue("<html>\n   <head> \n     <!-- Codigo referencial -->  \n     <title></title> \n   </head> \n   <body>\n   </body>\n</html>");
    $('#modal-inicio').modal("show");
    $("#btn_aceptar").click(function(){
       intro.start();
    });
    
    // var exitbtn = $(".introjs-skipbutton").attr("text");
    // // exitbtn = "btn_exit";
    // console.log("res "+exitbtn);
    
    
    function tutorial1(){
        var consejos = ["Si una etiqueta es sombreada hay un error en ella o adentro","Recuerda: El formulario tiene un método de envió <form method=' '>",
        "Los cuadros de ingreso de texto son etiquetas <input>","Para enviar data segura de un formulario se usa el método post",
        "Use la etiqueta <table> para ordenar los elementos","<table><tr><td></td></tr></table> donde <tr> = columna - <td> = fila",
        "Pista: <input name='us...' type='te...'>", "Pista: <input name='co...' type='pa...'>","Existe diferentes tipo de input - type=text/password/submit/etc"];
        var indice; 
        
        $("#div-consejos").hide("slow");
        $("#div-step2").show("slow");
        
         setTimeout(function(){
             indice = Math.floor(Math.random() * 10);
             $("#tooltips-consejos").text(consejos[indice]);
             $("#div-step2").hide("slow");
             $("#div-consejos").show("slow");
         },15000);
         
     }
     
     
     
     setInterval(tutorial1,20000);
      
      //KeyUp
      
      $("textarea").keyup (function () {
          
        v = editor.getValue();
        preview.open();
        preview.writeln(v);
        preview.close();
        
        setTimeout(validar,3000);
        
     });
     
     


      function validar(){

        
        var etiquetaNodo = $(v);
        var container = $('<div/>');
        
        container.append(etiquetaNodo);

        

            var form = $('form[method=post]',container);
            var table = $('form>table',container);
            var usuario = $('form>table>tbody>tr:nth-child(1)>td:nth-child(1)',container);
            var input_usu = $('form>table>tbody>tr:nth-child(1)>td:nth-child(2)>input[type=text][name="usuario"]',container);
            var contraseña = $('form>table>tbody>tr:nth-child(2)>td:nth-child(1)',container);
            var input_pass = $('form>table>tbody>tr:nth-child(2)>td:nth-child(2)>input[type=password][name=contraseña]',container);
            var boton = $('form>table>tbody>tr>td>input[type=submit][value=Enviar]',container);

            var text_usuario = usuario.text().trim();
            var text_contraseña = contraseña.text().trim();
            var usuario_deseado = "Usuario";
            var contraseña_deseado = "Contraseña";  

            // $('.cm-tag').closest('span').find('form').css("background-color", "#ff54");
            // console.log(html);
            
          console.log("length trim"+v.trim());
          
          if(v.trim().length == 115){
              $('#div-pet').hide("fast");
              $(".cm-tag:contains('body')").css("background-color", "");
          }else{
              
              if(form.length){
                $('#div-pet').hide();
                $('.cm-tag').css("background-color", "");
                
               console.log("Existe form");
            }else{
                
                $('#div-pet').show("fast");
                $(".cm-tag:contains('body')").css("background-color", "#ff54");
                
                console.log("No existe form");
                return;   
            }

            if(table.length){
                console.log("Existe table");
                
            }else{
                
                $("#div-pet").show();
                $(".cm-tag:contains('form')").css("background-color", "#ff54");
                console.log("no existe table");
                return;
            }

            if(usuario.length && text_usuario == usuario_deseado ){
                $('.cm-tag').css("background-color", "");
                console.log("Funciona el bloque usuario");
                
            }else{
                $("#div-pet").show();   
                $(".cm-tag:contains('table')").css("background-color", "#ff54");
                return;
            }

            if(input_usu.length){
                console.log("Existe input");
                $(".cm-tag:contains('input')").css("background-color", "");
            }else{
                $("#div-pet").show();
                // $("#pet").attr("src","img/duda.png");
                $(".cm-tag:contains('input')").css("background-color", "#ff54");
                return;
            }

            if(contraseña.length && text_contraseña == contraseña_deseado){
                console.log("Funciona el bloque password");
            
            }else{
                $("#div-pet").show();   
                // $("#pet").attr("src","img/duda.png");
                $(".cm-tag:contains('table')").css("background-color", "#ff54");
                return;
            }

            if(input_pass.length){
                console.log("Existe input pass");
            }else{
                $("#div-pet").show();   
                // $("#pet").attr("src","img/duda.png");
                $(".cm-tag:contains('input')").css("background-color", "#ff54");
                return;
            }

            if(boton.length){
                console.log("Finalizado");
                $("#div-pet").hide();
                $('#modal').modal("show");
                
            }else{
                $("#div-pet").show();
                // $("#pet").attr("src","img/duda.png");
                $(".cm-tag:contains('button')").css("background-color", "#ff54");
            }
              
          }
      }

    //   $("body").click(function(){
    //     $("#pet").hide();
    // });


     
     
});