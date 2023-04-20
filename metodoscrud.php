<?php

    class metodos{
        public function mostrarDatos($sql){
            $c= new Conexion();
            $conexion=$c->conexion();

            $result=PDO_query($conexion, $sql);

            return PDO_fetch_all($result,PDO_ASSOC);
        }
    }