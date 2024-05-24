function typeWrite(elemento){
    const textoArray = elemento.innerHTML.split('');
    elemento.innerHTML = ' ';
    textoArray.forEach(function(letra, i){   
      
    setTimeout(function(){
        elemento.innerHTML += letra;
    }, 75 * i)

  });
}
const titulo = document.querySelector('.titulo-principal');
typeWrite(titulo);


const toggleBtn = document.getElementById('toggle');
const body = document.body;

 toggleBtn.addEventListener('click', function(){
    body.classList.toggle('dark-mode')
    //body.classlist é para criar uma classe no corpo
} )

