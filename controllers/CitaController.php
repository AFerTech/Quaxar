<?php

namespace Controllers;

use Model\Cita;
use MVC\Router;
use Model\Usuario;


class CitaController{
    public static function citas (Router $router){

        session_start();
        isAuth();

        $id = $_SESSION['id'];
        $citas = Cita::belongsTo('propietarioId', $id);

        $router->render('dashboard/citas', [
            'titulo' => 'Citas',
            'cita' => $citas
        ]);
    }

    public static function crear_cita(Router $router) {
        session_start();
        isAuth();
        $alertas= [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cita = new Cita($_POST);

            // validación
            
             $alertas = $cita->validarCita();

             if(empty($alertas)){

                $hash =md5(uniqid());
                $cita->url = $hash;

                 $cita->propietarioId = $_SESSION['id'];

                 $cita->guardar();

                header('Location: /cita?id=' . $cita->url);

            }
        }

        $router->render('dashboard/crear-cita', [
            'alertas' => $alertas,
            'titulo' => 'Crear Cita'
        ]);
    }
}
