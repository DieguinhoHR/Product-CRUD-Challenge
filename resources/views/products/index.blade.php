@extends('layouts.app')

@section('content')
    <h1>
        <span class="glyphicon glyphicon-sort-by-alphabet"></span> Produtos
    </h1>

    <hr>

    {!!  Form::open(['url' => 'products', 'method' => 'get', 'class' => 'form-inline', 'role' => 'form']) !!}
         <div class='form-group'>
            {!! Form::input('search', 'query', null, [
                'placeholder'    => 'Digite o titulo',
                'size'           => '50px',
                'class'          => 'form-control',
                'data-toggle'    => 'tooltip',
                'data-placement' => 'right',
                'title'          => 'Digite o titulo e tecle Enter para realizar uma busca'
            ]) !!}
         </div>
    {!! Form::close() !!}

    <hr>

    {!! link_to('products/create', 'Novo Registo', ['class' => 'btn btn-primary navbar-left']) !!}

    <table class="table table table-striped table-hover">
        <thead>
        <th>ID</th>
        <th>Titulo</th>
        <th>Descrição</th>
        <th>Qtd. Estoque</th>
        <th>Tag</th>
        <th>Ações</th>
        <th colspan="2"></th>
        </thead>

        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{!! $product->id !!}</td>
                <td>{!! $product->title !!}</td>
                <td>{!! $product->description !!}</td>
                <td>{!! $product->stock !!}</td>
                <td>{!! $product->tag->name !!}</td>
                <td>
                    {!! Form::open(['method' => 'GET', 'route' => ['products.edit', $product->id]]) !!}
                        <button type="submit" class="btn btn-success">
                            Atualizar
                        </button>
                    {!! Form::close() !!}
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id]]) !!}
                        <button type="submit" class="btn btn-danger">
                            Excluir
                        </button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $products->links() }}

    @unless(count($products))
        <p class="text-center">Não existem produtos cadastrados!</p>
    @endunless
@endsection