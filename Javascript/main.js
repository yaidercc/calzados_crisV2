
//---------- popup --------------
var abrirpopup = document.getElementById('abrir'),
    overlay=document.getElementById('overlay'),
    popup=document.getElementById('popup'),
    solicitar=document.getElementById('solicitar'),
    btncerrar=document.getElementById('btn-cerrar-popup'),
    abrirycerrar=document.getElementById('cerabri');
    if(abrirpopup && btncerrar){
            btncerrar.addEventListener('click', function(e){
            e.preventDefault();
            overlay.classList.remove('active');
            popup.classList.remove('active');
            });
            abrirpopup.addEventListener('click', function(){
            overlay.classList.add('active');
            popup.classList.add('active');
            });
    }
