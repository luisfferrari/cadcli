<html>
<head>
  <meta charset="utf-8">
  <title>Cadastro Cliente</title>
</head>
<body>
 
<h1>Atualizar Cliente</h1>
 
@if($errors->any())
  <h2>Houve alguns erros ao processar o formulário</h2>
  <ul>
     @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
  </ul>
@endif
 
<form action="{{ route('cadcliente.update', $cadcli->id) }}" method="post">
@csrf
@method('PUT')
 
<table width="200" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td>Nome:</td>
    <td><input type="text" value="{{ $cadcli->nome }}" 
      name="nome" id="nome" placeholder="Nome"></td>
  </tr>
  <tr>
    <td>Endereço:</td>
    <td><input type="text" value="{{ $cadcli->endereco }}" 
      name="endereco" id="endereco" placeholder="Endereço"></td>
  </tr>
  <tr>
    <td>Bairro</td>
    <td><input type="text" value="{{ $cadcli->bairro }}" 
      name="bairro" id="bairro" placeholder="Bairro"></td>
  </tr>
  <tr>
    <td>Cidade</td>
    <td><input type="text" value="{{ $cadcli->cidade }}" 
      name="cidade" id="cidade" placeholder="Cidade"></td>
  </tr>
  <tr>
    <td>Estado</td>
    <td><input type="text" value="{{ $cadcli->estado }}" 
      name="estado" id="estado" placeholder="Estado"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><button type="submit">Salvar Alterações</button></td>
  </tr>
</table>
</form>
 
</body>
</html>