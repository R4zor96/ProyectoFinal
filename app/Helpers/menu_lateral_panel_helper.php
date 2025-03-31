<?php

/**
 * permite crear la cracion e instancia de
 * nuestro menu panel lateral de manera dinamica
 * [menu]
 * [Opcion A]
 * [Opcion B]
 *     [Opcion B1]
 *     [Opcion B2]
 * 
 * [Opcion C]
 *     [Opcion C1]
 *         [Opcion C1.1]
 */
function configurar_menu_panel($tarea_actual = '', $rol_actual = 0)
{
    //permite almacenar todas la opciones dentro del menu
    $menu = array();
    //permitir identificar las caracteristicas de la opcion
    $menu_opcion = array();
    //permitir identificar las caracteristicas de la subopcion que se encuentra en la opcion principal
    $menu_sub_opcion = array();

    //TAREA DASHBOARD
    $menu_opcion = array();
    $menu_opcion['is_active'] = ($tarea_actual == TAREA_DASHBOARD) ? TRUE : FALSE;
    $menu_opcion['href'] = route_to("dashboard");
    $menu_opcion['text'] = 'Dashboard';
    $menu_opcion['icon'] = 'fa fa-tachometer-alt';

    $menu_opcion['submenu'] = array();
    $menu['dashboard'] = $menu_opcion;

    if ($rol_actual == ROL_ADMINISTRADOR["clave"]) {
        //TAREA USUARIOS
        $menu_opcion = array();
        $menu_opcion['is_active'] = ($tarea_actual == TAREA_USUARIOS) ? TRUE : FALSE;
        $menu_opcion['href'] = route_to("usuarios");
        $menu_opcion['text'] = 'Usuarios';
        $menu_opcion['icon'] = 'fa fa-users';

        $menu_opcion['submenu'] = array();
        $menu['usuarios'] = $menu_opcion;
    }

    //EJEMPLO DE OPCIONES
    $menu_opcion = array();
    $menu_opcion['is_active'] = FALSE;
    $menu_opcion['href'] = '#';
    $menu_opcion['text'] = 'Opcion B';
    $menu_opcion['icon'] = 'bi bi-battery-full';

    // inicializar el submenu una sola vez
    $menu_opcion['submenu'] = array();

    // Agregar Opcion B1
    $menu_sub_opcion = array();
    $menu_sub_opcion['is_active'] = FALSE;
    $menu_sub_opcion['href'] = route_to('dashboard');
    $menu_sub_opcion['text'] = 'Opcion B1';
    $menu_sub_opcion['icon'] = 'bi bi-battery-half';
    $menu_opcion['submenu']['opcionb11'] = $menu_sub_opcion;

    // Agregar Opcion B2
    $menu_sub_opcion = array();
    $menu_sub_opcion['is_active'] = FALSE;
    $menu_sub_opcion['href'] = route_to('dashboard');
    $menu_sub_opcion['text'] = 'Opcion B2';
    $menu_sub_opcion['icon'] = 'bi bi-battery-half';
    $menu_opcion['submenu']['opcionb12'] = $menu_sub_opcion;

    $menu['opcionB'] = $menu_opcion;


    return $menu;
} //end configurar_menu_panel//end configurar_menu_panel

function crear_menu_panel($tarea_actual = '', $rol_actual = 0)
{
    $menu = configurar_menu_panel($tarea_actual, $rol_actual);
    //d($menu);
    $html = '';
    $html .= '
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav nav-header">Menu Lateral</li>';
    foreach ($menu as $opcion) {
        //dd($opcion);
        if ($opcion["href"] != "#") {
            $html .= '
                        <li class="nav-item">
                            <a href="' . $opcion["href"] . '" class="nav-link ' . (($opcion["is_active"] == TRUE) ? "active" : "") . '">
                                <i class="nav-icon ' . $opcion["icon"] . '"></i>
                                <p>' . $opcion["text"] . '</p>
                            </a>
                        </li>
                    ';
        } //end if
        else {
            $html .= '
                        <li class="nav-item">
                            <a href="#" class="nav-link ' . (($opcion["is_active"] == TRUE) ? "active" : "") . '">
                                <i class="nav-icon ' . $opcion["icon"] . '"></i>
                                <p>
                                    ' . $opcion["text"] . '
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>';
            if (sizeof($opcion["submenu"]) > 0) {
                $html .= '<ul class="nav nav-treeview">';
                foreach ($opcion["submenu"] as $sub_opcion_menu) {
                    $html .= '
                                        <li class="nav-item">
                                            <a href="#" class="nav-link ' . (($sub_opcion_menu["is_active"] == TRUE) ? "active" : "") . '">
                                                <i class="' . $sub_opcion_menu["icon"] . ' nav-icon"></i>
                                                <p>' . $sub_opcion_menu["text"] . '</p>
                                            </a>
                                        </li>
                                    ';
                } //end foreach subopcion
                $html .= '</ul>';
            } //end if sizeof
            $html .= '</li>
                    ';
        } //end else
    }
    $html .= '</ul>';
    return $html;
}// end crear_menu_panel