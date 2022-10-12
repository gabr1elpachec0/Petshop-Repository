@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <form method="post" action="../atualizaProdutos/{{$produto['id']}}" enctype="multipart/form-data">
        @csrf
        <h4>Editar Produto</h4><br>
        <div class="form-group">
            Nome do Produto<br>
            <input id="input" type="text" class="form-control" name="nome" value="{{$produto->nome}}" required><br><br>
            Descricao<br>
            <input id="input" type="text" class="form-control" name="descricao" value="{{$produto->descricao}}" required><br><br>
            Categoria<br>
            <select id="input" class="form-control" name="categoria_id" required>
                <option value="#">Nenhum</option>
                @for($i=0; $i< count($categorias); $i++) @if($produto['categoria_id']==$categorias[$i]['id']) <option value={{$i+1}} selected> {{$categorias[$i]['nome']}} </option>
                    @else
                    <option value={{$i+1}}> {{$categorias[$i]['nome']}} </option>
                    @endif
                    @endfor
            </select>
            <br><br>
            Imagem Produto<br>
            <input type="file" class="form-control" name="imagem"><br><br>
            <input type="submit" class="btn btn-success" id="botao" name="editarProduto" value="Editar">
        </div>
    </form>
</div>
@endsection