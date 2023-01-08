 <nav class="navbar navbar-dark bg-dark">
         <a class="navbar-brand" href="index.html">LOGO</a>
         <ul class="nav justify-content-end">
                 <a class="link" href="#">Servicios</a>
                 <a class="link" href="#">Sobre nosotros</a>
                 <a class="link" href="#">Contacto</a>
                 <li class="nav-item">
                         <?php
                                if (isTodoCorrecto()) {
                                        echo '<a class="btn btn-outline-danger" href="#">Logout</a>';
                                } else {
                                        echo '<a class="btn btn-outline-light" href="#">Login</a>';
                                }
                                ?>

                         <!-- <a class="btn btn-outline-danger" href="#">Logout</a> -->
                 </li>
         </ul>
 </nav>