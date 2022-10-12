@extends('template')

@if(isset($errors) && count($errors) > 0)
 <div class="alert alert-danger">
 @foreach($errors->all() as $error)
 <p> {{$error}} </p>
 @endforeach
 </div>
@endif

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
<div id="textoForm" class="shadow">
    <form method="post" action="insereProdutos" enctype="multipart/form-data">
        @csrf
        <h4>Cadastrar Produto</h4><br>
        Nome do Produto<br>
        <input id="input" type="text" class="text shadow" name="nome" required><br><br>
        Descricao<br>
        <input id="input" type="text" class="email shadow" name="descricao" required><br><br>
        Categoria<br>
        <select id="input" class="shadow" name="categoria_id" required>
            <option value="#">Nenhum</option>
            @for($i=0; $i< count($categorias); $i++)
            <option value="{{$i+1}}">{{$categorias[$i]['nome']}}</option>
            @endfor
        </select>
        <br><br>
        Imagem Produto<br>
        <input type="file" name="imagem"><br><br>
        <input type="submit" class="shadow" id="botao" name="cadastrarProduto" value="Cadastrar">
    </form>
</div>