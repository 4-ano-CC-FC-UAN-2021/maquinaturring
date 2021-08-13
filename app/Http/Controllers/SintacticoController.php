<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SintacticoController extends Controller
{
    public function validarElemento($elementos){
        
        if(count($elementos) != 5){
            return "Sintaxe Errada";
        }else{
            //dd(preg_match_all('/(D|E)/', $elementos[3]));
            if(preg_match_all('/(^.[1-9]+)/', $elementos[0]) != 1){
                return "Sintaxe Errada, Elemento ".$elementos[0]." Não Reconhecido";
            }else if(preg_match_all('/(.)/', $elementos[1]) != 1 ){
                return "Sintaxe Errada, Elemento ".$elementos[1]." Não Reconhecido";
            }else if(preg_match_all('/(.)/', $elementos[2]) != 1){
                return "Sintaxe Errada, Elemento ".$elementos[2]." Não Reconhecido";
            }else if(preg_match_all('/(D|E)/', $elementos[3]) != 1){
                return "Sintaxe Errada, Direcção \"".$elementos[3]."\" Não Reconhecida";
            }else if(preg_match_all('/(^.[1-9]+)/', $elementos[4]) != 1){
                return "Sintaxe Errada, Elemento ".$elementos[4]." Não Reconhecido";
            }

        }
        return false;
    }


    public function verificarSintaxe($linhas){
        $count=0;
        foreach ($linhas as $linha) {
            $elementos = explode(",",$linha);
            $count++;
            if($this->validarElemento($elementos)){
                return $this->validarElemento($elementos)." na instrução ".$count;
            }
        }

    }
}
