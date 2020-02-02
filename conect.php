<?php 
//conectando com o localhost - mysql
//iniciando a conexão com o banco de dados 
$cx = mysqli_connect("localhost", "root", "123");
 
//selecionando o banco de dados 
$db = mysqli_select_db($cx, "cadastro_de_usuarios");



?>