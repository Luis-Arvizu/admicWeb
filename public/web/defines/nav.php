<!--
Autor: Felipe Uriel Infante Martínez
Script que devuelve el template del encabezado mostrado en la interfaz web.
Fecha: 01/05/16
-->

<?php
echo '<nav>
  <div class="nav-wrapper blue-code">
    <a href="#" class="brand-logo">CODE Guanajuato</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

    <ul class="right hide-on-med-and-down">
      <li><a href="reportes.php">Reportes</a></li>
      <li><a href="usuarios.php">Usuarios</a></li>
      <li><a href="../../../public/publicidad">Publicidad</a></li>
      <li><a href="notificaciones.php">Notificaciones</a></li>
      <li><a href="historial.php">Historial Notificaciones</a></li>
      <li><a href="eventos.php">Eventos</a></li>
      <li><a href="video.php">Video</a></li>
      <li><a href="../../logout.php">Cerrar sesión</a></li>
    </ul>
    <ul class="side-nav" id="mobile-demo">
        <li><a href="reportes.php">Reportes</a></li>
        <li><a href="usuarios.php">Usuarios</a></li>
        <li><a href="../../../public/publicidad">Publicidad</a></li>
        <li><a href="notificaciones.php">Notificaciones</a></li>
        <li><a href="historial.php">Historial Notificaciones</a></li>
        <li><a href="eventos.php">Eventos</a></li>
        <li><a href="video.php">Video</a></li>
        <li><a href="../../logout.php">Cerrar sesión</a></li>
   </ul>
  </div>
</nav>
'

 ?>
