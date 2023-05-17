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

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;

$spreadsheet = new Spreadsheet();

$worksheet = $spreadsheet->getActiveSheet();

// Obtener la configuración de página y establecer el tamaño de papel en oficio
$pageSetup = $worksheet->getPageSetup();
$pageSetup->setPaperSize(PageSetup::PAPERSIZE_LETTER);

$spreadsheet->getActiveSheet()->setCellValue('A1', 'Nombre');
$spreadsheet->getActiveSheet()->setCellValue('B1', 'Apellido');
$spreadsheet->getActiveSheet()->setCellValue('C1', 'Edad');

$spreadsheet->getActiveSheet()->setCellValue('A2', 'Juan');
$spreadsheet->getActiveSheet()->setCellValue('B2', 'Pérez');
$spreadsheet->getActiveSheet()->setCellValue('C2', '65');

$spreadsheet->getActiveSheet()->setCellValue('A3', 'María');
$spreadsheet->getActiveSheet()->setCellValue('B3', 'González');
$spreadsheet->getActiveSheet()->setCellValue('C3', '90');

$writer = new Xlsx($spreadsheet);
$writer->save('archivo.xlsx');


$plantilla = new controladorplantilla();
$plantilla->ctrplantilla();



?>