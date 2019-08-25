@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Alterar Produto</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="<?php echo route('products.update', $product->id) ?>" method="POST">
                        @method('PUT')
                        {{csrf_field()}}
                        <div class="form-group">
                            Produto:<input type="text" name="produto" value="{{$product->produto}}" class="form-control">
                        </div>
                        <div class="form-group">
                            Quantidade:<input type="number" name="quantidade" value="{{$product->quantidade}}" class="form-control">
                        </div>
                        <div class="form-group">
                            Cor:<input type="text" name="cor" value="{{$product->cor}}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-warning">Salvar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection