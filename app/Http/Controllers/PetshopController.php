<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PetshopController extends Controller
{
    public function inicio()
    {
        return view('welcome');
    }
    // Mostrar página principal
    public function principal()
    {
        return view('principal');
    }
    // Mostrar página banho e tosa
    public function banhoTosa()
    {
        return view('banhoEtosa');
    }
    // Receber dados banho e tosa
    public function dataBanhoTosa(Request $request)
    {
        $dataForm = $request->except('_token');
        dd($dataForm);
    }
    //ProdutoController
    public function mostrarProdutos()
    {
        $produtos = Produto::paginate(5);
        $categorias = Categoria::all();
        return view('produtos', compact('produtos', 'categorias'));
    }
    public function cadastrarProdutos()
    {
        $categorias = Categoria::all();
        return view('cadastroProdutos', compact('categorias'));
    }
    // Cadastrar Produto
    public function insereProdutos(Request $request)
    {
        // Validação
        $dados = $request->except('_token', 'submit');
        $produto = new Produto();
        $this->validate($request, $produto->rules, $produto->messages);
        // Imagem
        if ($request->hasFile('imagem')) {
            $novoNome = $request->file('imagem')->store('img', 'public');
            $dados['imagem'] = $novoNome;
        }
        // Inserção no banco
        //dd($dados);
        $insert = Produto::create($dados);
        // Verifica se inseriu com sucesso
        if ($insert)
            // Passa uma session flash success (sessão temporária)
            return redirect()->route('produtos')->with('success', 'Produto inserido com sucesso!');
        else // Redireciona para a rota de cadstro com uma mensagem de erro
            return redirect()->route('cadastroProdutos')->with(['error' => 'Falha ao inserir produto']);
    }
    public function editaProdutos($id)
    {
        $produto = Produto::find($id);
        $categorias = Categoria::all();
        return view('editaProdutos', compact('produto', 'categorias'));
    }
    public function atualizaProdutos(Request $request, $id)
    {
        $dados = $request->except('_token', 'submit');
        $produto = Produto::find($id);
        $this->validate($request, $produto->rules, $produto->messages);
        if ($request->hasFile('imagem')) {
            if ($produto->getAttributes()['imagem'] != NULL)
                Storage::disk('public')->delete($produto->getAttributes()['imagem']);
            $novoNome = $request->file('imagem')->store('img', 'public');
            $dados['imagem'] = $novoNome;
        } else
            unset($dados['imagem']);
        $update = $produto->update($dados);
        if ($update)
            return redirect()->route('produtos')->with('success', 'Produto atualizado com sucesso!');
        else
            return redirect()->route('editaProdutos', $id)->with(['erros' => 'Falha ao editar']);
    }
    public function apagaProdutos($id)
    {
        $produto = Produto::find($id);
        if ($produto->getAttributes()['imagem'] != NULL) // testa se tinha um nome de arquivo no banco
            Storage::disk('public')->delete($produto->getAttributes()['imagem']);
        $delete = $produto->delete();
        if ($delete)
            return redirect()->route('produtos')->with('success', 'Produto removido com sucesso!');
        else
            return redirect()->route('produtos', $id)->with(['erros' => 'Falha ao remover produto']);
    }
    // Controle de métodos
    public function __construct()
    {
        $this->middleware('auth')->only(['principal', 'insereProdutos', 'atualizaProdutos', 'apagaProdutos']);
    }
}
