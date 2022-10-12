@extends('template')
@section('content')
<br>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
<div id="tabelaProdutos" class="container">
    <a href="cadastroProdutos">Adicionar um novo produto</a><br><br>
    <h2> Produtos cadastrados </h2>
    <table class="table">
        <tr>
            <th> Nome </th>
            <th> Descrição </th>
            <th> Categoria </th>
            <th> Imagem </th>
            <th> Editar </th>
            <th> Excluir </th>
        </tr>
        @for($i = 0; $i < count($produtos); $i++) <tr>
            <td> {{$produtos[$i]->nome}} </td>
            <td> {{$produtos[$i]->descricao}} </td>
            <td> {{$categorias[$produtos[$i]->categoria_id - 1]['nome']}} </td>
            <td>
                @if(isset($produtos[$i]->imagem))
                    <img src='{{asset("storage/{$produtos[$i]->imagem}") }}'alt="{{$produtos[$i]->imagem}}" height="80" width="75">
                @else
                    <img src="https://cdn-icons-png.flaticon.com/512/16/16410.png" alt="padrao" height="20" width="20">
                @endif
            </td>
            <td>
                <a href="editaProdutos/{{$produtos[$i]['id']}}">
                    <img src="https://cdn-icons-png.flaticon.com/512/1159/1159633.png" alt="editar" height="20" width="20">
                </a>
            </td>
            <td>
                <a href="apagaProdutos/{{$produtos[$i]['id']}}">
                    <img src="https://cdn-icons-png.flaticon.com/512/1799/1799391.png" alt="exluir" height="20" width="20">
                </a>
            </td>
            </tr>
            @endfor
    </table>
    {!! $produtos->links() !!}
</div>
@endsection