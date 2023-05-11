const elimina=document.querySelectorAll(".bottone-elimina");
const popup=document.getElementById('popup');
const chiudi=document.getElementById('chiudi');

elimina.forEach(element => {
    element.addEventListener("click", function(){
        popup.classList.remove('d-none');
        popup.classList.add('d-flex');
    });
});

chiudi.addEventListener('click', function(){
    popup.classList.remove('d-flex');
    popup.classList.add('d-none');
});
