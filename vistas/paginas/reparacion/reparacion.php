<style>
.reparaciones{
    min-height: 100vh;
    background-image: url(/vistas/recursos/img/enviadas/reparacion-editada.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    /* background-color: #29528C; */
  
  }
  
  
.tarjeta {
width: 250px;
height: 350px;
margin: 20px;
border: 1px solid #ccc;
border-radius: 10px;
box-shadow: 0 4px 8px rgba(51, 14, 138, 0.2);
text-align: center;
padding: 10px;
color:white;
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
<div class="container-fluid planes py-5 w-100 reparaciones" id="tipos-de-skate">

	<div class="row">
		<div class="col-12 d-flex justify-content-center ">
			<h2 data-aos="fade-right" class="col-12 fs-1 titulo text-center pb-3 fw-bold text-secundario">Nuestros Servicios</h2>
		</div>
	</div>

	<div class=" container text-center">
		<p class="lead mx-auto w-75 text-white">Estamos seguros de que podemos brindarle el servicio que usted necesita para mantener su banda caminadora en óptimas condiciones. Si desea obtener más información sobre nuestros servicios o solicitar una cotización, puede contactarnos a través de nuestro sitio web, correo electrónico o teléfono.</p>
	</div>

	<div class="row tarjetas-container">

		<div class="tarjeta">
			<img src="/vistas/recursos/img/reparaciones/reparacion.png" alt="Imagen 2">
			<h3 class="text-secundario">Reparación</h3>
			<p>Reparamos bandas caminadoras de todas las marcas</p>
			<!-- <button class="button btn btn-warning btn-sm">
                <a href="https://wa.me/+573117315040?text=Hola,%20quiero%20tener%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20las%20reparaciones" target="_blank" rel="noopener noreferrer" class="">
                <i class="fa-solid fa-phone me-2"></i> Contáctanos</a>
            </button> -->
		</div>

		<div class="tarjeta">
			<img src="/vistas/recursos/img/reparaciones/mantenimiento.png" alt="Imagen 1">
			<h3 class="text-secundario">Mantenimiento</h3>
			<p>Realizamos el mantenimiento preventivo y correctivo de bandas caminadoras.</p>
			<!-- <button class="button btn btn-warning btn-sm">
                <a href="https://wa.me/+573117315040?text=Hola,%20quiero%20tener%20m%C3%A1s%20informaci%C3%B3n%20acerca%20del%20servicio%20de%20mantenimiento" target="_blank" rel="noopener noreferrer" class="">
                <i class="fa-solid fa-phone me-2"></i> Contáctanos</a>
            </button> -->
		</div>

		<div class="tarjeta">
			<img src="/vistas/recursos/img/reparaciones/ventas.png" alt="Imagen 3">
			<h3 class="text-secundario">Ventas</h3>
			<p>Vendemos tarjetas electrónicas y repuestos para bandas caminadoras.</p>
			<!-- <button class="button btn btn-warning btn-sm">
                <a href="https://wa.me/+573117315040?text=Hola,%20quiero%20tener%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20los%20de%20productos" target="_blank" rel="noopener noreferrer" class="">
                <i class="fa-solid fa-phone me-2"></i> Contáctanos</a>
            </button> -->
		</div>

		<div class="tarjeta">
			<link rel="stylesheet" href="">
			<img src="/vistas/recursos/img/reparaciones/asesoria.png" alt="Imagen 4">
			<h3 class="text-secundario">Asesoría</h3>
			<p>Brindamos asesoría técnica especializada</p>
			<!-- <button class="button btn btn-warning btn-sm mt-4">
                <a href="https://wa.me/+573117315040?text=Hola,%20quiero%20tener%20m%C3%A1s%20informaci%C3%B3n%20acerca%20del%20servicio%20de%20asesoría" target="_blank" rel="noopener noreferrer" class="">
                <i class="fa-solid fa-phone me-2"></i> Contáctanos</a>
            </button> -->
		</div>

	</div>

    <div class="text-center">
        <button class="button btn btn-warning btn-sm text-center">
            <a href="https://wa.me/+573117315040?text=Hola,%20quiero%20tener%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20los%20de%sus%20Servicios" target="_blank" rel="noopener noreferrer" class="">
            <i class="fa-solid fa-phone me-2"></i> Contáctanos</a>
        </button>
    </div>

</div>