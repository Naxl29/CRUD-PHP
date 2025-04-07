<?php

require_once 'database.php';

class Usuario
{
    private PDO $conn;
    public $primer_nombre;
    public $segundo_nombre;
    public $primer_apellido;
    public $segundo_apellido;
    public $n_documento;
    public $fecha_nacimiento;
    public $telefono;
    public $correo_electronico;
    public $direccion;


    public function __construct()
    {
        $this->conn = (new Database())->getConnection();
    }

    public function listarUsuarios()
    {
        // Lógica para obtener todos los usuarios

        
        $querry = "SELECT * FROM usuarios";
        $stmt = $this->conn->prepare($querry);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    
    }


    public function obtenerUsuario($id)
    {
        // Lógica para obtener un usuario por ID
        $querry = "SELECT * FROM usuarios WHERE id = :id";
        $stmt =$this ->conn->prepare($querry);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function crearUsuario()
    {
        // Lógica para insertar usuario
       
    }

    public function actualizarUsuario()
    {
        // Lógica para actualizar un usuario
    }

    public function eliminarUsuario($id)
    {
        // Lógica para eliminar un usuario
    }
}
