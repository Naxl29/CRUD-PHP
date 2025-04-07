<?php

require_once 'Usuario.php';

$usuario = new Usuario();

$usuario->primer_nombre = "NICOLÁS";
$usuario->segundo_nombre = "ANTONIO";
$usuario->primer_apellido = "ARRIETA";
$usuario->segundo_apellido = "LAGOS";
$usuario->n_documento = "1099735735";
$usuario->fecha_nacimiento = "2000-10-29";
$usuario->telefono = "3165041963";
$usuario->correo_electronico = "NICOLAS@GMAIL.COM";
$usuario->direccion = "CALLE 1 # 2-3";

$usuario->crearUsuario();