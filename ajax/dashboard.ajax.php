<?php

require_once "../app/Http/Controllers/dashboard.controlador.php";
require_once "../app/Models/dashboard.modelo.php";

class AjaxDashboard{

public function getDatosDashboard(){

    $datos = DashboardControlador::ctrGetDatosDashboard();

    echo json_encode($datos);

}

}

$datos = new AjaxDashboard();
$datos -> getDatosDashboard();