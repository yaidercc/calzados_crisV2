var btnAbrirpopup = document.getElementById('abrir'),
        overlay= document.getElementById('login'),
        popup = document.getElementById('popup'),
        btncerrar= document.getElementById('btn-cerrar-popup1');
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

