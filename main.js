//ventana emergente de iniciar sesion
var btnAbrirpopup = document.getElementById('abrir'),
        overlay= document.getElementById('login'),
        popup = document.getElementById('popup'),
        btncerrar= document.getElementById('btn-cerrar-popup');
        if(btnAbrirpopup &&  btncerrar){
                btnAbrirpopup.addEventListener('click', function(){
                        overlay.classList.add('activate');
                        popup.classList.add('activate');
                });
                btncerrar.addEventListener('click', function(){
                        overlay.classList.remove('activate');
                        popup.classList.add('activate');
                });
        }

        var btnAbrirpopup4 = document.getElementById('registrate'),
        overlay4= document.getElementById('rego'),
        popup4 = document.getElementById('pop'),
        btncerrar4= document.getElementById('btn-cerrar-popup4');
        if(btnAbrirpopup4 &&  btncerrar4){
                btnAbrirpopup4.addEventListener('click', function(){
                        overlay4.classList.add('activate');
                        popup4.classList.add('activate');
                });
                btncerrar4.addEventListener('click', function(){
                        overlay4.classList.remove('activate');
                        popup4.classList.add('activate');
                });
        }

// ventana emergente de carrito
var btnAbrirpopup1 = document.getElementById('carrito'),
        overlay1= document.getElementById('carro'),
        popup1 = document.getElementById('productos'),
        btncerrar1= document.getElementById('btn-cerrar-popup1');
if(btnAbrirpopup1 &&  btncerrar1){
        btnAbrirpopup1.addEventListener('click', function(){
                overlay1.classList.add('activate');
                popup1.classList.add('activate');
        });
        btncerrar1.addEventListener('click', function(){
                overlay1.classList.remove('activate');
                popup1.classList.add('activate');
        });     
                
}
// notificaciones
var btnAbrirpopup2 = document.getElementById('notificar'),
        overlay2= document.getElementById('notificaciones'),
        popup2 = document.getElementById('popup-notificaiones'),
        btncerrar2= document.getElementById('btn-cerrar-popup2');
if(btnAbrirpopup2 &&  btncerrar2){
        btnAbrirpopup2.addEventListener('click', function(){
                overlay2.classList.add('activate');
                popup2.classList.add('activate');
        });
        btncerrar2.addEventListener('click', function(){
                overlay2.classList.remove('activate');
                popup2.classList.add('activate');
        });
                
                
}
// ventana emergente de chat
var btnAbrirpopup3 = document.getElementById('chateasion'),
        overlay3= document.getElementById('chat'),
        popup3 = document.getElementById('chatear'),
        btncerrar3= document.getElementById('btn-cerrar-popup3');
if(btnAbrirpopup3 &&  btncerrar3){
        btnAbrirpopup3.addEventListener('click', function(){
                overlay3.classList.add('activate');
                popup3.classList.add('activate');
        });
        btncerrar3.addEventListener('click', function(){
                overlay3.classList.remove('activate');
                popup3.classList.add('activate');
        });
                
                
}
// modificar input type file

'use strict';

;( function ( document, window, index )
{
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			fileName = e.target.value.split( '\\' ).pop();
			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});

		// Firefox bug fix
		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	});
}( document, window, 0 ));



var cont=0;//contador de elementos agregados al carro
var carro=document.querySelectorAll('.car');//boton encargado de agregar elementos
var cantidades=document.querySelector('.num_notifs');//numero de productos agregado
for(var i=0;i<carro.length;i++){// ciclo para agregar evento a todos los elementos con la misma clase
        carro[i].addEventListener('click', function(e){//evento que va a tener todos los elementos
                e.preventDefault();// cortar la funcion del acion en los formularios
                cont+=1;
                cantidades.innerText=cont;//agregar
        });
}

// vaciar carro


   // calificaiones
   var calificaiones=["mala","regular","buena", "muy buena","excelente"];
   var aux1=document.querySelector(".puntuaciones");
   aux1.addEventListener('click',cal);

   function cal(e,calf=""){
        e.stopPropagation();
        e.preventDefault();
        var calf=e.target.id;
        if(calf!=""){
                document.getElementById('texto').innerText=calificaiones[calf-1];
                console.log(calificaiones[calf-1]);
        }
        
       
   }