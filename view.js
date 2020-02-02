
function validaCampo()
{

	if(document.cadastro.cliente.checked==false && document.cadastro.fornecedor.checked==false && document.cadastro.funcionario.checked==false)
	{
	alert("Selecione ao menos um tipo entre Cliente, fornecedor ou funcionário ");
	return false;
	}


else
return true;
}

