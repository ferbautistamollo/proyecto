<?php

include "controlador/plantilla.controlador.php";

include "controlador/usuarios.controlador.php";
include "modelo/usuarios.modelo.php";

include "controlador/sistemasait.controlador.php";
include "modelo/sistemasait.modelo.php";

include "controlador/roles.controlador.php";
include "modelo/roles.modelo.php";

include "controlador/contrase.controlador.php";
include "modelo/contrase.modelo.php";

include "controlador/direcciones.controlador.php";
include "modelo/direcciones.modelo.php";

include "controlador/unidades.controlador.php";
include "modelo/unidades.modelo.php";

include "controlador/areas.controlador.php";
include "modelo/areas.modelo.php";

include "controlador/cargos.controlador.php";
include "modelo/cargos.modelo.php";

include "controlador/puestos.controlador.php";
include "modelo/puestos.modelo.php";

include "controlador/enviar.controlador.php";



$plantilla = new controladorplantilla();
$plantilla->ctrplantilla();



?>