<?php

function obtenerServicios() {
    try {
        //Importar las credenciales de conexión
        require 'database.php';

        //Consulta SQL
        $sql = "SELECT * FROM servicios; ";

        //Realizar la consulta
        $query = mysqli_query($db, $sql);
        return $query;
        //Acceder a los resultados
        // echo "<pre>";
        // var_dump( mysqli_fetch_assoc($query) );
        // echo "/pre";

        // //Opcional - Cerrar la conexion
        // $result = mysqli_close($db);

    } catch (\Throwable $th) {
        //throw $th;
        var_dump($th);
    }
}

obtenerServicios();