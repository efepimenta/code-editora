@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Listagem de Categorias</h3>
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Nova Categoria</a>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{route('categories.edit', ['category' => $category->id])}}"
                                       class="btn btn-sm btn-warning">Editar</a>
                                </li>
                                <li>
                                    {!! Form::open(['route'=> ['categories.destroy', 'category' => $category->id], 'method'=>'DELETE']) !!}
                                    {!! Form::submit('Excluir', ['class'=>'btn btn-sm btn-danger']) !!}
                                    {!! Form::close() !!}
                                </li>
                            </ul>


                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$categories->links()}}
        </div>
    </div>
@endsection