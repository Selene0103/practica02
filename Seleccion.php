<?php 

class SeleccionFutbol {

    //Atributos


    //Metodos
    public function __construct(private int $id, private string $nombre, private string $apellidos, private int $edad)
    {
        
    }

    public function getInfo()
    {
        $info = "<b> $this->nombre $this->apellidos </b> <br> 
        ID: $this->id <br>
        Edad: $this->edad años";
        return $info;
    }

}

echo "<b> Selección Mexicana Varonil de Fútbol </b> <br><br>";
