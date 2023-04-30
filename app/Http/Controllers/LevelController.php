<?php

namespace App\Http\Controllers;

use App\Models\Aventure;
use Illuminate\Http\Request;
use Exception;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showLevelsByAventure($id)
    {
        try {
            $aventure =  Aventure::where('id', $id)->with(['AventureLevel'])->first();
            if ($aventure == null) {
                return response()->json([
                    'res' => false,
                    'message' => 'Id invalido, no coincide con ningun registro',
                ], 404);
            }
            $allLevels = $aventure->AventureLevel;
            return response()->json([
                'res' => true,
                'message' => $allLevels,
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'res' => false,
                'exception' => $e->getMessage(),
                'message' => 'Error al intentar registrar el codigo. Intentelo mas tarde',
            ], 500);
        }
    }
}
