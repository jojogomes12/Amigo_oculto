<?php

class Sorteio{
    private string $caminho;
    public int $id=0;

    public function   __Construct(string $caminho){

        $this->caminho=$caminho;
        
        }
        
        public function escrever(string $escrever){
          
            if (strpos(file_get_contents($this->caminho), $escrever) !== false){
            
           }else{
            file_put_contents($this->caminho,$escrever.PHP_EOL,flags:FILE_APPEND);
           }

          
        }
    

public function sortear(){

$id=$this->id=0;
   
    $texto=file_get_contents('validar.txt');
    $comeco=substr( $texto ,0);
    
    $array = explode(PHP_EOL, $comeco);
    print_r($array);

    $randomico=array_rand($array);
    echo $resultado=$array[$randomico];

    
    unset($array[$randomico]);
    file_put_contents("validar.txt", implode(PHP_EOL, $array)); 
       

}

}






?>


