
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

function formatCnpjCpf(value)
{
  const cnpjCpf = value.replace(/\D/g, '');
  
  if (cnpjCpf.length === 11) {
    return cnpjCpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/g, "\$1.\$2.\$3-\$4");
  } 
  
  return cnpjCpf.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/g, "\$1.\$2.\$3/\$4-\$5");
}