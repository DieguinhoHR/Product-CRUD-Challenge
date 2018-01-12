@extends('layouts.app')

@section('content')
    <h1>
        <span class="glyphicon glyphicon-sort-by-alphabet"></span> Tags mais usadas
    </h1>

    <hr>

    <table class="table table table-striped table-hover">
        <thead>
            <th>ID</th>
            <th>Titulo</th>
            <th>Total de tags</th>
        </thead>

        <tbody>
        @foreach($tags as $tag)
            <tr>
                <td>{!! $tag->id !!}</td>
                <td>{!! $tag->name !!}</td>
                <td>{!! $tag->ranking !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @unless(count($tags))
        <p class="text-center">Não existem produtos cadastrados!</p>
    @endunless
@endsection