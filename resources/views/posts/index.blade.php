@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Articulo <a class="btn btn-sm btn-outline-primary float-right" href="{{route('posts.create')}}">Crear</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th colspan="2">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($posts as $post)
                            <tr>
                                <th>{{$post->id}}</th>
                                <th>{{ $post->title }}</th>
                                <th>
                                    <a href="{{route('posts.edit', $post)}}" class="btn btn-sm btn-outline-primary">
                                        Editar
                                    </a>
                                </th>   
                                <th>
                                    <form action="{{route('posts.destroy', $post)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input 
                                            type="submit" 
                                            value="Eliminar" 
                                            class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Deseas Eliminar?...')"
                                        >
                                    </form>
                                </th>
                            </tr>      
                            @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
