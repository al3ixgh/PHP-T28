<?php
    class Menu{
        private $opciones=array();
        private $orien;

        public function orientar($or){
            $this->orien=$or;
        }
        public function cargarOpc($opc){
            $this->opciones[]=$opc;
        }

        private function mostrarVertical(){
            for($i=0;$i<count($this->opciones);$i++){
                echo '<a href="">'.$this->opciones[$i].'</a>';
                echo '<br>';
            }
        }

        private function mostrarHorizontal(){
            for($i=0;$i<count($this->opciones);$i++){
                echo '<a href="">'.$this->opciones[$i].'</a>';
            }
        }

        public function mostrar($orient){
            if($orient=='vertical'){
                $this->mostrarVertical();
            }else $this->mostrarHorizontal();
        }
    }

    $menu1=new Menu();
        $menu1->cargarOpc('opcion1');
        $menu1->cargarOpc('opcion2');
        $menu1->cargarOpc('opcion3');
        $menu1->cargarOpc('opcion4');
        $menu1->mostrar('vertical');
        echo "<br>";
        $menu1->mostrar('horizontal');
?>