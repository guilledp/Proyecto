<?php

$contenidoJson = file_get_contents('json/cursos.json');
$cursos = json_decode($contenidoJson,true);

$cursos[] =[
  'codigo' => $email,
  'nombre' => $email,
  'linkVideo' => 
  'linkPdf' => $nombre,
  'linkExamen' => $apellido,
  'empresa_ID' => $idEmpresa,
];

$usuariosJson = json_encode($usuarios);
file_put_contents('json/usuarios.json',$usuariosJson);
