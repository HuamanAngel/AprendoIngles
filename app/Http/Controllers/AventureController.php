<?php

namespace App\Http\Controllers;

use App\Models\Aventure;
use App\Models\Use_ave;
use Illuminate\Http\Request;
use Exception;

class AventureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $aventure = auth()->user()->userAventure->load(['UseAveAventure']);
            $aventure = $aventure->map(function($aventure,$key){
                return $aventure->UseAveAventure;
            });
            return response()->json([
                'res' => true,
                'message' => $aventure,
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'res' => false,
                'exception' => $e->getMessage(),
                'message' => 'Error al intentar obtener registros de las aventuras',
            ], 500);
        }        
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

    public function joinToAventure(Request $request)
    {
        try {

            $requestes->validate([
                'code' => 'required|string|max:20',
                // 'code' => 'required|integer|exists:roadmaps,road_id'
            ]);
            $aventure =  Aventure::where('ave_code', $request->code)->first();
            if ($aventure == null) {
                return response()->json([
                    'res' => false,
                    'message' => 'El codigo insertado no existe o es erroneo',
                ], 404);
            }
            // Check if register code in database
            $hasExistRegisterAventure = Use_ave::where('ave_id', $aventure->id)->where('us_id', auth()->user()->id);
            if ($hasExistRegisterAventure != null) {
                return response()->json([
                    'res' => false,
                    'message' => "El codigo insertado ya fue registrado",
                ], 422);
            }

            // Process check
            auth()->user()->userAventure()->create([
                'ave_id' => $aventure->id
            ]);
            $messageFinal = 'Codigo correcto. Se agrego a la aventura ' . $aventure->ave_name;
            return response()->json([
                'res' => true,
                'aventure' => $aventure,
                'message' => $messageFinal,
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'res' => false,
                'exception' => $e->getMessage(),
                'message' => 'Error al intentar registrar el codigo. Intentelo mas tarde',
            ],500);            
        }
    }
}
