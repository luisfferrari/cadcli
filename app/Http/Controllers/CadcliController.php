<?php
 
namespace App\Http\Controllers;
 
use App\Models\Cadcli;
use Illuminate\Http\Request;
use Canducci\ZipCode\Facades\ZipCode;
 
class CadcliController extends Controller{

   public function index(){
   // obtém todos os clientes cadastrados
    $cadcli = Cadcli::all();
    // direciona para a view e fornece um vetor
    // contendo os clientes
    return view('cadcliente.index', compact('cadcli'));
  }  
      // mostra a view para cadastrar um novo cliente
  public function create(){
//    $zipCodeInfo = ZipCode::find('07401-090'); 
//    print_r($zipCodeInfo);die;   
return view('cadcliente.create');
  }
  // recebe as informações do formulário e as grava
  // no banco de dados
  public function store(Request $request){
    // valida o formulário
    $request->validate([
      'nome' => 'required',
      'endereco' => 'required',
      'bairro' => 'required',
      'cidade' => 'required',
      'estado' => 'required']);
     
    // obtém os valores do form
    Cadcli::create($request->all());
      
    // direciona para página cadastro novamente,
    // com uma mensagem de sucesso
    return redirect()->route('cadcliente.create')
      ->with('mensagem', 'Cliente salvo com sucesso.');
  }

  // vamos mostrar os detalhes do cadastro informado
  // como argumento
  public function show(Cadcli $cadcli){
    return view('cadcliente.show', compact('cadcli'));
  }  


  // método que permite excluir um Cadastro
  public function destroy(Cadcli $cadcli){
    // vamos chamar o método delete() do Eloquent
    $cadcli->delete();
     
    // vamos chamar a view com uma mensagem de
    // de sucesso.
    return redirect()->route('cadcliente.index')
      ->with('mensagem','Cadastro excluído com sucesso.');
  }

  // permite editar o Cliente recebido como argumento
  public function edit(Cadcli $cadcli){
    // chama a view e passa o Cliente para ela
    return view('cadcliente.edit', compact('cadcli'));
  }

  // permite atualizar os dados de um Cliente
  public function update(Request $request, Cadcli $cadcli){
    // vamos validar os dados vindo do formulário
    $request->validate([
      'nome' => 'required',
      'endereco' => 'required',
      'bairro' => 'required',
      'cidade' => 'required',
      'estado' => 'required']);
     
    // vamos atualizar o Cliente na tabela do banco de dados
    $cadcli->update($request->all());
     
    // agora vamos voltar para a listagem de livros
    return redirect()->route('cadcliente.index')
      ->with('mensagem', 'Cliente atualizado com sucesso.');
  }  

}
 
?>