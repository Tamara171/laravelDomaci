<?php

namespace App\Http\Controllers;

use App\Http\Resources\PesmaCollection;
use App\Http\Resources\PesmaResource;
use App\Models\Pesma;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
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


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required|string|max:130',
            'duration' => 'required',
            'award' => 'required',
            'izvodjac_id' => 'required',
            'album_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }



        $pesma = Pesma::create([

            'name' => request()->name,
            'duration' => request()->duration,
            'award' => request()->award,
            'izvodjac_id' => request()->izvodjac_id,
            'user_id' => Auth::user()->id,
            'album_id' => request()->album_id,

        ]);

        return response()->json(['Pesma is created successfully.', new PesmaResource($pesma)]);
    }





    public function update(Request $request, Pesma $pesma)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required|string|max:130',
            'duration' => 'required',
            'award' => 'required',
            'izvodjac_id' => 'required',

            'album_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }


        $pesma->name = $request->name;
        $pesma->duration = $request->duration;
        $pesma->award = $request->award;
        $pesma->izvodjac_id = $request->album_id;

        $pesma->save();

        return response()->json(['Pesma is updated successfully.', new PesmaResource($pesma)]);
    }

    /**
     * Remove the specified resource from storage.
     *
    
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesma $pesma)
    {
        $pesma->delete();

        return response()->json('Pesma is deleted successfully.');
    }
}
