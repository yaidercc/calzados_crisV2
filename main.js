var btnAbrirpopup = document.getElementById('abrir'),
        overlay= document.getElementById('login'),
        popup = document.getElementById('popup'),
        btncerrar= document.getElementById('btn-cerrar-popup');
btnAbrirpopup.addEventListener('click', function(){
        overlay.classList.add('activate');
        popup.classList.add('activate');
});
btncerrar.addEventListener('click', function(){
        overlay.classList.remove('activate');
        popup.classList.add('activate');
});