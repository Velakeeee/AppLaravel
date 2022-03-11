<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class precioController extends Controller
{

    public function precio($ps){
        $precioTotal = 0;

        if(is_numeric($ps)){

        if($ps<=0) {
                return 'El valor ingresado es incorrecto. Inténtelo nuevamente';
        }

        if ($ps<100000) {
            return 'Este producto no tiene descuento';
        }

        elseif ($ps>=100000 && $ps<=150000) {
            $descuento = $ps*0.2;
            $precioTotal = ($ps-$descuento);
         return 'El descuento del producto es del 2%, y el total a pagar es: '.$precioTotal ;
        }

        elseif ($ps>150000 && $ps==300000) {
            $descuento = $ps*0.3;
            $precioTotal = ($ps-$descuento);
         return 'El descuento del producto es del 3%, y el total a pagar es: '.$precioTotal ;
        }

        elseif ($ps>300000 && $ps==500000) {
            $descuento = $ps*0.4;
            $precioTotal = ($ps-$descuento);
         return 'El descuento del producto es del 4%, y el total a pagar es: '.$precioTotal ;
        }

        elseif ($ps>500000) {
            $descuento = $ps*0.5;
            $precioTotal = ($ps-$descuento);
         return 'El descuento del producto es del 5%, y el total a pagar es: '.$precioTotal ;
        }


    } else {
        return 'El valor ingresado es incorrecto. Inténtelo nuevamente';
    }



    }

    public function getiva($nom,$ps) {

        define('iva', 0.19);
        $precioiva = $ps*iva;
        $preciotot = iva+$ps;

        return 'El artículo '.$nom.'sin IVA cuesta $ '.$ps.'y el precio del IVA es de $ '.$precioiva.'.El
        total a pagar por el artículo es de $ '.$preciotot;





    }
}
