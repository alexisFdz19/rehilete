<?php

    /*==============================================
    =             Contenido dinamico                =
    ==============================================*/
    
    $rutas = array();
    $ruta = null;
    $infoPropiedad = null;

    if(isset($_GET["ruta"])){

        $rutas = explode("/", $_GET["ruta"]);

        $item = "ruta";
        $valor = $rutas[0];

            /*==============================================
            =       URL´s Amigables de paginas        =
            ==============================================*/

            $rutaPaginas = ControladorPaginas::ctrMostrarPaginas($item, $valor);

            if($rutas[0] == $rutaPaginas["ruta"]){

                $ruta = $rutas[0];

            }

            /*==============================================
            =  Lista blanca de  URL´s Amigables (Páginas que se muestran) =
            ==============================================*/


            if($ruta == "index"){

                echo '
                
                    <div class="section-header position-absolute">

                        <div class="container space-between">
                    
                            <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
                    
                                <div class="navbar-container flexh-space-between w-container">
                    
                                    <div>
                                    
                                        <a href="index"><img class="logo" id="logoNav" src="http://localhost/rehilete/rehilete/views/icons/logoblanco2.png" alt="logo Rehilete" width="27%"></a>
                                
                                    </div>
                    
                                    <nav role="navigation" class="nav-menu order-last w-nav-menu">

                                    '

                                    ?>
                    
                                    <?php
                    
                                        // Colocar dentro del ul del diseño de tu Nav el siguiente código PHP
                                        $item = null;
                                        $valor = null;
                    
                                        $paginas = ControladorPaginas::ctrMostrarPaginas($item, $valor);
                    
                                        foreach ($paginas as $key => $value){
                                            
                                            // Impresión de las páginas que tienes registradas en tu BD, colocar en el diseño de tu li. href="'.$value["ruta"].'" (nombre de la ruta de las páginas). Nombre del item="'.$value["nombre"].'" (nombre que se mostrará en el nav de tu sitio web)
                                            
                                            echo '
                                            
                                            <a href="'.$value["ruta"].'" class="nav-link w-nav-link navsHome">'.$value["nombre"].'</a>
                                            
                                            ';
                    
                                        }
                    
                                    ?>

                                    <?php echo '
                    
                                    </nav>
                    
                                    <div class="order-last w-nav-button"><i class="fas fa-bars"></i></div>
                    
                                </div>
                    
                            </div>
                    
                        </div>
                    
                    </div>             
                
                ';
                
            }else{
    
                echo '
                
                    <div class="section-header position-absolute">

                        <div class="container space-between">
                    
                            <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
                    
                                <div class="navbar-container flexh-space-between w-container">
                    
                                    <div>
                                    
                                        <a href="index"><img class="logo" id="logoNav" src="http://localhost/rehilete/rehilete/views/icons/logogris.png" alt="logo Rehilete" width="27%"></a>
                                
                                    </div>
                    
                                    <nav role="navigation" class="nav-menu order-last w-nav-menu">

                                    '

                                    ?>
                    
                                    <?php
                    
                                        // Colocar dentro del ul del diseño de tu Nav el siguiente código PHP
                                        $item = null;
                                        $valor = null;
                    
                                        $paginas = ControladorPaginas::ctrMostrarPaginas($item, $valor);
                    
                                        foreach ($paginas as $key => $value){
                                            
                                            // Impresión de las páginas que tienes registradas en tu BD, colocar en el diseño de tu li. href="'.$value["ruta"].'" (nombre de la ruta de las páginas). Nombre del item="'.$value["nombre"].'" (nombre que se mostrará en el nav de tu sitio web)
                                            
                                            echo '
                                            
                                            <a href="'.$value["ruta"].'" class="nav-link w-nav-link">'.$value["nombre"].'</a>
                                            
                                            ';
                    
                                        }
                    
                                    ?>

                                    <?php echo '
                    
                                    </nav>
                    
                                    <div class="order-last w-nav-button"><i class="fas fa-bars"></i></div>
                    
                                </div>
                    
                            </div>
                    
                        </div>
                    
                    </div> 
                            
                ';
    
            }

    }else{

        echo '
                
            <div class="section-header position-absolute">

                <div class="container space-between">
            
                    <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
            
                        <div class="navbar-container flexh-space-between w-container">
            
                            <div>
                            
                                <a href="index"><img class="logo" id="logoNav" src="http://localhost/rehilete/rehilete/views/icons/logoblanco2.png" alt="logo Rehilete" width="27%"></a>
                        
                            </div>
            
                            <nav role="navigation" class="nav-menu order-last w-nav-menu">

                            '

                            ?>
            
                            <?php
            
                                // Colocar dentro del ul del diseño de tu Nav el siguiente código PHP
                                $item = null;
                                $valor = null;
            
                                $paginas = ControladorPaginas::ctrMostrarPaginas($item, $valor);
            
                                foreach ($paginas as $key => $value){
                                    
                                    // Impresión de las páginas que tienes registradas en tu BD, colocar en el diseño de tu li. href="'.$value["ruta"].'" (nombre de la ruta de las páginas). Nombre del item="'.$value["nombre"].'" (nombre que se mostrará en el nav de tu sitio web)
                                    
                                    echo '
                                    
                                    <a href="'.$value["ruta"].'" class="nav-link w-nav-link navsHome">'.$value["nombre"].'</a>
                                    
                                    ';
            
                                }
            
                            ?>

                            <?php echo '
            
                            </nav>
            
                            <div class="order-last w-nav-button"><i class="fas fa-bars"></i></div>
            
                        </div>
            
                    </div>
            
                </div>
            
            </div>             
        
        ';


    }


?>