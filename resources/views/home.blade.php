@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel de controle</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body bg-warning">
                                    <h5 class="card-title"> Ver Produtos</h5>
                                    <a href="<?php echo url('products') ?>">Produtos</a><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body bg-warning">
                                    <h5 class="card-title"> Add Produtos</h5>
                                    <a href="<?php echo url('produto') ?>">Adicionar Produto</a><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="<?php echo url('alterarProduto') ?>">Alterar Produto </a> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection