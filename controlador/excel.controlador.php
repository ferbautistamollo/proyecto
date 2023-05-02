<?php


require_once 'PhpSpreadsheet/src/PhpSpreadsheet/Spreadsheet.php';
require_once 'PhpSpreadsheet/src/PhpSpreadsheet/Writer/Xlsx.php';

class ctrexcel{
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



// Código para crear un archivo de Excel con PhpSpreadsheet
    static public function ctrgenerarexcel(){  
       

        if (isset($_POST['generar_excel'])) {
        // Crear una instancia de la clase Spreadsheet
            $spreadsheet = new Spreadsheet();

            // Obtener la hoja activa
            $sheet = $spreadsheet->getActiveSheet();

            // Escribir datos en la hoja activa
            $sheet->setCellValue('A1', 'Hola, mundo!');
            $sheet->setCellValue('B1', 'Esto es una prueba.');
            $sheet->setCellValue('C1', 'PhpSpreadsheet es genial!');

            // Crear un objeto Writer para guardar el archivo de Excel
            $writer = new Xlsx($spreadsheet);

            // Especificar el nombre del archivo de Excel
            $filename = 'ejemplo.xlsx';

            // Escribir el archivo de Excel en el directorio actual
            $writer->save($filename);

            echo "Archivo de Excel creado con éxito!";
            }
        }   
    }
?>