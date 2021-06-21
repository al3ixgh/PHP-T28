<?php
    class CabeceraPagina{
        private $titulo;
        private $alin;
        private $colorFondo;
        private $colorFuente;

        public function __construct($titulo, $alin, $colorFondo, $colorFuente){
            $this->titulo=$titulo;
            $this->alin=$alin;
            $this->colorFondo=$colorFondo;
            $this->colorFuente=$colorFuente;
        }

        public function mostrar(){
            echo '<div style="color:'.$this->colorFuente.'; background-color:'.$this->colorFondo.'; text-align:'.$this->alin.'">';
            echo "$this->titulo";
            echo "</div>";
        }
    }   
    $cabecera1= new CabeceraPagina('titulo','right','green','orange');
    $cabecera1->mostrar();
?>

