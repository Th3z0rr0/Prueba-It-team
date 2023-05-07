const resultadosDIV = document.getElementById("imagenes");
const boton = document.getElementById("buscar");
const input = document.getElementById("busqueda");
const select = document.getElementById("categoria");

fetch("https://pixabay.com/api/?key=13119377-fc7e10c6305a7de49da6ecb25")
    .then(response => response.json())
    .then(data => {
        let contenidoHTML = "";

        data.hits.forEach(resultado => {
            contenidoHTML += '<div class="col-md-3" >' +
                '<div class="py-2"><img class="rounded imagen" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="'+resultado.id+'"  src="' + resultado.largeImageURL + '" alt="' + resultado.tags + '" id="imagen"></div>' +
                '</div>';
        });

        resultadosDIV.innerHTML = contenidoHTML;

        const images = document.querySelectorAll('.imagen');

        images.forEach(image => {
        image.addEventListener('click', function() {
        const id = image.getAttribute('data-id');

            fetch("https://pixabay.com/api/?key=13119377-fc7e10c6305a7de49da6ecb25&id="+id)
                .then(response => response.json())
                .then(data =>{
                    const datosHTML = document.getElementById('info'); 
                    datosHTML.innerHTML = "";
                    data.hits.forEach(res => {
                        datosHTML.innerHTML = '<div class="w-100 text-center"><img class="rounded mb-2" src="'+ res.previewURL +'" alt="'+res.tags+'"></div>'
                        + '<p><span class="fw-bold">Tags:</span> '+res.tags+'</p>'
                        + '<p><span class="fw-bold">Número de Visitas:</span> '+res.views+'</p>'
                        + '<p><span class="fw-bold">Likes:</span> '+res.likes+'</p>'
                        
                    })
                })
            })
        })

    })
    .catch(error => console.error)


boton.addEventListener('click', function(){
    
    let filtro = input.value;    

    if(filtro == ''){
        alert('El input esta vació agrega un valor.')
    }else{
        resultadosDIV.innerHTML = '';
        fetch("https://pixabay.com/api/?key=13119377-fc7e10c6305a7de49da6ecb25&lang=es&q="+filtro)
            .then(response => response.json())
            .then(data => {

                let contenidoHTML = "";

                data.hits.forEach(resultado => {
                contenidoHTML += '<div class="col-md-3" >' +
                    '<div class="py-2"><img class="rounded imagen" data-id="'+resultado.id+'" data-bs-toggle="modal" data-bs-target="#exampleModal" src="' + resultado.largeImageURL + '" alt="' + resultado.tags + '" id="imagen"></div>' +
                    '</div>';
                    
                });
                
            resultadosDIV.innerHTML = contenidoHTML;

            const images = document.querySelectorAll('.imagen');

            images.forEach(image => {
            image.addEventListener('click', function() {
            const id = image.getAttribute('data-id');
    
                fetch("https://pixabay.com/api/?key=13119377-fc7e10c6305a7de49da6ecb25&id="+id)
                    .then(response => response.json())
                    .then(data =>{
                        const datosHTML = document.getElementById('info'); 
                        datosHTML.innerHTML = "";
                        data.hits.forEach(res => {
                            datosHTML.innerHTML = '<div class="w-100 text-center"><img class="rounded mb-2" src="'+ res.previewURL +'" alt="'+res.tags+'"></div>'
                            + '<p><span class="fw-bold">Tags:</span> '+res.tags+'</p>'
                            + '<p><span class="fw-bold">Número de Visitas:</span> '+res.views+'</p>'
                            + '<p><span class="fw-bold">Likes:</span> '+res.likes+'</p>'
                            
                        })
                    })
                })
            })

        })
        .catch(error => console.error)
    }

})

input.addEventListener('keyup', function(e){
    if(e.key === "Enter"){
         
        e.preventDefault();
        let filtro = input.value;
        
        if(filtro == ''){
            alert('El input esta vació agrega un valor.')
        }else{
            resultadosDIV.innerHTML = '';
            fetch("https://pixabay.com/api/?key=13119377-fc7e10c6305a7de49da6ecb25&lang=es&q="+filtro)
                .then(response => response.json())
                .then(data => {
                    let contenidoHTML = "";
    
                    data.hits.forEach(resultado => {
                        contenidoHTML += '<div class="col-md-3" >' +
                            '<div class="py-2"><img class="rounded imagen" data-id="'+resultado.id+'" data-bs-toggle="modal"  data-bs-target="#exampleModal" src="' + resultado.largeImageURL + '" alt="' + resultado.tags + '" id="imagen"></div>' +
                            '</div>';

                    });
        
                    resultadosDIV.innerHTML = contenidoHTML;

                    const images = document.querySelectorAll('.imagen');

                    images.forEach(image => {
                    image.addEventListener('click', function() {
                    const id = image.getAttribute('data-id');
            
                        fetch("https://pixabay.com/api/?key=13119377-fc7e10c6305a7de49da6ecb25&id="+id)
                            .then(response => response.json())
                            .then(data =>{
                                const datosHTML = document.getElementById('info'); 
                                datosHTML.innerHTML = "";
                                data.hits.forEach(res => {
                                    datosHTML.innerHTML = '<div class="w-100 text-center"><img class="rounded mb-2" src="'+ res.previewURL +'" alt="'+res.tags+'"></div>'
                                    + '<p><span class="fw-bold">Tags:</span> '+res.tags+'</p>'
                                    + '<p><span class="fw-bold">Número de Visitas:</span> '+res.views+'</p>'
                                    + '<p><span class="fw-bold">Likes:</span> '+res.likes+'</p>'
                                    
                                })
                            })
                        })
                    })
                })
                .catch(error => console.error)
        }
    
    }

})

select.addEventListener('change', function(){
    let filtro = select.value;

    if(filtro == "Seleccione"){
        alert('Por favor seleccione un filtro');
    }else{
        fetch("https://pixabay.com/api/?key=13119377-fc7e10c6305a7de49da6ecb25&category="+filtro)
            .then(response => response.json())
            .then(data => {
                let contenidoHTML = "";

                data.hits.forEach(resultado => {
                    contenidoHTML += '<div class="col-md-3" >' +
                    '<div class="py-2"><img class="rounded imagen" data-id="'+resultado.id+'" data-bs-toggle="modal" data-bs-target="#exampleModal" src="' + resultado.largeImageURL + '" alt="' + resultado.tags + '" id="imagen"></div>' +
                    '</div>';    
                });

                resultadosDIV.innerHTML = contenidoHTML;

                const images = document.querySelectorAll('.imagen');

                images.forEach(image => {
                image.addEventListener('click', function() {
                const id = image.getAttribute('data-id');
        
                    fetch("https://pixabay.com/api/?key=13119377-fc7e10c6305a7de49da6ecb25&id="+id)
                        .then(response => response.json())
                        .then(data =>{
                            const datosHTML = document.getElementById('info'); 
                            datosHTML.innerHTML = "";
                            data.hits.forEach(res => {
                                datosHTML.innerHTML = '<div class="w-100 text-center"><img class="rounded mb-2" src="'+ res.previewURL +'" alt="'+res.tags+'"></div>'
                                + '<p><span class="fw-bold">Tags:</span> '+res.tags+'</p>'
                                + '<p><span class="fw-bold">Número de Visitas:</span> '+res.views+'</p>'
                                + '<p><span class="fw-bold">Likes:</span> '+res.likes+'</p>'
                                
                            })
                        })
                    })
                })
            })
    .catch(error => console.error)

    }
})


