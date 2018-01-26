<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reparto;

class RepartoController extends Controller
{
    public function index()
    {
        return Reparto::all();
    }

    public function show(Reparto $reparto)
    {
        return $reparto;
    }

    public function store(Request $request)
    {
        $reparto = Reparto::create($request->all());

        return response()->json($reparto, 201);
    }

    public function update(Request $request, Reparto $reparto)
    {

        $reparto->update($request->all());

        return response()->json($reparto, 200);
    }

    public function delete(Reparto $reparto)
    {
        $reparto->delete();

        return response()->json(null, 204);
    }
}