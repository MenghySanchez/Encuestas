<?php
    global $wpdb;
    $query = "SELECT * FROM {$wpdb->prefix}encuestas";
    $lista_encuestas = $wpdb->get_results($query,ARRAY_A);
    if(empty($lista_encuestas)){$lista_encuestas =  array();}
?>

<div class="wrap">
    <div>
        <?php
        echo "<h1>" . get_admin_page_title() . "</h1>";
        ?>
        <a class="page-title-action">Añadir nuevo</a>
    </div>
    <br>
    <table class="wp-list-table widefat fixed striped pages">
        <thead>
            <th>Nombre de la encuesta</th>
            <th>Completadas</th>
            <th>Esperadas</th>
            <th>ShortCode</th>
            <th>Acciones</th>
        </thead>
        <tbody id="the-list">
            <?php
                foreach($lista_encuestas as $key => $value){
                    $nombre = $value['Nombre'];
                    $numEsperadas = $value['CantEsperadas'];
                    $shortcode = $value['ShortCode'];
                    echo "
                        <tr>
                            <td>$nombre</td>
                            <td>$numCompletadas</td>
                            <td>$numEsperadas </td>
                            <td>$shortcode</td>
                            <td>
                                <a class='page-title-action'>Ver resultados</a>
                                <a class='page-title-action'>Configurar</a>
                                <a class='page-title-action'>Borrar</a>
                            </td>
                        </tr>
                    ";
                }
            ?>

        
        
            
        </tbody>
    </table>
</div>