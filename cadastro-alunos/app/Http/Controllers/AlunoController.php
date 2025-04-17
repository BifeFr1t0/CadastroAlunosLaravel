<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return Aluno::all();
    }

    public function store(Request $request)
    {
        $aluno = Aluno::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
        ]);

        return response()->json($aluno, 201);
    }

    public function show($id)
    {
        $aluno = Aluno::find($id);
        if (!$aluno) {
            return response()->json(['erro' => 'Aluno não encontrado'], 404);
        }

        return $aluno;
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::find($id);
        if (!$aluno) {
            return response()->json(['erro' => 'Aluno não encontrado'], 404);
        }

        $aluno->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
        ]);

        return response()->json($aluno);
    }

    public function destroy($id)
    {
        $aluno = Aluno::find($id);
        if (!$aluno) {
            return response()->json(['erro' => 'Aluno não encontrado'], 404);
        }

        $aluno->delete();

        return response()->json(['mensagem' => 'Aluno excluído com sucesso']);
    }
}
