<div class="section padding-bottom-16 is-dark padding-top-quint">

    <div class="container flex-horizontal">

      <div class="col lg-3 flexv-space-between md-12">

        <img class="logo" id="logoNav" src="<?php echo $url?>views/icons/logogris.png" alt="logo Rehilete" width="50%">

      </div>

      <div class="col lg-1 no-margin-bottom"></div>

      <div class="col lg-8 md-12">

        <div class="container container-nested is-wrapped">

          <div class="col lg-3 no-margin-bottom-lg md-12">

            <div class="size-h4 margin-bottom">Nuestra ubicación</div>

          </div>

          <div class="col lg-3 md-12">

            <div class="size-h4 margin-bottom">Contáctanos</div>

            <p><a href="mailto:manager@agenciarehilete.com" class="email-footer">manager@agenciarehilete.com</a></p>

            <div><a href="tel:+522221492260" class="phone-footer">+52 222-149-2260</a></div>

          </div>

          <div class="col lg-3 no-margin-bottom-lg md-12">

            <div class="size-h4 margin-bottom">Accesos rápidos</div>

            <?php

                $item = null;
                $valor = null;

                $paginas = ControladorPaginas::ctrMostrarPaginas($item, $valor);

                foreach ($paginas as $key => $value){

                    echo '
        
                    <a href="'.$value["ruta"].'" class="footer-nav-link is-bold on-dark">'.$value["nombre"].'</a>
                    
                    ';

                }

            ?>
          
          </div>

          <div class="col lg-3 no-margin-bottom-lg md-12">

            <div class="size-h4 margin-bottom">Síguenos</div>

            <a href="https://www.facebook.com/Agencia-Rehilete-100704531336749/" target="_blank" class="footer-nav-link on-dark w-inline-block">

              <div><span class="fa-brand w24"></span> Facebook</div>

            </a>

            <a href="https://www.instagram.com/rehileteagencia/" target="_blank" class="footer-nav-link on-dark w-inline-block">

              <div><span class="fa-brand w24"></span> Instagram</div>

            </a>

          </div>

        </div>

      </div>

    </div>

    <div class="container">

      <div class="col lg-6 no-margin-bottom md-12 md-order-last">

        <div class="low-text-contrast text-small flexh-space-between md-flex-vertical">

          <div class="md-order-last">©2020. Derechos reservados. </div>
        
        </div>

      </div>

      <div class="col lg-6 no-margin-bottom md-12">

      </div>

    </div>

</div>