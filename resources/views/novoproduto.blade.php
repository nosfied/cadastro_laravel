@extends('layout.app', ["current"=>"produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/produtos" method="POST">
        @csrf
            <div class="form-group">
                <label for="nomeProduto">Nome do Produto</label>
                <input type="text" class="form-control" name="nomeProduto"
                 id="nomeProduto" placeholder="Descrição do Produto">
                <label for="estoque">Estoque</label>
                <input type="text" class="form-control" name="estoque"
                 id="estoque" placeholder="Qtd">
                <label for="preco">Preço</label>
                <input type="text" class="form-control" name="preco"
                 id="preco" placeholder="preço">
                <label for="categoria">Categoria</label>
                <br>
                <select name="categoria_id" class="form-select">                    
                    <option selected>Selecione a Categoria</option>
                    @foreach($cats as $cat)
                    <option value="{{$cat->id}}">{{$cat->nome}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>

@endsection