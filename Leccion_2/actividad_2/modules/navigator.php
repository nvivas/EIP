 <?php

    $textoServicio = $activo == "servicios" ? "text-danger" : "";
    $textoContacto = $activo == "contacto" ? "text-danger" : "";

    ?>


 <nav class="navbar navbar-dark bg-dark">
     <a class="navbar-brand" href="index.php">LOGO</a>
     <ul class="nav justify-content-end">
         <a class="nav-link active link <?= $textoServicio ?>" href="servicios.php">Servicios</a>
         <a class="link <?= $textoContacto ?>" href="contacto.php">Contacto</a>
         <li class="nav-item">
             <a class="btn btn-outline-light" href="#">Login</a>
         </li>
     </ul>
 </nav>