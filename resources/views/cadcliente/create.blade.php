<html>
<head>
  <meta charset="utf-8">
  <title>Cadastro Cliente</title>
</head>
<body>
	<!--Importando Script Jquery-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<!--Formulário-->
 
<h1>Novo Cliente</h1>
 
@if($status = Session::get('mensagem'))
  <h2>{{ $status }}</h2>
@endif
 
@if($errors->any())
  <h2>Houve alguns erros ao processar o formulário</h2>
  <ul>
     @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
  </ul>
@endif
 
<form action="{{ route('cadcliente.store') }}" method="post">
@csrf
<table width="200" border="0" cellspacing="3" 
  cellpadding="3">
  <tr>
    <td>Nome:</td>
    <td><input type="text" name="nome" id="nome" 
      placeholder="Nome"></td>
  </tr>
  <label for="cep">CEP</label>
	<input id="cep" type="text" required/>
  <tr>
    <td>Endereço:</td>
    <td><input type="text" name="endereco" id="endereco"
      placeholder="Endereço"></td>
  </tr>
  <tr>
    <td>Bairro:</td>
    <td><input type="text" name="bairro" id="bairro"
      placeholder="Bairro"></td>
  </tr>
  <tr>
    <td>Cidade:</td>
    <td><input type="text" name="cidade" id="cidade"
      placeholder="Cidade"></td>
  </tr>
  <tr>
    <td>Estado:</td>
    <td><input type="text" name="estado" id="estado"
      placeholder="Estado"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><button type="submit">Gravar</button></td>
  </tr>
</table>
</form>

<script type="text/javascript">
		$("#cep").focusout(function(){
			$.ajax({
				url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
				dataType: 'json',
				success: function(resposta){
					$("#endereco").val(resposta.logradouro);
	//				$("#complemento").val(resposta.complemento);
					$("#bairro").val(resposta.bairro);
					$("#cidade").val(resposta.localidade);
					$("#estado").val(resposta.uf);
//					$("#numero").focus();
				}
			});
		});
	</script>


</body>
</html>