<?php

namespace App\Http\Controllers;

use App\Models\Pesma;
use Illuminate\Http\Request;

class AlbumPesmaController extends Controller
{

    public function index($album_id)
    {
        $pesmas = Pesma::get()->where('album_id', $album_id);
        if (is_null($pesmas))
            return response()->json('Data not found', 404);
        return response()->json($pesmas);
    }
}
