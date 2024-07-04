<?php
get_header();
?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>

                    <div class="row">
                        <div class="col-6 card " style="height: 900px;">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('full', array('class' => 'card-img-top img-fluid h-100'));
                            }
                            ?>
                        </div>
                        <div class="col-6 row">
                            <div class="card col-12" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                    <div class="row">
                                        <button class="btn btn-danger mr-2" onclick="cambiar_cantidad('resta');">-</button>
                                        <input type="number" value="1" class="form-control col-2" id="cantidad" min="1">
                                        <button class="btn btn-primary  ml-2" onclick="cambiar_cantidad('suma');">+</button>
                                        <a href="#" class="btn btn-success ml-4">Comprar</a>
                                        
                                    </div>
                                    

                                </div>
                                <p class="card-text">Categoria:<?php the_category(); ?></p>
                                <p style="text-align: left; color: #0000FF;">Autor: <?php the_author() ?></p>
                                <p style="text-align: right; color: #cc0000;">Fecha de Publicación: <?php the_time('d/m/Y-H:i') ?></p>
                                <hr style="border: none; border-top: 1px solid #ddd; margin: 20px 0;">
                                    <p style="color: #333; text-align: center; margin: 10px 0;">Gracias por leer nuestro artículo.</p>



                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            else :
                _e('No se encontraron productos en la categoria de productos', 'textdomain');
            endif; ?>

        </div>
    </div>
    <script>
        function cambiar_cantidad(tipo) {
            var cantidad_actual = document.getElementById('cantidad').value;
            if (tipo == "suma") {
                var cantidad_nueva = parseInt(cantidad_actual) + 1;
            } else {
                if (tipo == "resta" && cantidad_actual > 1) {
                    var cantidad_nueva = parseInt(cantidad_actual) - 1;
                } else {
                    var cantidad_nueva = 0;
                }
            }
            document.getElementById('cantidad').value = cantidad_nueva;
        }
    </script>
    <?php
    get_footer();
    ?>
    <?php

    get_header();

    ?>