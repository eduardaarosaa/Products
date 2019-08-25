@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ver produto</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Produto</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Cor</th>
                                <th scope="col">Editar</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($select as $row)
                            <tr>
                                <th scope="row">{{$row->id}}
                                </th>
                                <td>{{$row->produto}}
                                </td>
                                <td>{{$row->quantidade}}
                                </td>
                                <td>{{$row->cor}}
                                </td>
                                <td>
                                    <a href="{{route('products.edit', $row->id)}}">
                                        <button type="button" class="btn btn-warning">Editar</button>
                                    </a>
                                </td>
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