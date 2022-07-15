<?php

namespace App\Http\Controllers;

use App\Http\Resources\PesmaCollection;
use App\Http\Resources\PesmaResource;
use App\Models\Pesma;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

use function PHPUnit\Framework\isNull;

class PesmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesmas = Pesma::all();
        return new PesmaCollection($pesmas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesma  $pesma
     * @return \Illuminate\Http\Response
     */
   /* public function show($id)
    {
        $pesma=Pesma::find($id);
        if(is_null($pesma))
            return response()->json('Data not found', 404);
        return response()->json($pesma);

    }*/


    public function show(Pesma $pesma)
    {
        return new PesmaResource($pesma);

    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesma  $pesma
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
    

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesma  $pesma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesma $pesma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesma  $pesma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesma $pesma)
    {
        //
    }
}
