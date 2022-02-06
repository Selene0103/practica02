<?php 
require 'Seleccion.php';

class Futbolista extends SeleccionFutbol {


    public function __construct($id,$nombre,$apellidos,$edad, private string $posicion, private string $equipo)
    {
        parent::__construct($id,$nombre,$apellidos,$edad);
    }

    public function getInfo()
    {
        
        echo parent::getInfo();

        $plusinfo = "<br> Posición: $this->posicion <br>
        Equipo: $this->equipo <br><br>";
        return $plusinfo;
    }

}

echo "<b> Futbolistas </b> <br><br>";

$futbolista1 = new Futbolista(
    1596,
    'Guillermo',
    'Ochoa',
    36,
    'Portero',
    'America'
);

echo $futbolista1->getInfo();

$futbolista2 = new Futbolista(
    2005,
    'Alfredo',
    'Talavera',
    39,
    'Portero',
    'Pumas'
);

echo $futbolista2->getInfo();

$futbolista3 = new Futbolista(
    1825,
    'Nestor',
    'Araujo',
    30,
    'Defensa',
    'RC Celta de Vigo'
);

echo $futbolista3->getInfo();

$futbolista4 = new Futbolista(
    1478,
    'Edson',
    'Alvarez',
    30,
    'Defensa',
    'Ajax'
);

echo $futbolista4->getInfo();

$futbolista5 = new Futbolista(
    1965,
    'Hector',
    'Herrera',
    31,
    'Medio',
    'Atletico de Madrid'
);

echo $futbolista5->getInfo();

$futbolista6 = new Futbolista(
    1973,
    'Diego',
    'Lainez',
    21,
    'Medio',
    'Real Betis'
);

echo $futbolista6->getInfo();

$futbolista7 = new Futbolista(
    1402,
    'Hirving',
    'Lozano',
    26,
    'Delantero',
    'SSC Napoli'
);

echo $futbolista7->getInfo();

$futbolista8 = new Futbolista(
    1298,
    'Jesus',
    'Corona',
    29,
    'Delantero',
    'Sevilla Atletico Club'
);

echo $futbolista8->getInfo();