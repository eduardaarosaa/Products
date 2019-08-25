<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function produto()
    {
        return view('produto');
    }

    public function cadastroProduto(Request $request)
    {
        $dataForm = $request->except('_token');
        $insert = DB::table('produtos')->insert($dataForm);
        if ($insert = true) {
            echo "Dados inseridos com sucesso";
        } else {
            echo 'Erro ao salvar um produto';
        }
    }

    public function alterarProduto()
    {
        return view('alterarProduto');
    }

    public function updateProduto(Request $request)
    {
        $dataForm = $request->except('_token');
    }

    public function verProdutos()
    {
        $select = DB::table('produtos')->select('id', 'produto', 'quantidade', 'cor')->get();


        if ($select == true) {
            return view('verProduto', compact('select'));
        } else {
            echo 'erro';
        }
    }
}
