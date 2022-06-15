<?php

namespace Model;


class Cliente extends ActiveRecord{
    protected static $tabla = 'cliente';
    protected static $columnaDb = [
                                  'id',
                                  'nombre',
                                  'apellido',
                                  'email',
                                  'fecha_registro',
                                  'comentario',
                                  'id_propietario_usuario'
    ];

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->fecha_registro = $args['fecha_registro'] ?? '';
        $this->comentario = $args['comentario'] ?? '';
        $this->id_propietario_usuario = $args['id_propietario_usuario'] ?? '';
        
    }
}