
<?php 

//VARIAVEIS RECEBIDAS PELO FORMULÁRIO 

$codigo	= $_POST ["codigo"];	
$tipo_de_pessoa	= $_POST ["tipo_de_pessoa"];	
$nome = $_POST ["nomePF"]  = ( isset($_POST['nomePF']) )  ? $_POST['nomePF'] : null;
$nome_fantasia = $_POST ["fantasia"] = ( isset($_POST['fantasia']) )  ? $_POST['fantasia'] : null;	
$cpf = $_POST ["cpf"]= ( isset($_POST['cpf']) )  ? $_POST['cpf'] : null;	
$cnpj = $_POST ["cnpj"]= ( isset($_POST['cnpj']) )  ? $_POST['cnpj'] : null;	
$razao_social = $_POST ["nome"]= ( isset($_POST['nome']) )  ? $_POST['nome'] : null;	
$endereco = $_POST ["endereco"];	
$numero	= $_POST ["numero"];	
$complemento = $_POST ["complemento"];	
$cep = $_POST ["cep"];	
$municipio = $_POST ["municipio"];	
$cidade	= $_POST ["cidade"];
$email	= $_POST ["email"];
$telefone = $_POST ["telefone"];
$celular = $_POST ["celular"];
$cliente =  $_POST['cliente'] = ( isset($_POST['cliente']) ) ? true : null;
$fornecedor	= $_POST['fornecedor']  = ( isset($_POST['fornecedor']) )  ? true : null;
$funcionario = $_POST['funcionario']  = ( isset($_POST['funcionario']) )  ? true : null;

//IMPORTANDO CONEXÃO COM O SQL 
include 'conect.php';

//criando a query de consulta à tabela criada 
$sql = mysqli_query($cx, "SELECT * FROM cadastro") or die( 
    mysqli_error($cx) //caso haja um erro na consulta 
  );

echo "<script>alert('Sucesso: Sucesso ao conectar-se com a base de dados MySQL.');</script>" . PHP_EOL;


//INSERINDO DADOS DO FORMULÁRIO NO BANCO 

$sql = "INSERT INTO cadastro (CODIGO,TIPO_DE_PESSOA ,NOME ,NOME_FANTASIA ,CPF ,CNPJ ,RAZAO_SOCIAL ,ENDERECO ,NUMERO ,COMPLEMENTO ,CEP ,MUNICIPIO,CIDADE,EMAIL,TELEFONE,CELULAR,CLIENTE,FORNECEDOR,FUNCIONARIO) 
VALUES ('$codigo','$tipo_de_pessoa','$nome','$nome_fantasia','$cpf','$cnpj','$razao_social','$endereco','$numero','$complemento','$cep','$municipio','$cidade','$email','$telefone','$celular','$cliente','$fornecedor','$funcionario')";
	if (mysqli_query($cx, $sql)) {
		echo  "<script>alert('Seu cadastro foi realizado com sucesso! Agradecemos a atenção.');</script>";
		header("Location: index.php");
	}
	else {
		echo "Erro: ".$sql."<br>".mysqli_error($cx); 
	}

	
mysqli_close($cx);


?> 


