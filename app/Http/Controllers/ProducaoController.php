<?php

namespace App\Http\Controllers;

use App\Models\Producao;
use Illuminate\Http\Request;

class ProducaoController extends Controller
{

    public function index()
    {
        return view('producao.index');
    }

    public function esteira(){
        return view('producao.esteira');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Producao $producao)
    {
        //
    }

    public function edit(Producao $producao)
    {
        //
    }

    public function update(Request $request, Producao $producao)
    {
        //
    }

    public function destroy(Producao $producao)
    {
        //
    }
}
