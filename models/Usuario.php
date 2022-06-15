<?php

namespace Model;

class Usuario extends ActiveRecord {
    protected static $tabla = 'usuario';
    protected static $columnasDB = ['id', 'nombre', 'email', 'password', 'token', 'confirmado'];

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->password2 = $args['password2'] ?? '';
        $this->password_actual = $args['password_actual'] ?? '';
        $this->password_nuevo = $args['password_nuevo'] ?? '';
        $this->token = $args['token'] ?? '';
        $this->confirmado = $args['confirmado'] ?? 0;
    }

    // Validar el Login de Usuarios
    public function validarLogin() {
        if(!$this->email) {
            self::$alertas['error'][] = 'Correo Obligatorio';
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            self::$alertas['error'][] = 'Correo no válido';
        }
        if(!$this->password) {
            self::$alertas['error'][] = 'La contraseña no puede ir vacío';
        }
        return self::$alertas;

    }

    // Validación para cuentas nuevas
    public function validarNuevaCuenta() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'Nombre obligatorio';
        }
        if(!$this->email) {
            self::$alertas['error'][] = 'Correo obligatorio';
        }
        if(!$this->password) {
            self::$alertas['error'][] = 'La contraseña no puede ir vacío';
        }
        if(strlen($this->password) < 6) {
            self::$alertas['error'][] = 'La contraseña debe contener al menos 8 caracteres';
        }
        if($this->password !== $this->password2) {
            self::$alertas['error'][] = 'Las contraseñas son diferentes';
        }
        return self::$alertas;
    }

    // Valida un email
    public function validarEmail() {
        if(!$this->email) {
            self::$alertas['error'][] = 'Correo Obligatorio';
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            self::$alertas['error'][] = 'Correo no válido';
        }
        return self::$alertas;
    }

    // Valida el Password 
    public function validarPassword() {
        if(!$this->password) {
            self::$alertas['error'][] = 'La contraseña no puede ir vacío';
        }
        if(strlen($this->password) < 6) {
            self::$alertas['error'][] = 'La contraseña debe contener al menos 8 caracteres';
        }
        return self::$alertas;
    }

    public function validar_perfil() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'Nombre Obligatorio';
        }
        if(!$this->email) {
            self::$alertas['error'][] = 'Correo Obligatorio';
        }
        return self::$alertas;
    }

    public function nuevo_password() : array {
        if(!$this->password_actual) {
            self::$alertas['error'][] = 'La contraseña actual no puede ir vacío';
        }
        if(!$this->password_nuevo) {
            self::$alertas['error'][] = 'La contraseña nueva no puede ir vacío';
        }
        if(strlen($this->password_nuevo) < 6) {
            self::$alertas['error'][] = 'La contraseña debe contener al menos 8 caracteres';
        }
        return self::$alertas;
    }

    // Comprobar el password
    public function comprobar_password() : bool {
        return password_verify($this->password_actual, $this->password );
    }

    // Hashea el password
    public function hashPassword() : void {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    // Generar un Token
    public function crearToken() : void {
        $this->token = uniqid();
    }
}