
@extends('layouts.app')

@section('content')
    <h1>
        <span class="glyphicon glyphicon-floppy-open"></span> Atualizar Produto

        <a href="{{ URL::to('products') }}" class="btn btn-info navbar-right">
            <span class="glyphicon glyphicon-chevron-left"></span> Voltar
        </a>
    </h1>

    {!! Form::model($product, [
        'method' => 'PATCH',
        'route'  => ['products.update', $product->id],
        'role'  => 'form',
        'class' => 'form-horizontal row',
        'files' => 'true'
    ]) !!}

    <br />

    @include('errors.errors')

    <div class="form-group">
        <div class="col-lg-4">
            {!! Form::label('title', 'Titulo') !!}
            {!! Form::text('title', null, [
            'class' => 'form-control',
            'placeholder' => 'Digite o titulo']) !!}
        </div>

        <div class="col-lg-4">
            {!! Form::label('stock', 'Qtd. estoque') !!}
            {!! Form::number('stock', null, ['class' => 'form-control',
            'placeholder' => 'Informe a quantidade em estoque']) !!}
        </div>

        <div class="col-lg-4">
            {{ Form::label('tag_id', 'Tag') }}
            {{ Form::select('tag_id', $tags, null,
                ['class' => 'form-control','placeholder' => 'Selecione uma tag']) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-4">
            {{ Form::label('image', 'Imagem') }}
            {{ Form::file('image') }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-12">
            {!! Form::label('description', 'Descrição') !!}
            {!! Form::textarea('description', null, [
                'size' => '30x6',
                'class' => 'form-control',
                'placeholder' => 'Informe a descrição do produto'
            ]) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-12">
            {{ Form::submit('Atualizar', ['class' => 'btn btn-primary']) }}
        </div>
    </div>

    {!! Form::close() !!}
@endsection