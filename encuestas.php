<?php
/*
Plugin Name: Encuestas Personalizadas
Plugin URL: http://menghy.org
Description: Este es un plugin para encuestas personalizadas
Version: 0.0.1
Author: Menghy R. Sánchez
 */

function Activate()
{
    global $wpdb;

    $sql = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}encuestas(
    `EncuestaId` INT NULL AUTO_INCREMENT,
    `Nombre` VARCHAR(45) NOT NULL, 
    `ShortCode` VARCHAR(45) NOT NULL, 
    PRIMARY KEY (`EncuestaId`));";
    $wpdb->query($sql);
    
}

function Deactivate()
{
    flush_rewrite_rules();
}

register_activation_hook(__FILE__, 'Activate');
register_deactivation_hook(__FILE__, 'Deactivate');

$capability = 'manage_options';

add_action('admin_menu', 'MakeMenu');
function MakeMenu()
{
    add_menu_page(
        'Lista de encuestas',
        'Encuestas',
        'manage_options',
        plugin_dir_path(__FILE__) . 'admin/pages/lista_encuesta.php',
        null,
        plugin_dir_url(__FILE__) . 'admin/assets/form-icon.png',
        '3'
    );

    add_submenu_page(
        plugin_dir_path(__FILE__) . 'admin/pages/lista_encuesta.php',
        'Resultados Encuestas',
        'Resultados',
        'manage_options',
        null,
        plugin_dir_path(__FILE__) . 'admin/pages/resultados_encuestas.php'
    );
}

function ViewPrincipalPage()
{
    echo "<h1> Content's page </h1>";
}

function ViewResults()
{
    echo "<h1>Esta es la vista de los resultados de las encuestas</h1>";
}
