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
            <th>Encuestas completadas</th>
            <th>Encuestas esperadas</th>
            <th>ShortCode</th>
            <th>Acciones</th>
        </thead>
        <tbody id="the-list">
            <tr>
                <td>Primera encuesta</td>
                <td>number</td>
                <td>number</td>
                <td>[CODE]</td>
                <td>
                    <a class="page-title-action">Ver resultados</a>
                    <a class="page-title-action">Configurar</a>
                    <a class="page-title-action">Borrar</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>