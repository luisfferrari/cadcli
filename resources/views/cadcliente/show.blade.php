<html>
<head>
  <meta charset="utf-8">
  <title>Cadastro Cliente</title>
 
  <style>
    a {color: blue}
  </style>
</head>
<body>
 
<h1>Detalhes do Cliente</h1>
 
<table width="500" border="1" cellspacing="0" cellpadding="3">
  <tr>
    <td><strong>Id</strong></td>
    <td>{{ $cadcli->id }}</td>
  </tr>
  <tr>
    <td><strong>Nome</strong></td>
    <td>{{ $cadcli->nome }}</td>
  </tr>
  <tr>
    <td><strong>Endereço</strong></td>
    <td>{{ $cadcli->endereco }}</td>
  </tr>
  <tr>
    <td><strong>Bairro</strong></td>
    <td>{{ $cadcli->bairro }}</td>
  </tr>
  <tr>
    <td><strong>Cidade</strong></td>
    <td>{{ $cadcli->cidade }}</td>
  </tr>
  <tr>
    <td><strong>Estado</strong></td>
    <td>{{ $cadcli->estado }}</td>
  </tr>
</table>
 
</body>
</html>