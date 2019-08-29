<?php

/*
 * Developed by Milena Mognon
 */

namespace App\Http\Controllers\Perito;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrgaoSolicitanteRequest;
use App\Models\OrgaoSolicitante;

class OrgaosSolicitantesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrgaoSolicitanteRequest $request)
    {
        $solicitante = OrgaoSolicitante::create($request->all());
        return response()->json([
            'success' => 'done',
            'id' => $solicitante->id,
            'nome' => $solicitante->nome
        ]);
    }
}
