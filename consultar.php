<?php
include 'conect.php';




$busca = $_POST['texto_busca'] = ( isset($_POST['texto_busca']) )  ? $_POST['texto_busca'] : null;
$catBusca = $_POST['sel_tipo_de_pessoa'] = ( isset($_POST['sel_tipo_de_pessoa']) )  ? $_POST['sel_tipo_de_pessoa'] : null;;


//criando a query de consulta à tabela criada 
$result_usur =  "SELECT * FROM cadastro WHERE $catBusca LIKE '%".$busca."%'";
$r_user = mysqli_query($cx, $result_usur) or die(mysqli_error($cx));



?>