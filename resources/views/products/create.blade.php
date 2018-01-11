
@extends('layouts.app')

@section('content')
    <h4>
        <span class="glyphicon glyphicon-floppy-open"></span> Salvar Produto

        <a href="{{ URL::to('products') }}" class="btn btn-info navbar-right">
            <span class="glyphicon glyphicon-chevron-left"></span> Voltar
        </a>
    </h4>

    @include('errors.errors')

    {!! Form::open(['url' => 'products', 'class' => 'form-horizontal row']) !!}

    <div class="col-lg-6">
        {!! Form::label('nomeCompleto', 'Nome do Completo') !!}
        {!! Form::text('nomeCompleto', null, ['class' => 'form-control',
        'placeholder' => 'Digite seu Nome Completo']) !!}
    </div>

    <!--<div class="col-lg-6">
        {{ Form::label('clube_id', 'Clube') }}
        {{ Form::select('clube_id', $clubes, null,
            ['class' => 'form-control','placeholder'=>'Selecione']) }}
    </div>-->

    <div class="col-lg-12">
        <br />
        {{ Form::submit('Salvar', ['class' => 'btn btn-primary']) }}
    </div>

    {!! Form::close() !!}
@endsection