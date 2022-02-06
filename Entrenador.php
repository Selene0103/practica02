<?php 
require 'Seleccion.php';

class Entrenador extends SeleccionFutbol {


    public function __construct($id,$nombre,$apellidos,$edad, private int $idFederacion)
    {
        parent::__construct($id,$nombre,$apellidos,$edad);
    }

    public function getInfo()
    {
        echo "<b> Entrenador </b> <br><br>";
        echo parent::getInfo();

        $plusinfo = "<br> Id Federacion: $this->idFederacion <br>";
        return $plusinfo;
    }

}

$entrenador = new Entrenador(
    1109,
    'Gerardo Daniel',
    'Martino',
    59,
    18270302
);

echo $entrenador->getInfo();