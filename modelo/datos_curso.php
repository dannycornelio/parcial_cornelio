<?php
require 'conexion.php';

class Curso extends Conexion{
    public $id_curso;
    public $nome_curso;
    public $cantidad_period;
    public $fase_actual;
    public $nombre_instrctor;
    public $apellido_instructor;
    public $creditos_curso;


    public function __construct($args = [] )
    {
        $this->id_curso = $args['id_curso'] ?? null;
        $this->nome_curso = $args['nome_curso'] ?? '';
        $this->cantidad_period = $args['cantidad_period'] ?? '';
        $this->fase_actual = $args['fase_actual'] ?? '';
        $this->nombre_instrctor = $args['nombre_instrctor'] ?? null;
        $this->apellido_instructor = $args['apellido_instructor'] ?? '';
        $this->creditos_curso = $args['creditos_curso'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO datos_estudiante(id_curso, nome_curso, cantidad_period, fase_actual, nombre_instrctor, apellido_instructor, creditos_curso) values('$this->id_curso','$this->nome_curso','$this->cantidad_period','$this->fase_actual','$this->nombre_instrctor','$this->apellido_instructor','$this->creditos_curso')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
