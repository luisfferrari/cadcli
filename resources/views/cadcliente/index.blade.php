<html>
<head>
  <meta charset="utf-8">
  <title>Cadastro Cliente</title>
</head>
<body>
 
<h1>Clientes Cadastrados</h1>
 
@if($status = Session::get('mensagem'))
  <h2>{{ $status }}</h2>
@endif
 
<h4><a href="{{ route('cadcliente.create') }}">Cadastrar 
  Novo Cliente</a></h4>
 
<table width="709" border="1" cellspacing="0" cellpadding="3">
  <tr>
    <td width="85" align="center"><strong>Id</strong></td>
    <td width="161" align="center"><strong>Nome</strong></td>
    <td width="156" align="center"><strong>Endereço</strong></td>
    <td width="98" align="center"><strong>Bairro</strong></td>
    <td width="98" align="center"><strong>Cidade</strong></td>
    <td width="98" align="center"><strong>Estado</strong></td>
    <td width="167" align="center"><strong>Opções</strong></td>
  </tr>
   
  @foreach($cadcli as $cadclis)
    <tr>
      <td align="center">{{ $cadclis->id }}</td>
      <td>{{ $cadclis->nome }}</td>
      <td>{{ $cadclis->endereco }}</td>
      <td>{{ $cadclis->bairro }}</td>
      <td>{{ $cadclis->cidade }}</td>
      <td>{{ $cadclis->estado }}</td>
      <td align="center">
       
      <form action="{{ route('cadcliente.destroy', $cadclis->id) }}" 
         method="post">
         <a href="{{ route('cadcliente.show', 
           $cadclis->id) }}">Detalhes</a> | 
           <a href="{{ route('cadcliente.edit', 
           $cadclis->id) }}">Editar</a>
       
         @csrf
         @method('DELETE')
       
         <button type="submit">Excluir</button>
      </form>
       
    </tr>
  @endforeach
   
</table>
 
</body>
</html>