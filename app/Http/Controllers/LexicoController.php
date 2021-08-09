<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SintacticoController;


class LexicoController extends Controller
{

    //Remove todos caracteres (Quebra de linha, tabs e espaços)
    public function removeCaracteres($codigo){
        $caracteres  = array("\r\n", "\n", "\r","\t","<",">");
        $codigo = str_replace ($caracteres,"",$codigo);
        return $codigo;
    }

    //dividir o codigo em linhas com base ao ;
    public function divLinhas($codigo){
        return explode(";",$codigo);
    }


    public function mimificarCodigo(Request $request){
        $analizadorSintactico = new SintacticoController();
        return $analizadorSintactico->verificarSintaxe($this->divLinhas($this->removeCaracteres($request->codigo)));
    }
}
