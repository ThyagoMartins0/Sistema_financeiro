<?php

namespace App\Http\Controllers\api\NFe;


use App\Services\NFeService;
use Illuminate\Http\Request;

class NFeController extends Controller
{
    protected $nfeService;

    public function __construct(NFeService $nfeService)
    {
        $this->nfeService = $nfeService;
    }

    public function emitir(Request $request)
    {
        $dadosNFe = $request->all();
        $response = $this->nfeService->emitirNFe($dadosNFe);

        return response()->json($response);
    }
}


/*
use App\Http\Controllers\NFeController;

Route::post('/nfe/emitir', [NFeController::class, 'emitir']);
*/