@extends('layout.app', ["current"=>"produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Produtos</h5>
        @if(count($produtos) >0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Estoque</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($produtos as $prod)
                <tr>
                    <td>{{$prod->id}}</td>
                    <td>{{$prod->nome}}</td>
                    <td>{{$prod->estoque}}</td>
                    <td>{{$prod->preco}}</td>                   
                    <td>    
                    @foreach($cat as $c)
                    @if($c->id == $prod->categoria_id)
                    {{$ca = $c->nome;}}
                    @endif                
                    @endforeach                              
                    </td>
                    <td>
                        <a href="/produtos/editar/{{$prod->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/produtos/apagar/{{$prod->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @else
        <h5>Não há Produtos Cadastrados.</h5>
        @endif
    </div>
    <div class="card-footer">
        <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
    </div>
</div>
@endsection