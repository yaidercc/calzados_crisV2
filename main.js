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
        overlay3= document.getElementById('agregar'),
        popup3 = document.getElementById('agregar-producto'),
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
function cambiar(){
        var aux =document.getElementById('subir').isDefaultNamespace.[0].name;
        document.getElementById('info').innerHTML=aux;
}

/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
*/

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