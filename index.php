<?php

require_once("config.php");

// Carrega 1 usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

// Carrega uma Lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

// Carrega uma lista de usuário buscando pelo login
//$search = Usuario::search("ro");
//echo json_encode($search);

// Carrega um usuário pelo login e senha
$usuario = new Usuario();
$usuario->login("root","!@#$");

echo $usuario;

?>