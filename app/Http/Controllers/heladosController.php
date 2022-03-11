<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class heladosController extends Controller
{
    public function helado($opc){

        //if($opc>1 && $opc<=3){}

        if ($opc == 1 || $opc == 2 || $opc == 3) {
            // se recomienda inicializar las variables
            $valorHelado = 3000;
            $valorTopping = 0;
            $topping = '';
            $valorTotal = 0;
            // programo opcion chocolate
            if ($opc == 1) {
                $valorTopping = 500;
                $topping = 'chocolate';
            }

            elseif ($opc == 2) {
                $valorTopping = 1000;
                $topping = 'Brownie';
            }

            elseif ($opc == 3) {
                $valorTopping = 1500;
                $topping = 'Delicatessen';
            }

        $valorTotal = $valorHelado + $valorTopping;
        return 'El topping escogido es '.$topping. ' y su precio es '.$valorTopping.' el valor total a pagar es '. $valorTotal;

        }
        else {
          return  'opcion no valida';
        }
    }
}
