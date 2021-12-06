<?php
 class Producto {

    private $CodigoP;
    private $NombreP;
    private $CostoP;
    private $ValorV;

    public function __construct($CodigoP, $NombreP, $CostoP, $ValorV) {
        $this->CodigoP = $CodigoP;
        $this->NombreP = $NombreP;
        $this->CostoP = $CostoP;
        $this->ValorV = $ValorV;
        
    }


    public function ValorVentaP() {
        $ganan=$this->CostoP * 30 / 100;
        $this->ValorV=$this->CostoP + $ganan;

        return $this->ValorV;
    }




 }



?>