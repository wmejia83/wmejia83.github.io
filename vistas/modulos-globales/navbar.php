<style>
/* Estilos para dispositivos medianos en adelante */
@media (min-width: 768px) {
    .nav-boton {
        position: relative;
        height: 35px;
        top: 40px; /* Cambiado a 35px para que bajen 35px */
        margin: 0 5px;
        background-color: var(--color-secundario);
        display: flex;
        align-items: center;
        justify-content: center; /* Centra horizontalmente */
        border: none; /* Quita el borde por defecto */
        border-radius: 5px; /* Agrega esquinas redondeadas */
        padding: 10px 20px; /* Ajusta el relleno para hacer que parezcan botones */
        color: white; /* Cambia el color del texto a blanco */
        cursor: pointer; /* Cambia el cursor a una mano al pasar por encima */
        text-decoration: none; /* Quita cualquier decoración de texto */
        margin-bottom: 2px;
    }

    .nav-boton:hover {
        background-color: var(--color-gris); /* Cambia el color de fondo al pasar el ratón */
    }

    .nav-item.nav-boton:hover .dropdown-menu {
        top: 45px; /* Ajusta la posición hacia abajo */
    }

    .nav-item.nav-boton:hover .dropdown-menu::before {
    content: '';
    position: absolute;
    top: -20px; /* Ajusta la posición de la flecha hacia arriba */
    left: calc(50% - 10px); /* Centra la flecha horizontalmente */
    border-width: 10px;
    border-style: solid;
    border-color: transparent transparent var(--color-auxiliar) transparent; /* Ajusta el color de la flecha */
}

}


</style>

<nav class="main-header navbar navbar-expand-md navbar-dark fixed-top bg-principal text-bg-dark d-flex flex-column pt-0" style="border-bottom: 4px double var(--color-secundario);">

  <div class="container-fluid col-12 bg-gris pt-1" style=" height:30px">
    <div class="me-2 small">
      <i class="fa-solid fa-location-dot me-2 text-secundario"></i> Servicio Nacional 
      |
       <i class="fa-solid fa-phone me-2 text-secundario"></i> Asesoría y Ventas +57 311 731 5040
    </div>
  </div>

  <div class="container-fluid px-lg-5">
    <a class="navbar-brand" href="<?php echo $ruta; ?>">
      <img src="/vistas/recursos/img/identidad-corporativa/logo.png" alt="" width="200px">
    </a>
    <button class="navbar-toggler order-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse order-3 " id="navbarNav">
      <!-- dropdown por hover-->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item nav-boton">
          <a class="nav-link active fs-5" aria-current="page" href="<?php echo $ruta ?>">Inicio</a>
        </li>
        <li class="nav-item dropdown fs-5 nav-boton">
          <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">
            Conócenos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="historia">Quienes Somos</a></li>
            <li><a class="dropdown-item" href="mision">Misión y Visión</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown fs-5 nav-boton">
          <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">
            Servicios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="reparacion">Reparación</a></li>
            <li><a class="dropdown-item" href="catalogo">Ventas</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <!-- Right navbar links -->
    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      <!-- Celular -->
      <li class="nav-item icono-nav">
        <a class="nav-link" href="tel:+573117315040">
          <i class="fa-solid fa-phone fs-5"></i>
        </a>
      </li>
      <!-- mail -->
      <li class="nav-item icono-nav">
        <a class="nav-link" href="mailto:oscarlondo@gmail.com">
          <i class="fa-regular fa-envelope fs-5"></i>
        </a>
      </li>

    </ul>

  </div>
</nav>
