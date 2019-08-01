(function(){
    "use strict"

    let regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function(){
        var map = L.map('mapa').setView([20.73396, -103.380522], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([20.73396, -103.380522]).addTo(map)
            .bindPopup('Auditorio Telmex.- KBA')
            .openPopup();

        //Usuarios
        let nombre = document.getElementById('nombre');
        let apellido = document.getElementById('apellido');
        let email = document.getElementById('email');

        //Boletos
        let pase_dia = document.getElementById('pase_dia');
        let pase_dosdias = document.getElementById('pase_dosdias');
        let pase_completo = document.getElementById('pase_completo');

        //Compras Extras
        let  camisaEvento = document.getElementById('camisa_evento');
        let  etiquetas = document.getElementById('etiquetas');

        //botones
        let calcular = document.getElementById('calcular');
        let errorDiv = document.getElementById('error');
        let botonRegisto = document.getElementById('btnRegistro');
        let resultado = document.getElementById('lista-productos');


        //Funciones 

        function MensajeError(){
            if(this.value == ''){
                /*let error = document.createElement('p'); //Creamos una etiqueta p
                error.classList.add('mistakeError');
                let mensaje = document.createTextNode('Este campo es obligatorio'); //Diseñemos el mensaje a mostrar
                error.style.display = 'block'; //Ponemos Display: block al elemento para mostrarlo
                error.appendChild(mensaje);
                this.parentElement.appendChild(error);*/
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Este campo es obligatorio'
                this.style.border = '1px solid red';
                errorDiv.style.padding = '1rem 1rem 1rem 1rem '
            }else{
               /* let notError = document.getElementsByClassName('mistakeError');
                for(let i = 0;i<notError.length;i++){
                    notError[i].style.display = 'none';
                    
                }*/
                errorDiv.style.display = 'none';
                this.style.border = '1px solid black';
            }
        }
        nombre.addEventListener("blur", MensajeError);
        apellido.addEventListener("blur", MensajeError);
        email.addEventListener("blur", MensajeError);
        email.addEventListener('blur', ValidarEmail);
        

        pase_dia.addEventListener('blur', mostrarDias);
        pase_dosdias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);



        function ValidarEmail(){
            if(this.value.indexOf("@") > -1 ){
                errorDiv.style.display = 'none';
                this.style.border = '1px solid black';
            }else{
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Debe contener al menos una @'
                this.style.border = '1px solid red';
                errorDiv.style.padding = '1rem 1rem 1rem 1rem '
            }
        }

        function mostrarDias(){

            let boletosDia = parseInt(pase_dia.value, 10)|| 0;
            let boletos2Dias = parseInt(pase_dosdias.value, 10)|| 0;
            let boletoCompleto = parseInt(pase_completo.value, 10)|| 0;
            
            let diasElegidos = [];
            if(boletosDia > 0){
                diasElegidos.push('viernes');
            }
            if(boletos2Dias > 0){
                diasElegidos.push('viernes','sabado');
            }
            if(boletoCompleto > 0){
                diasElegidos.push('viernes','sabado','domingo');
            }

            for(let i = 0;i< diasElegidos.length;i++ ){
                document.getElementById(diasElegidos[i]).style.display = 'block';
            }
        }

        calcular.addEventListener('click', function calculo(e){
            event.preventDefault();
            if(regalo.value === ''){
                alert("Debes elegir un regalo");
                regalo.focus();
            }else{
                

                let boletosDia = parseInt(pase_dia.value, 10)|| 0;
                let boletos2Dias = parseInt(pase_dosdias.value, 10)|| 0;
                let boletoCompleto = parseInt(pase_completo.value, 10)|| 0;


                let totalPagar = ((boletosDia * 30) + (boletos2Dias * 40) + (boletoCompleto * 50));
                totalPagar += (parseInt((camisaEvento.value, 10)|| 0) * 10) + (parseInt((etiquetas.value, 10)|| 0) * 2 );
                
                let sumaTotal = document.querySelector('#suma-total');
                sumaTotal.innerHTML = '';   //Modifica el contenedor para vaciarlo y hacer la cuenta de nuevo
                let nuevoP = document.createElement("p");
                let texto = document.createTextNode(`$ ${totalPagar}`);
                nuevoP.appendChild(texto);
                sumaTotal.appendChild(nuevoP);



                //Resumen de la compra 

                let listaProductos = document.getElementById('lista-productos');  //Se obtiene el contenedor donde pondremos el resumen de la compra 
                let lista = [];  //Se añade como lista para empezar a agregar a todos los elementos que añadiremos al resumen 
                if(boletosDia > 0){
                    lista.push(`${boletosDia} Pase por un día`);  //Utilizamos el metodo push para agregar el string donde contenemos la informacion de cada parte del resumen 
                }
                if(boletos2Dias > 0){
                    lista.push(`${boletos2Dias} Pase por dos dias`);  //Utilizamos el metodo push para agregar el string donde contenemos la informacion de cada parte del resumen 
                }
                if(boletoCompleto > 0){
                    lista.push(`${boletoCompleto} Pase completo`);  //Utilizamos el metodo push para agregar el string donde contenemos la informacion de cada parte del resumen 
                }
                if(camisaEvento.value > 0){
                    lista.push(`${camisaEvento.value} Camisa evento`);  //Utilizamos el metodo push para agregar el string donde contenemos la informacion de cada parte del resumen 
                }
                if(etiquetas.value > 0){
                    lista.push(`${etiquetas.value} Etiqueta`);  //Utilizamos el metodo push para agregar el string donde contenemos la informacion de cada parte del resumen 
                }
                listaProductos.innerHTML = '';
                listaProductos.style.display = "block";
                for(let iterador = 0; iterador < lista.length ; iterador++){
                    listaProductos.innerHTML += lista[iterador] + '<br/>'; //Añadimos cada elemento que previamente agregamos en la lista 
                    
                }
                
            }

            
        });

    }); //Dom content loaded
})();



$(function(){

    /**Programa del evento */
    $('.ocultar').hide();
    $('.programa-evento .info-cursos:first').show();
    $('.menu-programa a:first').addClass('activo');


    $('.menu-programa a').click(function(){

        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');

        let enlace = $(this).attr('href');
        $('.ocultar').hide();
        $(enlace).fadeIn(1000);
        return false;
    });
});