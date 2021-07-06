<html>
<head>
  <meta charset="utf-8">
  <title>Cadastro Cliente</title>
</head>
<body>
 
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
 
<form action="{{ route('livros.store') }}" method="post">
@csrf
<table width="200" border="0" cellspacing="3" 
  cellpadding="3">
  <tr>
    <td>Nome:</td>
    <td><input type="text" name="nome" id="nome" 
      placeholder="Nome"></td>
  </tr>
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
    <td>&nbsp;</td>
    <td><button type="submit">Gravar</button></td>
  </tr>
</table>
</form>
 
</body>
</html>