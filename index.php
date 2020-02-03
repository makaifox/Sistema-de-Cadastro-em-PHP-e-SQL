<!DOCTYPE html>
<head>
<meta charset=utf-8 />
<title>CADASTRO DE CLIENTES </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<style type="text/css">
.style1 {
	color: #FF0000;
	font-size: x-small;
}
.style3 {color: #0000FF; font-size: x-small; }
nav {
  width:100%;
  position:fixed absolute;
  z-index: 5;
}
input {
  text-transform:uppercase;
}
</style>
<script type="text/javascript">


// FORMATA DADOS NO FORMULARIO 
  function formatarcampo(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
} 

// FIM DO COD. DE FORMATAÇÃO 
//CODIGO SELEÇÃO PFISICA OU JURIDICA
function verifica(value){
    var nomePF = document.getElementById("nomePF");
    var cpf = document.getElementById("cpf");
    var cnpj = document.getElementById("cnpj");
    var razao_so = document.getElementById("nome");
    var fantasia = document.getElementById("fantasia");

  if(value == 2){
    nomePF.disabled = false;
    cpf.disabled = false;
    cnpj.disabled = true;
    razao_so.disabled = true;
    fantasia.disabled = true;
  }else if(value == 3){
    nomePF.disabled = true;
    cpf.disabled = true;
    cnpj.disabled = false;
    razao_so.disabled = false;
    fantasia.disabled = false;
  }
};
//FIM COD. DE SELEÇÃO 

    </script>

</head>

<body class="bg-primary row d-flex justify-content-center">


<nav >
      <ul class="nav justify-content-center  bg-light ">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Cadastro de Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Consulta.php">Consulta</a></li>

      </ul>
  </nav>
  <div class="col-md-6 bg-light" >
 
    <!--FORMULARIO DE CADASTRO  -->
    <h1 class="card-header blockquote text-center">FORMULÁRIO DE CADASTRO</h1>
    <br>
<form id="post" name="cadastro" method="post" action="cadastro.php" action="javascript:void(0)" onsubmit="return validaCampo(); return false;" >
  <table width="625"  class="tabela ">
  <tr>
      <td width="40">Código:</td>
      <td width="30"><input name="codigo" type="text" id="codigo" size="30" maxlength="30" required>
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Tipo de Pessoa:</td>
      <td><select name="tipo_de_pessoa" id="tipo_de_pessoa" onchange="verifica(this.value)" required>
        <option ></option>
        <option value="2">PESSOA FÍSICA</option>
        <option value="3">PESSOA JURÍDICA</option>
          </select>
        <span class="style1">*      </span></td>
    </tr>
    <tr>
      <td width="69">Nome:</td>
      <td width="546"><input name="nomePF" type="text" id="nomePF" size="70" maxlength="60" class="up"  required/>
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td width="69">CPF:</td>
      <td><input type="text" name="cpf" id="cpf" maxlength="11"  required/>
        <span class="style1">*</span></td>
    </tr>
		<tr>
      <td>CNPJ:</td>
      <td><input name="cnpj" type="text" id="cnpj" maxlength="14" required/><span class="style1"> apenas digitos*</span></td></td>
    </tr>
    <tr>
      <td width="69">Nome Fantasia:</td>
      <td width="546"><input name="fantasia" type="text" id="fantasia" size="70" maxlength="60" class="up" /></td>
    </tr>
    <tr>
      <td width="69">Razão Social:</td>
      <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" class="up" required/>
        <span class="style1">*</span></td>
    </tr>
    <tr>
    <tr>
      <td>CEP:</td>
      <td><input name="cep" type="text" id="cep"  maxlength="9" OnKeyPress="formatarcampo('#####-###', this)" onblur= "pesquisacep(this.value);" required/> 
        <span class="style1">*</span></td>
    </tr>
    <td>Endereço:</td>
      <td><input name="endereco" type="text" id="rua" size="70" maxlength="70" class="up" required/>
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Número:</td>
      <td><input name="numero" type="text" id="numero" maxlength="5" /></td>
    </tr>
    <tr>
      <td>Complemento:</td>
      <td><input name="complemento" type="text" id="complemento" maxlength="20" class="up"/></td>
    </tr>

    <tr>
      <td>Município:</td>
      <td><input name="municipio" type="text" id="bairro" maxlength="20" class="up" required/>
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Cidade:</td>
      <td><input name="cidade" type="text" id="cidade" maxlength="20" class="up" required/>
        <span class="style1">*</span></td>
    </tr>
  <tr>  
     <td>Email:</td>
      <td><input name="email" type="email" id="email" size="70" maxlength="60" class="up"/></td>
    </tr>


    <tr>
      <td>Telefone:</td>
      <td><input name="telefone" type="tel" id="telefone" maxlength="12" placeholder="(XX) XXXX-XXXX" OnKeyPress="formatarcampo('## ####-####', this)"/>
        <span class="style3">Apenas números</span> </td>
    </tr>
    <tr>
      <td>Celular:</td>
      <td><input name="celular" type="text" id="celular" maxlength="13" placeholder="(XX) XXXXX-XXXX" OnKeyPress="formatarcampo('## #####-####', this)"/>
        <span class="style3">Apenas números</span> </td>
    </tr>
    
    

    <tr>
      <td>Cliente:</td>
      <td><input type="checkbox" name="cliente" id="cliente" /></td>

    </tr>
    <tr>
      <td>Fornecedor:</td>
      <td><input type="checkbox" name="fornecedor" id="fornecedor" /></td>

    </tr>
    <tr>
      <td>Funcionário:</td>
      <td><input type="checkbox" name="funcionario" id="funcionario" /></td>

    </tr>
   
    <tr>
    
    <tr class="card-footer">
      <td colspan="2" class="card-header blockquote text-center"><p>
        <input name="cadastrar" type="submit" id="cadastrar" value="Concluir meu Cadastro!"  class="btn btn-primary"/> 
          <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" class="btn btn-secondary" />
          <br />
          <span class="style1">* Campos com * são obrigatórios!          </span></p>
      <p>&nbsp; </p></td>
    </tr>


  </table>

</form>
  <!--FIM DO FORMULARIO  -->

</div> 
<script type="text/javascript">

//Evento do Busca CNPJ
  $("#cnpj").focusout(function(){
    //Início do Comando AJAX
    $.ajax({
      url: 'cnpj.php?cnpj='+$("#cnpj").val(),
      dataType: 'json',
      success: function(resposta){
        //Confere se houve erro e o imprime
        if(resposta.status == "ERROR"){
          alert(resposta.message + "\nPor favor, digite os dados manualmente.");
          $("#post #nome").focus().select();
          return false;
        }
        $("#post #nome").val(resposta.nome);
        $("#post #fantasia").val(resposta.fantasia);
        $("#post #telefone").val(resposta.telefone);
        $("#post #email").val(resposta.email);
        $("#post #endereco").val(resposta.logradouro);
        $("#post #complemento").val(resposta.complemento);
        $("#post #nunicipio").val(resposta.bairro);
        $("#post #cidade").val(resposta.municipio);
        $("#post #cep").val(resposta.cep);
        $("#post #numero").val(resposta.numero);
      }
    });
  });
// API detecta CEP 
  function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);

        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="carregando endereço...";
                document.getElementById('bairro').value="carregando endereço...";
                document.getElementById('cidade').value="carregando endereço...";


                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
  //FIM DA API DE CEP 
</script>


</body>
</html>
