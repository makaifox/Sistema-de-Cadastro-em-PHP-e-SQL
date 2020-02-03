
<?php 

//VARIAVEIS RECEBIDAS PELO FORMULÁRIO 

$codigo	= $_POST ["codigo"];	
$tipo_de_pessoa	= $_POST ["tipo_de_pessoa"];	
$nome_min = $_POST ["nomePF"]  = ( isset($_POST['nomePF']) )  ? $_POST['nomePF'] : null;
$nome_fantasia_min = $_POST ["fantasia"] = ( isset($_POST['fantasia']) )  ? $_POST['fantasia'] : null;	
$cpf = $_POST ["cpf"]= ( isset($_POST['cpf']) )  ? $_POST['cpf'] : null;	
$cnpj = $_POST ["cnpj"]= ( isset($_POST['cnpj']) )  ? $_POST['cnpj'] : null;	
$razao_social_min = $_POST ["nome"]= ( isset($_POST['nome']) )  ? $_POST['nome'] : null;	
$endereco_min = $_POST ["endereco"];	
$numero	= $_POST ["numero"];	
$complemento_min = $_POST ["complemento"];	
$cep = $_POST ["cep"];	
$municipio_min = $_POST ["municipio"];	
$cidade_min	= $_POST ["cidade"];
$email_min	= $_POST ["email"];
$telefone = $_POST ["telefone"];
$celular = $_POST ["celular"];
$cliente =  $_POST['cliente'] = ( isset($_POST['cliente']) ) ? true : null;
$fornecedor	= $_POST['fornecedor']  = ( isset($_POST['fornecedor']) )  ? true : null;
$funcionario = $_POST['funcionario']  = ( isset($_POST['funcionario']) )  ? true : null;


function formatCnpjCpf($cnpj)
{
  $cnpj_cpf = preg_replace("/\D/", '', $cnpj);
  
  if (strlen($cnpj_cpf) === 14) {
    return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
  } 
  
  return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
}

//Converte minuscula em maiuscula
$nome = $nome_min;
$nome = strtoupper($nome);
$nome_fantasia = $nome_fantasia_min;
$nome_fantasia = strtoupper($nome_fantasia);
$razao_social = $razao_social_min;
$razao_social = strtoupper($razao_social);
$endereco = $endereco_min;
$endereco = strtoupper($endereco);
$complemento = $complemento_min;
$complemento = strtoupper($complemento);
$municipio = $municipio_min;
$municipio = strtoupper($municipio);
$cidade = $cidade_min;
$cidade = strtoupper($cidade);
$email = $email_min;
$email = strtoupper($email);




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
		 
	}
	else {
		echo "Erro: ".$sql."<br>".mysqli_error($cx); 
	}
	header("Location: index.php");

	
mysqli_close($cx);


?> 


