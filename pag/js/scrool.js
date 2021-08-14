function Subir(){
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
    })
}



function abreModal() {
    $("#myModal").modal({
      show: true
    });
  }
  
  setTimeout(abreModal, 5000);

function verificar(){
    if(window.scrollY <= 50){
        //remove butao
        document.querySelector('.subindo').style.display = 'none'
    } else{
        //add butao
        document.querySelector('.subindo').style.display = 'block'
        
    }
}

window.addEventListener('scroll', verificar)

