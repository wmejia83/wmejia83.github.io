<style>

.catalogo{
  min-height: 100vh;
  /* background-image: url(/vistas/recursos/img/enviadas/reparacion-editada.png); */
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  /* background-color: #FFFFFF; */

}


    .tarjeta {
    width: 250px;
    /* height: 400px; */
    margin: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(51, 14, 138, 0.2);
    text-align: center;
    padding: 10px;
    /* color:white; */
    backdrop-filter: blur(15px);
}

.tarjeta img {
    max-width: 100%;
    width: 200px;
    height: 180px;
    border-radius: 5px;
    transition: 0.5s;
    object-fit: cover;
    margin-top: 10px;
    margin-bottom: 10px;
}

.tarjetas-container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
   /* background-color: gray; */
 
}

.tarjeta img:hover{
    transform: scale(1.08);

}
.button {
    display: inline-block;
    padding: 10px 20px;
    background-color:  var(--color-secundario); /* Color de fondo del botón (rojo) */
    color:  var(--color-principal);/* Color del texto del botón (blanco) */
    border: none;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.boton {
    display: inline-block;
    padding: 10px 20px;
    background-color:  var(--color-secundario); /* Color de fondo del botón (rojo) */
    color:  var(--color-principal);/* Color del texto del botón (blanco) */
    border: none;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.button2 {
    display: inline-block;
    padding: 10px 20px;
    background-color:  var(--color-secundario); /* Color de fondo del botón (rojo) */
    color:  var(--color-principal);/* Color del texto del botón (blanco) */
    border: none;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.button3 {
    display: inline-block;
    padding: 10px 20px;
    background-color:  var(--color-secundario); /* Color de fondo del botón (rojo) */
    color:  var(--color-principal);/* Color del texto del botón (blanco) */
    border: none;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
</style>

<div class="container-fluid planes py-5 w-100 catalogo" id="tipos-de-skate">

	<div class="row">

		<div class="col-12 d-flex justify-content-center py-5">

			<h2 data-aos="fade-right" class="col-12 fs-1 titulo text-center pb-3 fw-bold text-secundario">Tarjetas electrónicas</h2>
		
		</div>

	</div>

	<div class="row tarjetas-container">

        <!-- //* producto 1 -->
		<div class="tarjeta">
	
			<h6 class="text-secundario">Tarjeta electrónica para caminadora Sport Fitness.</h6>
            <p>Referencia <br> Paris. 220v. <br> Motor AC. Profesional.</p>
            <img src="/vistas/recursos/img/productos/sport-fitness.png" alt="Imagen 2">
			
            <h3 class="precio-item tw-bold">$ 1.750.000,00</h3>
			<button class="button btn btn-warning btn-sm">
                <a href="https://wa.me/+573117315040?text=Hola,%20quiero%20tener%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20la%20tarjeta%20de%20electronica%20para%20caminadora" target="_blank" rel="noopener noreferrer" class="">
                    <i class="fas fa-cart-plus fa-lg mr-2"></i>
                    Agregar
                </a>
            </button>

		</div>

       <!-- //* producto 2 -->
		<div class="tarjeta">

            <h6 class="text-secundario">Tarjeta electrónica para caminadora</h6>
            <p>Para máquinas con motor 90VDC hasta 3.5HP. <br> Con inclinación.</p>
            <img src="/vistas/recursos/img/productos/para-caminadora-640.png" alt="Imagen 2">
			
            <h3 class="precio-item tw-bold">$ 640.000,00</h3>
			<button class="button btn btn-warning btn-sm">
                <a href="https://wa.me/+573117315040?text=Hola,%20quiero%20tener%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20la%20tarjeta%20de%20electronica%20para%20caminadora" target="_blank" rel="noopener noreferrer" class="">
                    <i class="fas fa-cart-plus fa-lg mr-2"></i>
                    Agregar
                </a>
            </button>
	
		</div>

        <!-- //* producto 3 -->
		<div class="tarjeta">

            <h6 class="text-secundario">Tarjeta para caminadora todas las marcas</h6>
            <p>Para maquinas con Motores de 90VDC hasta 3HP. <br> Con inclinación.</p>
            <img src="/vistas/recursos/img/productos/para-caminadora-550.png" alt="Imagen 2">
			
            <h3 class="precio-item tw-bold">$ 550.000,00</h3>
			<button class="button btn btn-warning btn-sm">
                <a href="https://wa.me/+573117315040?text=Hola,%20quiero%20tener%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20la%20tarjeta%20de%20electronica%20para%20caminadora" target="_blank" rel="noopener noreferrer" class="">
                    <i class="fas fa-cart-plus fa-lg mr-2"></i>
                    Agregar
                </a>
            </button>

		</div>

       <!-- //* producto 4 -->
		<div class="tarjeta">

        <h6 class="text-secundario">Tarjeta para caminadora original nueva</h6>
            <p>Para maquinas con Motores de 90VDC hasta 3HP. <br> Con inclinación 110v.</p>
            <img src="/vistas/recursos/img/productos/original-nueva-640.png" alt="Imagen 2">
			
            <h3 class="precio-item tw-bold">$ 640.000,00</h3>
			<button class="button btn btn-warning btn-sm">
                <a href="https://wa.me/+573117315040?text=Hola,%20quiero%20tener%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20la%20tarjeta%20de%20electronica%20para%20caminadora" target="_blank" rel="noopener noreferrer" class="">
                    <i class="fas fa-cart-plus fa-lg mr-2"></i>
                    Agregar
                </a>
            </button>

		</div>

        <!-- //* producto 5 -->
		<div class="tarjeta">

        <h6 class="text-secundario">Tarjeta para caminadora</h6>
            <p>Tarjeta electrónica de control de velocidad para motor de hasta 3 Caballos.  90 VDC.</p>
            <img src="/vistas/recursos/img/productos/para-caminadora-650.png" alt="Imagen 2">
			
            <h3 class="precio-item tw-bold">$ 650.000,00</h3>
			<button class="button btn btn-warning btn-sm">
                <a href="https://wa.me/+573117315040?text=Hola,%20quiero%20tener%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20la%20tarjeta%20de%20electronica%20para%20caminadora" target="_blank" rel="noopener noreferrer" class="">
                    <i class="fas fa-cart-plus fa-lg mr-2"></i>
                    Agregar
                </a>
            </button>

		</div>

        <!-- //* producto 6 -->
		<div class="tarjeta">

            <h6 class="text-secundario">Motor-reductor</h6>
            <p>Motor-reductor <br> para elípticas. <br>Todas las marcas</p>
            <img src="/vistas/recursos/img/productos/motor-reductor.png" alt="Imagen 2">
			
            <h3 class="precio-item tw-bold">$ 650.000,00</h3>
			<button class="button btn btn-warning btn-sm">
                <a href="https://wa.me/+573117315040?text=Hola,%20quiero%20tener%20m%C3%A1s%20informaci%C3%B3n%20acerca%20del%20motor%20reductor%20para%20el%20el%C3%ADptica" target="_blank" rel="noopener noreferrer" class="">

                    <i class="fas fa-cart-plus fa-lg mr-2"></i>
                    Agregar
                </a>
            </button>

		</div>

         <!-- //* producto 7-->
		<div class="tarjeta">

            <h6 class="text-secundario">Tarjeta electrónica para caminadora</h6>
            <p><br> <br></p>
            <img src="/vistas/recursos/img/productos/para-caminadora-450.png" alt="Imagen 2">
			
            <h3 class="precio-item tw-bold">$ 450.000,00</h3>
			<button class="button btn btn-warning btn-sm">
                <a href="https://wa.me/+573117315040?text=Hola,%20quiero%20tener%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20la%20tarjeta%20de%20electronica%20para%20caminadora" target="_blank" rel="noopener noreferrer" class="">

                    <i class="fas fa-cart-plus fa-lg mr-2"></i>
                    Agregar
                </a>
            </button>

		</div>

	</div>

</div>


<div class="container-fluid planes pb-5 w-100 catalogo" id="tipos-de-skate">

	<div class="row">

		<div class="col-12 d-flex justify-content-center py-5">

			<h2 data-aos="fade-right" class="col-12 fs-1 titulo text-center pb-3 fw-bold text-secundario">Otros Insumos</h2>
		
		</div>

	</div>

	<div class="row tarjetas-container">

     <!-- //* producto 8 -->

		<div class="tarjeta">

			
			<h6 class="text-secundario">Llave de seguridad para caminadora eléctrica.</h6>
            <p>Llave de seguridad para caminadora eléctrica. Todas las marcas. <br><br><br></p>
            <img src="/vistas/recursos/img/productos/llave-seguridad.png" alt="Imagen 2">
			
            <h3 class="precio-item tw-bold">$ 80.000,00</h3>
			<button class="button btn btn-warning btn-sm">
                <a href="https://wa.me/+573117315040?text=Hola,%20quiero%20tener%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20la%20llave%20de%20de%20seguridad" target="_blank" rel="noopener noreferrer" class="">
                    <i class="fas fa-cart-plus fa-lg mr-2"></i>
                    Agregar
                </a>
            </button>

		</div>

         <!-- //* producto 9 -->
		<div class="tarjeta">

            <h6 class="text-secundario">Sistema genérico para caminadora</h6>
            <p class="small">Sistema electrónico completo para caminadora. Monitor, cableado y tarjeta controladora de motor. Disponible para máquina con Motores DC desde 1hp - 2hp. Sin inclinación.</p>
            <img src="/vistas/recursos/img/productos/sistema-generico-680.png" alt="Imagen 2">
			
            <h3 class="precio-item tw-bold">$ 680.000,00</h3>
			<button class="button btn btn-warning btn-sm">
                <a href="https://wa.me/+573117315040?text=Hola,%20quiero%20tener%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20la%20sistema%20de%20genérico%20para%20caminadora" target="_blank" rel="noopener noreferrer" class="">
                    <i class="fas fa-cart-plus fa-lg mr-2"></i>
                    Agregar
                </a>
            </button>
	
		</div>



	</div>

</div>