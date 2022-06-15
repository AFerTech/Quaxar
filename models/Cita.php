<?php


namespace Model;

use Model\ActiveRecord;

class Cita extends ActiveRecord{
    protected static $tabla = 'cita';
    protected static $columnbaDB = ['id', 
                                    'nombre', 
                                    'fecha', 
                                    'id_cag_cita', 
                                    'id_propietario_cita', 
                                    'propietarioId',
                                    'hora',
                                    'tipo'];
    
    public function __construct($args = [])
    {
        $this->id= $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->id_cag_cita = $args['id_cag_cita'] ?? '';
        $this->id_propietario_cita = $args['id_propietario_cita'] ?? '';
        $this->propietarioId = $args['propietarioId'] ?? '';
        $this->hora = $args['hora'] ?? '';
        $this->tipo = $args['tipo'] ?? '';


        
    } 
    public function validarCita() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre del Proyecto es Obligatorio';
        }
        return self::$alertas;
    }                    
}