$(function(){


    let regalo = document.getElementById('regalo');


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

        botonRegisto.disabled = true;
        botonRegisto.classList.add("desactivado");
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

        /**Eventos que escuchan cuando se deja el campo blur */
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
                errorDiv.innerHTML = 'Debe contener al menos una @';
                this.style.border = '1px solid red';
                errorDiv.style.padding = '1rem 1rem 1rem 1rem ';
                this.focus();
            }
        }

        function mostrarDias(){
            /**Convertimos con parseInt para no tener problemas de indefined en los valores */
            let boletosDia = parseInt(pase_dia.value, 10)|| 0;
            let boletos2Dias = parseInt(pase_dosdias.value, 10)|| 0;
            let boletoCompleto = parseInt(pase_completo.value, 10)|| 0;

            let diasElegidos = [];  //Se crea un arreglo donde se guardaran los dias
            /**
             * Se insertan los dias que se han elegido
             */
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
                document.getElementById(diasElegidos[i]).style.display = 'block';  //Una vez que se tienen los dias se aplica un display: block para mostrar los eventos de cada dia, de tal manera que el usuario elija el dia que quiere
            }
        }

        calcular.addEventListener('click', function calculo(e){
            event.preventDefault();
            if(regalo.value === ''){  //Alerta al usuario de alegir un regalo para poder seguir con el proceso de calculo
                alert("Debes elegir un regalo");
                regalo.focus();  //Ubica al cursor en el cuadro donde se encuentra el regalo
            }else{



                let boletosDia = parseInt(pase_dia.value, 10)|| 0;
                let boletos2Dias = parseInt(pase_dosdias.value, 10)|| 0;
                let boletoCompleto = parseInt(pase_completo.value, 10)|| 0;
                let camisaPago = parseInt(camisaEvento.value, 10)|| 0;
                let etiquetasPago = parseInt(etiquetas.value, 10)|| 0;

                let totalPagar = ((boletosDia * 30) + (boletos2Dias * 40) + (boletoCompleto * 50));

                totalPagar += (camisaPago *10) + (etiquetasPago * 2);

                let sumaTotal = document.querySelector('#suma-total');
                sumaTotal.innerHTML = '';   //Modifica el contenedor para vaciarlo y hacer la cuenta de nuevo
                let nuevoP = document.createElement("p");
                let texto = document.createTextNode(`$ ${totalPagar}`);
                nuevoP.appendChild(texto);
                sumaTotal.appendChild(nuevoP);
                document.getElementById('total_pedido').value = totalPagar;



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


                //Habilitamos el boton una vez se realizaron todos los calculos y el usuario ha puesto informacion en los input correspondientes
                botonRegisto.disabled = false;
                botonRegisto.classList.remove("desactivado");;
            }


        });
});
$(function(){
    /**Mapa */
    var map = L.map('mapa').setView([20.73396, -103.380522], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([20.73396, -103.380522]).addTo(map)  //Dentro de los corchetes se pone la direccion en donde se pondra el pin, especificada en altitud y latitud
            .bindPopup('Auditorio Telmex.- KBA')  //Nombre con el que aparecera el popUp
            .openPopup();
})


$(function(){

    /**En eñ siguiente fragmento de codigo se trabaja con JQuery de tal manera que vemos diferencia del fragmento de codigo anterior  */


    /** Agregando clases al nav*/

    $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
    $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
    $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');




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
        return false;   //Al chile no me acuerdo para que el return false,,, Averiguar el por que en otra seccion
    });


    /**Animaciones para los numeros */
    let resumenLista = $('.resumen-evento');  //Buscamos en div donde aplicaremos la animación

    if(resumenLista.length > 0){
      $('.resumen-evento').waypoint(function(){
        $('.resumen-evento div:nth-child(1) p.numero').animateNumber({number: 6},3000);    //En el primer campo aplicamos el numero al que se llegara mientras que en el segundo apartado pondremos el tiempo en milisegundos en el que llegaremos hasta el
        $('.resumen-evento div:nth-child(2) p.numero').animateNumber({number: 15},3000);
        $('.resumen-evento div:nth-child(3) p.numero').animateNumber({number: 3}, 3000);
        $('.resumen-evento div:nth-child(4) p.numero').animateNumber({number: 9}, 3000);
      },{
        offset: '50%'
      });
    }

    /**Color Box */
    $(".inline").colorbox({inline:true, width:"50%"});   //Este apartado se puede revisar de mejor manera descargando colorBox y revisando el tercer ejemplo pd: Revisar la fecha de la modificacion de esto en git para saber con mayor seguridad el archivo que se busca



    /**Contador de tiempo */

    $('.cuenta-regresiva').countdown('2019/12/18  07:00:00',function(event){   //Ponemos la fecha y la hora se puede revisar de mejor manera en countdown
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });

});
