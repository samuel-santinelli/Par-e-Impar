<?php

function checarErro($ni, $nf){
    
    

    
    if( $ni  == "" || $nf == "" ){
        echo("<h1>Caixa vazia, por favor, selecione um número!!</h1>");
        return false;
    }
       else if($ni >= $nf){ 
                        
        echo("<h1>Selecione um número valido para que o calculo possa ser realizado</h1>");
        return false;
           
    }
    else{
       return true;

    }
    
 
}


?>
