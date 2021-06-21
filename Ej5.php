<?php
    class Tabla{
        private $filas;
        private $columnas;
        private $mat=array();
        private $estiloFuente=array();
        private $estiloFondo=array();

        public function __construct($fil,$col){
            $this->filas=$fil;
            $this->columnas=$col;
        }

        public function añadirDato($fila,$columna,$valor, $colFuente, $colFondo){
            $this->mat[$fila][$columna]=$valor;
            $this->estiloFuente[$fila][$columna]=$colFuente;
            $this->estiloFondo[$fila][$columna]=$colFondo;
        }


        private function inicioTabla(){
            echo '<table border="2"';
        }

        private function inicioFila(){
            echo '<tr>';
        }

        // private function mostrar($fila, $columna, $colorFuente, $colorFondo){
        private function mostrar($fila, $columna){
            echo '<td style="color:'.$this->estiloFuente[$fila][$columna].'; background-color:'.$this->estiloFondo[$fila][$columna].'">'.$this->mat[$fila][$columna].'</td>';
        }

        private function finFila(){
            echo '</tr>';
        }

        private function finTabla(){
            echo '</table>';
        }

        public function imprimir(){
            $this->inicioTabla();
            for($i=1;$i<=$this->filas;$i++){
                $this->inicioFila();
                for($j=1;$j<=$this->columnas;$j++){
                    // $this->mostrar($f,$c,$colorFuente,$colorFondo);
                    $this->mostrar($i,$j);
                }
                $this->finFila();
            }
            $this->finTabla();
        }
    }

    $tabla1=new Tabla(2,3);
    $tabla1->añadirDato(1,1,"1",'red','blue');
    $tabla1->añadirDato(1,2,"2",'red','yellow');
    $tabla1->añadirDato(1,3,"3",'green','blue');
    $tabla1->añadirDato(2,1,"4",'red','black');
    $tabla1->añadirDato(2,2,"5",'white','blue');
    $tabla1->añadirDato(2,3,"6",'red','blue');
    $tabla1->imprimir();
    
?>