<?php
    class Empleado{
        private $nombre;
        private $sueldo;

        public function inicializar($nombre, $sueldo){
            $this->nombre=$nombre;
            $this->sueldo=$sueldo;
        }

        public function impuestos(){
            if ($this->sueldo>3000){
                echo "$this->nombre debe pagar impuestos";
            }
            else{
                echo "$this->nombre no debe pagar impuestos";
            }
        }
    }

    $empleado1=new Empleado();
    $empleado1->inicializar('Juan', 3050);
    $empleado1->impuestos();
?>