
<!DOCTYPE html>
<head>
<meta charset=utf-8 />
<title>CONSULTA CADASTRO DE CLIENTES </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- CSS da página -->
<style>
  body {
    width:100%;
  }
  .table-hover{
    margin-top: 3%;
    font-size:10px;
    width: 30%;
    height: 70%;
  }
  nav {
  width:100%;
  position:fixed absolute;
  z-index: 5;
}

form ul {
  margin-left: 25%;
  width:100%;
  position:fixed absolute;
  list-style-type: none;
}
.text {
  text-transform:uppercase;
}

  </style>

</head>

<body class="bg-primary justify-content-center w-100 p-3">
<!-- Início da página -->
<nav class="w-100 p-3" > 
<ul class="nav justify-content-center bg-light center-block rounded">
  <li class="nav-item">
    <a class="nav-link btn" href="index.php">Cadastro de Clientes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active btn" href="Consulta.php">Consulta</a>

</ul>
  
    
  <form id="consulta" name="consulta" method="post" action="consulta.php" class=" justify-content-center center-block bg-light w-100 p-3 rounded" >
    <ul class="list-group ">
      <li><select name="sel_tipo_de_pessoa" id="sel_tipo_de_pessoa" >
          <option value="NOME" selected>Nome </option>
          <option value="NOME_FANTASIA">Nome Fantasia</option>
          <option value="RAZAO_SOCIAL">Razão Social</option>
          <option value="CPF">CPF</option>
          <option value="CNPJ">CNPJ</option>
          <option value="CLIENTE">Cliente</option>
          <option value="FORNECEDOR">Fornecedor</option>
          <option value="FUNCIONARIO">Funcionário</option>
        </select>
        <input name="texto_busca" type="text" id="texto_busca" size="50" maxlength="60" class="text "/>
        <input name="buscar" type="submit" id="buscar" value="Localizar"  class="btn btn-primary"/> 
      </li>
    </ul>
</form>

<!-- Inicio da tabela --> 
    <table  border="2"  cellspacing="0" class=" table-hover center-block bg-light w-100 p-3" >
  
<tr>
      <th >Codigo</th>
      <th >Tipo de Pessoa</th>
      <th >Nome</th>
      <th >Nome Fantasia</th>
      <th >CPF</th>
      <th >CNPJ</th>
      <th >Razão Social</th>
      <th >Endereço</th>
      <th >Complemento</th>
      <th >Cep</th>
      <th >Município</th>
      <th >E-mail</th>
      <th >Tel:</th>
      <th >Celular:</th>
      <th >Cliente</th>
      <th>Fornecedor</th>
      <th >Funcionário</th>

    </tr>
    
<?php
// PHP BUSCA OS DADOS REFERENTES NO BANCO 
include "consultar_exe.php";

while($exibe = mysqli_fetch_assoc($r_user)){

?>

  <tr >
    <th ><?php echo $exibe['CODIGO'] .' ';?></th>
    <td ><?php echo $exibe['TIPO_DE_PESSOA'] .' ';?></td>
    <td ><?php echo $exibe['NOME'] .' ';?></td>
    <td ><?php echo $exibe['NOME_FANTASIA'] .' ';?></td>
    <td ><?php echo $exibe['CPF'] .' ';?></td>
    <td ><?php echo $exibe['CNPJ'] .' ';?></td>
    <td ><?php echo $exibe['RAZAO_SOCIAL'] .' ';?></td>
    <td ><?php echo $exibe['ENDERECO'] .' ';?></td>
    <td ><?php echo $exibe['COMPLEMENTO'] .' ';?></td>
    <td ><?php echo $exibe['CEP'] .' ';?></td>
    <td ><?php echo $exibe['MUNICIPIO'] .' ';?></td>
    <td ><?php echo $exibe['EMAIL'] .' ';?></td>
    <td> <?php echo $exibe['TELEFONE'] .' ';?></td>
    <td ><?php echo $exibe['CELULAR'] .' ';?></td>
    <td ><?php echo $exibe['CLIENTE'] .' '.(boolval() ? 'true' : 'false')."\n";;?></td>
    <td ><?php echo $exibe['FORNECEDOR'] .' '.(boolval() ? 'true' : 'false')."\n";;?></td>
    <td ><?php echo $exibe['FUNCIONARIO'] .' '.(boolval() ? 'true' : 'false')."\n";;?></td>
  </tr >
<?php
}
  /* Mostrando os resultados em HTML */


?>
</table>
</body>
</hmtl>