<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\categorias;
use App\models\directores;

class IndexController extends Controller
{
    public function categoriasPatch(Request $request)
    {
        categorias::where('id', '=', $request->id)->update(array('nombre' => $request->nombre));
    }

    public function directoresPatch(Request $request)
    {
        foreach ($request->except('id') as $key => $part) {
            directores::where('id', '=', $request->id)->update(array($key => $part));
        }
        //
    }
}
